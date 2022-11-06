<?php

namespace Database\Seeders;

use App\Models\Turma\MediacaoPedagogica;
use Illuminate\Database\Seeder;

class MediacaoPedagogicaSeeder extends Seeder
{
    private array $mediacao = [
        [
            'id' => 1,
            'nome' => 'Presencial',
        ],
        [
            'id' => 2,
            'nome' => 'Semipresencial',
        ],
        [
            'id' => 3,
            'nome' => 'Educação à Distância - EAD',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediacaoPedagogica::insertOrIgnore($this->mediacao);
    }
}
