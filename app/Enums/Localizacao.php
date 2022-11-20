<?php

namespace App\Enums;

enum Localizacao: int
{
    case Urbana = 1;
    case Rural = 2;

    public function traducao()
    {
        return match ($this) {
            self::Urbana => 'Urbana',
            self::Rural => 'Rural',
        };
    }
}
