<?php

namespace Database\Seeders;

use App\Models\Turma\Etapa;
use Illuminate\Database\Seeder;

class EtapasSeeder extends Seeder
{
    private array $etapas = [
        [
            'id' => 1,
            'nome' => 'Educação infantil - creche (0 a 3 anos)',
        ],
        [
            'id' => 2,
            'nome' => 'Educação infantil - pré-escola (4 e 5 anos)',
        ],
        [
            'id' => 3,
            'nome' => 'Educação infantil - unificada (0 a 5 anos)',
        ],
        [
            'id' => 14,
            'nome' => 'Ensino fundamental de 9 anos - 1º Ano',
        ],
        [
            'id' => 15,
            'nome' => 'Ensino fundamental de 9 anos - 2º Ano',
        ],
        [
            'id' => 16,
            'nome' => 'Ensino fundamental de 9 anos - 3º Ano',
        ],
        [
            'id' => 17,
            'nome' => 'Ensino fundamental de 9 anos - 4º Ano',
        ],
        [
            'id' => 18,
            'nome' => 'Ensino fundamental de 9 anos - 5º Ano',
        ],
        [
            'id' => 19,
            'nome' => 'Ensino fundamental de 9 anos - 6º Ano',
        ],
        [
            'id' => 20,
            'nome' => 'Ensino fundamental de 9 anos - 7º Ano',
        ],
        [
            'id' => 21,
            'nome' => 'Ensino fundamental de 9 anos - 8º Ano',
        ],
        [
            'id' => 22,
            'nome' => 'Ensino fundamental de 9 anos - multi',
        ],
        [
            'id' => 41,
            'nome' => 'Ensino fundamental de 9 anos - 9º Ano',
        ],
        [
            'id' => 23,
            'nome' => 'Ensino fundamental de 9 anos - correção de fluxo',
        ],
        [
            'id' => 56,
            'nome' => 'Educação infantil e ensino fundamental - multietapa',
        ],
        [
            'id' => 25,
            'nome' => 'Ensino médio - 1ª Série',
        ],
        [
            'id' => 26,
            'nome' => 'Ensino médio - 2ª Série',
        ],
        [
            'id' => 27,
            'nome' => 'Ensino médio - 3ª Série',
        ],
        [
            'id' => 28,
            'nome' => 'Ensino médio - 4ª Série',
        ],
        [
            'id' => 29,
            'nome' => 'Ensino médio - não seriada',
        ],
        [
            'id' => 30,
            'nome' => 'Curso técnico integrado (ensino médio integrado) 1ª Série',
        ],
        [
            'id' => 31,
            'nome' => 'Curso técnico integrado (ensino médio integrado) 2ª Série',
        ],
        [
            'id' => 32,
            'nome' => 'Curso técnico integrado (ensino médio integrado) 3ª Série',
        ],
        [
            'id' => 33,
            'nome' => 'Curso técnico integrado (ensino médio integrado) 4ª Série',
        ],
        [
            'id' => 34,
            'nome' => 'Curso técnico integrado (ensino médio integrado) não seriada',
        ],
        [
            'id' => 74,
            'nome' => 'Curso técnico integrado na modalidade EJA (EJA integrada à educação profissional de nível médio)',
        ],
        [
            'id' => 35,
            'nome' => 'Ensino médio - normal/magistério 1ª Série',
        ],
        [
            'id' => 36,
            'nome' => 'Ensino médio - normal/magistério 2ª Série',
        ],
        [
            'id' => 37,
            'nome' => 'Ensino médio - normal/magistério 3ª Série',
        ],
        [
            'id' => 38,
            'nome' => 'Ensino médio - normal/magistério 4ª Série',
        ],
        [
            'id' => 39,
            'nome' => 'Curso técnico  - concomitante',
        ],
        [
            'id' => 40,
            'nome' => 'Curso técnico  - subsequente',
        ],
        [
            'id' => 64,
            'nome' => 'Curso técnico misto',
        ],
        [
            'id' => 69,
            'nome' => 'EJA - ensino fundamental -  anos iniciais',
        ],
        [
            'id' => 70,
            'nome' => 'EJA - ensino fundamental -  anos finais',
        ],
        [
            'id' => 72,
            'nome' => 'EJA - ensino fundamental  - anos iniciais e anos finais',
        ],
        [
            'id' => 71,
            'nome' => 'EJA - ensino médio',
        ],
        [
            'id' => 67,
            'nome' => 'Curso FIC integrado na modalidade EJA  - nível médio',
        ],
        [
            'id' => 73,
            'nome' => 'Curso FIC integrado na modalidade EJA – nível fundamental (EJA integrada à educação profissional de nível fundamental)',
        ],
        [
            'id' => 68,
            'nome' => 'Curso FIC concomitante',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etapa::insertOrIgnore($this->etapas);
    }
}
