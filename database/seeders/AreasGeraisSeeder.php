<?php

namespace Database\Seeders;

use App\Models\FormacaoSuperior\AreaGeral;
use Illuminate\Database\Seeder;

class AreasGeraisSeeder extends Seeder
{
    private array $areas = [
        [
            'id' => '01',
            'nome' => 'Educação',
        ],
        [
            'id' => '02',
            'nome' => 'Artes e Humanidades',
        ],
        [
            'id' => '03',
            'nome' => 'Ciências Sociais, Comunicação e Informação',
        ],
        [
            'id' => '04',
            'nome' => 'Negócios, Administração e Direito',
        ],
        [
            'id' => '05',
            'nome' => 'Ciências Naturais, Matemática e Estatística',
        ],
        [
            'id' => '06',
            'nome' => 'Computação e Tecnologias da Informação e Comunicação (TIC)',
        ],
        [
            'id' => '07',
            'nome' => 'Engenharia, Produção e Construção',
        ],
        [
            'id' => '08',
            'nome' => 'Agricultura, Silvicultura, Pesca e Veterinária',
        ],
        [
            'id' => '09',
            'nome' => 'Saúde e Bem-Estar',
        ],
        [
            'id' => '10',
            'nome' => 'Serviços',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreaGeral::insertOrIgnore($this->areas);
    }
}
