<?php

namespace Database\Seeders;

use App\Models\Turma\Modalidade;
use Illuminate\Database\Seeder;

class ModalidadeSeeder extends Seeder
{
    private array $modalidades = [
        [
            'id' => 1,
            'nome' => 'Ensino Regular',
        ],
        [
            'id' => 2,
            'nome' => 'Educação Especial',
        ],
        [
            'id' => 3,
            'nome' => 'Educação de Jovens e Adultos (EJA)',
        ],
        [
            'id' => 4,
            'nome' => 'Educação Profissional',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::insertOrIgnore($this->modalidades);
    }
}
