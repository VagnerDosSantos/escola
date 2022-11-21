<?php

namespace App\Enums\Escola;

enum CategoriaEscolaPrivada: int
{
    case Particular = 1;
    case Comunitaria = 2;
    case Confessional = 3;
    case Filantropica = 4;

    public function traducao()
    {
        return match ($this) {
            self::Particular => 'Particular',
            self::Comunitaria => 'Comunitária',
            self::Confessional => 'Confessional',
            self::Filantropica => 'Filantrópica',
        };
    }
}
