<?php

namespace App\Services\Educacenso\Exportacao;

class Registro30Alunos extends Exportacao
{
    public function __construct(
        private $alunos
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '30',
            '2' => '1234',
        ]);
    }
}
