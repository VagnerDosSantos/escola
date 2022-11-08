<?php

namespace Database\Seeders;

use App\Models\FormacaoSuperior\CursoPosGraduacao;
use Illuminate\Database\Seeder;

class CursosPosGraduacaoSeeder extends Seeder
{
    private array $cursos = [
        [
            'id' => '1',
            'cod_geral' => 1,
            'area_especifica_id' => 'Educação',
        ],
        [
            'id' => '2',
            'cod_geral' => 2,
            'area_especifica_id' => 'Artes e humanidades',
        ],
        [
            'id' => '3',
            'cod_geral' => 3,
            'area_especifica_id' => 'Ciências sociais, comunicação e informação',
        ],
        [
            'id' => '4',
            'cod_geral' => 4,
            'area_especifica_id' => 'Negócios, administração e direito',
        ],
        [
            'id' => '5',
            'cod_geral' => 5,
            'area_especifica_id' => 'Ciências naturais, matemática e estatística',
        ],
        [
            'id' => '6',
            'cod_geral' => 6,
            'area_especifica_id' => 'Computação e Tecnologias da Informação e Comunicação (TIC)',
        ],
        [
            'id' => '7',
            'cod_geral' => 7,
            'area_especifica_id' => 'Engenharia, produção e construção',
        ],
        [
            'id' => '8',
            'cod_geral' => 8,
            'area_especifica_id' => 'Agricultura, silvicultura, pesca e veterinária',
        ],
        [
            'id' => '9',
            'cod_geral' => 9,
            'area_especifica_id' => 'Saúde e bem-estar',
        ],
        [
            'id' => '10',
            'cod_geral' => 10,
            'area_especifica_id' => 'Serviços',
        ],
        [
            'id' => '11',
            'cod_geral' => 99,
            'area_especifica_id' => 'Programas básicos',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursoPosGraduacao::insertOrIgnore($this->cursos);
    }
}
