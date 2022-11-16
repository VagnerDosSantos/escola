<?php

namespace App\Enums\Escola\Funcionario;

enum SituacaoFuncionalEnum: int
{
    case ConcursadoEfetivoEstavel = 1;
    case ContratoTemporario = 2;
    case ContratoTerceirizado = 3;
    case ContratoCLT = 4;

    public function traducao(): string
    {
        return match ($this) {
            self::ConcursadoEfetivoEstavel => 'Concursado/efetivo/estável',
            self::ContratoTemporario => 'Contrato temporário',
            self::ContratoTerceirizado => 'Contrato terceirizado',
            self::ContratoCLT => 'Contrato CLT',
        };
    }
}
