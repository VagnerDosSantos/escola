<?php

namespace App\Enums\Escola;

enum Situacao: int
{
    case Ativa = 1;
    case Paralisada = 2;
    case Extinta = 3;
}
