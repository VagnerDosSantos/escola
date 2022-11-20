<?php

namespace App\Http\Controllers\Escola;

use App\Enums\Escola\CategoriaEscolaPrivada;
use App\Enums\Escola\DependenciaAdministrativa;
use App\Enums\Escola\Situacao;
use App\Enums\Localizacao;
use App\Http\Controllers\Controller;
use App\Rules\Cep;
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
    public function salvar(Request $request)
    {
        try {
            $validated = $this->validarEscola($request);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        print_r($validated);
        die;

        return $validated;
    }

    private function validarEscola(Request $request)
    {
        $dataCenso = Carbon::parse($request->inicio_ano_letivo);
        $dataCenso->month(5)->modify('last wednesday of this month');

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
            // 'cnpj_mantenedora_escola_privada' => 'required_if:mantenedora_escola_privada,29|required_if:regulamentacao_conselho=1|numeric',
            'poder_publico_responsavel_parceria_convenio' => [
                'required',
                'array',
                'required_if:situacao,1',
                new ProhibitedIf($request->situacao != Situacao::Ativa->value),
                new ValidaPoderPublicoResponsavelPorConvenio()
            ],
            'formas_contratacao' => [
                'required',
                'array',
            ],
            'formas_contratacao.termo_colaboracao' => [
                'nullable',
                // new RequiredIf(in_array())
            ],
            'cnpj_escola_privada' => 'min:14|max:14|numeric',
            'regulamentacao_conselho' => '',
            'esfera_administrativa_conselho' => '',
            'vinculo_educacao_basica_superior' => '',
            'codigo_escola_sede' => '',
            'codigo_ies' => '',
        ]);
    }
}
