<?php

namespace App\Http\Controllers\Escola;

use App\Enums\HttpStatus;
use App\Enums\Nacionalidade;
use App\Http\Controllers\Controller;
use App\Repositories\AlunoRepository;
use App\Rules\AcceptedValueWhen;
use App\Rules\Cpf;
use App\Rules\FullName;
use App\Rules\LocalizacaoDiferenciada;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\ProhibitedIf;

class AlunoController extends Controller
{
    public function __construct(
        private AlunoRepository $aluno
    ) {
    }

    public function getAluno(int $id)
    {
        try {
            $aluno = $this->aluno->getAluno($id);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Aluno encontrado com sucesso.',
            'dados' => [
                $aluno->toArray()
            ]
        ]);
    }

    public function listar(Request $request)
    {
        try {
            $alunos = $this->aluno->listar();
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Alunos encontrados com sucesso.',
            'dados' => $alunos->toArray()
        ]);
    }

    public function salvar(Request $request)
    {
        try {
            $validated = $this->validarFormulario($request);
            $aluno = $this->aluno->salvar($validated);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Aluno salvo com sucesso!',
            'dados' => [
                $aluno->toArray()
            ]
        ], HttpStatus::CREATED->value);
    }

    public function editar(Request $request, int $id)
    {
        try {
            $validated = $this->validarFormulario($request);

            $aluno = $this->aluno->getAluno($id);
            $aluno = $this->aluno->editar($aluno, $validated);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->json([
            'mensagem' => 'Aluno editado com sucesso.',
            'dados' => [
                $aluno->toArray()
            ]
        ]);
    }

    public function excluir(int $id)
    {
        try {
            $aluno = $this->aluno->getAluno($id);
            $this->aluno->excluir($aluno);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return response()->noContent();
    }

    public function restaurar(int $id)
    {
        try {
            $aluno = $this->aluno->getAluno($id, true);
            $this->aluno->restaurar($aluno);
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

        return ValidateForm::validate($request, [
            'escola_id' => 'required|integer',
            'ano_letivo' => 'required|integer|digits:4|gt:1900|lt:2100',
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
            'possui_deficiencia' => 'required|boolean',
            'deficiencia_altas_habilidades_autismo' => 'nullable|array',
            "recursos_sala_aula" => 'present|array',
        ]);
    }
}
