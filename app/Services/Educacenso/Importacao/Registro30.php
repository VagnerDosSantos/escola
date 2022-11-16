<?php

namespace App\Services\Educacenso\Importacao;

use Carbon\Carbon;

class Registro30 extends Importacao
{
    public function __construct(
        private array $escola
    ) {
    }

    public function toArray(): array
    {
        return [
            'inep_escola' => $this->escola[2],
            'codigo_sistema' => $this->escola[3],
            'codigo_inep' => $this->escola[4],
            'cpf' => $this->escola[5],
            'nome' => $this->escola[6],
            'data_nascimento' => Carbon::parse(str_replace('/', '-', $this->escola[7]))->format('Y-m-d'),
            'filiacao' => $this->escola[8],
            'filiacao_1' => $this->escola[9],
            'filiacao_2' => $this->escola[10],
            'sexo' => $this->escola[11],
            'cor_raca' => $this->escola[12],
            'nacionalidade' => $this->escola[13],
            'pais_nacionalidade_id' => $this->escola[14],
            'municipio_nascimento_id' => $this->escola[15],
            'certidao_nascimento' => $this->escola[39],
            'pais_residencia_id' => $this->escola[40],
            'municipio_residencia_id' => $this->escola[42],
            'cep' => $this->escola[41],
            'zona_localizacao' => $this->escola[43],
            'localizacao_diferenciada' => $this->escola[44],
        ];
    }
}
