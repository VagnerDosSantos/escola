<?php

namespace App\Services\Educacenso\Importacao;

class Registro10 extends Importacao
{
    public function __construct(
        private array $escola
    ) {
    }

    public function toArray(): array
    {
        return [
            'codigo_inep' => $this->escola[2],
            'situacao' => $this->escola[3],
            'nome' => $this->escola[6],
        ];
    }
}
