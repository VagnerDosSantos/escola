<?php

namespace Database\Seeders;

use App\Models\FormacaoSuperior\AreaDetalhada;
use Illuminate\Database\Seeder;

class AreasDetalhadasSeeder extends Seeder
{
    private array $areas = [
        [
            'id' => '0111',
            'nome' => 'Ciência da educação',
            'area_especifica_id' => '011',
        ],
        [
            'id' => '0112',
            'nome' => 'Formação de Professores de Educação Infantil',
            'area_especifica_id' => '011',
        ],
        [
            'id' => '0113',
            'nome' => 'Formação de Professores sem Áreas Específicas',
            'area_especifica_id' => '011',
        ],
        [
            'id' => '0114',
            'nome' => 'Formação de Professores em Áreas Específicas (exceto Letras)',
            'area_especifica_id' => '011',
        ],
        [
            'id' => '0115',
            'nome' => 'Formação de Professores de Letras',
            'area_especifica_id' => '011',
        ],
        [
            'id' => '0188',
            'nome' => 'Programas Interdisciplinares Abrangendo Educação',
            'area_especifica_id' => '018',
        ],
        [
            'id' => '0211',
            'nome' => 'Produção Audiovisual, de Mídia e Cultural',
            'area_especifica_id' => '021',
        ],
        [
            'id' => '0212',
            'nome' => 'Moda, Design de Interiores e Desenho Industrial',
            'area_especifica_id' => '021',
        ],
        [
            'id' => '0213',
            'nome' => 'Belas Artes',
            'area_especifica_id' => '021',
        ],
        [
            'id' => '0214',
            'nome' => 'Artesanato',
            'area_especifica_id' => '021',
        ],
        [
            'id' => '0215',
            'nome' => 'Música e Artes Cênicas',
            'area_especifica_id' => '021',
        ],
        [
            'id' => '0221',
            'nome' => 'Religião e Teologia',
            'area_especifica_id' => '022',
        ],
        [
            'id' => '0222',
            'nome' => 'História e Arqueologia',
            'area_especifica_id' => '022',
        ],
        [
            'id' => '0223',
            'nome' => 'Filosofia e Ética',
            'area_especifica_id' => '022',
        ],
        [
            'id' => '0231',
            'nome' => 'Letras',
            'area_especifica_id' => '023',
        ],
        [
            'id' => '0288',
            'nome' => 'Programas Interdisciplinares Abrangendo Artes e Humanidades',
            'area_especifica_id' => '028',
        ],
        [
            'id' => '0311',
            'nome' => 'Economia',
            'area_especifica_id' => '031',
        ],
        [
            'id' => '0312',
            'nome' => 'Ciências Sociais e Políticas',
            'area_especifica_id' => '031',
        ],
        [
            'id' => '0313',
            'nome' => 'Psicologia',
            'area_especifica_id' => '031',
        ],
        [
            'id' => '0321',
            'nome' => 'Comunicação e Reportagem',
            'area_especifica_id' => '032',
        ],
        [
            'id' => '0322',
            'nome' => 'Ciência da Informação e Museologia',
            'area_especifica_id' => '032',
        ],
        [
            'id' => '0388',
            'nome' => 'Programas Interdisciplinares Abrangendo Ciências Sociais, Comunicação e Informação',
            'area_especifica_id' => '038',
        ],
        [
            'id' => '0411',
            'nome' => 'Contabilidade e Tributação',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0412',
            'nome' => 'Finanças, Bancos e Seguros',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0413',
            'nome' => 'Gestão e Administração',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0414',
            'nome' => 'Marketing e Propaganda',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0415',
            'nome' => 'Secretariado e Trabalhos de Escritório',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0416',
            'nome' => 'Gestão Comercial',
            'area_especifica_id' => '041',
        ],
        [
            'id' => '0421',
            'nome' => 'Direito',
            'area_especifica_id' => '042',
        ],
        [
            'id' => '0488',
            'nome' => 'Programas Interdisciplinares Abrangendo Negócios, Administração e Direito',
            'area_especifica_id' => '048',
        ],
        [
            'id' => '0511',
            'nome' => 'Biologia',
            'area_especifica_id' => '051',
        ],
        [
            'id' => '0512',
            'nome' => 'Bioquímica e Biotecnologia',
            'area_especifica_id' => '051',
        ],
        [
            'id' => '0521',
            'nome' => 'Ciências Ambientais',
            'area_especifica_id' => '052',
        ],
        [
            'id' => '0531',
            'nome' => 'Química',
            'area_especifica_id' => '053',
        ],
        [
            'id' => '0532',
            'nome' => 'Ciências da Terra',
            'area_especifica_id' => '053',
        ],
        [
            'id' => '0533',
            'nome' => 'Física',
            'area_especifica_id' => '053',
        ],
        [
            'id' => '0541',
            'nome' => 'Matemática',
            'area_especifica_id' => '054',
        ],
        [
            'id' => '0542',
            'nome' => 'Estatística',
            'area_especifica_id' => '054',
        ],
        [
            'id' => '0588',
            'nome' => 'Programas Interdisciplinares Abrangendo Ciências Naturais, Matemática e Estatística',
            'area_especifica_id' => '058',
        ],
        [
            'id' => '0612',
            'nome' => 'Infraestrutura e Gestão de TIC',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0613',
            'nome' => 'Produção de Software',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0614',
            'nome' => 'Ciência da Computação',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0615',
            'nome' => 'Gestão e Desenvolvimento de Sistemas de Informação',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0616',
            'nome' => 'Desenvolvimento de Sistemas que Integram Software e Hardware',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0617',
            'nome' => 'Soluções Computacionais para Domínios Específicos',
            'area_especifica_id' => '061',
        ],
        [
            'id' => '0688',
            'nome' => 'Programas Interdisciplinares Abrangendo Computação e Tecnologias da Informação e Comunicação (TIC)',
            'area_especifica_id' => '068',
        ],
        [
            'id' => '0710',
            'nome' => 'Engenharia e Profissões Correlatas Sem Definição Precisa',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0711',
            'nome' => 'Engenharia Química e de Processos',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0712',
            'nome' => 'Tecnologia de Proteção Ambiental',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0713',
            'nome' => 'Eletricidade e Energia',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0714',
            'nome' => 'Eletrônica e Automação',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0715',
            'nome' => 'Engenharia Mecânica e Metalurgia',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0716',
            'nome' => 'Veículos a Motor, Construção Naval, Aeronáutica, Ferroviária e Metroviária',
            'area_especifica_id' => '071',
        ],
        [
            'id' => '0721',
            'nome' => 'Processamento de Alimentos',
            'area_especifica_id' => '072',
        ],
        [
            'id' => '0722',
            'nome' => 'Materiais',
            'area_especifica_id' => '072',
        ],
        [
            'id' => '0723',
            'nome' => 'Têxteis (vestuário, calçados e couro)',
            'area_especifica_id' => '072',
        ],
        [
            'id' => '0724',
            'nome' => 'Mineração e Extração',
            'area_especifica_id' => '072',
        ],
        [
            'id' => '0725',
            'nome' => 'Produção e Processos de Fabricação',
            'area_especifica_id' => '072',
        ],
        [
            'id' => '0731',
            'nome' => 'Arquitetura e Planejamento Urbano',
            'area_especifica_id' => '073',
        ],
        [
            'id' => '0732',
            'nome' => 'Engenharia Civil e Construção',
            'area_especifica_id' => '073',
        ],
        [
            'id' => '0788',
            'nome' => 'Programas Interdisciplinares Abrangendo Engenharia, Produção e Construção',
            'area_especifica_id' => '078',
        ],
        [
            'id' => '0811',
            'nome' => 'Produção Agrícola, Agropecuária e Zootecnia',
            'area_especifica_id' => '081',
        ],
        [
            'id' => '0812',
            'nome' => 'Horticultura',
            'area_especifica_id' => '081',
        ],
        [
            'id' => '0821',
            'nome' => 'Silvicultura',
            'area_especifica_id' => '082',
        ],
        [
            'id' => '0831',
            'nome' => 'Pesca',
            'area_especifica_id' => '083',
        ],
        [
            'id' => '0841',
            'nome' => 'Veterinária',
            'area_especifica_id' => '084',
        ],
        [
            'id' => '0888',
            'nome' => 'Programas Interdisciplinares Abrangendo Agricultura, Silvicultura, Pesca e Veterinária',
            'area_especifica_id' => '088',
        ],
        [
            'id' => '0911',
            'nome' => 'Odontologia',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0912',
            'nome' => 'Medicina',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0913',
            'nome' => 'Enfermagem',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0914',
            'nome' => 'Tecnologia de Diagnóstico e Tratamento Médico',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0915',
            'nome' => 'Promoção, Prevenção, Terapia e Reabilitação',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0916',
            'nome' => 'Farmácia',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0917',
            'nome' => 'Medicina e Terapia Tradicional e Complementar',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0918',
            'nome' => 'Saúde Pública e Saúde Coletiva',
            'area_especifica_id' => '091',
        ],
        [
            'id' => '0921',
            'nome' => 'Assistência a Idosos e a Deficientes',
            'area_especifica_id' => '092',
        ],
        [
            'id' => '0923',
            'nome' => 'Serviço Social',
            'area_especifica_id' => '092',
        ],
        [
            'id' => '0988',
            'nome' => 'Programas Interdisciplinares Abrangendo Saúde e Bem-Estar',
            'area_especifica_id' => '098',
        ],
        [
            'id' => '1011',
            'nome' => 'Serviços Domésticos',
            'area_especifica_id' => '101',
        ],
        [
            'id' => '1012',
            'nome' => 'Serviços de Beleza',
            'area_especifica_id' => '101',
        ],
        [
            'id' => '1013',
            'nome' => 'Serviços de Alimentação',
            'area_especifica_id' => '101',
        ],
        [
            'id' => '1014',
            'nome' => 'Esportes e Lazer',
            'area_especifica_id' => '101',
        ],
        [
            'id' => '1015',
            'nome' => 'Turismo e Hotelaria',
            'area_especifica_id' => '101',
        ],
        [
            'id' => '1022',
            'nome' => 'Saúde e Segurança no Trabalho',
            'area_especifica_id' => '102',
        ],
        [
            'id' => '1031',
            'nome' => 'Setor Militar e de Defesa',
            'area_especifica_id' => '103',
        ],
        [
            'id' => '1032',
            'nome' => 'Proteção de Pessoas e de Propriedades',
            'area_especifica_id' => '103',
        ],
        [
            'id' => '1041',
            'nome' => 'Serviços de Transporte',
            'area_especifica_id' => '104',
        ],
        [
            'id' => '1088',
            'nome' => 'Programas interdisciplinares abrangendo serviços',
            'area_especifica_id' => '108',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreaDetalhada::insertOrIgnore($this->areas);
    }
}
