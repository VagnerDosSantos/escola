<?php

namespace Database\Seeders;

use App\Models\CursosTecnicos\Categorias;
use Illuminate\Database\Seeder;

class CategoriaCursosTecnicosSeeder extends Seeder
{
    private array $categorias = [
        [
            'id' => 1,
            'nome' => 'Ambiente e Saúde',
        ],
        [
            'id' => 2,
            'nome' => 'Desenvolvimento Educacional e Social',
        ],
        [
            'id' => 3,
            'nome' => 'Controle e Processos Industriais',
        ],
        [
            'id' => 4,
            'nome' => 'Gestão e Negócios',
        ],
        [
            'id' => 5,
            'nome' => 'Turismo, hospitalidade e Lazer',
        ],
        [
            'id' => 6,
            'nome' => 'Informação e Comunicação',
        ],
        [
            'id' => 7,
            'nome' => 'Infraestrutura',
        ],
        [
            'id' => 9,
            'nome' => 'Produção Alimentícia',
        ],
        [
            'id' => 10,
            'nome' => 'Produção Cultural e Design',
        ],
        [
            'id' => 11,
            'nome' => 'Produção Industrial',
        ],
        [
            'id' => 12,
            'nome' => 'Recursos Naturais',
        ],
        [
            'id' => 13,
            'nome' => 'Segurança',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::upsert(
            $this->categorias,
            ['id'],
            ['nome']
        );
    }
}
