<?php

namespace App\Services\Educacenso\Exportacao;

class Registro40 extends Exportacao
{
    public function __construct(
        private $gestor
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '40',
            '2' => '1234',
        ]);
    }
}
