<?php

namespace App\Services\Educacenso\Importacao;

class Registro40 extends Importacao
{
    public function __construct(
        private array $escola
    ) {
    }

    public function toArray(): array
    {
        return [];
    }
}
