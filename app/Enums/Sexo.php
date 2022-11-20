<?php

namespace App\Enums;

enum Sexo: int
{
    case Masculino = 1;
    case Feminino = 2;

    public function traducao()
    {
        return match ($this) {
            self::Masculino => 'Masculino',
            self::Feminino => 'Feminino',
        };
    }
}
