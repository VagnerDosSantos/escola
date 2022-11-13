<?php

namespace App\Repositories;

use App\Enums\HttpStatus;
use App\Models\Aluno;
use App\Utils\Utils;
use Illuminate\Database\Eloquent\Collection;

class AlunoRepository
{
    public function __construct(
        private Aluno $aluno
    ) {
    }

    public function getAluno(int $id, bool $withTrashed = false): Aluno
    {
        $aluno = $this->aluno->bySchool();

        if ($withTrashed) {
            $aluno = $aluno->withTrashed();
        }

        $aluno = $aluno->find($id);

        if (!$aluno) {
            throw new \Exception('Aluno não encontrado', HttpStatus::NOT_FOUND->value);
        }

        return $aluno;
    }

    public function listar(): Collection
    {
        $alunos = $this->aluno->where('ano_letivo', 2023)->get();

        if ($alunos->isEmpty()) {
            throw new \Exception('Nenhum aluno encontrado', HttpStatus::NOT_FOUND->value);
        }

        return $alunos;
    }

    public function salvar(array $dados): Aluno
    {
        $aluno = $this->aluno
            ->bySchool()
            ->withTrashed()
            ->where('cpf', '=', $dados['cpf'] ?? 0)
            ->orWhere('codigo_inep', '=', $dados['codigo_inep'] ?? 0)
            ->orWhere('certidao_nascimento', '=', $dados['certidao_nascimento'] ?? 0)
            ->latest()
            ->get(['ano_letivo', 'codigo_sistema', 'deleted_at']);

        if (!empty($aluno->where('ano_letivo', $dados['ano_letivo'])->first()?->trashed())) {
            throw new \Exception("Foi encontrado um aluno excluído com o mesmo CPF, código INEP ou certidão de nascimento. Por favor, verifique os dados e tente novamente ou reative o cadastro do aluno.", HttpStatus::BAD_REQUEST->value);
        }

        if ($aluno->where('ano_letivo', $dados['ano_letivo'])->first() != null) {
            throw new \Exception('Aluno já cadastrado para este ano letivo.', HttpStatus::BAD_REQUEST->value);
        }

        $aluno = $aluno->first();

        $dados['codigo_sistema'] = $aluno?->codigo_sistema ?? Utils::generateUniqueId();

        return $this->aluno->create($dados);
    }

    public function editar(Aluno $aluno, array $dados): Aluno
    {
        $dados['ano_letivo'] = $aluno->ano_letivo;

        $aluno->update($dados);

        return $aluno;
    }

    public function excluir(Aluno $aluno): void
    {
        $aluno->delete();
    }

    public function restaurar(Aluno $aluno): void
    {
        $aluno->restore();
    }
}
