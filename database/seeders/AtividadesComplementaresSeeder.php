<?php

namespace Database\Seeders;

use App\Models\Componentes\AtividadeComplementar;
use Illuminate\Database\Seeder;

class AtividadesComplementaresSeeder extends Seeder
{
    private array $atividades = [
        [
            'id' => 11002,
            'nome' => 'Canto coral',
        ],
        [
            'id' => 11006,
            'nome' => 'Banda',
        ],
        [
            'id' => 11011,
            'nome' => 'Iniciação musical',
        ],
        [
            'id' => 12003,
            'nome' => 'Desenho',
        ],
        [
            'id' => 12004,
            'nome' => 'Escultura e Cerâmica',
        ],
        [
            'id' => 12005,
            'nome' => 'Grafite',
        ],
        [
            'id' => 12007,
            'nome' => 'Pintura',
        ],
        [
            'id' => 13001,
            'nome' => 'Cineclube',
        ],
        [
            'id' => 14001,
            'nome' => 'Teatro',
        ],
        [
            'id' => 14002,
            'nome' => 'Danças',
        ],
        [
            'id' => 14004,
            'nome' => 'Práticas Circenses',
        ],
        [
            'id' => 15001,
            'nome' => 'Capoeira',
        ],
        [
            'id' => 15002,
            'nome' => 'Artesanato ',
        ],
        [
            'id' => 15003,
            'nome' => 'Brinquedos ',
        ],
        [
            'id' => 15004,
            'nome' => 'Contos',
        ],
        [
            'id' => 16001,
            'nome' => 'Educação Patrimonial',
        ],
        [
            'id' => 17004,
            'nome' => 'Leitura',
        ],
        [
            'id' => 17002,
            'nome' => 'Línguas Estrangeiras',
        ],
        [
            'id' => 19001,
            'nome' => 'Eventos de celebração à Diversidade Cultural na Escola (Feira das Nações, Feira dos Estados, etc.)',
        ],
        [
            'id' => 19002,
            'nome' => 'Promoção do respeito à Diversidade Cultural',
        ],
        [
            'id' => 19999,
            'nome' => 'Outra categoria de Cultura, Artes e Educação Patrimonial',
        ],
        [
            'id' => 21001,
            'nome' => 'Recreação (Brinquedoteca e Jogos)',
        ],
        [
            'id' => 22007,
            'nome' => 'Yoga',
        ],
        [
            'id' => 22009,
            'nome' => 'Tênis de campo',
        ],
        [
            'id' => 22011,
            'nome' => 'Atletismo',
        ],
        [
            'id' => 22012,
            'nome' => 'Badminton',
        ],
        [
            'id' => 22014,
            'nome' => 'Basquete',
        ],
        [
            'id' => 22015,
            'nome' => 'Ciclismo',
        ],
        [
            'id' => 22018,
            'nome' => 'Futebol',
        ],
        [
            'id' => 22019,
            'nome' => 'Futsal',
        ],
        [
            'id' => 22020,
            'nome' => 'Ginástica (rítmica, artística, acrobática)',
        ],
        [
            'id' => 22021,
            'nome' => 'Handebol',
        ],
        [
            'id' => 22022,
            'nome' => 'Judô',
        ],
        [
            'id' => 22023,
            'nome' => 'Karatê',
        ],
        [
            'id' => 22024,
            'nome' => 'Luta Olímpica',
        ],
        [
            'id' => 22025,
            'nome' => 'Natação',
        ],
        [
            'id' => 22026,
            'nome' => 'Taekwondo',
        ],
        [
            'id' => 22027,
            'nome' => 'Tênis de Mesa',
        ],
        [
            'id' => 22028,
            'nome' => 'Voleibol',
        ],
        [
            'id' => 22029,
            'nome' => 'Vôlei de Praia',
        ],
        [
            'id' => 22032,
            'nome' => 'Xadrez tradicional/Xadrez virtual ',
        ],
        [
            'id' => 22033,
            'nome' => 'Balé',
        ],
        [
            'id' => 29999,
            'nome' => 'Outra categoria de Esporte e Lazer',
        ],
        [
            'id' => 31001,
            'nome' => 'Matemática',
        ],
        [
            'id' => 31016,
            'nome' => 'Linguagens',
        ],
        [
            'id' => 31017,
            'nome' => 'Ciências da Natureza',
        ],
        [
            'id' => 31018,
            'nome' => 'Ciências Humanas e Sociais.',
        ],
        [
            'id' => 39999,
            'nome' => 'Outra categoria de Acompanhamento Pedagógico',
        ],
        [
            'id' => 41007,
            'nome' => 'Educação em Direitos Humanos',
        ],
        [
            'id' => 41001,
            'nome' => 'Direitos da criança e do adolescente',
        ],
        [
            'id' => 41014,
            'nome' => 'Respeito e valorização do idoso',
        ],
        [
            'id' => 41015,
            'nome' => 'Educação para o trânsito',
        ],
        [
            'id' => 41016,
            'nome' => 'Estudo do Estatuto do Idoso',
        ],
        [
            'id' => 41017,
            'nome' => 'Legislação e conduta no Trânsito',
        ],
        [
            'id' => 41018,
            'nome' => 'Parcerias com os órgãos de Trânsito',
        ],
        [
            'id' => 41019,
            'nome' => 'Ações de respeito à diversidade',
        ],
        [
            'id' => 41020,
            'nome' => 'Constituição, direitos e deveres do cidadão',
        ],
        [
            'id' => 41021,
            'nome' => 'Estudo do Estatuto da Criança e do Adolescente',
        ],
        [
            'id' => 41022,
            'nome' => 'Ações de integração Família e Escola',
        ],
        [
            'id' => 41023,
            'nome' => 'Ações de integração Comunidade e Escola',
        ],
        [
            'id' => 41024,
            'nome' => 'Vida Familiar e Social',
        ],
        [
            'id' => 10103,
            'nome' => 'Iniciação Científica',
        ],
        [
            'id' => 13301,
            'nome' => 'Educação Ambiental e Desenvolvimento Sustentável',
        ],
        [
            'id' => 13104,
            'nome' => 'Conservação do solo e composteira: canteiros sustentáveis (horta) e/ou jardinagem escolar',
        ],
        [
            'id' => 13303,
            'nome' => 'Reciclagem',
        ],
        [
            'id' => 13304,
            'nome' => 'Reflorestamento - Plantio de árvores',
        ],
        [
            'id' => 13305,
            'nome' => 'Consumo consciente de água',
        ],
        [
            'id' => 13306,
            'nome' => 'Escolas sustentáveis e COM-vida',
        ],
        [
            'id' => 13307,
            'nome' => 'Coleta seletiva/ Gestão de resíduos',
        ],
        [
            'id' => 13308,
            'nome' => 'Captação e aproveitamento de Água de Chuva',
        ],
        [
            'id' => 13309,
            'nome' => 'Uso de energias alternativas na escola',
        ],
        [
            'id' => 13310,
            'nome' => 'Projetos de pesquisa na escola e entorno',
        ],
        [
            'id' => 14101,
            'nome' => 'Fotografia',
        ],
        [
            'id' => 14102,
            'nome' => 'História em Quadrinhos',
        ],
        [
            'id' => 14103,
            'nome' => 'Jornal Escolar',
        ],
        [
            'id' => 14104,
            'nome' => 'Rádio Escolar',
        ],
        [
            'id' => 14105,
            'nome' => 'Vídeo',
        ],
        [
            'id' => 14201,
            'nome' => 'Robótica Educacional',
        ],
        [
            'id' => 14202,
            'nome' => 'Tecnologicas Educacionais',
        ],
        [
            'id' => 14203,
            'nome' => 'Ambientes de Redes Sociais',
        ],
        [
            'id' => 14999,
            'nome' => 'Outra Categoria de Comunicação, Uso de Mídias e Cultura Digital e Tecnológica',
        ],
        [
            'id' => 15101,
            'nome' => 'Memória e História das Comunidades Tradicionais',
        ],
        [
            'id' => 15201,
            'nome' => 'Memória e História das Cultura Afro-Brasileira e Africana',
        ],
        [
            'id' => 15301,
            'nome' => 'Memória e História das Culturas e Indígenas',
        ],
        [
            'id' => 15401,
            'nome' => 'Respeito à Diversidade Étnico-Racial',
        ],
        [
            'id' => 15402,
            'nome' => 'A contribuição dos povos no Multiculturalismo Brasileiro',
        ],
        [
            'id' => 17101,
            'nome' => 'Educação para o Consumo Sustentável',
        ],
        [
            'id' => 17102,
            'nome' => 'Fomento da Economia Solidária e Criativa',
        ],
        [
            'id' => 17201,
            'nome' => 'Educação Financeira',
        ],
        [
            'id' => 17202,
            'nome' => 'Economia',
        ],
        [
            'id' => 17301,
            'nome' => 'Controle social do gasto público',
        ],
        [
            'id' => 17302,
            'nome' => 'Educação Tributária',
        ],
        [
            'id' => 17401,
            'nome' => 'Direitos e Deveres do Trabalhador',
        ],
        [
            'id' => 17402,
            'nome' => 'O mundo do trabalho',
        ],
        [
            'id' => 19101,
            'nome' => 'Promoção da Saúde ',
        ],
        [
            'id' => 19102,
            'nome' => 'Higiene e Cuidados Pessoais/ Higiene Pessoal',
        ],
        [
            'id' => 19103,
            'nome' => 'Saúde Bucal',
        ],
        [
            'id' => 19104,
            'nome' => 'Campanhas de vacinação ',
        ],
        [
            'id' => 19105,
            'nome' => 'Educação em saúde reprodutiva ',
        ],
        [
            'id' => 19106,
            'nome' => 'Prevenção ao uso de Álcool, Tabaco e Drogas',
        ],
        [
            'id' => 19107,
            'nome' => 'Primeiros Socorros',
        ],
        [
            'id' => 19108,
            'nome' => 'Ações de prevenção a doenças epidemiológicas',
        ],
        [
            'id' => 19109,
            'nome' => 'Meditação',
        ],
        [
            'id' => 19201,
            'nome' => 'Desenvolvimento de competências socioemocionais',
        ],
        [
            'id' => 19202,
            'nome' => 'Atividades de autoconhecimento, identificação e gestão de sentimento',
        ],
        [
            'id' => 19203,
            'nome' => 'Atividades de empatia e gestão de conflitos',
        ],
        [
            'id' => 20101,
            'nome' => 'Educação alimentar e nutricional',
        ],
        [
            'id' => 20102,
            'nome' => 'Estudos dos aspectos nutricionais dos alimentos',
        ],
        [
            'id' => 20103,
            'nome' => 'Ações de Prevenção dos distúrbios alimentares',
        ],
        [
            'id' => 20104,
            'nome' => 'Elaboração de Cardápio Contextualizado local',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtividadeComplementar::insertOrIgnore($this->atividades);
    }
}
