<?php

namespace Database\Seeders;

use App\Models\Componentes\AtividadesAee;
use Illuminate\Database\Seeder;

class AtividadesAeeSeeder extends Seeder
{
    private array $atividades = [
        [
            'id' => 1,
            'nome' => 'Ensino de Sistema Braille',
        ],
        [
            'id' => 3,
            'nome' => 'Ensino de uso de recursos ópticos e não ópticos',
        ],
        [
            'id' => 4,
            'nome' => 'Desenvolvimento de funções cognitivas',
        ],
        [
            'id' => 5,
            'nome' => 'Ensino de técnicas para orientação e mobilidade',
        ],
        [
            'id' => 6,
            'nome' => 'Ensino da Língua Brasileira de Sinais (Libras)',
        ],
        [
            'id' => 7,
            'nome' => 'Ensino de uso da Comunicação Alternativa e Aumentativa (CAA)',
        ],
        [
            'id' => 8,
            'nome' => 'Enriquecimento curricular',
        ],
        [
            'id' => 9,
            'nome' => 'Ensino das técnicas do cálculo no Soroban',
        ],
        [
            'id' => 10,
            'nome' => 'Ensino da informática acessível',
        ],
        [
            'id' => 11,
            'nome' => 'Ensino da Língua Portuguesa como segunda língua',
        ],
        [
            'id' => 12,
            'nome' => 'Desenvolvimento de vida autônoma',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtividadesAee::insertOrIgnore($this->atividades);
    }
}
