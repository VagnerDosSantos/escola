<?php

namespace Database\Seeders;

use App\Models\Funcionario\Cargo;
use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    private array $cargos = [
        [
            'nome' => 'Diretor (a)',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Professor (a)',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Secretário (a)',
            'permite_alteracao' => false,
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::insertOrIgnore($this->cargos);
    }
}
