<?php

namespace Database\Seeders;

use App\Models\Turma\TipoAtendimento;
use Illuminate\Database\Seeder;

class TipoAtendimentoPedagogicoSeeder extends Seeder
{
    private array $tipos = [
        [
            'id' => 1,
            'nome' => 'Escolarização',
        ],
        [
            'id' => 2,
            'nome' => 'Atividade Complementar',
        ],
        [
            'id' => 3,
            'nome' => 'Atendimento Educacional Especializado - AEE',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAtendimento::insertOrIgnore($this->tipos);
    }
}
