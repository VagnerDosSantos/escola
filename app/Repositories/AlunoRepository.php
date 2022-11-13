<?php

namespace App\Repositories;

use App\Models\Aluno;
use App\Utils\Utils;
use Illuminate\Support\Facades\DB;

class AlunoRepository
{
    public function __construct(
        private Aluno $aluno
    ) {
    }

    public function salvar(array $dados): Aluno
    {
        $aluno = $this->aluno
            ->bySchool()
            ->withTrashed()
            ->where('cpf', '=', $dados['cpf'] ?? 0)
            ->orWhere('codigo_inep', '=', $dados['codigo_inep'] ?? 0)
            ->orWhere('certidao_nascimento', '=', $dados['certidao_nascimento'] ?? 0)
            ->get();

        if ($aluno->where('ano_letivo', $dados['ano_letivo'])->count() > 0) {
            throw new \Exception('Aluno já cadastrado para este ano letivo.', 400);
        }

        $aluno = $aluno->first();
        $dados['codigo_sistema'] = $aluno?->codigo_sistema ?? Utils::generateUniqueId();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        return $this->aluno->create($dados);
    }
}
