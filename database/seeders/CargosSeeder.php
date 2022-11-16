<?php

namespace Database\Seeders;

use App\Models\Funcionario\Cargo;
use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    private array $cargos = [
        [
            'nome' => 'Docente',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Auxiliar/assistente educacional',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Profissional/monitor de atividade complementar',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Tradutor e Intérprete de Libras',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Docente titular - coordenador de tutoria (de módulo ou disciplina) - EAD',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Docente tutor - auxiliar (de módulo ou disciplina) - EAD',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Guia-Intérprete',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Profissional de apoio escolar para aluno(a)s com deficiência (Lei 13.146/2015)',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Instrutor da Educação Profissional',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Diretor',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Vice-Diretor',
            'permite_alteracao' => false,
        ],
        [
            'nome' => 'Outro cargo Gestão ',
            'permite_alteracao' => false,
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::insertOrIgnore($this->cargos);
    }
}
