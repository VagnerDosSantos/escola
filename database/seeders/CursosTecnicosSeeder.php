<?php

namespace Database\Seeders;

use App\Models\CursosTecnicos\CursosTecnicos;
use Illuminate\Database\Seeder;

class CursosTecnicosSeeder extends Seeder
{
    private array $cursos = [
        [
            'id' => 1001,
            'nome' => 'Agente Comunitário de Saúde',
            'categoria_id' => 1,
        ],
        [
            'id' => 1002,
            'nome' => 'Análises clínicas',
            'categoria_id' => 1,
        ],
        [
            'id' => 1004,
            'nome' => 'Citopatologia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1005,
            'nome' => 'Controle Ambiental',
            'categoria_id' => 1,
        ],
        [
            'id' => 1029,
            'nome' => 'Cuidados de Idosos',
            'categoria_id' => 1,
        ],
        [
            'id' => 1006,
            'nome' => 'Enfermagem',
            'categoria_id' => 1,
        ],
        [
            'id' => 1007,
            'nome' => 'Equipamentos Biomédicos',
            'categoria_id' => 1,
        ],
        [
            'id' => 1008,
            'nome' => 'Estética',
            'categoria_id' => 1,
        ],
        [
            'id' => 1009,
            'nome' => 'Farmácia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1010,
            'nome' => 'Gerência de Saúde',
            'categoria_id' => 1,
        ],
        [
            'id' => 1011,
            'nome' => 'Hemoterapia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1013,
            'nome' => 'Imagem Pessoal ',
            'categoria_id' => 1,
        ],
        [
            'id' => 1014,
            'nome' => 'Imobilizações Ortopédicas',
            'categoria_id' => 1,
        ],
        [
            'id' => 1015,
            'nome' => 'Massoterapia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1016,
            'nome' => 'Meio Ambiente',
            'categoria_id' => 1,
        ],
        [
            'id' => 1017,
            'nome' => 'Meteorologia ',
            'categoria_id' => 1,
        ],
        [
            'id' => 1030,
            'nome' => 'Necropsia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1018,
            'nome' => 'Nutrição e Dietética',
            'categoria_id' => 1,
        ],
        [
            'id' => 1019,
            'nome' => 'Óptica ',
            'categoria_id' => 1,
        ],
        [
            'id' => 1020,
            'nome' => 'Órteses e Próteses',
            'categoria_id' => 1,
        ],
        [
            'id' => 1021,
            'nome' => 'Podologia',
            'categoria_id' => 1,
        ],
        [
            'id' => 1022,
            'nome' => 'Prótese Dentária ',
            'categoria_id' => 1,
        ],
        [
            'id' => 1023,
            'nome' => 'Radiologia ',
            'categoria_id' => 1,
        ],
        [
            'id' => 1024,
            'nome' => 'Dependência química',
            'categoria_id' => 1,
        ],
        [
            'id' => 1025,
            'nome' => 'Reciclagem',
            'categoria_id' => 1,
        ],
        [
            'id' => 1026,
            'nome' => 'Registros e Informações em Saúde',
            'categoria_id' => 1,
        ],
        [
            'id' => 1012,
            'nome' => 'Saúde Bucal',
            'categoria_id' => 1,
        ],
        [
            'id' => 1028,
            'nome' => 'Vigilância em Saúde',
            'categoria_id' => 1,
        ],
        [
            'id' => 1031,
            'nome' => 'Optometria',
            'categoria_id' => 1,
        ],
        [
            'id' => 1032,
            'nome' => 'Terapias Holísticas',
            'categoria_id' => 1,
        ],
        [
            'id' => 1033,
            'nome' => 'Veterinária',
            'categoria_id' => 1,
        ],
        [
            'id' => 1999,
            'nome' => 'Outros - Eixo Ambiente e Saúde',
            'categoria_id' => 1,
        ],
        [
            'id' => 2029,
            'nome' => 'Alimentação Escolar',
            'categoria_id' => 2,
        ],
        [
            'id' => 2030,
            'nome' => 'Biblioteconomia',
            'categoria_id' => 2,
        ],
        [
            'id' => 2031,
            'nome' => 'Infraestrutura escolar',
            'categoria_id' => 2,
        ],
        [
            'id' => 2039,
            'nome' => 'Laboratório de Ciências da Natureza',
            'categoria_id' => 2,
        ],
        [
            'id' => 2035,
            'nome' => 'Brinquedoteca',
            'categoria_id' => 2,
        ],
        [
            'id' => 2032,
            'nome' => 'Multimeios Didáticos',
            'categoria_id' => 2,
        ],
        [
            'id' => 2033,
            'nome' => 'Desenvolvimento Comunitário',
            'categoria_id' => 2,
        ],
        [
            'id' => 2036,
            'nome' => 'Produção de materiais didáticos bilíngues em Libras/Língua Portuguesa',
            'categoria_id' => 2,
        ],
        [
            'id' => 2034,
            'nome' => 'Secretaria Escolar',
            'categoria_id' => 2,
        ],
        [
            'id' => 2037,
            'nome' => 'Tradução e Interpretação de Libras',
            'categoria_id' => 2,
        ],
        [
            'id' => 2038,
            'nome' => 'Treinamento e Instrução de Cães-Guias',
            'categoria_id' => 2,
        ],
        [
            'id' => 2040,
            'nome' => 'Arquivo',
            'categoria_id' => 2,
        ],
        [
            'id' => 2999,
            'nome' => 'Outros - Eixo Desenvolvimento educacional e, social',
            'categoria_id' => 2,
        ],
        [
            'id' => 3036,
            'nome' => 'Automação Industrial',
            'categoria_id' => 3,
        ],
        [
            'id' => 3037,
            'nome' => 'Eletroeletrônica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3038,
            'nome' => 'Eletromecânica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3039,
            'nome' => 'Eletrônica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3040,
            'nome' => 'Eletrotécnica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3041,
            'nome' => 'Manutenção Automotiva',
            'categoria_id' => 3,
        ],
        [
            'id' => 3050,
            'nome' => 'Manutenção Aeronáutica em Aviônicos',
            'categoria_id' => 3,
        ],
        [
            'id' => 3051,
            'nome' => 'Manutenção Aeronáutica em Célula',
            'categoria_id' => 3,
        ],
        [
            'id' => 3052,
            'nome' => 'Manutenção Aeronáutica em Grupo Motopropulsor',
            'categoria_id' => 3,
        ],
        [
            'id' => 3060,
            'nome' => 'Manutenção de Máquinas Industriais',
            'categoria_id' => 3,
        ],
        [
            'id' => 3042,
            'nome' => 'Manutenção de Máquinas Navais',
            'categoria_id' => 3,
        ],
        [
            'id' => 3053,
            'nome' => 'Manutenção de Máquinas Pesadas',
            'categoria_id' => 3,
        ],
        [
            'id' => 3054,
            'nome' => 'Manutenção de Sistemas Metroferroviários',
            'categoria_id' => 3,
        ],
        [
            'id' => 3043,
            'nome' => 'Mecânica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3055,
            'nome' => 'Mecânica de Precisão',
            'categoria_id' => 3,
        ],
        [
            'id' => 3044,
            'nome' => 'Mecatrônica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3045,
            'nome' => 'Metalurgia',
            'categoria_id' => 3,
        ],
        [
            'id' => 3056,
            'nome' => 'Metrologia',
            'categoria_id' => 3,
        ],
        [
            'id' => 3048,
            'nome' => 'Refrigeração e Climatização',
            'categoria_id' => 3,
        ],
        [
            'id' => 3049,
            'nome' => 'Sistemas a Gás',
            'categoria_id' => 3,
        ],
        [
            'id' => 3058,
            'nome' => 'Sistemas de Energia Renovável',
            'categoria_id' => 3,
        ],
        [
            'id' => 3059,
            'nome' => 'Soldagem',
            'categoria_id' => 3,
        ],
        [
            'id' => 3061,
            'nome' => 'Ferramentaria',
            'categoria_id' => 3,
        ],
        [
            'id' => 3062,
            'nome' => 'Fundição',
            'categoria_id' => 3,
        ],
        [
            'id' => 3063,
            'nome' => 'Instrumentação Industrial',
            'categoria_id' => 3,
        ],
        [
            'id' => 3064,
            'nome' => 'Fabricação Mecânica',
            'categoria_id' => 3,
        ],
        [
            'id' => 3999,
            'nome' => 'Outros - Eixo Controle e Processos Industriais',
            'categoria_id' => 3,
        ],
        [
            'id' => 4050,
            'nome' => 'Administração',
            'categoria_id' => 4,
        ],
        [
            'id' => 4051,
            'nome' => 'Comércio',
            'categoria_id' => 4,
        ],
        [
            'id' => 4052,
            'nome' => 'Comércio Exterior',
            'categoria_id' => 4,
        ],
        [
            'id' => 4053,
            'nome' => 'Contabilidade',
            'categoria_id' => 4,
        ],
        [
            'id' => 4054,
            'nome' => 'Cooperativismo',
            'categoria_id' => 4,
        ],
        [
            'id' => 4055,
            'nome' => 'Finanças',
            'categoria_id' => 4,
        ],
        [
            'id' => 4056,
            'nome' => 'Logística',
            'categoria_id' => 4,
        ],
        [
            'id' => 4057,
            'nome' => 'Marketing',
            'categoria_id' => 4,
        ],
        [
            'id' => 4058,
            'nome' => 'Qualidade',
            'categoria_id' => 4,
        ],
        [
            'id' => 4059,
            'nome' => 'Recursos Humanos',
            'categoria_id' => 4,
        ],
        [
            'id' => 4060,
            'nome' => 'Secretariado',
            'categoria_id' => 4,
        ],
        [
            'id' => 4061,
            'nome' => 'Seguros',
            'categoria_id' => 4,
        ],
        [
            'id' => 4062,
            'nome' => 'Condomínio',
            'categoria_id' => 4,
        ],
        [
            'id' => 4066,
            'nome' => 'Serviços Jurídicos',
            'categoria_id' => 4,
        ],
        [
            'id' => 4063,
            'nome' => 'Serviços Públicos',
            'categoria_id' => 4,
        ],
        [
            'id' => 4064,
            'nome' => 'Transações Imobiliárias',
            'categoria_id' => 4,
        ],
        [
            'id' => 4065,
            'nome' => 'Vendas',
            'categoria_id' => 4,
        ],
        [
            'id' => 4999,
            'nome' => 'Outros - Eixo Gestão e Negócios',
            'categoria_id' => 4,
        ],
        [
            'id' => 5066,
            'nome' => 'Agenciamento de Viagem',
            'categoria_id' => 5,
        ],
        [
            'id' => 5067,
            'nome' => 'Gastronomia',
            'categoria_id' => 5,
        ],
        [
            'id' => 5068,
            'nome' => 'Eventos',
            'categoria_id' => 5,
        ],
        [
            'id' => 5069,
            'nome' => 'Guia de Turismo',
            'categoria_id' => 5,
        ],
        [
            'id' => 5070,
            'nome' => 'Hospedagem',
            'categoria_id' => 5,
        ],
        [
            'id' => 5071,
            'nome' => 'Lazer',
            'categoria_id' => 5,
        ],
        [
            'id' => 5072,
            'nome' => 'Serviços de Restaurante e Bar',
            'categoria_id' => 5,
        ],
        [
            'id' => 5999,
            'nome' => 'Outros - Eixo Turismo, hospitalidade e Lazer',
            'categoria_id' => 5,
        ],
        [
            'id' => 6081,
            'nome' => 'Computação Gráfica',
            'categoria_id' => 6,
        ],
        [
            'id' => 6082,
            'nome' => 'Desenvolvimento de Sistemas',
            'categoria_id' => 6,
        ],
        [
            'id' => 6073,
            'nome' => 'Informática',
            'categoria_id' => 6,
        ],
        [
            'id' => 6074,
            'nome' => 'Informática para Internet',
            'categoria_id' => 6,
        ],
        [
            'id' => 6075,
            'nome' => 'Manutenção e Suporte em Informática',
            'categoria_id' => 6,
        ],
        [
            'id' => 6076,
            'nome' => 'Programação de Jogos Digitais',
            'categoria_id' => 6,
        ],
        [
            'id' => 6077,
            'nome' => 'Redes de Computadores',
            'categoria_id' => 6,
        ],
        [
            'id' => 6078,
            'nome' => 'Sistemas de Comutação',
            'categoria_id' => 6,
        ],
        [
            'id' => 6079,
            'nome' => 'Sistemas de Transmissão',
            'categoria_id' => 6,
        ],
        [
            'id' => 6080,
            'nome' => 'Telecomunicações',
            'categoria_id' => 6,
        ],
        [
            'id' => 6999,
            'nome' => 'Outros - Eixo Informação e Comunicação',
            'categoria_id' => 6,
        ],
        [
            'id' => 7081,
            'nome' => 'Aeroportuário',
            'categoria_id' => 7,
        ],
        [
            'id' => 7082,
            'nome' => 'Agrimensura',
            'categoria_id' => 7,
        ],
        [
            'id' => 7083,
            'nome' => 'Carpintaria',
            'categoria_id' => 7,
        ],
        [
            'id' => 7084,
            'nome' => 'Desenho de Construção Civil',
            'categoria_id' => 7,
        ],
        [
            'id' => 7085,
            'nome' => 'Edificações',
            'categoria_id' => 7,
        ],
        [
            'id' => 7086,
            'nome' => 'Estradas',
            'categoria_id' => 7,
        ],
        [
            'id' => 7087,
            'nome' => 'Geodésia e Cartografia',
            'categoria_id' => 7,
        ],
        [
            'id' => 7088,
            'nome' => 'Geoprocessamento',
            'categoria_id' => 7,
        ],
        [
            'id' => 7089,
            'nome' => 'Hidrologia',
            'categoria_id' => 7,
        ],
        [
            'id' => 7091,
            'nome' => 'Portos',
            'categoria_id' => 7,
        ],
        [
            'id' => 7092,
            'nome' => 'Saneamento',
            'categoria_id' => 7,
        ],
        [
            'id' => 7093,
            'nome' => 'Trânsito',
            'categoria_id' => 7,
        ],
        [
            'id' => 7094,
            'nome' => 'Transporte Aquaviário',
            'categoria_id' => 7,
        ],
        [
            'id' => 7095,
            'nome' => 'Transporte de Cargas',
            'categoria_id' => 7,
        ],
        [
            'id' => 7096,
            'nome' => 'Transporte Dutoviário',
            'categoria_id' => 7,
        ],
        [
            'id' => 7097,
            'nome' => 'Transporte Metroferroviário',
            'categoria_id' => 7,
        ],
        [
            'id' => 7098,
            'nome' => 'Transporte Rodoviário',
            'categoria_id' => 7,
        ],
        [
            'id' => 7999,
            'nome' => 'Outros - Eixo Infra-Estrutura',
            'categoria_id' => 7,
        ],
        [
            'id' => 8133,
            'nome' => 'Bombeiro Aeronáutico',
            'categoria_id' => 7,
        ],
        [
            'id' => 8099,
            'nome' => 'Comunicações Aeronáuticas',
            'categoria_id' => 7,
        ],
        [
            'id' => 8126,
            'nome' => 'Comunicações Navais',
            'categoria_id' => 7,
        ],
        [
            'id' => 8100,
            'nome' => 'Controle de Tráfego Aéreo',
            'categoria_id' => 7,
        ],
        [
            'id' => 8101,
            'nome' => 'Desenho Militar',
            'categoria_id' => 7,
        ],
        [
            'id' => 8102,
            'nome' => 'Eletricidade e Instrumentos Aeronáuticos',
            'categoria_id' => 7,
        ],
        [
            'id' => 8103,
            'nome' => 'Equipamentos de Voo',
            'categoria_id' => 7,
        ],
        [
            'id' => 8104,
            'nome' => 'Estrutura e Pintura de Aeronaves',
            'categoria_id' => 7,
        ],
        [
            'id' => 8105,
            'nome' => 'Fotointeligência',
            'categoria_id' => 7,
        ],
        [
            'id' => 8106,
            'nome' => 'Guarda e Segurança',
            'categoria_id' => 7,
        ],
        [
            'id' => 8107,
            'nome' => 'Hidrografia',
            'categoria_id' => 7,
        ],
        [
            'id' => 8108,
            'nome' => 'Informações Aeronáuticas',
            'categoria_id' => 7,
        ],
        [
            'id' => 8109,
            'nome' => 'Manobras e Equipamentos de Convés',
            'categoria_id' => 7,
        ],
        [
            'id' => 8110,
            'nome' => 'Material Bélico',
            'categoria_id' => 7,
        ],
        [
            'id' => 8130,
            'nome' => 'Mecânica de Aeronaves',
            'categoria_id' => 7,
        ],
        [
            'id' => 8111,
            'nome' => 'Mergulho',
            'categoria_id' => 7,
        ],
        [
            'id' => 8112,
            'nome' => 'Operação de Radar',
            'categoria_id' => 7,
        ],
        [
            'id' => 8113,
            'nome' => 'Operação de Sonar',
            'categoria_id' => 7,
        ],
        [
            'id' => 8114,
            'nome' => 'Operações de Engenharia Militar',
            'categoria_id' => 7,
        ],
        [
            'id' => 8115,
            'nome' => 'Preparação Física e Desportiva Militar',
            'categoria_id' => 7,
        ],
        [
            'id' => 8116,
            'nome' => 'Sensores de Aviação',
            'categoria_id' => 7,
        ],
        [
            'id' => 8117,
            'nome' => 'Sinais Navais',
            'categoria_id' => 7,
        ],
        [
            'id' => 8118,
            'nome' => 'Sinalização Náutica',
            'categoria_id' => 7,
        ],
        [
            'id' => 8119,
            'nome' => 'Suprimento',
            'categoria_id' => 7,
        ],
        [
            'id' => 8999,
            'nome' => 'Outros - Eixo Militar',
            'categoria_id' => 7,
        ],
        [
            'id' => 9120,
            'nome' => 'Alimentos',
            'categoria_id' => 9,
        ],
        [
            'id' => 9121,
            'nome' => 'Agroindústria',
            'categoria_id' => 9,
        ],
        [
            'id' => 9123,
            'nome' => 'Cervejaria',
            'categoria_id' => 9,
        ],
        [
            'id' => 9124,
            'nome' => 'Confeitaria',
            'categoria_id' => 9,
        ],
        [
            'id' => 9125,
            'nome' => 'Panificação',
            'categoria_id' => 9,
        ],
        [
            'id' => 9126,
            'nome' => 'Processamento de Pescado',
            'categoria_id' => 9,
        ],
        [
            'id' => 9127,
            'nome' => 'Viticultura e Enologia',
            'categoria_id' => 9,
        ],
        [
            'id' => 9999,
            'nome' => 'Outros - Eixo Produção Alimentícia',
            'categoria_id' => 9,
        ],
        [
            'id' => 10128,
            'nome' => 'Artes Circenses',
            'categoria_id' => 10,
        ],
        [
            'id' => 10129,
            'nome' => 'Teatro',
            'categoria_id' => 10,
        ],
        [
            'id' => 10130,
            'nome' => 'Artes Visuais',
            'categoria_id' => 10,
        ],
        [
            'id' => 10131,
            'nome' => 'Artesanato',
            'categoria_id' => 10,
        ],
        [
            'id' => 10132,
            'nome' => 'Canto',
            'categoria_id' => 10,
        ],
        [
            'id' => 10154,
            'nome' => 'Cenografia',
            'categoria_id' => 10,
        ],
        [
            'id' => 10133,
            'nome' => 'Composição e Arranjo',
            'categoria_id' => 10,
        ],
        [
            'id' => 10134,
            'nome' => 'Design Gráfico',
            'categoria_id' => 10,
        ],
        [
            'id' => 10135,
            'nome' => 'Conservação e Restauro',
            'categoria_id' => 10,
        ],
        [
            'id' => 10136,
            'nome' => 'Dança',
            'categoria_id' => 10,
        ],
        [
            'id' => 10137,
            'nome' => 'Design de Calçados',
            'categoria_id' => 10,
        ],
        [
            'id' => 10138,
            'nome' => 'Design de Embalagens',
            'categoria_id' => 10,
        ],
        [
            'id' => 10139,
            'nome' => 'Design de Interiores',
            'categoria_id' => 10,
        ],
        [
            'id' => 10140,
            'nome' => 'Design de Jóias',
            'categoria_id' => 10,
        ],
        [
            'id' => 10141,
            'nome' => 'Design de Móveis',
            'categoria_id' => 10,
        ],
        [
            'id' => 10142,
            'nome' => 'Documentação Musical',
            'categoria_id' => 10,
        ],
        [
            'id' => 10143,
            'nome' => 'Fabricação de Instrumentos Musicais',
            'categoria_id' => 10,
        ],
        [
            'id' => 10157,
            'nome' => 'Figurino Cênico',
            'categoria_id' => 10,
        ],
        [
            'id' => 10144,
            'nome' => 'Instrumento Musical (nome do instrumento)',
            'categoria_id' => 10,
        ],
        [
            'id' => 10145,
            'nome' => 'Modelagem do Vestuário',
            'categoria_id' => 10,
        ],
        [
            'id' => 10146,
            'nome' => 'Multimídia',
            'categoria_id' => 10,
        ],
        [
            'id' => 10155,
            'nome' => 'Museologia',
            'categoria_id' => 10,
        ],
        [
            'id' => 10147,
            'nome' => 'Paisagismo',
            'categoria_id' => 10,
        ],
        [
            'id' => 10156,
            'nome' => 'Processos Fonográficos',
            'categoria_id' => 10,
        ],
        [
            'id' => 10148,
            'nome' => 'Processos Fotográficos',
            'categoria_id' => 10,
        ],
        [
            'id' => 10149,
            'nome' => 'Produção de Áudio e Vídeo',
            'categoria_id' => 10,
        ],
        [
            'id' => 10150,
            'nome' => 'Produção de Moda',
            'categoria_id' => 10,
        ],
        [
            'id' => 10151,
            'nome' => 'Publicidade',
            'categoria_id' => 10,
        ],
        [
            'id' => 10152,
            'nome' => 'Rádio e Televisão',
            'categoria_id' => 10,
        ],
        [
            'id' => 10153,
            'nome' => 'Regência',
            'categoria_id' => 10,
        ],
        [
            'id' => 10158,
            'nome' => 'Design de Moda',
            'categoria_id' => 10,
        ],
        [
            'id' => 10159,
            'nome' => 'Estilismo e Coordenação de Moda',
            'categoria_id' => 10,
        ],
        [
            'id' => 10160,
            'nome' => 'Produção Cultural',
            'categoria_id' => 10,
        ],
        [
            'id' => 10999,
            'nome' => 'Outros - Eixo Produção Cultural e Design',
            'categoria_id' => 10,
        ],
        [
            'id' => 11154,
            'nome' => 'Açúcar e Álcool',
            'categoria_id' => 11,
        ],
        [
            'id' => 11172,
            'nome' => 'Análises Químicas',
            'categoria_id' => 11,
        ],
        [
            'id' => 11155,
            'nome' => 'Biocombustíveis',
            'categoria_id' => 11,
        ],
        [
            'id' => 11173,
            'nome' => 'Biotecnologia',
            'categoria_id' => 11,
        ],
        [
            'id' => 11156,
            'nome' => 'Calçados',
            'categoria_id' => 11,
        ],
        [
            'id' => 11157,
            'nome' => 'Celulose e Papel',
            'categoria_id' => 11,
        ],
        [
            'id' => 11158,
            'nome' => 'Cerâmica',
            'categoria_id' => 11,
        ],
        [
            'id' => 11159,
            'nome' => 'Construção Naval',
            'categoria_id' => 11,
        ],
        [
            'id' => 11160,
            'nome' => 'Curtimento',
            'categoria_id' => 11,
        ],
        [
            'id' => 11163,
            'nome' => 'Impressão Offset',
            'categoria_id' => 11,
        ],
        [
            'id' => 11162,
            'nome' => 'Impressão Rotográfica e Flexográfica',
            'categoria_id' => 11,
        ],
        [
            'id' => 11164,
            'nome' => 'Joalheria',
            'categoria_id' => 11,
        ],
        [
            'id' => 11165,
            'nome' => 'Móveis',
            'categoria_id' => 11,
        ],
        [
            'id' => 11166,
            'nome' => 'Petróleo e Gás',
            'categoria_id' => 11,
        ],
        [
            'id' => 11174,
            'nome' => 'Petroquímica',
            'categoria_id' => 11,
        ],
        [
            'id' => 11167,
            'nome' => 'Plásticos',
            'categoria_id' => 11,
        ],
        [
            'id' => 11171,
            'nome' => 'Processos Gráficos',
            'categoria_id' => 11,
        ],
        [
            'id' => 11175,
            'nome' => 'Química',
            'categoria_id' => 11,
        ],
        [
            'id' => 11169,
            'nome' => 'Têxtil',
            'categoria_id' => 11,
        ],
        [
            'id' => 11170,
            'nome' => 'Vestuário',
            'categoria_id' => 11,
        ],
        [
            'id' => 11176,
            'nome' => 'Planejamento e Controle da Produção',
            'categoria_id' => 11,
        ],
        [
            'id' => 11177,
            'nome' => 'Vidros',
            'categoria_id' => 11,
        ],
        [
            'id' => 11178,
            'nome' => 'Processamento da Madeira',
            'categoria_id' => 11,
        ],
        [
            'id' => 11999,
            'nome' => 'Outros - Eixo Produção Industrial',
            'categoria_id' => 11,
        ],
        [
            'id' => 12171,
            'nome' => 'Agricultura',
            'categoria_id' => 12,
        ],
        [
            'id' => 12172,
            'nome' => 'Agroecologia',
            'categoria_id' => 12,
        ],
        [
            'id' => 12173,
            'nome' => 'Agronegócio',
            'categoria_id' => 12,
        ],
        [
            'id' => 12174,
            'nome' => 'Agropecuária',
            'categoria_id' => 12,
        ],
        [
            'id' => 12175,
            'nome' => 'Aquicultura',
            'categoria_id' => 12,
        ],
        [
            'id' => 12176,
            'nome' => 'Cafeicultura',
            'categoria_id' => 12,
        ],
        [
            'id' => 12178,
            'nome' => 'Florestas',
            'categoria_id' => 12,
        ],
        [
            'id' => 12179,
            'nome' => 'Fruticultura',
            'categoria_id' => 12,
        ],
        [
            'id' => 12180,
            'nome' => 'Geologia',
            'categoria_id' => 12,
        ],
        [
            'id' => 12181,
            'nome' => 'Mineração',
            'categoria_id' => 12,
        ],
        [
            'id' => 12182,
            'nome' => 'Pesca',
            'categoria_id' => 12,
        ],
        [
            'id' => 12187,
            'nome' => 'Pós-Colheita',
            'categoria_id' => 12,
        ],
        [
            'id' => 12183,
            'nome' => 'Recursos Minerais',
            'categoria_id' => 12,
        ],
        [
            'id' => 12184,
            'nome' => 'Recursos Pesqueiros',
            'categoria_id' => 12,
        ],
        [
            'id' => 12185,
            'nome' => 'Zootecnia',
            'categoria_id' => 12,
        ],
        [
            'id' => 12188,
            'nome' => 'Apicultura',
            'categoria_id' => 12,
        ],
        [
            'id' => 12999,
            'nome' => 'Outros - Eixo Recursos Naturais',
            'categoria_id' => 12,
        ],
        [
            'id' => 13181,
            'nome' => 'Defesa Civil',
            'categoria_id' => 13,
        ],
        [
            'id' => 13182,
            'nome' => 'Segurança do Trabalho',
            'categoria_id' => 13,
        ],
        [
            'id' => 13183,
            'nome' => 'Prevenção e Combate a Incêndios',
            'categoria_id' => 13,
        ],
        [
            'id' => 13999,
            'nome' => 'Outros - Eixo Segurança',
            'categoria_id' => 13,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursosTecnicos::insertOrIgnore($this->cursos);
    }
}
