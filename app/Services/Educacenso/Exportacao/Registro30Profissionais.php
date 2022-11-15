<?php

namespace App\Services\Educacenso\Exportacao;

class Registro30Profissionais extends Exportacao
{
    public function __construct(
        private $profissionais
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
