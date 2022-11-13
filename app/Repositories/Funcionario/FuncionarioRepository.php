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

    public function getFuncionario(int $id, bool $withTrashed = false): Funcionario
    {
        $funcionario = $this->model->bySchool();

        if ($withTrashed) {
            $funcionario = $funcionario->withTrashed();
        }

        $funcionario = $funcionario->find($id);

        if (!$funcionario) {
            throw new \Exception('Funcionário não encontrado', HttpStatus::NOT_FOUND->value);
        }

        return $funcionario;
    }

    public function salvar(array $data): Funcionario
    {
        $funcionario = $this->model
            ->withTrashed()
            ->where('cpf', $data['cpf'])
            ->get(['id', 'codigo_sistema', 'escola_id', 'cpf']);

        if ($funcionario->where('escola_id', $data['escola_id'])->count() > 0) {
            throw new \Exception('Funcionário já cadastrado para esta escola.', HttpStatus::BAD_REQUEST->value);
        }

        $funcionario = $funcionario->first();
        $data['codigo_sistema'] = $funcionario->codigo_sistema ?? Utils::generateUniqueId();

        return $this->model->create($data);
    }

    public function editar(Funcionario $funcionario, array $data): Funcionario
    {
        $funcionario->update($data);

        return $funcionario;
    }

    public function excluir(Funcionario $funcionario): void
    {
        $funcionario->delete();
    }

    public function recuperar(Funcionario $funcionario): void
    {
        $funcionario->restore();
    }
}
