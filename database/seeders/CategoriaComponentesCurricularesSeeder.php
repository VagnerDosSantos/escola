<?php

namespace Database\Seeders;

use App\Models\Componentes\Categorias;
use Illuminate\Database\Seeder;

class CategoriaComponentesCurricularesSeeder extends Seeder
{
    private array $categorias = [
        1 => 'Linguagens',
        2 => 'Matemática',
        3 => 'Ciências da Natureza',
        4 => 'Ciências Humanas e Sociais',
        5 => 'Outras Áreas',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categorias as $id => $nome) {
            Categorias::firstOrCreate(
                [
                    'id' => $id,
                ],
                [
                    'nome' => $nome,
                ]
            );
        }
    }
}
