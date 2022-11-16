<?php

namespace App\Services\Educacenso\Exportacao;

class Registro50 extends Exportacao
{
    public function __construct(
        private $vinculoProfissional
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '50',
            '2' => '1234',
        ]);
    }
}
