<?php

namespace App\Services\Educacenso\Exportacao;

class Registro20 extends Exportacao
{
    public function __construct(
        private $turmas
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '20',
            '2' => '1234',
        ]);
    }
}
