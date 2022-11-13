<?php

namespace App\Repositories\Funcionario;

use App\Enums\HttpStatus;
use App\Models\Funcionario;
use App\Utils\Utils;
use Illuminate\Support\Facades\DB;

class FuncionarioRepository
{
    public function __construct(
        private Funcionario $model
    ) {
    }

    public function getFuncionario(string $id): Funcionario
    {
        $funcionario = $this->model->withTrashed()->find($id);
        dd($funcionario->audits()->get()->toArray());
        if (!$funcionario) {
            throw new \Exception('Funcionário não encontrado', HttpStatus::NOT_FOUND->value);
        }

        return $funcionario;
    }

    public function salvar(array $data): Funcionario
    {
        $funcionario = $this->model
            ->where('cpf', $data['cpf'])
            ->get(['id', 'codigo_sistema', 'escola_id', 'cpf']);

        if ($funcionario->where('escola_id', $data['escola_id'])->count() > 0) {
            throw new \Exception('Funcionário já cadastrado para esta escola.', HttpStatus::BAD_REQUEST->value);
        }

        $funcionario = $funcionario->first();
        $data['codigo_sistema'] = $funcionario->codigo_sistema ?? Utils::generateUniqueId();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        return $this->model->create($data);
    }

    public function editar(int $id, array $data): Funcionario
    {
        $funcionario = $this->model->bySchool()->find($id);
        
        if (!$funcionario) {
            throw new \Exception('Funcionário não encontrado.', HttpStatus::NOT_FOUND->value);
        }

        $funcionario->update($data);

        return $funcionario;
    }

    public function excluir(Funcionario $funcionario)
    {
        $funcionario->delete();
    }
}
