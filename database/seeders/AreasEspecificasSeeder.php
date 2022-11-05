<?php

namespace Database\Seeders;

use App\Models\FormacaoSuperior\AreaEspecifica;
use Illuminate\Database\Seeder;

class AreasEspecificasSeeder extends Seeder
{
    private array $areas = [
        [
            'id' => '011',
            'nome' => 'Educação',
            'area_geral_id' => '01',
        ],
        [
            'id' => '018',
            'nome' => 'Programas interdisciplinares abrangendo educação',
            'area_geral_id' => '01',
        ],
        [
            'id' => '021',
            'nome' => 'Artes',
            'area_geral_id' => '02',
        ],
        [
            'id' => '022',
            'nome' => 'Humanidades (Exceto Línguas)',
            'area_geral_id' => '02',
        ],
        [
            'id' => '023',
            'nome' => 'Línguas',
            'area_geral_id' => '02',
        ],
        [
            'id' => '028',
            'nome' => 'Programas Interdisciplinares Abrangendo Artes e Humanidades',
            'area_geral_id' => '02',
        ],
        [
            'id' => '031',
            'nome' => 'Ciências Sociais e Comportamentais',
            'area_geral_id' => '03',
        ],
        [
            'id' => '032',
            'nome' => 'Comunicação e Informação',
            'area_geral_id' => '03',
        ],
        [
            'id' => '038',
            'nome' => 'Programas Interdisciplinares Abrangendo Ciências Sociais, Comunicação e Informação',
            'area_geral_id' => '03',
        ],
        [
            'id' => '041',
            'nome' => 'Negócios e Administração',
            'area_geral_id' => '04',
        ],
        [
            'id' => '042',
            'nome' => 'Direito',
            'area_geral_id' => '04',
        ],
        [
            'id' => '048',
            'nome' => 'Programas Interdisciplinares abrangendo Negócios, Administração e Direito',
            'area_geral_id' => '04',
        ],
        [
            'id' => '051',
            'nome' => 'Ciências Biológicas e Correlatas',
            'area_geral_id' => '05',
        ],
        [
            'id' => '052',
            'nome' => 'Meio Ambiente',
            'area_geral_id' => '05',
        ],
        [
            'id' => '053',
            'nome' => 'Ciências Físicas',
            'area_geral_id' => '05',
        ],
        [
            'id' => '054',
            'nome' => 'Matemática e Estatística',
            'area_geral_id' => '05',
        ],
        [
            'id' => '058',
            'nome' => 'Programas Interdisciplinares Abrangendo Ciências Naturais, Matemática e Estatística',
            'area_geral_id' => '05',
        ],
        [
            'id' => '061',
            'nome' => 'Computação e Tecnologias da Informação e Comunicação (TIC)',
            'area_geral_id' => '06',
        ],
        [
            'id' => '068',
            'nome' => 'Programas interdisciplinares abrangendo computação e Tecnologias da Informação e Comunicação (TIC)',
            'area_geral_id' => '06',
        ],
        [
            'id' => '071',
            'nome' => 'Engenharia e Profissões Correlatas',
            'area_geral_id' => '07',
        ],
        [
            'id' => '072',
            'nome' => 'Produção e Processamento',
            'area_geral_id' => '07',
        ],
        [
            'id' => '073',
            'nome' => 'Arquitetura e Construção',
            'area_geral_id' => '07',
        ],
        [
            'id' => '078',
            'nome' => 'Programas Interdisciplinares Abrangendo Engenharia, Produção e Construção',
            'area_geral_id' => '07',
        ],
        [
            'id' => '081',
            'nome' => 'Agricultura',
            'area_geral_id' => '08',
        ],
        [
            'id' => '082',
            'nome' => 'Silvicultura',
            'area_geral_id' => '08',
        ],
        [
            'id' => '083',
            'nome' => 'Pesca',
            'area_geral_id' => '08',
        ],
        [
            'id' => '084',
            'nome' => 'Veterinária',
            'area_geral_id' => '08',
        ],
        [
            'id' => '088',
            'nome' => 'Programas Interdisciplinares Abrangendo Agricultura, Silvicultura, Pesca e Veterinária',
            'area_geral_id' => '08',
        ],
        [
            'id' => '091',
            'nome' => 'Saúde',
            'area_geral_id' => '09',
        ],
        [
            'id' => '092',
            'nome' => 'Bem-Estar',
            'area_geral_id' => '09',
        ],
        [
            'id' => '098',
            'nome' => 'Programas Interdisciplinares Abrangendo Saúde e Bem-Estar',
            'area_geral_id' => '09',
        ],
        [
            'id' => '101',
            'nome' => 'Serviços pessoais',
            'area_geral_id' => '10',
        ],
        [
            'id' => '102',
            'nome' => 'Higiene e Serviços de Saúde Ocupacional',
            'area_geral_id' => '10',
        ],
        [
            'id' => '103',
            'nome' => 'Serviços de Segurança',
            'area_geral_id' => '10',
        ],
        [
            'id' => '104',
            'nome' => 'Serviços de Transporte',
            'area_geral_id' => '10',
        ],
        [
            'id' => '108',
            'nome' => 'Programas Interdisciplinares Abrangendo Serviços',
            'area_geral_id' => '10',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreaEspecifica::insertOrIgnore($this->areas);
    }
}
