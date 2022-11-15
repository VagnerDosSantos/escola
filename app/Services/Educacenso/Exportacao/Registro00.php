<?php

namespace App\Services\Educacenso\Exportacao;

use App\Models\Escola;

class Registro00 extends Exportacao
{
    public function __construct(
        private ?Escola $escola
    ) {
    }

    public function toString(): string
    {
        return implode("|", [
            '1' => '00',
            '2' => '1234',
        ]);
    }
}
