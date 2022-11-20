<?php

namespace App\Enums\Escola;

enum DependenciaAdministrativa: int
{
    case Federal = 1;
    case Estadual = 2;
    case Municipal = 3;
    case Privada = 4;

    public function traducao()
    {
        return match ($this) {
            self::Federal => 'Federal',
            self::Estadual => 'Estadual',
            self::Municipal => 'Municipal',
            self::Privada => 'Privada',
        };
    }
}
