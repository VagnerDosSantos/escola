<?php

namespace Database\Seeders;

use App\Models\Turma\EstruturaCurricular;
use Illuminate\Database\Seeder;

class EstruturaCurricularSeeder extends Seeder
{
    private array $estruturas = [
        [
            'id' => 1,
            'nome' => 'Não Se Aplica',
        ],
        [
            'id' => 2,
            'nome' => 'Itinerário Formativo',
        ],
        [
            'id' => 3,
            'nome' => 'Formação Geral Básica',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstruturaCurricular::insert($this->estruturas);
    }
}
