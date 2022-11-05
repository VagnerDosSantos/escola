<?php

namespace Database\Seeders;

use App\Models\Componentes\ComponentesCurriculares;
use Illuminate\Database\Seeder;

class ComponentesCurricularesSeeder extends Seeder
{
    private array $componentesCurriculares = [
        1 => [
            6 => [
                'nome' => 'Língua / Literatura Portuguesa',
                'abreviacao' => 'Português',
            ],
            7 => [
                'nome' => 'Língua / Literatura Estrangeira - Inglês',
                'abreviacao' => 'Inglês',
            ],
            8 => [
                'nome' => 'Língua / Literatura Estrangeira - Espanhol',
                'abreviacao' => 'Espanhol',
            ],
            30 => [
                'nome' => 'Língua / Literatura Estrangeira - Francês',
                'abreviacao' => 'Francês',
            ],
            27 => [
                'nome' => 'Língua Indígena',
                'abreviacao' => null,
            ],
            23 => [
                'nome' => 'Libras',
                'abreviacao' => null,
            ],
            31 => [
                'nome' => 'Língua Portuguesa como Segunda lingua',
                'abreviacao' => 'Português como Segunda Lingua',
            ],
            10 => [
                'nome' => 'Arte (Educação Artística, Teatro, Dança, Música, Artes Plásticas e outras)',
                'abreviacao' => 'Arte',
            ],
            11 => [
                'nome' => 'Educação Física',
                'abreviacao' => 'Ed. Física',
            ],
        ],
        2 => [
            3 => [
                'nome' => 'Matemática',
                'abreviacao' => null,
            ],
        ],
        3 => [
            1 => [
                'nome' => 'Química',
                'abreviacao' => null,
            ],
            2 => [
                'nome' => 'Física',
                'abreviacao' => null,
            ],
            4 => [
                'nome' => 'Biologia',
                'abreviacao' => null,
            ],
            5 => [
                'nome' => 'Ciências',
                'abreviacao' => null,
            ],
        ],
        4 => [
            12 => [
                'nome' => 'História',
                'abreviacao' => null,
            ],
            13 => [
                'nome' => 'Geografia',
                'abreviacao' => null,
            ],
            14 => [
                'nome' => 'Filosofia',
                'abreviacao' => null,
            ],
            28 => [
                'nome' => 'Estudos Sociais',
                'abreviacao' => null,
            ],
            29 => [
                'nome' => 'Sociologia',
                'abreviacao' => null,
            ],
        ],
        5 => [
            16 => [
                'nome' => 'Informática/Computação',
                'abreviacao' => 'Informática',
            ],
            26 => [
                'nome' => 'Ensino religioso',
                'abreviacao' => 'Religião',
            ],
            32 => [
                'nome' => '  Estágio curricular supervisionado',
                'abreviacao' => 'Estágio',
            ],
            33 => [
                'nome' => '  Projeto de vida',
                'abreviacao' => null
            ],
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->componentesCurriculares as $categoriaId => $componentesCurriculares) {
            foreach ($componentesCurriculares as $censoId => $componenteCurricular) {
                ComponentesCurriculares::firstOrCreate(
                    [
                        'censo_id' => $censoId,
                        'permite_excluir' => false,
                        'categoria_id' => $categoriaId,
                    ],
                    [
                        'nome' => $componenteCurricular['nome'],
                        'abreviacao' => $componenteCurricular['abreviacao'],
                    ]
                );
            }
        }
    }
}
