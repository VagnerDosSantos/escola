<?php

namespace App\Services\Educacenso\Exportacao;

class Registro10 extends Exportacao
{
    public function __construct(
        private $censoEscolar
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '10',
            '2' => '1234',
        ]);
    }
}
