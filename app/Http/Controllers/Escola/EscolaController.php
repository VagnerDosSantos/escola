<?php

namespace App\Http\Controllers\Escola;

use App\Enums\Escola\CategoriaEscolaPrivada;
use App\Enums\Escola\DependenciaAdministrativa;
use App\Enums\Escola\Situacao;
use App\Enums\HttpStatus;
use App\Enums\Localizacao;
use App\Http\Controllers\Controller;
use App\Repositories\EscolaRepository;
use App\Rules\Cep;
use App\Rules\Cnpj;
use App\Rules\EsferaAdministrativa\Federal;
use App\Rules\EsferaAdministrativa\Municipal;
use App\Rules\FormasContratacao\AcordoCooperacao;
use App\Rules\FormasContratacao\ContratoConsorcio;
use App\Rules\FormasContratacao\ContratoPrestacaoServico;
use App\Rules\FormasContratacao\TermoColaboracao;
use App\Rules\FormasContratacao\TermoCooperacaoFinanceira;
use App\Rules\FormasContratacao\TermoFomento;
use App\Rules\LocalizacaoDiferenciada;
use App\Rules\Telefone;
use App\Rules\ValidaAnoBissexto;
use App\Rules\ValidaPoderPublicoResponsavelPorConvenio;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\ProhibitedIf;
use Illuminate\Validation\Rules\RequiredIf;

class EscolaController extends Controller
{
    public function __construct(
        private EscolaRepository $escolaRepository
    ) {
    }

    public function salvar(Request $request)
    {
        try {
            $validated = $this->validarEscola($request);
            $escola = $this->escolaRepository->salvar($validated);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Escola salva com sucesso!',
            'dados' => [
                $escola->toArray()
            ]
        ], HttpStatus::CREATED->value);
    }

    private function validarEscola(Request $request)
    {
        $dataCenso = Carbon::parse($request->inicio_ano_letivo);
        $dataCenso->month(5)->modify('last wednesday of this month');

        $instituicaoSemFinsLucrativos = $request->mantenedora_escola_privada['instituicao_sem_fins_lucrativos'] ?? 0;

        $poderPublicoResponsavelSecretariaEstadual = $request->poder_publico_responsavel_parceria_convenio['secretaria_estadual'] ?? 0;
        $poderPublicoResponsavelSecretariaMunicipal = $request->poder_publico_responsavel_parceria_convenio['secretaria_municipal'] ?? 0;
        $naoPossuiPoderPublicoResponsavel = $request->poder_publico_responsavel_parceria_convenio['nao_possui'] ?? 0;

        $obrigatoriedadeFormaContratacao = new RequiredIf(
            $poderPublicoResponsavelSecretariaEstadual == 1 ||
                $poderPublicoResponsavelSecretariaMunicipal == 1
        );

        return ValidateForm::validate($request, [
            'codigo_inep' => 'required|digits:8|numeric',
            'nome' => 'required|string|min:4|max:100',
            'situacao' => ['required', 'numeric', new Enum(Situacao::class)],
            'inicio_ano_letivo' => [
                'required_if:situacao,1',
                'date',
                'date_format:Y-m-d',
                new ProhibitedIf($request->situacao != Situacao::Ativa->value),
                // new ValidaAnoBissexto,
            ],
            'termino_ano_letivo' => [
                'required_if:situacao,1',
                'date',
                'date_format:Y-m-d',
                function ($attribute, $value, $fail) use ($dataCenso) {
                    if ($value < $dataCenso->format('Y-m-d')) {
                        $fail("O término do ano letivo não pode ser inferior a data de referência do censo ({$dataCenso->format('d/m/Y')}).");
                    }
                },
                new ProhibitedIf($request->situacao != Situacao::Ativa->value),
            ],
            'cep' => ['required', 'digits:8', new Cep()],
            'municipio_id' => 'required|numeric|exists:municipios,id',
            'distrito_id' => 'required|numeric|exists:distritos,id',
            'endereco' => 'required|string|max:100',
            'numero' => 'nullable|string|max:10',
            'complemento' => 'nullable|string|max:20',
            'bairro' => 'nullable|string|max:50',
            'telefone_1' => ['nullable', 'digits_between:10,11', 'numeric', new Telefone()],
            'telefone_2' => ['nullable', 'digits_between:10,11', 'numeric', new Telefone()],
            'email' => 'nullable|email|max:50',
            'orgao_regional_id' => 'nullable|string|max:10|exists:orgaos_regionais,id',
            'zona_localizacao' => ['required', 'numeric', new Enum(Localizacao::class)],
            'localizacao_diferenciada' => [
                'required',
                'in:1,2,3,7',
                new LocalizacaoDiferenciada($request->zona_localizacao),
            ],
            'dependencia_administrativa' => [
                'required',
                'numeric',
                new Enum(DependenciaAdministrativa::class),
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->municipio_id == "5300108") {
                        $fail("O campo {$attribute} não pode ser preenchido com Municipal ({$value}) quando o município for Brasília.");
                    }
                }
            ],
            // Verificar array
            'orgao_escola_publica_vinculada' => [
                'nullable',
                'array',
                new RequiredIf($request->dependencia_administrativa != DependenciaAdministrativa::Privada->value),
                new ProhibitedIf($request->dependencia_administrativa == DependenciaAdministrativa::Privada->value),
            ],
            'mantenedora_escola_privada' => [
                'nullable',
                'array',
                new RequiredIf($request->dependencia_administrativa == DependenciaAdministrativa::Privada->value),
                new ProhibitedIf($request->dependencia_administrativa != DependenciaAdministrativa::Privada->value),
            ],
            'categoria_escola_privada' => [
                'nullable',
                'numeric',
                'required_if:dependencia_administrativa,4',
                new ProhibitedIf($request->dependencia_administrativa != DependenciaAdministrativa::Privada->value),
                new Enum(CategoriaEscolaPrivada::class)
            ],
            'poder_publico_responsavel_parceria_convenio' => [
                'required',
                'array',
                'required_if:situacao,1',
                new ProhibitedIf($request->situacao != Situacao::Ativa->value),
                new ValidaPoderPublicoResponsavelPorConvenio()
            ],
            'formas_contratacao' => [
                $obrigatoriedadeFormaContratacao,
                new ProhibitedIf($naoPossuiPoderPublicoResponsavel == 1),
                'array',
            ],
            'formas_contratacao.termo_colaboracao' => [
                'boolean',
                'required',
                new TermoColaboracao(
                    $request->dependencia_administrativa,
                    $request->categoria_escola_privada,
                )
            ],
            'formas_contratacao.termo_fomento' => [
                'boolean',
                'required',
                new TermoFomento(
                    $request->dependencia_administrativa,
                    $request->categoria_escola_privada,
                )
            ],
            'formas_contratacao.acordo_cooperacao' => [
                'boolean',
                'required',
                new AcordoCooperacao(
                    $request->dependencia_administrativa,
                    $request->categoria_escola_privada,
                )
            ],
            'formas_contratacao.contrato_prestacao_servico' => [
                'boolean',
                'required',
                new ContratoPrestacaoServico($request->dependencia_administrativa)
            ],
            'formas_contratacao.termo_cooperacao_financeira' => [
                'boolean',
                'required',
                new TermoCooperacaoFinanceira($request->categoria_escola_privada)
            ],
            'formas_contratacao.contrato_consorcio' => [
                'boolean',
                'required',
                new ContratoConsorcio($request->categoria_escola_privada)
            ],
            'cnpj_mantenedora_escola_privada' => [
                'nullable',
                'string',
                'digits:14',
                new Cnpj(),
                new RequiredIf(
                    $instituicaoSemFinsLucrativos == 1 &&
                        $request->regulamentacao_conselho == 1
                ),
                new ProhibitedIf($request->dependencia_administrativa != DependenciaAdministrativa::Privada->value),
            ],
            'cnpj_escola_privada' => [
                'nullable',
                'string',
                'digits:14',
                new Cnpj(),
                new ProhibitedIf($request->dependencia_administrativa != DependenciaAdministrativa::Privada->value),
            ],
            'regulamentacao_conselho' => [
                'required_if:situacao,1',
                'numeric',
                'in:0,1,2',
                new ProhibitedIf($request->situacao != 1)
            ],
            'esfera_administrativa_conselho' => [
                'array',
                new RequiredIf($request->regulamentacao_conselho > 0),
                new ProhibitedIf($request->regulamentacao_conselho == 0),
            ],
            'esfera_administrativa_conselho.federal' => [
                'boolean',
                'required',
                new Federal($request->dependencia_administrativa)
            ],
            'esfera_administrativa_conselho.estadual' => [
                'boolean',
                'required',
            ],
            'esfera_administrativa_conselho.municipal' => [
                'boolean',
                'required',
                new Municipal($request->esfera_administrativa_conselho, $request->dependencia_administrativa, $request->municipio_id)
            ],
            'vinculo_educacao_basica_superior' => [
                'nullable',
                'required_if:situacao,1',
                'numeric',
                'in:0,1,2',
                new ProhibitedIf($request->situacao != 1),
            ],
            'codigo_escola_sede' => [
                'nullable',
                'digits:8',
                'numeric',
                'required_if:vinculo_educacao_basica_superior,1',
                new ProhibitedIf($request->vinculo_educacao_basica_superior != 1)
            ],
            'codigo_ies' => [
                'nullable',
                'max:9',
                'numeric',
                'exists:instituicoes_ensino_superior,id',
                'required_if:vinculo_educacao_basica_superior,2',
                new ProhibitedIf($request->vinculo_educacao_basica_superior != 2)
            ],
        ]);
    }
}
