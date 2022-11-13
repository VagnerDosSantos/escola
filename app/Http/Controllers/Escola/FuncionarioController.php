<?php

namespace App\Http\Controllers\Escola;

use App\Enums\HttpStatus;
use App\Enums\Nacionalidade;
use App\Http\Controllers\Controller;
use App\Repositories\Funcionario\FuncionarioRepository;
use App\Rules\AcceptedValueWhen;
use App\Rules\Cpf;
use App\Rules\FullName;
use App\Rules\LocalizacaoDiferenciada;
use App\Rules\ValidaAnoConclusaoPosGraduacao;
use App\Rules\ValidaComponenteCurricular;
use App\Rules\ValidaCursoSuperior;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\ProhibitedIf;
use Illuminate\Validation\Rules\RequiredIf;

class FuncionarioController extends Controller
{
    private FuncionarioRepository $funcionario;

    public function __construct(FuncionarioRepository $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function getFuncionario(int $id)
    {
        try {
            $funcionario = $this->funcionario->getFuncionario($id);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Funcionário encontrado com sucesso.',
            'dados' => [
                $funcionario->toArray()
            ]
        ]);
    }

    public function listar(Request $request)
    {
        try {
            $funcionarios = $this->funcionario->listar();
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Funcionários encontrados com sucesso.',
            'dados' => $funcionarios->toArray()
        ]);
    }

    public function salvar(Request $request)
    {
        try {
            $validated = $this->validarFormulario($request);
            $funcionario = $this->funcionario->salvar($validated);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Funcionário cadastrado com sucesso.',
            'dados' => [
                $funcionario->toArray()
            ],
        ], HttpStatus::CREATED->value);
    }

    public function editar(Request $request, int $id)
    {
        try {
            $validated = $this->validarFormulario($request);
            $funcionario = $this->funcionario->getFuncionario($id);
            $funcionario = $this->funcionario->editar($funcionario, $validated);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Funcionário editado com sucesso.',
            'dados' => [
                $funcionario->toArray()
            ],
        ], HttpStatus::OK->value);
    }

    public function excluir(int $id)
    {
        try {
            $funcionario = $this->funcionario->getFuncionario($id);
            $this->funcionario->excluir($funcionario);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->noContent();
    }

    public function recuperar(int $id)
    {
        try {
            $funcionario = $this->funcionario->getFuncionario($id, true);
            $this->funcionario->recuperar($funcionario);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->noContent();
    }

    private function validarFormulario(Request $request)
    {
        $nacionalidadeBrasileira = in_array($request->nacionalidade, [
            Nacionalidade::Brasileiro->value,
            Nacionalidade::BrasileiroNaturalizado->value,
        ]);

        $validaCursoSuperior = [
            'nullable',
            'prohibited_if:escolaridade_concluida,1,2,7',
            'exists:cursos_superiores,id',
        ];

        $validaAnoConclusao = [
            'date_format:Y',
            'gte:1940',
            'lte:' . date('Y'),
        ];

        $validaTipoPosGraduacao = [
            'nullable',
            new ProhibitedIf(6 != $request->escolaridade_concluida || 0 == $request->possui_pos_graduacao),
            'in:1,2,3',
        ];

        $conclusaoDeCursosSuperiores = [
            (int) $request->ano_conclusao_curso_1,
            (int) $request->ano_conclusao_curso_2,
            (int) $request->ano_conclusao_curso_3,
        ];

        // Realizar validação do ID da escola existente na base de dados
        return ValidateForm::validate($request, [
            'escola_id' => 'required|integer',
            'codigo_inep' => 'nullable|numeric|max:12',
            'cpf' => ['required', 'numeric', new Cpf()],
            'nome' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'data_nascimento' => 'required|date|date_format:Y-m-d|before_or_equal:today',
            'filiacao' => 'required|boolean',
            'filiacao_1' => ['required_if:filiacao,1', 'prohibited_if:filiacao,0', 'string', 'max:100', new FullName()],
            'filiacao_2' => ['nullable', 'string', 'prohibited_if:filiacao,0', 'max:100', new FullName()],
            'sexo' => 'required|integer|in:1,2',
            'cor_raca' => 'required|integer|in:0,1,2,3,4,5',
            'nacionalidade' => 'required|integer|in:1,2,3',
            'pais_nacionalidade_id' => [
                'required',
                'exists:paises,id',
                new AcceptedValueWhen($nacionalidadeBrasileira, 76),
                'max_digits:3',
            ],
            'pais_residencia_id' => [
                'required',
                'exists:paises,id',
                'in:32,68,76,170,328,254,600,604,740,858,862',
                'max_digits:3',
            ],
            'municipio_nascimento_id' => [
                'required_if:nacionalidade,1',
                'exists:municipios,id',
                'digits:7',
                'prohibited_if:nacionalidade,2,3',
            ],
            'municipio_residencia_id' => 'required|exists:municipios,id',
            'zona_localizacao' => 'required_if:nacionalidade,1|integer|in:1,2|prohibited_if:nacionalidade,2,3',
            'localizacao_diferenciada' => [
                'required_if:pais_residencia_id,76',
                'in:1,2,3,7',
                new ProhibitedIf(76 != $request->pais_residencia_id),
                new LocalizacaoDiferenciada($request->zona_localizacao),
            ],
            'cep' => ['nullable', new ProhibitedIf(76 != $request->pais_residencia_id), 'digits:8'],
            'endereco' => 'nullable|string|max:100',
            'numero' => 'nullable|string|max:10',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'deficiencia_altas_habilidades_autismo' => 'nullable|array',
            'escolaridade_concluida' => 'nullable|in:1,2,7,6',
            'ensino_medio_cursado' => [
                'nullable',
                'required_if:escolaridade_concluida,7,6',
                'prohibited_if:escolaridade_concluida,1,2',
                'in:1,2,3,4',
            ],
            'codigo_curso_1' => [
                ...$validaCursoSuperior,
                'required_if:escolaridade_concluida,6',
            ],
            'ano_conclusao_curso_1' => [
                ...$validaAnoConclusao,
                new RequiredIf(!empty($request->codigo_curso_1)),
                new ProhibitedIf(empty($request->codigo_curso_1)),
            ],
            'instituicao_curso_1' => [
                'nullable',
                'exists:instituicoes_ensino_superior,id',
                new RequiredIf(!empty($request->codigo_curso_1)),
                new ProhibitedIf(empty($request->codigo_curso_1)),
            ],
            'codigo_curso_2' => [
                ...$validaCursoSuperior,
                new ValidaCursoSuperior([$request->codigo_curso_1]),
            ],
            'ano_conclusao_curso_2' => [
                ...$validaAnoConclusao,
                new RequiredIf(!empty($request->codigo_curso_2)),
                new ProhibitedIf(empty($request->codigo_curso_2)),
            ],
            'instituicao_curso_2' => [
                'nullable',
                'exists:instituicoes_ensino_superior,id',
                new RequiredIf(!empty($request->codigo_curso_2)),
                new ProhibitedIf(empty($request->codigo_curso_2)),
            ],
            'codigo_curso_3' => [
                ...$validaCursoSuperior,
                new ValidaCursoSuperior([$request->codigo_curso_1, $request->codigo_curso_2]),
            ],
            'ano_conclusao_curso_3' => [
                ...$validaAnoConclusao,
                new RequiredIf(!empty($request->codigo_curso_3)),
                new ProhibitedIf(empty($request->codigo_curso_3)),
            ],
            'instituicao_curso_3' => [
                'nullable',
                'exists:instituicoes_ensino_superior,id',
                new RequiredIf(!empty($request->codigo_curso_3)),
                new ProhibitedIf(empty($request->codigo_curso_3)),
            ],
            'componente_curricular_1' => [
                'prohibited_if:escolaridade_concluida,1,2,7',
                'exists:componentes_curriculares,censo_id',
                'not_in:32,99',
            ],
            'componente_curricular_2' => [
                'prohibited_if:escolaridade_concluida,1,2,7',
                'exists:componentes_curriculares,censo_id',
                'not_in:32,99',
                new ValidaComponenteCurricular([$request->componente_curricular_1]),
            ],
            'componente_curricular_3' => [
                'prohibited_if:escolaridade_concluida,1,2,7',
                'exists:componentes_curriculares,censo_id',
                'not_in:32,99',
                new ValidaComponenteCurricular([$request->componente_curricular_1, $request->componente_curricular_2]),
            ],
            'possui_pos_graduacao' => 'nullable|boolean',
            'tipo_pos_graduacao_1' => [
                'required_if:possui_pos_graduacao,1',
                ...$validaTipoPosGraduacao,
            ],
            'area_pos_graduacao_1' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_1)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_1)),
            ],
            'ano_conclusao_pos_graduacao_1' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_1)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_1)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'tipo_pos_graduacao_2' => $validaTipoPosGraduacao,
            'area_pos_graduacao_2' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_2)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_2)),
            ],
            'ano_conclusao_pos_graduacao_2' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_2)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_2)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'tipo_pos_graduacao_3' => $validaTipoPosGraduacao,
            'area_pos_graduacao_3' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_3)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_3)),
            ],
            'ano_conclusao_pos_graduacao_3' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_3)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_3)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'tipo_pos_graduacao_4' => $validaTipoPosGraduacao,
            'area_pos_graduacao_4' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_4)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_4)),
            ],
            'ano_conclusao_pos_graduacao_4' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_4)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_4)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'tipo_pos_graduacao_5' => $validaTipoPosGraduacao,
            'area_pos_graduacao_5' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_5)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_5)),
            ],
            'ano_conclusao_pos_graduacao_5' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_5)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_5)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'tipo_pos_graduacao_6' => $validaTipoPosGraduacao,
            'area_pos_graduacao_6' => [
                'nullable',
                'exists:areas_pos_graduacao,id',
                new RequiredIf(!empty($request->tipo_pos_graduacao_6)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_6)),
            ],
            'ano_conclusao_pos_graduacao_6' => [
                'nullable',
                'date_format:Y',
                new RequiredIf(!empty($request->tipo_pos_graduacao_6)),
                new ProhibitedIf(empty($request->tipo_pos_graduacao_6)),
                new ValidaAnoConclusaoPosGraduacao($conclusaoDeCursosSuperiores),
            ],
            'formacao_continuada' => 'nullable|array',
        ]);
    }
}
