<?php

namespace Database\Seeders;

use App\Models\Localidade\OrgaoRegional;
use Illuminate\Database\Seeder;

class OrgaoRegionalSeeder extends Seeder
{
    private array $orgaos = [
        [
            'id' => '00001',
            'nome' => 'CRE - ARIQUEMES',
            'estado_id' => '11',
        ],
        [
            'id' => '00002',
            'nome' => 'CRE - CACOAL',
            'estado_id' => '11',
        ],
        [
            'id' => '00003',
            'nome' => 'CRE - CEREJEIRAS',
            'estado_id' => '11',
        ],
        [
            'id' => '00004',
            'nome' => 'CRE - EXTREMA',
            'estado_id' => '11',
        ],
        [
            'id' => '00005',
            'nome' => 'CRE - GUAJARA-MIRIM',
            'estado_id' => '11',
        ],
        [
            'id' => '00006',
            'nome' => 'CRE - JARU',
            'estado_id' => '11',
        ],
        [
            'id' => '00007',
            'nome' => 'CRE - JI-PARANA',
            'estado_id' => '11',
        ],
        [
            'id' => '00008',
            'nome' => 'CRE - OURO PRETO DO OESTE',
            'estado_id' => '11',
        ],
        [
            'id' => '00009',
            'nome' => 'CRE - PORTO VELHO',
            'estado_id' => '11',
        ],
        [
            'id' => '00010',
            'nome' => 'CRE - PIMENTA BUENO',
            'estado_id' => '11',
        ],
        [
            'id' => '00011',
            'nome' => 'CRE - ROLIM DE MOURA',
            'estado_id' => '11',
        ],
        [
            'id' => '00012',
            'nome' => 'CRE - SAO FRANCISCO DO GUAPORE',
            'estado_id' => '11',
        ],
        [
            'id' => '00013',
            'nome' => 'CRE - VILHENA',
            'estado_id' => '11',
        ],
        [
            'id' => '00014',
            'nome' => 'CRE - MACHADINHO',
            'estado_id' => '11',
        ],
        [
            'id' => '00015',
            'nome' => 'CRE ALTA FLORESTA DO OESTE',
            'estado_id' => '11',
        ],
        [
            'id' => '00016',
            'nome' => 'CRE BURITIS',
            'estado_id' => '11',
        ],
        [
            'id' => '00017',
            'nome' => 'CRE COSTA MARQUES',
            'estado_id' => '11',
        ],
        [
            'id' => '00018',
            'nome' => 'CRE ESPIGAO DO OESTE',
            'estado_id' => '11',
        ],
        [
            'id' => 'MI310',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 10 - PARINTINS',
            'estado_id' => '13',
        ],
        [
            'id' => 'MI411',
            'nome' => 'MESO 04 - SUL AMAZ - MICRO 11- BOCA DO ACRE',
            'estado_id' => '13',
        ],
        [
            'id' => 'MI412',
            'nome' => 'MESO 04 - SUL AMAZ - MICRO 12 - PURUS',
            'estado_id' => '13',
        ],
        [
            'id' => 'MI413',
            'nome' => 'MESO 04 - SUL AMAZ - MICRO 13 - MADEIRA',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI11',
            'nome' => 'MESO 01 - NORTE AMAZ - MICRO 01 - RIO NEGRO',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI12',
            'nome' => 'MESO 01 - NORTE AMAZ - MICRO 02 - JAPURA',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI23',
            'nome' => 'MESO 02 - SUDOESTE AMAZ - MICRO 03 - ALTO SOLIM',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI24',
            'nome' => 'MESO 02 - SUDOESTE AMAZ - MICRO 04 - JURUA',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI35',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 05 - TEFE',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI36',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 06 - COARI',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI37',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 07 - MANAUS',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI38',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 08 - RIO PRETO',
            'estado_id' => '13',
        ],
        [
            'id' => '0MI39',
            'nome' => 'MESO 03 - CENTRO AMAZ - MICRO 09 - ITACOATIARA',
            'estado_id' => '13',
        ],
        [
            'id' => '00001',
            'nome' => 'SETOR SUL',
            'estado_id' => '13',
        ],
        [
            'id' => '00002',
            'nome' => 'SETOR OESTE',
            'estado_id' => '13',
        ],
        [
            'id' => '00003',
            'nome' => 'SETOR NORTE',
            'estado_id' => '13',
        ],
        [
            'id' => '00004',
            'nome' => 'SETOR CENTRO-SUL',
            'estado_id' => '13',
        ],
        [
            'id' => '00005',
            'nome' => 'SETOR CENTRO-OESTE',
            'estado_id' => '13',
        ],
        [
            'id' => '00006',
            'nome' => 'SETOR LESTE',
            'estado_id' => '13',
        ],
        [
            'id' => '00007',
            'nome' => 'CENTRO DE EXCELENCIA',
            'estado_id' => '13',
        ],
        [
            'id' => '00008',
            'nome' => 'ZONA RURAL - ESCOLAS RIBEIRINHAS',
            'estado_id' => '13',
        ],
        [
            'id' => '00009',
            'nome' => 'ZONA RURAL - ESCOLAS RODOVIARIAS',
            'estado_id' => '13',
        ],
        [
            'id' => '0003A',
            'nome' => 'SETOR NORTE - GRUPO 01',
            'estado_id' => '13',
        ],
        [
            'id' => '0003B',
            'nome' => 'SETOR NORTE - GRUPO 02',
            'estado_id' => '13',
        ],
        [
            'id' => '0006A',
            'nome' => 'SETOR LESTE - GRUPO 01',
            'estado_id' => '13',
        ],
        [
            'id' => '0006B',
            'nome' => 'SETOR LESTE - GRUPO 02',
            'estado_id' => '13',
        ],
        [
            'id' => '00001',
            'nome' => '1ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00002',
            'nome' => '2ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00003',
            'nome' => '3ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00004',
            'nome' => '4ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00005',
            'nome' => '5ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00006',
            'nome' => '6ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00007',
            'nome' => '7ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00008',
            'nome' => '8ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00009',
            'nome' => '9ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00010',
            'nome' => '10ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00011',
            'nome' => '11ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00012',
            'nome' => '12ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00013',
            'nome' => '13ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00014',
            'nome' => '14ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00015',
            'nome' => '15ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00016',
            'nome' => '16ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00017',
            'nome' => '17ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00018',
            'nome' => '18ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00019',
            'nome' => 'URE19ª',
            'estado_id' => '15',
        ],
        [
            'id' => '00020',
            'nome' => 'ILHAS',
            'estado_id' => '15',
        ],
        [
            'id' => '00021',
            'nome' => '21ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '00022',
            'nome' => '22ª URE',
            'estado_id' => '15',
        ],
        [
            'id' => '01901',
            'nome' => 'URE 1901',
            'estado_id' => '15',
        ],
        [
            'id' => '01902',
            'nome' => 'URE 1902',
            'estado_id' => '15',
        ],
        [
            'id' => '01903',
            'nome' => 'URE 1903',
            'estado_id' => '15',
        ],
        [
            'id' => '01904',
            'nome' => 'URE 1904',
            'estado_id' => '15',
        ],
        [
            'id' => '01905',
            'nome' => 'URE 1905',
            'estado_id' => '15',
        ],
        [
            'id' => '01906',
            'nome' => 'URE 1906',
            'estado_id' => '15',
        ],
        [
            'id' => '01907',
            'nome' => 'URE 1907',
            'estado_id' => '15',
        ],
        [
            'id' => '01908',
            'nome' => 'URE 1908',
            'estado_id' => '15',
        ],
        [
            'id' => '01909',
            'nome' => 'URE 1909',
            'estado_id' => '15',
        ],
        [
            'id' => '01910',
            'nome' => 'URE 1910',
            'estado_id' => '15',
        ],
        [
            'id' => '01911',
            'nome' => 'URE 1911',
            'estado_id' => '15',
        ],
        [
            'id' => '01912',
            'nome' => 'URE 1912',
            'estado_id' => '15',
        ],
        [
            'id' => '01913',
            'nome' => 'URE 1913',
            'estado_id' => '15',
        ],
        [
            'id' => '01914',
            'nome' => 'URE 1914',
            'estado_id' => '15',
        ],
        [
            'id' => '01915',
            'nome' => 'URE 1915',
            'estado_id' => '15',
        ],
        [
            'id' => '01916',
            'nome' => 'URE 1916',
            'estado_id' => '15',
        ],
        [
            'id' => '01917',
            'nome' => 'URE 1917',
            'estado_id' => '15',
        ],
        [
            'id' => '01918',
            'nome' => 'URE 1918',
            'estado_id' => '15',
        ],
        [
            'id' => '00000',
            'nome' => 'PALMAS',
            'estado_id' => '17',
        ],
        [
            'id' => '00001',
            'nome' => 'ARAGUAINA',
            'estado_id' => '17',
        ],
        [
            'id' => '00002',
            'nome' => 'ARAGUATINS',
            'estado_id' => '17',
        ],
        [
            'id' => '00003',
            'nome' => 'ARRAIAS',
            'estado_id' => '17',
        ],
        [
            'id' => '00004',
            'nome' => 'DIANOPOLIS',
            'estado_id' => '17',
        ],
        [
            'id' => '00005',
            'nome' => 'GUARAI',
            'estado_id' => '17',
        ],
        [
            'id' => '00006',
            'nome' => 'GURUPI',
            'estado_id' => '17',
        ],
        [
            'id' => '00007',
            'nome' => 'MIRACEMA DO TOCANTINS',
            'estado_id' => '17',
        ],
        [
            'id' => '00008',
            'nome' => 'PARAISO DO TOCANTINS',
            'estado_id' => '17',
        ],
        [
            'id' => '00009',
            'nome' => 'PORTO NACIONAL',
            'estado_id' => '17',
        ],
        [
            'id' => '00010',
            'nome' => 'TOCANTINOPOLIS',
            'estado_id' => '17',
        ],
        [
            'id' => '00011',
            'nome' => 'COLINAS DO TOCANTINS',
            'estado_id' => '17',
        ],
        [
            'id' => '00012',
            'nome' => 'PEDRO AFONSO',
            'estado_id' => '17',
        ],
        [
            'id' => '00001',
            'nome' => 'SAO LUIS',
            'estado_id' => '21',
        ],
        [
            'id' => '00002',
            'nome' => 'ITAPECURU MIRIM',
            'estado_id' => '21',
        ],
        [
            'id' => '00003',
            'nome' => 'ROSARIO',
            'estado_id' => '21',
        ],
        [
            'id' => '00004',
            'nome' => 'SANTA INES',
            'estado_id' => '21',
        ],
        [
            'id' => '00005',
            'nome' => 'ZE DOCA',
            'estado_id' => '21',
        ],
        [
            'id' => '00006',
            'nome' => 'IMPERATRIZ',
            'estado_id' => '21',
        ],
        [
            'id' => '00007',
            'nome' => 'ACAILANDIA',
            'estado_id' => '21',
        ],
        [
            'id' => '00008',
            'nome' => 'PINHEIRO',
            'estado_id' => '21',
        ],
        [
            'id' => '00009',
            'nome' => 'CAXIAS',
            'estado_id' => '21',
        ],
        [
            'id' => '00010',
            'nome' => 'CODO',
            'estado_id' => '21',
        ],
        [
            'id' => '00011',
            'nome' => 'BACABAL',
            'estado_id' => '21',
        ],
        [
            'id' => '00012',
            'nome' => 'PEDREIRAS',
            'estado_id' => '21',
        ],
        [
            'id' => '00013',
            'nome' => 'PRESIDENTE DUTRA',
            'estado_id' => '21',
        ],
        [
            'id' => '00014',
            'nome' => 'BARRA DO CORDA',
            'estado_id' => '21',
        ],
        [
            'id' => '00015',
            'nome' => 'SAO JOAO DOS PATOS',
            'estado_id' => '21',
        ],
        [
            'id' => '00016',
            'nome' => 'BALSAS',
            'estado_id' => '21',
        ],
        [
            'id' => '00017',
            'nome' => 'VIANA',
            'estado_id' => '21',
        ],
        [
            'id' => '00018',
            'nome' => 'CHAPADINHA',
            'estado_id' => '21',
        ],
        [
            'id' => '00019',
            'nome' => 'TIMON',
            'estado_id' => '21',
        ],
        [
            'id' => '00001',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE PARNAIBA',
            'estado_id' => '22',
        ],
        [
            'id' => '00002',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE BARRAS',
            'estado_id' => '22',
        ],
        [
            'id' => '00003',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE PIRIPIRI',
            'estado_id' => '22',
        ],
        [
            'id' => '00004',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE TERESINA',
            'estado_id' => '22',
        ],
        [
            'id' => '00005',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE CAMPO MAIOR',
            'estado_id' => '22',
        ],
        [
            'id' => '00006',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE REGENERACAO',
            'estado_id' => '22',
        ],
        [
            'id' => '00007',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE VALENCA',
            'estado_id' => '22',
        ],
        [
            'id' => '00008',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE OEIRAS',
            'estado_id' => '22',
        ],
        [
            'id' => '00009',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE PICOS',
            'estado_id' => '22',
        ],
        [
            'id' => '00010',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE FLORIANO',
            'estado_id' => '22',
        ],
        [
            'id' => '00011',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE URUCUI',
            'estado_id' => '22',
        ],
        [
            'id' => '00012',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE SAO JOAO DO PIAUI',
            'estado_id' => '22',
        ],
        [
            'id' => '00013',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE SAO RAIMUNDO NONATO',
            'estado_id' => '22',
        ],
        [
            'id' => '00014',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE BOM JESUS',
            'estado_id' => '22',
        ],
        [
            'id' => '00015',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE CORRENTE',
            'estado_id' => '22',
        ],
        [
            'id' => '00016',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE FRONTEIRAS',
            'estado_id' => '22',
        ],
        [
            'id' => '00017',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE PAULISTANA',
            'estado_id' => '22',
        ],
        [
            'id' => '00018',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DA GRANDE TERESINA',
            'estado_id' => '22',
        ],
        [
            'id' => '00019',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE TERESINA - 19ª',
            'estado_id' => '22',
        ],
        [
            'id' => '00020',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE TERESINA - 20ª',
            'estado_id' => '22',
        ],
        [
            'id' => '00021',
            'nome' => 'GERENCIA REGIONAL DE EDUCACAO DE TERESINA - 21ª',
            'estado_id' => '22',
        ],
        [
            'id' => '00001',
            'nome' => 'CENTRO REG DES EDUCAC CREDE MARACANAU',
            'estado_id' => '23',
        ],
        [
            'id' => '00002',
            'nome' => 'CENTRO REG DES EDUCAC CREDE ITAPIPOCA',
            'estado_id' => '23',
        ],
        [
            'id' => '00003',
            'nome' => 'CENTRO REG DES EDUCAC CREDE ACARAU',
            'estado_id' => '23',
        ],
        [
            'id' => '00004',
            'nome' => 'CENTRO REG DES EDUCAC CREDE CAMOCIM',
            'estado_id' => '23',
        ],
        [
            'id' => '00005',
            'nome' => 'CENTRO REG DES EDUCAC CREDE TIANGUA',
            'estado_id' => '23',
        ],
        [
            'id' => '00006',
            'nome' => 'CENTRO REG DES EDUCAC CREDE SOBRAL',
            'estado_id' => '23',
        ],
        [
            'id' => '00007',
            'nome' => 'CENTRO REG DES EDUCAC CREDE CANINDE',
            'estado_id' => '23',
        ],
        [
            'id' => '00008',
            'nome' => 'CENTRO REG DES EDUCAC CREDE BATURITE',
            'estado_id' => '23',
        ],
        [
            'id' => '00009',
            'nome' => 'CENTRO REG DES EDUCAC CREDE HORIZONTE',
            'estado_id' => '23',
        ],
        [
            'id' => '00010',
            'nome' => 'CENTRO REG DES EDUCAC CREDE RUSSAS',
            'estado_id' => '23',
        ],
        [
            'id' => '00011',
            'nome' => 'CENTRO REG DES EDUCAC CREDE JAGUARIBE',
            'estado_id' => '23',
        ],
        [
            'id' => '00012',
            'nome' => 'CENTRO REG DES EDUCAC CREDE QUIXADA',
            'estado_id' => '23',
        ],
        [
            'id' => '00013',
            'nome' => 'CENTRO REG DES EDUCAC CREDE CRATEUS',
            'estado_id' => '23',
        ],
        [
            'id' => '00014',
            'nome' => 'CENTRO REG DES EDUCAC CREDE SEN POMPEU',
            'estado_id' => '23',
        ],
        [
            'id' => '00015',
            'nome' => 'CENTRO REG DES EDUCAC CREDE TAUA',
            'estado_id' => '23',
        ],
        [
            'id' => '00016',
            'nome' => 'CENTRO REG DES EDUCAC CREDE IGUATU',
            'estado_id' => '23',
        ],
        [
            'id' => '00017',
            'nome' => 'CENTRO REG DES EDUCAC CREDE ICO',
            'estado_id' => '23',
        ],
        [
            'id' => '00018',
            'nome' => 'CENTRO REG DES EDUCAC CREDE CRATO',
            'estado_id' => '23',
        ],
        [
            'id' => '00019',
            'nome' => 'CENTRO REG DES EDUCAC CREDE J DO NORTE',
            'estado_id' => '23',
        ],
        [
            'id' => '00020',
            'nome' => 'CENTRO REG DES EDUCAC CREDE BREJO SANTO',
            'estado_id' => '23',
        ],
        [
            'id' => '021R1',
            'nome' => 'FORTALEZA R01',
            'estado_id' => '23',
        ],
        [
            'id' => '021R2',
            'nome' => 'FORTALEZA R02',
            'estado_id' => '23',
        ],
        [
            'id' => '021R3',
            'nome' => 'FORTALEZA R03',
            'estado_id' => '23',
        ],
        [
            'id' => '021R4',
            'nome' => 'FORTALEZA R04',
            'estado_id' => '23',
        ],
        [
            'id' => '021R5',
            'nome' => 'FORTALEZA R05',
            'estado_id' => '23',
        ],
        [
            'id' => '021R6',
            'nome' => 'FORTALEZA R06',
            'estado_id' => '23',
        ],
        [
            'id' => '00001',
            'nome' => '1ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00002',
            'nome' => '2ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00003',
            'nome' => '3ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00004',
            'nome' => '4ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00005',
            'nome' => '5ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00006',
            'nome' => '6ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00007',
            'nome' => '7ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00008',
            'nome' => '8ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00009',
            'nome' => '9ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00010',
            'nome' => '10ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00011',
            'nome' => '11ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00012',
            'nome' => '12ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00013',
            'nome' => '13ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00014',
            'nome' => '14ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00015',
            'nome' => '15ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00016',
            'nome' => '16ª DIRED',
            'estado_id' => '24',
        ],
        [
            'id' => '00001',
            'nome' => '1ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00002',
            'nome' => '2ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00003',
            'nome' => '3ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00004',
            'nome' => '4ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00005',
            'nome' => '5ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00006',
            'nome' => '6ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00007',
            'nome' => '7ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00008',
            'nome' => '8ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00009',
            'nome' => '9ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00010',
            'nome' => '10ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00011',
            'nome' => '11ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00012',
            'nome' => '12ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00013',
            'nome' => '13ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00014',
            'nome' => '14ª REGIAO DE ENSINO',
            'estado_id' => '25',
        ],
        [
            'id' => '00001',
            'nome' => 'GRE RECIFE NORTE',
            'estado_id' => '26',
        ],
        [
            'id' => '00002',
            'nome' => 'GRE RECIFE SUL',
            'estado_id' => '26',
        ],
        [
            'id' => '00003',
            'nome' => 'GRE METROPOLITANA NORTE',
            'estado_id' => '26',
        ],
        [
            'id' => '00004',
            'nome' => 'GRE METROPOLITANA SUL',
            'estado_id' => '26',
        ],
        [
            'id' => '00005',
            'nome' => 'GRE MATA NORTE - NAZARE DA MATA',
            'estado_id' => '26',
        ],
        [
            'id' => '00006',
            'nome' => 'GRE MATA CENTRO - VITORIA DE SANTO ANTAO',
            'estado_id' => '26',
        ],
        [
            'id' => '00007',
            'nome' => 'GRE MATA SUL -PALMARES',
            'estado_id' => '26',
        ],
        [
            'id' => '00008',
            'nome' => 'GRE VALE DO CAPIBARIBE - LIMOEIRO',
            'estado_id' => '26',
        ],
        [
            'id' => '00009',
            'nome' => 'GRE AGRESTE CENTRO NORTE - CARUARU',
            'estado_id' => '26',
        ],
        [
            'id' => '00010',
            'nome' => 'GRE AGRESTE MERIDIONAL - GARANHUNS',
            'estado_id' => '26',
        ],
        [
            'id' => '00011',
            'nome' => 'GRE SERTAO DO MOXOTO IPANEMA - ARCOVERDE',
            'estado_id' => '26',
        ],
        [
            'id' => '00012',
            'nome' => 'GRE SERTAO DO ALTO PAJEU - AFOGADOS DA INGAZEIRA',
            'estado_id' => '26',
        ],
        [
            'id' => '00013',
            'nome' => 'GRE SERTAO DO SUBMEDIO SAO FRANCISCO - FLORESTA',
            'estado_id' => '26',
        ],
        [
            'id' => '00014',
            'nome' => 'GRE SERTAO CENTRAL - SALGUEIRO',
            'estado_id' => '26',
        ],
        [
            'id' => '00015',
            'nome' => 'GRE SERTAO DO ARARIPE - ARARIPINA',
            'estado_id' => '26',
        ],
        [
            'id' => '00016',
            'nome' => 'GRE SERTAO MEDIO SAO FRANCISCO - PETROLINA',
            'estado_id' => '26',
        ],
        [
            'id' => '00001',
            'nome' => '1ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00002',
            'nome' => '2ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00003',
            'nome' => '3ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00004',
            'nome' => '4ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00005',
            'nome' => '5ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00006',
            'nome' => '6ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00007',
            'nome' => '7ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00008',
            'nome' => '8ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00009',
            'nome' => '9ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00010',
            'nome' => '10ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00011',
            'nome' => '11ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00012',
            'nome' => '12ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00013',
            'nome' => '13ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00014',
            'nome' => '14ª COORDENADORIA',
            'estado_id' => '27',
        ],
        [
            'id' => '00000',
            'nome' => 'DEA',
            'estado_id' => '28',
        ],
        [
            'id' => '00001',
            'nome' => 'DRE-01',
            'estado_id' => '28',
        ],
        [
            'id' => '00002',
            'nome' => 'DRE-02',
            'estado_id' => '28',
        ],
        [
            'id' => '00003',
            'nome' => 'DRE-03',
            'estado_id' => '28',
        ],
        [
            'id' => '00004',
            'nome' => 'DRE-04',
            'estado_id' => '28',
        ],
        [
            'id' => '00005',
            'nome' => 'DRE-05',
            'estado_id' => '28',
        ],
        [
            'id' => '00006',
            'nome' => 'DRE-06',
            'estado_id' => '28',
        ],
        [
            'id' => '00007',
            'nome' => 'DRE-07',
            'estado_id' => '28',
        ],
        [
            'id' => '00008',
            'nome' => 'DRE-08',
            'estado_id' => '28',
        ],
        [
            'id' => '00009',
            'nome' => 'DRE-09',
            'estado_id' => '28',
        ],
        [
            'id' => '00001',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - IRECE',
            'estado_id' => '29',
        ],
        [
            'id' => '00002',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - BOM JESUS DA LAPA',
            'estado_id' => '29',
        ],
        [
            'id' => '00003',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SEABRA',
            'estado_id' => '29',
        ],
        [
            'id' => '00004',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SERRINHA',
            'estado_id' => '29',
        ],
        [
            'id' => '00005',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - ITABUNA',
            'estado_id' => '29',
        ],
        [
            'id' => '00006',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - VALENCA',
            'estado_id' => '29',
        ],
        [
            'id' => '00007',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - TEIXEIRA DE FREITAS',
            'estado_id' => '29',
        ],
        [
            'id' => '00008',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - ITAPETINGA',
            'estado_id' => '29',
        ],
        [
            'id' => '00009',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - AMARGOSA',
            'estado_id' => '29',
        ],
        [
            'id' => '0001A',
            'nome' => 'SALVADOR',
            'estado_id' => '29',
        ],
        [
            'id' => '00010',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - JUAZEIRO',
            'estado_id' => '29',
        ],
        [
            'id' => '00011',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - BARREIRAS',
            'estado_id' => '29',
        ],
        [
            'id' => '00012',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - MACAUBAS',
            'estado_id' => '29',
        ],
        [
            'id' => '00013',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - CAETITE',
            'estado_id' => '29',
        ],
        [
            'id' => '00014',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - ITABERABA',
            'estado_id' => '29',
        ],
        [
            'id' => '00015',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - IPIRA',
            'estado_id' => '29',
        ],
        [
            'id' => '00016',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - JACOBINA',
            'estado_id' => '29',
        ],
        [
            'id' => '00017',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - RIBEIRA DO POMBAL',
            'estado_id' => '29',
        ],
        [
            'id' => '00018',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - ALAGOINHAS',
            'estado_id' => '29',
        ],
        [
            'id' => '00019',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - FEIRA DE SANTANA',
            'estado_id' => '29',
        ],
        [
            'id' => '00020',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - VITORIA DA CONQUISTA',
            'estado_id' => '29',
        ],
        [
            'id' => '00021',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SANTO ANTONIO DE JESUS',
            'estado_id' => '29',
        ],
        [
            'id' => '00022',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - JEQUIE',
            'estado_id' => '29',
        ],
        [
            'id' => '00023',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SANTA MARIA DA VITORIA',
            'estado_id' => '29',
        ],
        [
            'id' => '00024',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - PAULO AFONSO',
            'estado_id' => '29',
        ],
        [
            'id' => '00025',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SENHOR DO BONFIM',
            'estado_id' => '29',
        ],
        [
            'id' => '00026',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - SALVADOR',
            'estado_id' => '29',
        ],
        [
            'id' => '00027',
            'nome' => 'NUCLEO REGIONAL DE EDUCACAO - EUNAPOLIS',
            'estado_id' => '29',
        ],
        [
            'id' => '00030',
            'nome' => 'GUANAMBI',
            'estado_id' => '29',
        ],
        [
            'id' => '00031',
            'nome' => 'SANTO AMARO',
            'estado_id' => '29',
        ],
        [
            'id' => '0009A',
            'nome' => 'ILHEUS',
            'estado_id' => '29',
        ],
        [
            'id' => '0009B',
            'nome' => 'PIRITIBA',
            'estado_id' => '29',
        ],
        [
            'id' => '0009C',
            'nome' => 'BRUMADO',
            'estado_id' => '29',
        ],
        [
            'id' => '0009D',
            'nome' => 'IBOTIRAMA',
            'estado_id' => '29',
        ],
        [
            'id' => '00001',
            'nome' => 'SRE METROPOLITANA B',
            'estado_id' => '31',
        ],
        [
            'id' => '00002',
            'nome' => 'SRE METROPOLITANA A',
            'estado_id' => '31',
        ],
        [
            'id' => '00003',
            'nome' => 'SRE BARBACENA',
            'estado_id' => '31',
        ],
        [
            'id' => '00004',
            'nome' => 'SRE CARATINGA',
            'estado_id' => '31',
        ],
        [
            'id' => '00005',
            'nome' => 'SRE DIAMANTINA',
            'estado_id' => '31',
        ],
        [
            'id' => '00006',
            'nome' => 'SRE DIVINOPOLIS',
            'estado_id' => '31',
        ],
        [
            'id' => '00007',
            'nome' => 'SRE GOVERNADOR VALADARES',
            'estado_id' => '31',
        ],
        [
            'id' => '00008',
            'nome' => 'SRE ITAJUBA',
            'estado_id' => '31',
        ],
        [
            'id' => '00009',
            'nome' => 'SRE JANUARIA',
            'estado_id' => '31',
        ],
        [
            'id' => '00010',
            'nome' => 'SRE JUIZ DE FORA',
            'estado_id' => '31',
        ],
        [
            'id' => '00011',
            'nome' => 'SRE MANHUACU',
            'estado_id' => '31',
        ],
        [
            'id' => '00012',
            'nome' => 'SRE MONTES CLAROS',
            'estado_id' => '31',
        ],
        [
            'id' => '00013',
            'nome' => 'SRE MURIAE',
            'estado_id' => '31',
        ],
        [
            'id' => '00014',
            'nome' => 'SRE NOVA ERA',
            'estado_id' => '31',
        ],
        [
            'id' => '00015',
            'nome' => 'SRE OURO PRETO',
            'estado_id' => '31',
        ],
        [
            'id' => '00016',
            'nome' => 'SRE PARACATU',
            'estado_id' => '31',
        ],
        [
            'id' => '00017',
            'nome' => 'SRE PASSOS',
            'estado_id' => '31',
        ],
        [
            'id' => '00018',
            'nome' => 'SRE PATOS DE MINAS',
            'estado_id' => '31',
        ],
        [
            'id' => '00019',
            'nome' => 'SRE POCOS DE CALDAS',
            'estado_id' => '31',
        ],
        [
            'id' => '00020',
            'nome' => 'SRE PONTE NOVA',
            'estado_id' => '31',
        ],
        [
            'id' => '00021',
            'nome' => 'SRE SAO JOAO DEL REI',
            'estado_id' => '31',
        ],
        [
            'id' => '00022',
            'nome' => 'SRE SAO SEBASTIAO DO PARAISO',
            'estado_id' => '31',
        ],
        [
            'id' => '00023',
            'nome' => 'SRE SETE LAGOAS',
            'estado_id' => '31',
        ],
        [
            'id' => '00024',
            'nome' => 'SRE TEOFILO OTONI',
            'estado_id' => '31',
        ],
        [
            'id' => '00025',
            'nome' => 'SRE UBERABA',
            'estado_id' => '31',
        ],
        [
            'id' => '00026',
            'nome' => 'SRE UBERLANDIA',
            'estado_id' => '31',
        ],
        [
            'id' => '00027',
            'nome' => 'SRE VARGINHA',
            'estado_id' => '31',
        ],
        [
            'id' => '00028',
            'nome' => 'SRE UBA',
            'estado_id' => '31',
        ],
        [
            'id' => '00029',
            'nome' => 'SRE ALMENARA',
            'estado_id' => '31',
        ],
        [
            'id' => '00030',
            'nome' => 'SRE CEL FABRICIANO',
            'estado_id' => '31',
        ],
        [
            'id' => '00031',
            'nome' => 'SRE CONSELHEIRO LAFAIETE',
            'estado_id' => '31',
        ],
        [
            'id' => '00032',
            'nome' => 'SRE ITUIUTABA',
            'estado_id' => '31',
        ],
        [
            'id' => '00033',
            'nome' => 'SRE PATROCINIO',
            'estado_id' => '31',
        ],
        [
            'id' => '00034',
            'nome' => 'SRE MONTE CARMELO',
            'estado_id' => '31',
        ],
        [
            'id' => '00035',
            'nome' => 'SRE CAMPO BELO',
            'estado_id' => '31',
        ],
        [
            'id' => '00036',
            'nome' => 'SRE LEOPOLDINA',
            'estado_id' => '31',
        ],
        [
            'id' => '00037',
            'nome' => 'SRE POUSO ALEGRE',
            'estado_id' => '31',
        ],
        [
            'id' => '00038',
            'nome' => 'SRE CURVELO',
            'estado_id' => '31',
        ],
        [
            'id' => '00039',
            'nome' => 'SRE GUANHAES',
            'estado_id' => '31',
        ],
        [
            'id' => '00040',
            'nome' => 'SRE CARANGOLA',
            'estado_id' => '31',
        ],
        [
            'id' => '00041',
            'nome' => 'SRE METROPOLITANA C',
            'estado_id' => '31',
        ],
        [
            'id' => '00042',
            'nome' => 'SRE CAXAMBU',
            'estado_id' => '31',
        ],
        [
            'id' => '00043',
            'nome' => 'SRE ARACUAI',
            'estado_id' => '31',
        ],
        [
            'id' => '00044',
            'nome' => 'SRE JANAUBA',
            'estado_id' => '31',
        ],
        [
            'id' => '00045',
            'nome' => 'SRE PARA DE MINAS',
            'estado_id' => '31',
        ],
        [
            'id' => '00046',
            'nome' => 'SRE PIRAPORA',
            'estado_id' => '31',
        ],
        [
            'id' => '00047',
            'nome' => 'SRE UNAI',
            'estado_id' => '31',
        ],
        [
            'id' => '00001',
            'nome' => 'SRE CARAPINA',
            'estado_id' => '32',
        ],
        [
            'id' => '00002',
            'nome' => 'SRE VILA VELHA',
            'estado_id' => '32',
        ],
        [
            'id' => '00003',
            'nome' => 'SRE CARIACICA',
            'estado_id' => '32',
        ],
        [
            'id' => '00004',
            'nome' => 'SRE LINHARES',
            'estado_id' => '32',
        ],
        [
            'id' => '00005',
            'nome' => 'SRE SAO MATEUS',
            'estado_id' => '32',
        ],
        [
            'id' => '00006',
            'nome' => 'SRE BARRA DE SAO FRANCISCO',
            'estado_id' => '32',
        ],
        [
            'id' => '00007',
            'nome' => 'SRE NOVA VENECIA',
            'estado_id' => '32',
        ],
        [
            'id' => '00008',
            'nome' => 'SRE COLATINA',
            'estado_id' => '32',
        ],
        [
            'id' => '00009',
            'nome' => 'SRE CACHOEIRO DE ITAPEMIRIM',
            'estado_id' => '32',
        ],
        [
            'id' => '00010',
            'nome' => 'SRE COMENDADORA JUREMA MORETZ SOHN',
            'estado_id' => '32',
        ],
        [
            'id' => '00011',
            'nome' => 'SRE AFONSO CLAUDIO',
            'estado_id' => '32',
        ],
        [
            'id' => '00160',
            'nome' => 'CRE 01',
            'estado_id' => '33',
        ],
        [
            'id' => '00170',
            'nome' => 'CRE 02',
            'estado_id' => '33',
        ],
        [
            'id' => '00180',
            'nome' => 'CRE 03',
            'estado_id' => '33',
        ],
        [
            'id' => '00190',
            'nome' => 'CRE 04',
            'estado_id' => '33',
        ],
        [
            'id' => '00200',
            'nome' => 'CRE 05',
            'estado_id' => '33',
        ],
        [
            'id' => '00210',
            'nome' => 'CRE 06',
            'estado_id' => '33',
        ],
        [
            'id' => '00220',
            'nome' => 'CRE 07',
            'estado_id' => '33',
        ],
        [
            'id' => '00230',
            'nome' => 'CRE 08',
            'estado_id' => '33',
        ],
        [
            'id' => '00240',
            'nome' => 'CRE 09',
            'estado_id' => '33',
        ],
        [
            'id' => '00250',
            'nome' => 'CRE 10',
            'estado_id' => '33',
        ],
        [
            'id' => '0160P',
            'nome' => 'CRE 01 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0170P',
            'nome' => 'CRE 02 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0180P',
            'nome' => 'CRE 03 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0190P',
            'nome' => 'CRE 04 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0200P',
            'nome' => 'CRE 05 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0210P',
            'nome' => 'CRE 06 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0220P',
            'nome' => 'CRE 07 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0230P',
            'nome' => 'CRE 08 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0240P',
            'nome' => 'CRE 09 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '0250P',
            'nome' => 'CRE 10 REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '11001',
            'nome' => 'BAIXADAS LITORANEAS',
            'estado_id' => '33',
        ],
        [
            'id' => '11002',
            'nome' => 'CENTRO SUL',
            'estado_id' => '33',
        ],
        [
            'id' => '11003',
            'nome' => 'MEDIO PARAIBA',
            'estado_id' => '33',
        ],
        [
            'id' => '11004',
            'nome' => 'METROPOLITANA I',
            'estado_id' => '33',
        ],
        [
            'id' => '11005',
            'nome' => 'METROPOLITANA II',
            'estado_id' => '33',
        ],
        [
            'id' => '11006',
            'nome' => 'METROPOLITANA III',
            'estado_id' => '33',
        ],
        [
            'id' => '11007',
            'nome' => 'METROPOLITANA IV',
            'estado_id' => '33',
        ],
        [
            'id' => '11008',
            'nome' => 'METROPOLITANA V',
            'estado_id' => '33',
        ],
        [
            'id' => '11009',
            'nome' => 'METROPOLITANA VI',
            'estado_id' => '33',
        ],
        [
            'id' => '11010',
            'nome' => 'METROPOLITANA VII',
            'estado_id' => '33',
        ],
        [
            'id' => '11011',
            'nome' => 'NOROESTE FLUMINENSE',
            'estado_id' => '33',
        ],
        [
            'id' => '11012',
            'nome' => 'NORTE FLUMINENSE',
            'estado_id' => '33',
        ],
        [
            'id' => '11013',
            'nome' => 'SERRANA I',
            'estado_id' => '33',
        ],
        [
            'id' => '11014',
            'nome' => 'SERRANA II',
            'estado_id' => '33',
        ],
        [
            'id' => '11021',
            'nome' => 'CRE 11',
            'estado_id' => '33',
        ],
        [
            'id' => '1115T',
            'nome' => 'SECRETARIA DE ESTADO DE CIENCIAS E TECNOLOGIA FAETEC CETEP',
            'estado_id' => '33',
        ],
        [
            'id' => '1116X',
            'nome' => 'DIESP - DIRETORIA ESPECIAL DE UNIDADES ESCOLARES PRISIONAIS E SOCIOEDUCATIVAS',
            'estado_id' => '33',
        ],
        [
            'id' => '1117C',
            'nome' => 'SECRETARIA DE ESTADO E CULTURA',
            'estado_id' => '33',
        ],
        [
            'id' => '1118A',
            'nome' => 'SECRETARIA DE ESTADO DE ASSISTENCIA SOCIAL E DIREITOS HUMANOS',
            'estado_id' => '33',
        ],
        [
            'id' => '1120M',
            'nome' => 'SECRETARIA DE ESTADO DE SEGURANCA',
            'estado_id' => '33',
        ],
        [
            'id' => '1121P',
            'nome' => 'CRE 11 - REDE PARTICULAR',
            'estado_id' => '33',
        ],
        [
            'id' => '1122F',
            'nome' => 'FUNDACAO CECIERJ - EJA SEMIPRESENCIAL',
            'estado_id' => '33',
        ],
        [
            'id' => '11999',
            'nome' => 'SECRETARIA ESPECIAL - SME RJ',
            'estado_id' => '33',
        ],
        [
            'id' => '10101',
            'nome' => 'NORTE 1',
            'estado_id' => '35',
        ],
        [
            'id' => '10102',
            'nome' => 'CENTRO',
            'estado_id' => '35',
        ],
        [
            'id' => '10104',
            'nome' => 'NORTE 2',
            'estado_id' => '35',
        ],
        [
            'id' => '10205',
            'nome' => 'LESTE 5',
            'estado_id' => '35',
        ],
        [
            'id' => '10207',
            'nome' => 'LESTE 1',
            'estado_id' => '35',
        ],
        [
            'id' => '10208',
            'nome' => 'LESTE 4',
            'estado_id' => '35',
        ],
        [
            'id' => '10210',
            'nome' => 'LESTE 2',
            'estado_id' => '35',
        ],
        [
            'id' => '10211',
            'nome' => 'LESTE 3',
            'estado_id' => '35',
        ],
        [
            'id' => '10312',
            'nome' => 'CENTRO OESTE',
            'estado_id' => '35',
        ],
        [
            'id' => '10314',
            'nome' => 'SUL 2',
            'estado_id' => '35',
        ],
        [
            'id' => '10316',
            'nome' => 'CENTRO SUL',
            'estado_id' => '35',
        ],
        [
            'id' => '10317',
            'nome' => 'SUL 1',
            'estado_id' => '35',
        ],
        [
            'id' => '10318',
            'nome' => 'SUL 3',
            'estado_id' => '35',
        ],
        [
            'id' => '10401',
            'nome' => 'CAIEIRAS',
            'estado_id' => '35',
        ],
        [
            'id' => '10402',
            'nome' => 'GUARULHOS SUL',
            'estado_id' => '35',
        ],
        [
            'id' => '10403',
            'nome' => 'GUARULHOS NORTE',
            'estado_id' => '35',
        ],
        [
            'id' => '10501',
            'nome' => 'MOGI DAS CRUZES',
            'estado_id' => '35',
        ],
        [
            'id' => '10502',
            'nome' => 'SUZANO',
            'estado_id' => '35',
        ],
        [
            'id' => '10503',
            'nome' => 'ITAQUAQUECETUBA',
            'estado_id' => '35',
        ],
        [
            'id' => '10601',
            'nome' => 'DIADEMA',
            'estado_id' => '35',
        ],
        [
            'id' => '10602',
            'nome' => 'MAUA',
            'estado_id' => '35',
        ],
        [
            'id' => '10603',
            'nome' => 'SANTO ANDRE',
            'estado_id' => '35',
        ],
        [
            'id' => '10606',
            'nome' => 'SAO BERNARDO DO CAMPO',
            'estado_id' => '35',
        ],
        [
            'id' => '10701',
            'nome' => 'CARAPICUIBA',
            'estado_id' => '35',
        ],
        [
            'id' => '10702',
            'nome' => 'ITAPECERICA DA SERRA',
            'estado_id' => '35',
        ],
        [
            'id' => '10703',
            'nome' => 'ITAPEVI',
            'estado_id' => '35',
        ],
        [
            'id' => '10704',
            'nome' => 'OSASCO',
            'estado_id' => '35',
        ],
        [
            'id' => '10706',
            'nome' => 'TABOAO DA SERRA',
            'estado_id' => '35',
        ],
        [
            'id' => '11000',
            'nome' => 'PAULA SOUZA',
            'estado_id' => '35',
        ],
        [
            'id' => '15000',
            'nome' => 'SENAC',
            'estado_id' => '35',
        ],
        [
            'id' => '16000',
            'nome' => 'SENAI',
            'estado_id' => '35',
        ],
        [
            'id' => '17000',
            'nome' => 'SESI',
            'estado_id' => '35',
        ],
        [
            'id' => '19902',
            'nome' => 'DRE - BUTANTA',
            'estado_id' => '35',
        ],
        [
            'id' => '19903',
            'nome' => 'DRE - CAMPO LIMPO',
            'estado_id' => '35',
        ],
        [
            'id' => '19908',
            'nome' => 'DRE - FREGUESIA BRASILANDIA',
            'estado_id' => '35',
        ],
        [
            'id' => '19909',
            'nome' => 'DRE - GUAIANASES',
            'estado_id' => '35',
        ],
        [
            'id' => '19910',
            'nome' => 'DRE - IPIRANGA',
            'estado_id' => '35',
        ],
        [
            'id' => '19912',
            'nome' => 'DRE - ITAQUERA',
            'estado_id' => '35',
        ],
        [
            'id' => '19918',
            'nome' => 'DRE - PENHA',
            'estado_id' => '35',
        ],
        [
            'id' => '19921',
            'nome' => 'DRE - PIRITUBA',
            'estado_id' => '35',
        ],
        [
            'id' => '19923',
            'nome' => 'DRE - SANTO AMARO',
            'estado_id' => '35',
        ],
        [
            'id' => '19924',
            'nome' => 'DRE - SAO MATEUS',
            'estado_id' => '35',
        ],
        [
            'id' => '19925',
            'nome' => 'DRE - SAO MIGUEL',
            'estado_id' => '35',
        ],
        [
            'id' => '19927',
            'nome' => 'DRE - CAPELA DO SOCORRO',
            'estado_id' => '35',
        ],
        [
            'id' => '19928',
            'nome' => 'DRE - JACANA TREMEMBE',
            'estado_id' => '35',
        ],
        [
            'id' => '20102',
            'nome' => 'SANTOS',
            'estado_id' => '35',
        ],
        [
            'id' => '20103',
            'nome' => 'SAO VICENTE',
            'estado_id' => '35',
        ],
        [
            'id' => '20202',
            'nome' => 'GUARATINGUETA',
            'estado_id' => '35',
        ],
        [
            'id' => '20204',
            'nome' => 'PINDAMONHANGABA',
            'estado_id' => '35',
        ],
        [
            'id' => '20205',
            'nome' => 'SAO JOSE DOS CAMPOS',
            'estado_id' => '35',
        ],
        [
            'id' => '20206',
            'nome' => 'TAUBATE',
            'estado_id' => '35',
        ],
        [
            'id' => '20207',
            'nome' => 'JACAREI',
            'estado_id' => '35',
        ],
        [
            'id' => '20208',
            'nome' => 'CARAGUATATUBA',
            'estado_id' => '35',
        ],
        [
            'id' => '20301',
            'nome' => 'APIAI',
            'estado_id' => '35',
        ],
        [
            'id' => '20302',
            'nome' => 'AVARE',
            'estado_id' => '35',
        ],
        [
            'id' => '20303',
            'nome' => 'BOTUCATU',
            'estado_id' => '35',
        ],
        [
            'id' => '20304',
            'nome' => 'ITAPETININGA',
            'estado_id' => '35',
        ],
        [
            'id' => '20305',
            'nome' => 'ITAPEVA',
            'estado_id' => '35',
        ],
        [
            'id' => '20306',
            'nome' => 'ITU',
            'estado_id' => '35',
        ],
        [
            'id' => '20307',
            'nome' => 'SAO ROQUE',
            'estado_id' => '35',
        ],
        [
            'id' => '20308',
            'nome' => 'SOROCABA',
            'estado_id' => '35',
        ],
        [
            'id' => '20310',
            'nome' => 'VOTORANTIM',
            'estado_id' => '35',
        ],
        [
            'id' => '20311',
            'nome' => 'PIRAJU',
            'estado_id' => '35',
        ],
        [
            'id' => '20313',
            'nome' => 'ITARARE',
            'estado_id' => '35',
        ],
        [
            'id' => '20401',
            'nome' => 'AMERICANA',
            'estado_id' => '35',
        ],
        [
            'id' => '20403',
            'nome' => 'BRAGANCA PAULISTA',
            'estado_id' => '35',
        ],
        [
            'id' => '20404',
            'nome' => 'CAMPINAS OESTE',
            'estado_id' => '35',
        ],
        [
            'id' => '20407',
            'nome' => 'JUNDIAI',
            'estado_id' => '35',
        ],
        [
            'id' => '20408',
            'nome' => 'LIMEIRA',
            'estado_id' => '35',
        ],
        [
            'id' => '20409',
            'nome' => 'MOGI MIRIM',
            'estado_id' => '35',
        ],
        [
            'id' => '20410',
            'nome' => 'PIRACICABA',
            'estado_id' => '35',
        ],
        [
            'id' => '20411',
            'nome' => 'PIRASSUNUNGA',
            'estado_id' => '35',
        ],
        [
            'id' => '20413',
            'nome' => 'SAO JOAO DA BOA VISTA',
            'estado_id' => '35',
        ],
        [
            'id' => '20415',
            'nome' => 'SUMARE',
            'estado_id' => '35',
        ],
        [
            'id' => '20417',
            'nome' => 'CAMPINAS LESTE',
            'estado_id' => '35',
        ],
        [
            'id' => '20419',
            'nome' => 'CAPIVARI',
            'estado_id' => '35',
        ],
        [
            'id' => '20501',
            'nome' => 'ARARAQUARA',
            'estado_id' => '35',
        ],
        [
            'id' => '20502',
            'nome' => 'BARRETOS',
            'estado_id' => '35',
        ],
        [
            'id' => '20504',
            'nome' => 'FRANCA',
            'estado_id' => '35',
        ],
        [
            'id' => '20506',
            'nome' => 'JABOTICABAL',
            'estado_id' => '35',
        ],
        [
            'id' => '20507',
            'nome' => 'RIBEIRAO PRETO',
            'estado_id' => '35',
        ],
        [
            'id' => '20509',
            'nome' => 'SAO CARLOS',
            'estado_id' => '35',
        ],
        [
            'id' => '20510',
            'nome' => 'SAO JOAQUIM DA BARRA',
            'estado_id' => '35',
        ],
        [
            'id' => '20511',
            'nome' => 'TAQUARITINGA',
            'estado_id' => '35',
        ],
        [
            'id' => '20512',
            'nome' => 'SERTAOZINHO',
            'estado_id' => '35',
        ],
        [
            'id' => '20601',
            'nome' => 'BAURU',
            'estado_id' => '35',
        ],
        [
            'id' => '20602',
            'nome' => 'JAU',
            'estado_id' => '35',
        ],
        [
            'id' => '20604',
            'nome' => 'LINS',
            'estado_id' => '35',
        ],
        [
            'id' => '20701',
            'nome' => 'CATANDUVA',
            'estado_id' => '35',
        ],
        [
            'id' => '20702',
            'nome' => 'FERNANDOPOLIS',
            'estado_id' => '35',
        ],
        [
            'id' => '20703',
            'nome' => 'JALES',
            'estado_id' => '35',
        ],
        [
            'id' => '20704',
            'nome' => 'JOSE BONIFACIO',
            'estado_id' => '35',
        ],
        [
            'id' => '20710',
            'nome' => 'SAO JOSE DO RIO PRETO',
            'estado_id' => '35',
        ],
        [
            'id' => '20711',
            'nome' => 'VOTUPORANGA',
            'estado_id' => '35',
        ],
        [
            'id' => '20801',
            'nome' => 'ANDRADINA',
            'estado_id' => '35',
        ],
        [
            'id' => '20802',
            'nome' => 'ARACATUBA',
            'estado_id' => '35',
        ],
        [
            'id' => '20803',
            'nome' => 'BIRIGUI',
            'estado_id' => '35',
        ],
        [
            'id' => '20804',
            'nome' => 'PENAPOLIS',
            'estado_id' => '35',
        ],
        [
            'id' => '20901',
            'nome' => 'ADAMANTINA',
            'estado_id' => '35',
        ],
        [
            'id' => '20904',
            'nome' => 'PRESIDENTE PRUDENTE',
            'estado_id' => '35',
        ],
        [
            'id' => '20908',
            'nome' => 'SANTO ANASTACIO',
            'estado_id' => '35',
        ],
        [
            'id' => '20909',
            'nome' => 'MIRANTE DO PARANAPANEMA',
            'estado_id' => '35',
        ],
        [
            'id' => '21001',
            'nome' => 'ASSIS',
            'estado_id' => '35',
        ],
        [
            'id' => '21003',
            'nome' => 'MARILIA',
            'estado_id' => '35',
        ],
        [
            'id' => '21004',
            'nome' => 'OURINHOS',
            'estado_id' => '35',
        ],
        [
            'id' => '21006',
            'nome' => 'TUPA',
            'estado_id' => '35',
        ],
        [
            'id' => '21101',
            'nome' => 'MIRACATU',
            'estado_id' => '35',
        ],
        [
            'id' => '21102',
            'nome' => 'REGISTRO',
            'estado_id' => '35',
        ],
        [
            'id' => '00001',
            'nome' => 'APUCARANA',
            'estado_id' => '41',
        ],
        [
            'id' => '00002',
            'nome' => 'AREA METROPOLITANA NORTE',
            'estado_id' => '41',
        ],
        [
            'id' => '00003',
            'nome' => 'AREA METROPOLITANA SUL',
            'estado_id' => '41',
        ],
        [
            'id' => '00004',
            'nome' => 'ASSIS CHATEAUBRIAND',
            'estado_id' => '41',
        ],
        [
            'id' => '00005',
            'nome' => 'CAMPO MOURAO',
            'estado_id' => '41',
        ],
        [
            'id' => '00006',
            'nome' => 'CASCAVEL',
            'estado_id' => '41',
        ],
        [
            'id' => '00007',
            'nome' => 'CIANORTE',
            'estado_id' => '41',
        ],
        [
            'id' => '00008',
            'nome' => 'CORNELIO PROCOPIO',
            'estado_id' => '41',
        ],
        [
            'id' => '00009',
            'nome' => 'CURITIBA',
            'estado_id' => '41',
        ],
        [
            'id' => '00010',
            'nome' => 'DOIS VIZINHOS',
            'estado_id' => '41',
        ],
        [
            'id' => '00011',
            'nome' => 'FOZ DO IGUACU',
            'estado_id' => '41',
        ],
        [
            'id' => '00012',
            'nome' => 'FRANCISCO BELTRAO',
            'estado_id' => '41',
        ],
        [
            'id' => '00013',
            'nome' => 'GOIOERE',
            'estado_id' => '41',
        ],
        [
            'id' => '00014',
            'nome' => 'GUARAPUAVA',
            'estado_id' => '41',
        ],
        [
            'id' => '00015',
            'nome' => 'IRATI',
            'estado_id' => '41',
        ],
        [
            'id' => '00016',
            'nome' => 'IVAIPORA',
            'estado_id' => '41',
        ],
        [
            'id' => '00017',
            'nome' => 'JACAREZINHO',
            'estado_id' => '41',
        ],
        [
            'id' => '00018',
            'nome' => 'LONDRINA',
            'estado_id' => '41',
        ],
        [
            'id' => '00019',
            'nome' => 'MARINGA',
            'estado_id' => '41',
        ],
        [
            'id' => '00020',
            'nome' => 'LOANDA',
            'estado_id' => '41',
        ],
        [
            'id' => '00021',
            'nome' => 'PARANAGUA',
            'estado_id' => '41',
        ],
        [
            'id' => '00022',
            'nome' => 'PARANAVAI',
            'estado_id' => '41',
        ],
        [
            'id' => '00023',
            'nome' => 'PATO BRANCO',
            'estado_id' => '41',
        ],
        [
            'id' => '00024',
            'nome' => 'PITANGA',
            'estado_id' => '41',
        ],
        [
            'id' => '00025',
            'nome' => 'PONTA GROSSA',
            'estado_id' => '41',
        ],
        [
            'id' => '00026',
            'nome' => 'TELEMACO BORBA',
            'estado_id' => '41',
        ],
        [
            'id' => '00027',
            'nome' => 'TOLEDO',
            'estado_id' => '41',
        ],
        [
            'id' => '00028',
            'nome' => 'UMUARAMA',
            'estado_id' => '41',
        ],
        [
            'id' => '00029',
            'nome' => 'UNIAO DA VITORIA',
            'estado_id' => '41',
        ],
        [
            'id' => '00030',
            'nome' => 'WENCESLAU BRAZ',
            'estado_id' => '41',
        ],
        [
            'id' => '00031',
            'nome' => 'LARANJEIRAS DO SUL',
            'estado_id' => '41',
        ],
        [
            'id' => '00032',
            'nome' => 'IBAITI',
            'estado_id' => '41',
        ],
        [
            'id' => '00000',
            'nome' => 'SECRETARIA DE ESTADO DA EDUCACAO',
            'estado_id' => '42',
        ],
        [
            'id' => '00001',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE SAO MIGUEL DO OESTE',
            'estado_id' => '42',
        ],
        [
            'id' => '00002',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE MARAVILHA',
            'estado_id' => '42',
        ],
        [
            'id' => '00003',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE SAO LOURENCO DO OESTE',
            'estado_id' => '42',
        ],
        [
            'id' => '00004',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE CHAPECO',
            'estado_id' => '42',
        ],
        [
            'id' => '00005',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE XANXERE',
            'estado_id' => '42',
        ],
        [
            'id' => '00006',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE CONCORDIA',
            'estado_id' => '42',
        ],
        [
            'id' => '00007',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE JOACABA',
            'estado_id' => '42',
        ],
        [
            'id' => '00008',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE CAMPOS NOVOS',
            'estado_id' => '42',
        ],
        [
            'id' => '00009',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE VIDEIRA',
            'estado_id' => '42',
        ],
        [
            'id' => '00010',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE CACADOR',
            'estado_id' => '42',
        ],
        [
            'id' => '00011',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE CURITIBANOS',
            'estado_id' => '42',
        ],
        [
            'id' => '00012',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE RIO DO SUL',
            'estado_id' => '42',
        ],
        [
            'id' => '00013',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE ITUPORANGA',
            'estado_id' => '42',
        ],
        [
            'id' => '00014',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE IBIRAMA',
            'estado_id' => '42',
        ],
        [
            'id' => '00015',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE BLUMENAU',
            'estado_id' => '42',
        ],
        [
            'id' => '00016',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE BRUSQUE',
            'estado_id' => '42',
        ],
        [
            'id' => '00017',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE ITAJAI',
            'estado_id' => '42',
        ],
        [
            'id' => '00018',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE LAGUNA',
            'estado_id' => '42',
        ],
        [
            'id' => '00019',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE TUBARAO',
            'estado_id' => '42',
        ],
        [
            'id' => '00020',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE CRICIUMA',
            'estado_id' => '42',
        ],
        [
            'id' => '00021',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE ARARANGUA',
            'estado_id' => '42',
        ],
        [
            'id' => '00022',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE JOINVILLE',
            'estado_id' => '42',
        ],
        [
            'id' => '00023',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE JARAGUA DO SUL',
            'estado_id' => '42',
        ],
        [
            'id' => '00024',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE SAO BENTO DO SUL',
            'estado_id' => '42',
        ],
        [
            'id' => '00025',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE CANOINHAS',
            'estado_id' => '42',
        ],
        [
            'id' => '00026',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE LAGES',
            'estado_id' => '42',
        ],
        [
            'id' => '00027',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE SAO JOAQUIM',
            'estado_id' => '42',
        ],
        [
            'id' => '00028',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE PALMITOS',
            'estado_id' => '42',
        ],
        [
            'id' => '00029',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE DIONISIO CERQUEIRA',
            'estado_id' => '42',
        ],
        [
            'id' => '00030',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE ITAPIRANGA',
            'estado_id' => '42',
        ],
        [
            'id' => '00032',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE SEARA',
            'estado_id' => '42',
        ],
        [
            'id' => '00033',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE TAIO',
            'estado_id' => '42',
        ],
        [
            'id' => '00034',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE TIMBO',
            'estado_id' => '42',
        ],
        [
            'id' => '00035',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE BRACO DO NORTE',
            'estado_id' => '42',
        ],
        [
            'id' => '00036',
            'nome' => 'SUPERVISAO REGIONAL DE EDUCACAO DE MAFRA',
            'estado_id' => '42',
        ],
        [
            'id' => '10000',
            'nome' => 'COORDENADORIA REGIONAL DE EDUCACAO DE FLORIANOPOLIS',
            'estado_id' => '42',
        ],
        [
            'id' => '00001',
            'nome' => 'PORTO ALEGRE',
            'estado_id' => '43',
        ],
        [
            'id' => '00002',
            'nome' => 'SAO LEOPOLDO',
            'estado_id' => '43',
        ],
        [
            'id' => '00003',
            'nome' => 'ESTRELA',
            'estado_id' => '43',
        ],
        [
            'id' => '00004',
            'nome' => 'CAXIAS DO SUL',
            'estado_id' => '43',
        ],
        [
            'id' => '00005',
            'nome' => 'PELOTAS',
            'estado_id' => '43',
        ],
        [
            'id' => '00006',
            'nome' => 'SANTA CRUZ DO SUL',
            'estado_id' => '43',
        ],
        [
            'id' => '00007',
            'nome' => 'PASSO FUNDO',
            'estado_id' => '43',
        ],
        [
            'id' => '00008',
            'nome' => 'SANTA MARIA',
            'estado_id' => '43',
        ],
        [
            'id' => '00009',
            'nome' => 'CRUZ ALTA',
            'estado_id' => '43',
        ],
        [
            'id' => '00010',
            'nome' => 'URUGUAIANA',
            'estado_id' => '43',
        ],
        [
            'id' => '00011',
            'nome' => 'OSORIO',
            'estado_id' => '43',
        ],
        [
            'id' => '00012',
            'nome' => 'GUAIBA',
            'estado_id' => '43',
        ],
        [
            'id' => '00013',
            'nome' => 'BAGE',
            'estado_id' => '43',
        ],
        [
            'id' => '00014',
            'nome' => 'SANTO ANGELO',
            'estado_id' => '43',
        ],
        [
            'id' => '00015',
            'nome' => 'ERECHIM',
            'estado_id' => '43',
        ],
        [
            'id' => '00016',
            'nome' => 'BENTO GONCALVES',
            'estado_id' => '43',
        ],
        [
            'id' => '00017',
            'nome' => 'SANTA ROSA',
            'estado_id' => '43',
        ],
        [
            'id' => '00018',
            'nome' => 'RIO GRANDE',
            'estado_id' => '43',
        ],
        [
            'id' => '00019',
            'nome' => 'SANTANA DO LIVRAMENTO',
            'estado_id' => '43',
        ],
        [
            'id' => '00020',
            'nome' => 'PALMEIRA DAS MISSOES',
            'estado_id' => '43',
        ],
        [
            'id' => '00021',
            'nome' => 'TRES PASSOS',
            'estado_id' => '43',
        ],
        [
            'id' => '00023',
            'nome' => 'VACARIA',
            'estado_id' => '43',
        ],
        [
            'id' => '00024',
            'nome' => 'CACHOEIRA DO SUL',
            'estado_id' => '43',
        ],
        [
            'id' => '00025',
            'nome' => 'SOLEDADE',
            'estado_id' => '43',
        ],
        [
            'id' => '00027',
            'nome' => 'CANOAS',
            'estado_id' => '43',
        ],
        [
            'id' => '00028',
            'nome' => 'GRAVATAI',
            'estado_id' => '43',
        ],
        [
            'id' => '00032',
            'nome' => 'SAO LUIZ GONZAGA',
            'estado_id' => '43',
        ],
        [
            'id' => '00035',
            'nome' => 'SAO BORJA',
            'estado_id' => '43',
        ],
        [
            'id' => '00036',
            'nome' => 'IJUI',
            'estado_id' => '43',
        ],
        [
            'id' => '00039',
            'nome' => 'CARAZINHO',
            'estado_id' => '43',
        ],
        [
            'id' => '51001',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ACORIZAL',
            'estado_id' => '51',
        ],
        [
            'id' => '51002',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ALTA FLORESTA',
            'estado_id' => '51',
        ],
        [
            'id' => '51003',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ALTO ARAGUAIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51005',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ALTO PARAGUAI',
            'estado_id' => '51',
        ],
        [
            'id' => '51006',
            'nome' => 'ASSESSORIA PEDAGOGICA DE APIACAS',
            'estado_id' => '51',
        ],
        [
            'id' => '51007',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ARAPUTANGA',
            'estado_id' => '51',
        ],
        [
            'id' => '51008',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ARENAPOLIS',
            'estado_id' => '51',
        ],
        [
            'id' => '51009',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ARIPUANA',
            'estado_id' => '51',
        ],
        [
            'id' => '51010',
            'nome' => 'ASSESSORIA PEDAGOGICA DE BARAO DE MELGACO',
            'estado_id' => '51',
        ],
        [
            'id' => '51011',
            'nome' => 'ASSESSORIA PEDAGOGICA DE BARRA DO GARCAS',
            'estado_id' => '51',
        ],
        [
            'id' => '51012',
            'nome' => 'ASSESSORIA PEDAGOGICA DE BARRA DOS BUGRES',
            'estado_id' => '51',
        ],
        [
            'id' => '51013',
            'nome' => 'ASSESSORIA PEDAGOGICA DE BRASNORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51014',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CACERES',
            'estado_id' => '51',
        ],
        [
            'id' => '51015',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CAMPINAPOLIS',
            'estado_id' => '51',
        ],
        [
            'id' => '51016',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CAMPO NOVO DO PARECIS',
            'estado_id' => '51',
        ],
        [
            'id' => '51017',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CAMPO VERDE',
            'estado_id' => '51',
        ],
        [
            'id' => '51018',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CANARANA',
            'estado_id' => '51',
        ],
        [
            'id' => '51019',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CARLINDA',
            'estado_id' => '51',
        ],
        [
            'id' => '51020',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CASTANHEIRA',
            'estado_id' => '51',
        ],
        [
            'id' => '51021',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CHAPADA DOS GUIMARAES',
            'estado_id' => '51',
        ],
        [
            'id' => '51022',
            'nome' => 'ASSESSORIA PEDAGOGICA DE COLIDER',
            'estado_id' => '51',
        ],
        [
            'id' => '51023',
            'nome' => 'ASSESSORIA PEDAGOGICA DE COLNIZA',
            'estado_id' => '51',
        ],
        [
            'id' => '51024',
            'nome' => 'ASSESSORIA PEDAGOGICA DE COMODORO',
            'estado_id' => '51',
        ],
        [
            'id' => '51025',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CONFRESA',
            'estado_id' => '51',
        ],
        [
            'id' => '51026',
            'nome' => 'ASSESSORIA PEDAGOGICA DE COTRIGUACU',
            'estado_id' => '51',
        ],
        [
            'id' => '51027',
            'nome' => 'ASSESSORIA PEDAGOGICA DE CUIABA',
            'estado_id' => '51',
        ],
        [
            'id' => '51028',
            'nome' => 'ASSESSORIA PEDAGOGICA DE DENISE',
            'estado_id' => '51',
        ],
        [
            'id' => '51029',
            'nome' => 'ASSESSORIA PEDAGOGICA DE DIAMANTINO',
            'estado_id' => '51',
        ],
        [
            'id' => '51030',
            'nome' => 'ASSESSORIA PEDAGOGICA DE DOM AQUINO',
            'estado_id' => '51',
        ],
        [
            'id' => '51031',
            'nome' => 'ASSESSORIA PEDAGOGICA DE FIGUEIROPOLIS',
            'estado_id' => '51',
        ],
        [
            'id' => '51032',
            'nome' => 'ASSESSORIA PEDAGOGICA DE GAUCHA DO NORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51033',
            'nome' => 'ASSESSORIA PEDAGOGICA DE GENERAL CARNEIRO',
            'estado_id' => '51',
        ],
        [
            'id' => '51034',
            'nome' => 'ASSESSORIA PEDAGOGICA DE GLORIA DO OESTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51035',
            'nome' => 'ASSESSORIA PEDAGOGICA DE GUIRATINGA',
            'estado_id' => '51',
        ],
        [
            'id' => '51036',
            'nome' => 'ASSESSORIA PEDAGOGICA DE GUARANTA DO NORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51037',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ITIQUIRA',
            'estado_id' => '51',
        ],
        [
            'id' => '51038',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JACIARA',
            'estado_id' => '51',
        ],
        [
            'id' => '51039',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JANGADA',
            'estado_id' => '51',
        ],
        [
            'id' => '51040',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JAURU',
            'estado_id' => '51',
        ],
        [
            'id' => '51041',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JUARA',
            'estado_id' => '51',
        ],
        [
            'id' => '51042',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JUINA',
            'estado_id' => '51',
        ],
        [
            'id' => '51043',
            'nome' => 'ASSESSORIA PEDAGOGICA DE JUSCIMEIRA',
            'estado_id' => '51',
        ],
        [
            'id' => '51044',
            'nome' => 'ASSESSORIA PEDAGOGICA DE LUCAS DO RIO VERDE',
            'estado_id' => '51',
        ],
        [
            'id' => '51045',
            'nome' => 'ASSESSORIA PEDAGOGICA DE LUCIARA',
            'estado_id' => '51',
        ],
        [
            'id' => '51046',
            'nome' => 'ASSESSORIA PEDAGOGICA DE MARCELANDIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51047',
            'nome' => 'ASSESSORIA PEDAGOGICA DE MATUPA',
            'estado_id' => '51',
        ],
        [
            'id' => '51048',
            'nome' => 'ASSESSORIA PEDAGOGICA DE MIRASSOL DO OESTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51049',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOBRES',
            'estado_id' => '51',
        ],
        [
            'id' => '51050',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NORTELANDIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51051',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOSSA SENHORA DO LIVRAMENTO',
            'estado_id' => '51',
        ],
        [
            'id' => '51052',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA BANDEIRANTES',
            'estado_id' => '51',
        ],
        [
            'id' => '51053',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA BRASILANDIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51054',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA CANA DO NORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51055',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA MONTE VERDE',
            'estado_id' => '51',
        ],
        [
            'id' => '51056',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA MUTUM',
            'estado_id' => '51',
        ],
        [
            'id' => '51057',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA OLIMPIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51058',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA XAVANTINA',
            'estado_id' => '51',
        ],
        [
            'id' => '51059',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVO SAO JOAQUIM',
            'estado_id' => '51',
        ],
        [
            'id' => '51060',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PARANAITA',
            'estado_id' => '51',
        ],
        [
            'id' => '51061',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PARANATINGA',
            'estado_id' => '51',
        ],
        [
            'id' => '51062',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PEDRA PRETA',
            'estado_id' => '51',
        ],
        [
            'id' => '51063',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PEIXOTO DE AZEVEDO',
            'estado_id' => '51',
        ],
        [
            'id' => '51064',
            'nome' => 'ASSESSORIA PEDAGOGICA DE POCONE',
            'estado_id' => '51',
        ],
        [
            'id' => '51065',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PONTES E LACERDA',
            'estado_id' => '51',
        ],
        [
            'id' => '51066',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PORTO ALEGRE DO NORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51067',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PORTO DOS GAUCHOS',
            'estado_id' => '51',
        ],
        [
            'id' => '51068',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PORTO ESPIRIDIAO',
            'estado_id' => '51',
        ],
        [
            'id' => '51069',
            'nome' => 'ASSESSORIA PEDAGOGICA DE POXOREU',
            'estado_id' => '51',
        ],
        [
            'id' => '51070',
            'nome' => 'ASSESSORIA PEDAGOGICA DE PRIMAVERA DO LESTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51071',
            'nome' => 'ASSESSORIA PEDAGOGICA DE QUERENCIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51072',
            'nome' => 'ASSESSORIA PEDAGOGICA DE RIO BRANCO',
            'estado_id' => '51',
        ],
        [
            'id' => '51073',
            'nome' => 'ASSESSORIA PEDAGOGICA DE RONDONOPOLIS',
            'estado_id' => '51',
        ],
        [
            'id' => '51074',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ROSARIO OESTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51075',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SANTA TEREZINHA',
            'estado_id' => '51',
        ],
        [
            'id' => '51076',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SALTO DO CEU',
            'estado_id' => '51',
        ],
        [
            'id' => '51078',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SANTO ANTONIO DE LEVERGER',
            'estado_id' => '51',
        ],
        [
            'id' => '51079',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAO FELIX DO ARAGUAIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51080',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAO JOSE DO POVO',
            'estado_id' => '51',
        ],
        [
            'id' => '51081',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAO JOSE DO RIO CLARO',
            'estado_id' => '51',
        ],
        [
            'id' => '51082',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAO JOSE DOS QUATRO MARCOS',
            'estado_id' => '51',
        ],
        [
            'id' => '51083',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SINOP',
            'estado_id' => '51',
        ],
        [
            'id' => '51084',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SORRISO',
            'estado_id' => '51',
        ],
        [
            'id' => '51085',
            'nome' => 'ASSESSORIA PEDAGOGICA DE TABAPORA',
            'estado_id' => '51',
        ],
        [
            'id' => '51086',
            'nome' => 'ASSESSORIA PEDAGOGICA DE TANGARA DA SERRA',
            'estado_id' => '51',
        ],
        [
            'id' => '51087',
            'nome' => 'ASSESSORIA PEDAGOGICA DE TERRA NOVA DO NORTE',
            'estado_id' => '51',
        ],
        [
            'id' => '51088',
            'nome' => 'ASSESSORIA PEDAGOGICA DE TESOURO',
            'estado_id' => '51',
        ],
        [
            'id' => '51089',
            'nome' => 'ASSESSORIA PEDAGOGICA DE TORIXOREU',
            'estado_id' => '51',
        ],
        [
            'id' => '51090',
            'nome' => 'ASSESSORIA PEDAGOGICA DE VARZEA GRANDE',
            'estado_id' => '51',
        ],
        [
            'id' => '51091',
            'nome' => 'ASSESSORIA PEDAGOGICA DE VILA RICA',
            'estado_id' => '51',
        ],
        [
            'id' => '51092',
            'nome' => 'ASSESSORIA PEDAGOGICA DE AGUA BOA',
            'estado_id' => '51',
        ],
        [
            'id' => '51093',
            'nome' => 'ASSESSORIA PEDAGOGICA DE BOM JESUS DO ARAGUAIA',
            'estado_id' => '51',
        ],
        [
            'id' => '51094',
            'nome' => 'ASSESSORIA PEDAGOGICA DE RONDOLANDIA-MT',
            'estado_id' => '51',
        ],
        [
            'id' => '51095',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAPEZAL',
            'estado_id' => '51',
        ],
        [
            'id' => '51096',
            'nome' => 'ASSESSORIA PEDAGOGICA DE SAO JOSE DO XINGU',
            'estado_id' => '51',
        ],
        [
            'id' => '51097',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVO MUNDO',
            'estado_id' => '51',
        ],
        [
            'id' => '51098',
            'nome' => 'ASSESSORIA PEDAGOGICA DE NOVA MARINGA',
            'estado_id' => '51',
        ],
        [
            'id' => '51100',
            'nome' => 'ASSESSORIA PEDAGOGICA DE ITANHANGA-MT',
            'estado_id' => '51',
        ],
        [
            'id' => '00002',
            'nome' => 'SUB METROPOLITANA DE EDUCACAO',
            'estado_id' => '52',
        ],
        [
            'id' => '00003',
            'nome' => 'SUB REG DE EDUCACAO DE ANAPOLIS',
            'estado_id' => '52',
        ],
        [
            'id' => '00004',
            'nome' => 'SUB REG DE EDUCACAO DE APARECIDA DE GOIANIA',
            'estado_id' => '52',
        ],
        [
            'id' => '00005',
            'nome' => 'SUB REG DE EDUCACAO DE CAMPOS BELOS',
            'estado_id' => '52',
        ],
        [
            'id' => '00006',
            'nome' => 'SUB REG DE EDUCACAO DE CATALAO',
            'estado_id' => '52',
        ],
        [
            'id' => '00007',
            'nome' => 'SUB REG DE EDUCACAO DE CERES',
            'estado_id' => '52',
        ],
        [
            'id' => '00008',
            'nome' => 'SUB REG DE EDUCACAO DE FORMOSA',
            'estado_id' => '52',
        ],
        [
            'id' => '00009',
            'nome' => 'SUB REG DE EDUCACAO DE GOIANESIA',
            'estado_id' => '52',
        ],
        [
            'id' => '00010',
            'nome' => 'SUB REG DE EDUCACAO DE GOIAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00011',
            'nome' => 'SUB REG DE EDUCACAO DE GOIATUBA',
            'estado_id' => '52',
        ],
        [
            'id' => '00012',
            'nome' => 'SUB REG DE EDUCACAO DE INHUMAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00013',
            'nome' => 'SUB REG DE EDUCACAO DE IPORA',
            'estado_id' => '52',
        ],
        [
            'id' => '00014',
            'nome' => 'SUB REG DE EDUCACAO DE ITABERAI',
            'estado_id' => '52',
        ],
        [
            'id' => '00015',
            'nome' => 'SUB REG DE EDUCACAO DE ITAPURANGA',
            'estado_id' => '52',
        ],
        [
            'id' => '00016',
            'nome' => 'SUB REG DE EDUCACAO DE ITUMBIARA',
            'estado_id' => '52',
        ],
        [
            'id' => '00017',
            'nome' => 'SUB REG DE EDUCACAO DE JATAI',
            'estado_id' => '52',
        ],
        [
            'id' => '00018',
            'nome' => 'SUB REG DE EDUCACAO DE JUSSARA',
            'estado_id' => '52',
        ],
        [
            'id' => '00019',
            'nome' => 'SUB REG DE EDUCACAO DE LUZIANIA',
            'estado_id' => '52',
        ],
        [
            'id' => '00020',
            'nome' => 'SUB REG DE EDUCACAO DE MINACU',
            'estado_id' => '52',
        ],
        [
            'id' => '00021',
            'nome' => 'SUB REG DE EDUCACAO DE MINEIROS',
            'estado_id' => '52',
        ],
        [
            'id' => '00022',
            'nome' => 'SUB REG DE EDUCACAO DE MORRINHOS',
            'estado_id' => '52',
        ],
        [
            'id' => '00023',
            'nome' => 'SUB REG DE EDUCACAO DE PALMEIRAS DE GOIAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00024',
            'nome' => 'SUB REG DE EDUCACAO DE PIRACANJUBA',
            'estado_id' => '52',
        ],
        [
            'id' => '00025',
            'nome' => 'SUB REG DE EDUCACAO DE PIRANHAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00026',
            'nome' => 'SUB REG DE EDUCACAO DE PIRES DO RIO',
            'estado_id' => '52',
        ],
        [
            'id' => '00027',
            'nome' => 'SUB REG DE EDUCACAO DE PORANGATU',
            'estado_id' => '52',
        ],
        [
            'id' => '00028',
            'nome' => 'SUB REG DE EDUCACAO DE POSSE',
            'estado_id' => '52',
        ],
        [
            'id' => '00029',
            'nome' => 'SUB REG DE EDUCACAO DE QUIRINOPOLIS',
            'estado_id' => '52',
        ],
        [
            'id' => '00030',
            'nome' => 'SUB REG DE EDUCACAO DE RIO VERDE',
            'estado_id' => '52',
        ],
        [
            'id' => '00031',
            'nome' => 'SUB REG DE EDUCACAO DE RUBIATABA',
            'estado_id' => '52',
        ],
        [
            'id' => '00032',
            'nome' => 'SUB REG DE EDUCACAO DE SANTA HELENA DE GOIAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00033',
            'nome' => 'SUB REG DE EDUCACAO DE SAO LUIS DE MONTES BELOS',
            'estado_id' => '52',
        ],
        [
            'id' => '00034',
            'nome' => 'SUB REG DE EDUCACAO DE SAO MIGUEL DO ARAGUAIA',
            'estado_id' => '52',
        ],
        [
            'id' => '00035',
            'nome' => 'SUB REG DE EDUCACAO DE SILVANIA',
            'estado_id' => '52',
        ],
        [
            'id' => '00036',
            'nome' => 'SUB REG DE EDUCACAO DE TRINDADE',
            'estado_id' => '52',
        ],
        [
            'id' => '00037',
            'nome' => 'SUB REG DE EDUCACAO DE URUACU',
            'estado_id' => '52',
        ],
        [
            'id' => '00038',
            'nome' => 'SUB REG DE EDUCACAO DE ITAPACI',
            'estado_id' => '52',
        ],
        [
            'id' => '00039',
            'nome' => 'SUB REG DE EDUCACAO DE PLANALTINA',
            'estado_id' => '52',
        ],
        [
            'id' => '00040',
            'nome' => 'SUB REG DE EDUCACAO DE NOVO GAMA',
            'estado_id' => '52',
        ],
        [
            'id' => '00041',
            'nome' => 'SUB REG DE EDUCACAO DE AGUAS LINDAS DE GOIAS',
            'estado_id' => '52',
        ],
        [
            'id' => '00001',
            'nome' => 'PLANO PILOTO',
            'estado_id' => '53',
        ],
        [
            'id' => '00002',
            'nome' => 'GAMA',
            'estado_id' => '53',
        ],
        [
            'id' => '00003',
            'nome' => 'TAGUATINGA',
            'estado_id' => '53',
        ],
        [
            'id' => '00004',
            'nome' => 'BRAZLANDIA',
            'estado_id' => '53',
        ],
        [
            'id' => '00005',
            'nome' => 'SOBRADINHO',
            'estado_id' => '53',
        ],
        [
            'id' => '00006',
            'nome' => 'PLANALTINA',
            'estado_id' => '53',
        ],
        [
            'id' => '00007',
            'nome' => 'NUCLEO BANDEIRANTE',
            'estado_id' => '53',
        ],
        [
            'id' => '00008',
            'nome' => 'CEILANDIA',
            'estado_id' => '53',
        ],
        [
            'id' => '00009',
            'nome' => 'GUARA',
            'estado_id' => '53',
        ],
        [
            'id' => '00010',
            'nome' => 'SAMAMBAIA',
            'estado_id' => '53',
        ],
        [
            'id' => '00013',
            'nome' => 'VINCULADA A OUTRA SECRETARIA',
            'estado_id' => '53',
        ],
        [
            'id' => '00015',
            'nome' => 'SANTA MARIA',
            'estado_id' => '53',
        ],
        [
            'id' => '00017',
            'nome' => 'PARANOA',
            'estado_id' => '53',
        ],
        [
            'id' => '00018',
            'nome' => 'SAO SEBASTIAO',
            'estado_id' => '53',
        ],
        [
            'id' => '00019',
            'nome' => 'RECANTO DAS EMAS',
            'estado_id' => '53',
        ],
        [
            'id' => '00098',
            'nome' => 'ESCOLA PUBLICA ESTADUAL SEM VINCULO',
            'estado_id' => '53',
        ],
        [
            'id' => '00099',
            'nome' => 'ESCOLA PARTICULAR',
            'estado_id' => '53',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgaoRegional::insertOrIgnore($this->orgaos);
    }
}
