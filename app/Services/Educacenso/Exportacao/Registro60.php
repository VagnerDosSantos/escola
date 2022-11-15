<?php

namespace App\Services\Educacenso\Exportacao;

class Registro60
{
    public function __construct(
        private $vinculoAluno
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '60',
            '2' => '1234',
        ]);
    }
}
