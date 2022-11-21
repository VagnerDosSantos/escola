<?php

namespace App\Repositories;

use App\Models\Escola;

class EscolaRepository
{
    public function __construct(
        private Escola $escola
    ) {
    }

    public function salvar(array $dados): Escola
    {
        $escola = $this->escola->where('codigo_inep', $dados['codigo_inep'])->first();

        if ($escola != null) {
            throw new \Exception('Escola já cadastrada', 400);
        }

        return $this->escola->create($dados);
    }
}
