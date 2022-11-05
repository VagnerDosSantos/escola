<?php

namespace Database\Seeders;

use App\Models\Componentes\Categorias;
use Illuminate\Database\Seeder;

class CategoriaComponentesCurricularesSeeder extends Seeder
{
    private array $categorias = [
        [
            'id' => 1,
            'nome' => 'Linguagens',
        ],
        [
            'id' => 2,
            'nome' => 'Matemática',
        ],
        [
            'id' => 3,
            'nome' => 'Ciências da Natureza',
        ],
        [
            'id' => 4,
            'nome' => 'Ciências Humanas e Sociais',
        ],
        [
            'id' => 5,
            'nome' => 'Outras Áreas',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::insertOrIgnore($this->categorias);
    }
}
