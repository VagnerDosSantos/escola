<?php

namespace Database\Seeders;

use App\Models\FormacaoSuperior\AreasPosGraduacao;
use Illuminate\Database\Seeder;

class AreasPosGraduacaoSeeder extends Seeder
{
    private array $cursos = [
        [
            'id' => 1,
            'nome' => 'Educação',
        ],
        [
            'id' => 2,
            'nome' => 'Artes e humanidades',
        ],
        [
            'id' => 3,
            'nome' => 'Ciências sociais, comunicação e informação',
        ],
        [
            'id' => 4,
            'nome' => 'Negócios, administração e direito',
        ],
        [
            'id' => 5,
            'nome' => 'Ciências naturais, matemática e estatística',
        ],
        [
            'id' => 6,
            'nome' => 'Computação e Tecnologias da Informação e Comunicação (TIC)',
        ],
        [
            'id' => 7,
            'nome' => 'Engenharia, produção e construção',
        ],
        [
            'id' => 8,
            'nome' => 'Agricultura, silvicultura, pesca e veterinária',
        ],
        [
            'id' => 9,
            'nome' => 'Saúde e bem-estar',
        ],
        [
            'id' => 10,
            'nome' => 'Serviços',
        ],
        [
            'id' => 99,
            'nome' => 'Programas básicos',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreasPosGraduacao::insertOrIgnore($this->cursos);
    }
}
