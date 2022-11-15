<?php

namespace App\Services\Educacenso\Exportacao;

abstract class Exportacao
{
    abstract public function toString(): string;
}
