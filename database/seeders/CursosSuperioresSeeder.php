<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FormacaoSuperior\CursoSuperior;

class CursosSuperioresSeeder extends Seeder
{
    private array $cursos = [
        [
            'id' => '0111C012',
            'area_detalhada_id' => '0111',
            'nome' => 'Ciência da educação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0111C014',
            'area_detalhada_id' => '0111',
            'nome' => 'Ciência da educação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0111P013',
            'area_detalhada_id' => '0111',
            'nome' => 'Processos escolares - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0111P022',
            'area_detalhada_id' => '0111',
            'nome' => 'Psicopedagogia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0111P024',
            'area_detalhada_id' => '0111',
            'nome' => 'Psicopedagogia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0112E011',
            'area_detalhada_id' => '0112',
            'nome' => 'Educação infantil formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113E011',
            'area_detalhada_id' => '0113',
            'nome' => 'Educação do campo formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113E021',
            'area_detalhada_id' => '0113',
            'nome' => 'Educação especial formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113E031',
            'area_detalhada_id' => '0113',
            'nome' => 'Educação indígena formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113F011',
            'area_detalhada_id' => '0113',
            'nome' => 'Formação pedagógica de professor para a educação básica - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113F014',
            'area_detalhada_id' => '0113',
            'nome' => 'Formação pedagógica de professor para a educação básica - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0113P011',
            'area_detalhada_id' => '0113',
            'nome' => 'Pedagogia - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0113P012',
            'area_detalhada_id' => '0113',
            'nome' => 'Pedagogia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0113P014',
            'area_detalhada_id' => '0113',
            'nome' => 'Pedagogia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0114A011',
            'area_detalhada_id' => '0114',
            'nome' => 'Artes formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114A014',
            'area_detalhada_id' => '0114',
            'nome' => 'Artes formação de professor - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0114A021',
            'area_detalhada_id' => '0114',
            'nome' => 'Artes visuais formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114B011',
            'area_detalhada_id' => '0114',
            'nome' => 'Biologia formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114C011',
            'area_detalhada_id' => '0114',
            'nome' => 'Ciências agrárias formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114C021',
            'area_detalhada_id' => '0114',
            'nome' => 'Ciências naturais formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114C031',
            'area_detalhada_id' => '0114',
            'nome' => 'Ciências sociais formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114C041',
            'area_detalhada_id' => '0114',
            'nome' => 'Cinema e audiovisual formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114C051',
            'area_detalhada_id' => '0114',
            'nome' => 'Computação formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114D011',
            'area_detalhada_id' => '0114',
            'nome' => 'Dança formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E011',
            'area_detalhada_id' => '0114',
            'nome' => 'Economia doméstica formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E021',
            'area_detalhada_id' => '0114',
            'nome' => 'Educação do campo em áreas de conhecimento da educação básica formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E031',
            'area_detalhada_id' => '0114',
            'nome' => 'Educação física formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E041',
            'area_detalhada_id' => '0114',
            'nome' => 'Educação indígena em áreas de conhecimento da educação básica formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E051',
            'area_detalhada_id' => '0114',
            'nome' => 'Enfermagem formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E061',
            'area_detalhada_id' => '0114',
            'nome' => 'Ensino profissionalizante em área específica formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E071',
            'area_detalhada_id' => '0114',
            'nome' => 'Ensino religioso formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114E081',
            'area_detalhada_id' => '0114',
            'nome' => 'Estatística formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114F011',
            'area_detalhada_id' => '0114',
            'nome' => 'Filosofia formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114F021',
            'area_detalhada_id' => '0114',
            'nome' => 'Física formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114G011',
            'area_detalhada_id' => '0114',
            'nome' => 'Geografia formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114H011',
            'area_detalhada_id' => '0114',
            'nome' => 'História formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114M011',
            'area_detalhada_id' => '0114',
            'nome' => 'Matemática formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114M021',
            'area_detalhada_id' => '0114',
            'nome' => 'Música formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114P011',
            'area_detalhada_id' => '0114',
            'nome' => 'Psicologia formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114Q011',
            'area_detalhada_id' => '0114',
            'nome' => 'Química formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0114T011',
            'area_detalhada_id' => '0114',
            'nome' => 'Teatro formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L011',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras alemão formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L021',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras espanhol formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L031',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras francês formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L041',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras inglês formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L051',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras italiano formação de professor  - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L061',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras japonês formação de professor  - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L071',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras língua brasileira de sinais formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L081',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras línguas estrangeiras clássicas formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L091',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras linguística formação de professor  - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L101',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras outras línguas estrangeiras modernas formação de professor  - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L111',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português alemão formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L121',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português espanhol formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L131',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L141',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português francês formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L151',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português inglês formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L161',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português italiano formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L171',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português japonês formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L181',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português língua brasileira de sinais formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L191',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português línguas estrangeiras clássicas formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L201',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras português outras línguas estrangeiras modernas formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0115L211',
            'area_detalhada_id' => '0115',
            'nome' => 'Letras tradutor e intérprete formação de professor - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0188P011',
            'area_detalhada_id' => '0188',
            'nome' => 'Programas interdisciplinares abrangendo educação - Licenciatura',
            'grau_academico' => 4
        ],
        [
            'id' => '0188P012',
            'area_detalhada_id' => '0188',
            'nome' => 'Programas interdisciplinares abrangendo educação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0188P013',
            'area_detalhada_id' => '0188',
            'nome' => 'Programas interdisciplinares abrangendo educação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211A012',
            'area_detalhada_id' => '0211',
            'nome' => 'Animação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211A013',
            'area_detalhada_id' => '0211',
            'nome' => 'Animação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211A014',
            'area_detalhada_id' => '0211',
            'nome' => 'Animação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211C012',
            'area_detalhada_id' => '0211',
            'nome' => 'Cinema e audiovisual - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211C013',
            'area_detalhada_id' => '0211',
            'nome' => 'Cinema e audiovisual - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211C014',
            'area_detalhada_id' => '0211',
            'nome' => 'Cinema e audiovisual - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211C023',
            'area_detalhada_id' => '0211',
            'nome' => 'Comunicação assistiva - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211D012',
            'area_detalhada_id' => '0211',
            'nome' => 'Design gráfico - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211D013',
            'area_detalhada_id' => '0211',
            'nome' => 'Design gráfico - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211D014',
            'area_detalhada_id' => '0211',
            'nome' => 'Design gráfico - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211F012',
            'area_detalhada_id' => '0211',
            'nome' => 'Fotografia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211F013',
            'area_detalhada_id' => '0211',
            'nome' => 'Fotografia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211F014',
            'area_detalhada_id' => '0211',
            'nome' => 'Fotografia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211P012',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção audiovisual - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211P013',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção audiovisual - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211P014',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção audiovisual - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211P023',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção cênica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211P032',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção cultural - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211P033',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção cultural - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211P034',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção cultural - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0211P043',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção fonográfica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211P052',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção multimídia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0211P053',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção multimídia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0211P054',
            'area_detalhada_id' => '0211',
            'nome' => 'Produção multimídia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0212D012',
            'area_detalhada_id' => '0212',
            'nome' => 'Desenho industrial - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0212D022',
            'area_detalhada_id' => '0212',
            'nome' => 'Design - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0212D023',
            'area_detalhada_id' => '0212',
            'nome' => 'Design - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0212D032',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de interiores - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0212D033',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de interiores - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0212D034',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de interiores - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0212D042',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de produto - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0212D043',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de produto - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0212D044',
            'area_detalhada_id' => '0212',
            'nome' => 'Design de produto - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0212M012',
            'area_detalhada_id' => '0212',
            'nome' => 'Moda - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0212M013',
            'area_detalhada_id' => '0212',
            'nome' => 'Moda - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0212M014',
            'area_detalhada_id' => '0212',
            'nome' => 'Moda - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0213A012',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0213A013',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0213A014',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0213A022',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes plásticas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0213A023',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes plásticas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0213A024',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes plásticas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0213A032',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes visuais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0213A033',
            'area_detalhada_id' => '0213',
            'nome' => 'Artes visuais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0213H012',
            'area_detalhada_id' => '0213',
            'nome' => 'História da arte - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0214F013',
            'area_detalhada_id' => '0214',
            'nome' => 'Fabricação de instrumentos musicais não industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0215A012',
            'area_detalhada_id' => '0215',
            'nome' => 'Artes cênicas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0215A013',
            'area_detalhada_id' => '0215',
            'nome' => 'Artes cênicas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0215D012',
            'area_detalhada_id' => '0215',
            'nome' => 'Dança - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0215D013',
            'area_detalhada_id' => '0215',
            'nome' => 'Dança - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0215M012',
            'area_detalhada_id' => '0215',
            'nome' => 'Música - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0215M013',
            'area_detalhada_id' => '0215',
            'nome' => 'Música  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0215M014',
            'area_detalhada_id' => '0215',
            'nome' => 'Música - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0215T012',
            'area_detalhada_id' => '0215',
            'nome' => 'Teatro - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0215T013',
            'area_detalhada_id' => '0215',
            'nome' => 'Teatro - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0221C012',
            'area_detalhada_id' => '0221',
            'nome' => 'Ciências da religião - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0221T012',
            'area_detalhada_id' => '0221',
            'nome' => 'Teologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0221T014',
            'area_detalhada_id' => '0221',
            'nome' => 'Teologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0222A012',
            'area_detalhada_id' => '0222',
            'nome' => 'Arqueologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0222A013',
            'area_detalhada_id' => '0222',
            'nome' => 'Arqueologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0222C012',
            'area_detalhada_id' => '0222',
            'nome' => 'Conservação e restauro - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0222C013',
            'area_detalhada_id' => '0222',
            'nome' => 'Conservação e restauro - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0222H012',
            'area_detalhada_id' => '0222',
            'nome' => 'História - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0222H014',
            'area_detalhada_id' => '0222',
            'nome' => 'História - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0223F012',
            'area_detalhada_id' => '0223',
            'nome' => 'Filosofia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0223F014',
            'area_detalhada_id' => '0223',
            'nome' => 'Filosofia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L012',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras alemão - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L023',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras escrita criativa - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0231L024',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras escrita criativa - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L032',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras espanhol - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L034',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras espanhol - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L042',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras francês - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L052',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras inglês - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L054',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras inglês - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L062',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras italiano - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L072',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras japonês - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L082',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras língua brasileira de sinais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L083',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras língua brasileira de sinais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0231L084',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras língua brasileira de sinais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L092',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras línguas estrangeiras clássicas  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L094',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras línguas estrangeiras clássicas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L102',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras linguística - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L112',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras outras línguas estrangeiras modernas  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L122',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L124',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0231L132',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português alemão  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L142',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português espanhol - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L152',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português francês - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L162',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português inglês - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L172',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português italiano - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L182',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português japonês  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L192',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português língua brasileira de sinais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L202',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português línguas estrangeiras clássicas  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L212',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras português outras línguas estrangeiras modernas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L222',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras tradutor e intérprete - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0231L223',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras tradutor e intérprete - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0231L224',
            'area_detalhada_id' => '0231',
            'nome' => 'Letras tradutor e intérprete - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0288P012',
            'area_detalhada_id' => '0288',
            'nome' => 'Programas interdisciplinares abrangendo artes e humanidades - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0288P014',
            'area_detalhada_id' => '0288',
            'nome' => 'Programas interdisciplinares abrangendo artes e humanidades - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0311E012',
            'area_detalhada_id' => '0311',
            'nome' => 'Economia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0311E014',
            'area_detalhada_id' => '0311',
            'nome' => 'Economia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0312A012',
            'area_detalhada_id' => '0312',
            'nome' => 'Antropologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312A014',
            'area_detalhada_id' => '0312',
            'nome' => 'Antropologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0312C012',
            'area_detalhada_id' => '0312',
            'nome' => 'Ciência política - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312C014',
            'area_detalhada_id' => '0312',
            'nome' => 'Ciência política  - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0312C022',
            'area_detalhada_id' => '0312',
            'nome' => 'Ciências sociais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312C024',
            'area_detalhada_id' => '0312',
            'nome' => 'Ciências sociais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0312G012',
            'area_detalhada_id' => '0312',
            'nome' => 'Geografia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312R012',
            'area_detalhada_id' => '0312',
            'nome' => 'Relações internacionais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312R014',
            'area_detalhada_id' => '0312',
            'nome' => 'Relações internacionais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0312S012',
            'area_detalhada_id' => '0312',
            'nome' => 'Sociologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0312S014',
            'area_detalhada_id' => '0312',
            'nome' => 'Sociologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0313P012',
            'area_detalhada_id' => '0313',
            'nome' => 'Psicologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0313P014',
            'area_detalhada_id' => '0313',
            'nome' => 'Psicologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0321C012',
            'area_detalhada_id' => '0321',
            'nome' => 'Comunicação social - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0321J012',
            'area_detalhada_id' => '0321',
            'nome' => 'Jornalismo - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0321J014',
            'area_detalhada_id' => '0321',
            'nome' => 'Jornalismo - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0321P012',
            'area_detalhada_id' => '0321',
            'nome' => 'Produção editorial - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0321P013',
            'area_detalhada_id' => '0321',
            'nome' => 'Produção editorial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0321P014',
            'area_detalhada_id' => '0321',
            'nome' => 'Produção editorial - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0321R012',
            'area_detalhada_id' => '0321',
            'nome' => 'Rádio, TV e internet - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0321R013',
            'area_detalhada_id' => '0321',
            'nome' => 'Rádio, TV e internet - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0321R014',
            'area_detalhada_id' => '0321',
            'nome' => 'Rádio, TV e internet - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0322A012',
            'area_detalhada_id' => '0322',
            'nome' => 'Arquivologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0322B012',
            'area_detalhada_id' => '0322',
            'nome' => 'Biblioteconomia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0322G012',
            'area_detalhada_id' => '0322',
            'nome' => 'Gestão da informação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0322G014',
            'area_detalhada_id' => '0322',
            'nome' => 'Gestão da informação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0322M012',
            'area_detalhada_id' => '0322',
            'nome' => 'Museologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0322M013',
            'area_detalhada_id' => '0322',
            'nome' => 'Museologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0322M014',
            'area_detalhada_id' => '0322',
            'nome' => 'Museologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0388P012',
            'area_detalhada_id' => '0388',
            'nome' => 'Programas interdisciplinares abrangendo ciências sociais, jornalismo e informação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0388P014',
            'area_detalhada_id' => '0388',
            'nome' => 'Programas interdisciplinares abrangendo ciências sociais, jornalismo e informação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0411C012',
            'area_detalhada_id' => '0411',
            'nome' => 'Contabilidade - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0411C013',
            'area_detalhada_id' => '0411',
            'nome' => 'Contabilidade  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0411C014',
            'area_detalhada_id' => '0411',
            'nome' => 'Contabilidade - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0411G013',
            'area_detalhada_id' => '0411',
            'nome' => 'Gestão fiscal e tributária - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0412G012',
            'area_detalhada_id' => '0412',
            'nome' => 'Gestão financeira - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0412G013',
            'area_detalhada_id' => '0412',
            'nome' => 'Gestão financeira  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0412G014',
            'area_detalhada_id' => '0412',
            'nome' => 'Gestão financeira - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0412S013',
            'area_detalhada_id' => '0412',
            'nome' => 'Seguros - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0412S014',
            'area_detalhada_id' => '0412',
            'nome' => 'Seguros - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413A012',
            'area_detalhada_id' => '0413',
            'nome' => 'Administração  - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413A014',
            'area_detalhada_id' => '0413',
            'nome' => 'Administração - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413A022',
            'area_detalhada_id' => '0413',
            'nome' => 'Administração pública - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413A023',
            'area_detalhada_id' => '0413',
            'nome' => 'Administração pública - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413A024',
            'area_detalhada_id' => '0413',
            'nome' => 'Administração pública - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413C012',
            'area_detalhada_id' => '0413',
            'nome' => 'Comércio exterior - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413C013',
            'area_detalhada_id' => '0413',
            'nome' => 'Comércio exterior - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413C014',
            'area_detalhada_id' => '0413',
            'nome' => 'Comércio exterior - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413E012',
            'area_detalhada_id' => '0413',
            'nome' => 'Empreendedorismo - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413E013',
            'area_detalhada_id' => '0413',
            'nome' => 'Empreendedorismo - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413E014',
            'area_detalhada_id' => '0413',
            'nome' => 'Empreendedorismo - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G013',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da produção - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G014',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da produção - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G023',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da qualidade - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G024',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da qualidade - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G032',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da saúde - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G033',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da saúde - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G034',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão da saúde - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G042',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de cooperativas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G043',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de cooperativas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G044',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de cooperativas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G052',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de negócios - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G053',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de negócios - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G054',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de negócios - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G062',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de negócios internacionais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G064',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de negócios internacionais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G073',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de pessoas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G074',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de pessoas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G083',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de serviços - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G084',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão de serviços - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G092',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão do agronegócio - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G093',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão do agronegócio - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G094',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão do agronegócio - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G103',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão estratégica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G104',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão estratégica - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G113',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão hospitalar - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G114',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão hospitalar - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413G122',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão pública - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413G123',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão pública - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413G124',
            'area_detalhada_id' => '0413',
            'nome' => 'Gestão pública - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0413L012',
            'area_detalhada_id' => '0413',
            'nome' => 'Logística - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0413L013',
            'area_detalhada_id' => '0413',
            'nome' => 'Logística - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0413L014',
            'area_detalhada_id' => '0413',
            'nome' => 'Logística - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0414M012',
            'area_detalhada_id' => '0414',
            'nome' => 'Marketing - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0414M013',
            'area_detalhada_id' => '0414',
            'nome' => 'Marketing - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0414M014',
            'area_detalhada_id' => '0414',
            'nome' => 'Marketing - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0414P012',
            'area_detalhada_id' => '0414',
            'nome' => 'Publicidade e propaganda - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0414P013',
            'area_detalhada_id' => '0414',
            'nome' => 'Publicidade e propaganda - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0414P014',
            'area_detalhada_id' => '0414',
            'nome' => 'Publicidade e propaganda - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0414R012',
            'area_detalhada_id' => '0414',
            'nome' => 'Relações públicas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0414R013',
            'area_detalhada_id' => '0414',
            'nome' => 'Relações públicas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0414R014',
            'area_detalhada_id' => '0414',
            'nome' => 'Relações públicas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0415S012',
            'area_detalhada_id' => '0415',
            'nome' => 'Secretariado - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0415S013',
            'area_detalhada_id' => '0415',
            'nome' => 'Secretariado - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0415S014',
            'area_detalhada_id' => '0415',
            'nome' => 'Secretariado - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0416G013',
            'area_detalhada_id' => '0416',
            'nome' => 'Gestão comercial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0416G014',
            'area_detalhada_id' => '0416',
            'nome' => 'Gestão comercial - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0416N012',
            'area_detalhada_id' => '0416',
            'nome' => 'Negócios imobiliários - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0416N013',
            'area_detalhada_id' => '0416',
            'nome' => 'Negócios imobiliários - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0416N014',
            'area_detalhada_id' => '0416',
            'nome' => 'Negócios imobiliários - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0421D012',
            'area_detalhada_id' => '0421',
            'nome' => 'Direito - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0421D013',
            'area_detalhada_id' => '0421',
            'nome' => 'Direito - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0421D014',
            'area_detalhada_id' => '0421',
            'nome' => 'Direito - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0421S013',
            'area_detalhada_id' => '0421',
            'nome' => 'Serviços jurídicos e cartoriais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0421S014',
            'area_detalhada_id' => '0421',
            'nome' => 'Serviços jurídicos e cartoriais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0488P012',
            'area_detalhada_id' => '0488',
            'nome' => 'Programas interdisciplinares abrangendo negócios, administração e direito - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0488P013',
            'area_detalhada_id' => '0488',
            'nome' => 'Programas interdisciplinares abrangendo negócios, administração e direito - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0511B012',
            'area_detalhada_id' => '0511',
            'nome' => 'Biologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0511B014',
            'area_detalhada_id' => '0511',
            'nome' => 'Biologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0512B012',
            'area_detalhada_id' => '0512',
            'nome' => 'Bioquímica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0512B022',
            'area_detalhada_id' => '0512',
            'nome' => 'Biotecnologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0512B023',
            'area_detalhada_id' => '0512',
            'nome' => 'Biotecnologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0512B024',
            'area_detalhada_id' => '0512',
            'nome' => 'Biotecnologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0512T013',
            'area_detalhada_id' => '0512',
            'nome' => 'Toxicologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0521C012',
            'area_detalhada_id' => '0521',
            'nome' => 'Ciências ambientais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0521C014',
            'area_detalhada_id' => '0521',
            'nome' => 'Ciências ambientais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0521E012',
            'area_detalhada_id' => '0521',
            'nome' => 'Ecologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0531Q012',
            'area_detalhada_id' => '0531',
            'nome' => 'Química - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0531Q013',
            'area_detalhada_id' => '0531',
            'nome' => 'Química - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0531Q022',
            'area_detalhada_id' => '0531',
            'nome' => 'Química industrial e tecnológica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0531Q023',
            'area_detalhada_id' => '0531',
            'nome' => 'Química industrial e tecnológica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0531Q024',
            'area_detalhada_id' => '0531',
            'nome' => 'Química industrial e tecnológica - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0532G012',
            'area_detalhada_id' => '0532',
            'nome' => 'Geofísica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0532G022',
            'area_detalhada_id' => '0532',
            'nome' => 'Geologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0532G033',
            'area_detalhada_id' => '0532',
            'nome' => 'Geoprocessamento - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0532M012',
            'area_detalhada_id' => '0532',
            'nome' => 'Meteorologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0532O012',
            'area_detalhada_id' => '0532',
            'nome' => 'Oceanografia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0533A012',
            'area_detalhada_id' => '0533',
            'nome' => 'Astronomia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0533F012',
            'area_detalhada_id' => '0533',
            'nome' => 'Física - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0533F022',
            'area_detalhada_id' => '0533',
            'nome' => 'Física aplicada - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0533F024',
            'area_detalhada_id' => '0533',
            'nome' => 'Física aplicada - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0533F032',
            'area_detalhada_id' => '0533',
            'nome' => 'Física médica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0541M012',
            'area_detalhada_id' => '0541',
            'nome' => 'Matemática - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0541M014',
            'area_detalhada_id' => '0541',
            'nome' => 'Matemática - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0541M022',
            'area_detalhada_id' => '0541',
            'nome' => 'Matemática aplicada e computacional - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0542C012',
            'area_detalhada_id' => '0542',
            'nome' => 'Ciências atuariais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0542E012',
            'area_detalhada_id' => '0542',
            'nome' => 'Estatística - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0542E014',
            'area_detalhada_id' => '0542',
            'nome' => 'Estatística - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0588P012',
            'area_detalhada_id' => '0588',
            'nome' => 'Programas interdisciplinares abrangendo ciências naturais, matemática e estatística - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0588P013',
            'area_detalhada_id' => '0588',
            'nome' => 'Programas interdisciplinares abrangendo ciências naturais, matemática e estatística  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0588P014',
            'area_detalhada_id' => '0588',
            'nome' => 'Programas interdisciplinares abrangendo ciências naturais, matemática e estatística  - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0612B013',
            'area_detalhada_id' => '0612',
            'nome' => 'Banco de dados - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0612B014',
            'area_detalhada_id' => '0612',
            'nome' => 'Banco de dados - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0612D013',
            'area_detalhada_id' => '0612',
            'nome' => 'Defesa cibernética - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0612G013',
            'area_detalhada_id' => '0612',
            'nome' => 'Gestão da tecnologia da informação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0612G014',
            'area_detalhada_id' => '0612',
            'nome' => 'Gestão da tecnologia da informação  - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0612R012',
            'area_detalhada_id' => '0612',
            'nome' => 'Redes de computadores - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0612R013',
            'area_detalhada_id' => '0612',
            'nome' => 'Redes de computadores - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0612R014',
            'area_detalhada_id' => '0612',
            'nome' => 'Redes de computadores - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0613E012',
            'area_detalhada_id' => '0613',
            'nome' => 'Engenharia de software - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0613E013',
            'area_detalhada_id' => '0613',
            'nome' => 'Engenharia de software - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0613E014',
            'area_detalhada_id' => '0613',
            'nome' => 'Engenharia de software - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0613J012',
            'area_detalhada_id' => '0613',
            'nome' => 'Jogos digitais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0613J013',
            'area_detalhada_id' => '0613',
            'nome' => 'Jogos digitais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0613J014',
            'area_detalhada_id' => '0613',
            'nome' => 'Jogos digitais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0614C012',
            'area_detalhada_id' => '0614',
            'nome' => 'Ciência da computação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0614C013',
            'area_detalhada_id' => '0614',
            'nome' => 'Ciência da computação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0614C014',
            'area_detalhada_id' => '0614',
            'nome' => 'Ciência da computação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0614I012',
            'area_detalhada_id' => '0614',
            'nome' => 'Inteligência artificial - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0614I013',
            'area_detalhada_id' => '0614',
            'nome' => 'Inteligência artificial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0615S013',
            'area_detalhada_id' => '0615',
            'nome' => 'Segurança da informação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0615S014',
            'area_detalhada_id' => '0615',
            'nome' => 'Segurança da informação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0615S022',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas de informação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0615S023',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas de informação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0615S024',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas de informação - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0615S032',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas para internet - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0615S033',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas para internet - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0615S034',
            'area_detalhada_id' => '0615',
            'nome' => 'Sistemas para internet - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0616E012',
            'area_detalhada_id' => '0616',
            'nome' => 'Engenharia de computação [DCN Computação], - Bacharelado',
            'grau_academico' => 1,
        ],
        [
            'id' => '0616I013',
            'area_detalhada_id' => '0616',
            'nome' => 'Internet das coisas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0616S013',
            'area_detalhada_id' => '0616',
            'nome' => 'Sistemas embarcados - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0617A013',
            'area_detalhada_id' => '0617',
            'nome' => 'Agrocomputação - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0617C012',
            'area_detalhada_id' => '0617',
            'nome' => 'Ciência de dados - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0617C013',
            'area_detalhada_id' => '0617',
            'nome' => 'Ciência de dados - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0617C022',
            'area_detalhada_id' => '0617',
            'nome' => 'Computação e Tecnologias da Informação e Comunicação [TIC], em biociências e saúde - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0617C023',
            'area_detalhada_id' => '0617',
            'nome' => 'Computação e Tecnologias da Informação e Comunicação [TIC], em biociências e saúde - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0617C032',
            'area_detalhada_id' => '0617',
            'nome' => 'Criação digital - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0617C033',
            'area_detalhada_id' => '0617',
            'nome' => 'Criação digital - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0688P012',
            'area_detalhada_id' => '0688',
            'nome' => 'Programas interdisciplinares abrangendo computação e Tecnologias da Informação e Comunicação [TIC], - Bacharelado',
            'graacademico' => 1
        ],
        [
            'id' => '0688P013',
            'area_detalhada_id' => '0688',
            'nome' => 'Programas interdisciplinares abrangendo computação e Tecnologias da Informação e Comunicação [TIC], - Tecnológico',
            'graacademico' => 3
        ],
        [
            'id' => '0710E012',
            'area_detalhada_id' => '0710',
            'nome' => 'Engenharia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0711B013',
            'area_detalhada_id' => '0711',
            'nome' => 'Biocombustíveis - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0711E012',
            'area_detalhada_id' => '0711',
            'nome' => 'Engenharia bioquímica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0711E022',
            'area_detalhada_id' => '0711',
            'nome' => 'Engenharia de bioprocessos - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0711E032',
            'area_detalhada_id' => '0711',
            'nome' => 'Engenharia de biotecnologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0711E042',
            'area_detalhada_id' => '0711',
            'nome' => 'Engenharia de nanotecnologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0711E052',
            'area_detalhada_id' => '0711',
            'nome' => 'Engenharia química - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0712E012',
            'area_detalhada_id' => '0712',
            'nome' => 'Engenharia ambiental - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0712E022',
            'area_detalhada_id' => '0712',
            'nome' => 'Engenharia ambiental e sanitária - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0712G012',
            'area_detalhada_id' => '0712',
            'nome' => 'Gestão ambiental - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0712G013',
            'area_detalhada_id' => '0712',
            'nome' => 'Gestão ambiental - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0712G014',
            'area_detalhada_id' => '0712',
            'nome' => 'Gestão ambiental - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0712G023',
            'area_detalhada_id' => '0712',
            'nome' => 'Gestão de resíduos  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0712G024',
            'area_detalhada_id' => '0712',
            'nome' => 'Gestão de resíduos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0712S013',
            'area_detalhada_id' => '0712',
            'nome' => 'Saneamento ambiental  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0713E013',
            'area_detalhada_id' => '0713',
            'nome' => 'Eletrotécnica industrial  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0713E023',
            'area_detalhada_id' => '0713',
            'nome' => 'Energias renováveis  - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0713E032',
            'area_detalhada_id' => '0713',
            'nome' => 'Engenharia bioenergética - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0713E042',
            'area_detalhada_id' => '0713',
            'nome' => 'Engenharia de energia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0713E052',
            'area_detalhada_id' => '0713',
            'nome' => 'Engenharia elétrica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0713E062',
            'area_detalhada_id' => '0713',
            'nome' => 'Engenharia nuclear - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0713R013',
            'area_detalhada_id' => '0713',
            'nome' => 'Refrigeração e climatização - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0713S012',
            'area_detalhada_id' => '0713',
            'nome' => 'Sistemas elétricos - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0713S013',
            'area_detalhada_id' => '0713',
            'nome' => 'Sistemas elétricos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0713S014',
            'area_detalhada_id' => '0713',
            'nome' => 'Sistemas elétricos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0714A013',
            'area_detalhada_id' => '0714',
            'nome' => 'Automação industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714A014',
            'area_detalhada_id' => '0714',
            'nome' => 'Automação industrial - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0714E013',
            'area_detalhada_id' => '0714',
            'nome' => 'Eletrônica industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714E022',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia acústica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E032',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia biomédica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E042',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia de computação [DCN Engenharia], - Bacharelado',
            'grau_academico' => 1,
        ],
        [
            'id' => '0714E052',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia de controle e automação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E062',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia de informação - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E072',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia de telecomunicações - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E082',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia eletrônica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714E092',
            'area_detalhada_id' => '0714',
            'nome' => 'Engenharia mecatrônica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0714G013',
            'area_detalhada_id' => '0714',
            'nome' => 'Gestão de telecomunicações - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714G014',
            'area_detalhada_id' => '0714',
            'nome' => 'Gestão de telecomunicações - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0714M013',
            'area_detalhada_id' => '0714',
            'nome' => 'Mecatrônica industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714M014',
            'area_detalhada_id' => '0714',
            'nome' => 'Mecatrônica industrial - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0714R013',
            'area_detalhada_id' => '0714',
            'nome' => 'Redes de telecomunicações - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714S013',
            'area_detalhada_id' => '0714',
            'nome' => 'Sistemas biomédicos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714S023',
            'area_detalhada_id' => '0714',
            'nome' => 'Sistemas de telecomunicações - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714S024',
            'area_detalhada_id' => '0714',
            'nome' => 'Sistemas de telecomunicações - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0714T013',
            'area_detalhada_id' => '0714',
            'nome' => 'Telemática - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0714T014',
            'area_detalhada_id' => '0714',
            'nome' => 'Telemática - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0715E012',
            'area_detalhada_id' => '0715',
            'nome' => 'Engenharia física - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0715E022',
            'area_detalhada_id' => '0715',
            'nome' => 'Engenharia mecânica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0715E032',
            'area_detalhada_id' => '0715',
            'nome' => 'Engenharia metalúrgica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0715F013',
            'area_detalhada_id' => '0715',
            'nome' => 'Fabricação mecânica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0715M013',
            'area_detalhada_id' => '0715',
            'nome' => 'Manutenção industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0715M014',
            'area_detalhada_id' => '0715',
            'nome' => 'Manutenção industrial - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0715M023',
            'area_detalhada_id' => '0715',
            'nome' => 'Mecânica de precisão - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0715P013',
            'area_detalhada_id' => '0715',
            'nome' => 'Processos metalúrgicos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0715P014',
            'area_detalhada_id' => '0715',
            'nome' => 'Processos metalúrgicos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0715S013',
            'area_detalhada_id' => '0715',
            'nome' => 'Soldagem - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0715S014',
            'area_detalhada_id' => '0715',
            'nome' => 'Soldagem - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0716A013',
            'area_detalhada_id' => '0716',
            'nome' => 'Aeroespacial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0716C013',
            'area_detalhada_id' => '0716',
            'nome' => 'Construção naval - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0716E012',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia aeroespacial - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0716E022',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia aeronáutica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0716E023',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia aeronáutica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0716E032',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia automotiva - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0716E042',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia ferroviária e metroviária - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0716E052',
            'area_detalhada_id' => '0716',
            'nome' => 'Engenharia naval - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0716M013',
            'area_detalhada_id' => '0716',
            'nome' => 'Manutenção de aeronaves - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0716M014',
            'area_detalhada_id' => '0716',
            'nome' => 'Manutenção de aeronaves - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0716S013',
            'area_detalhada_id' => '0716',
            'nome' => 'Sistemas automotivos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0716S023',
            'area_detalhada_id' => '0716',
            'nome' => 'Sistemas de navegação fluvial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721A012',
            'area_detalhada_id' => '0721',
            'nome' => 'Alimentos - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0721A013',
            'area_detalhada_id' => '0721',
            'nome' => 'Alimentos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721A014',
            'area_detalhada_id' => '0721',
            'nome' => 'Alimentos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0721E012',
            'area_detalhada_id' => '0721',
            'nome' => 'Engenharia de alimentos - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0721L012',
            'area_detalhada_id' => '0721',
            'nome' => 'Laticínios - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0721L013',
            'area_detalhada_id' => '0721',
            'nome' => 'Laticínios - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721P013',
            'area_detalhada_id' => '0721',
            'nome' => 'Processamento de carnes - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721P023',
            'area_detalhada_id' => '0721',
            'nome' => 'Produção de cachaça - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721P033',
            'area_detalhada_id' => '0721',
            'nome' => 'Produção sucroalcooleira - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0721P034',
            'area_detalhada_id' => '0721',
            'nome' => 'Produção sucroalcooleira - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0721P043',
            'area_detalhada_id' => '0721',
            'nome' => 'Produção de cerveja - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722C013',
            'area_detalhada_id' => '0722',
            'nome' => 'Cerâmica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722C023',
            'area_detalhada_id' => '0722',
            'nome' => 'Ciências dos materiais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722C024',
            'area_detalhada_id' => '0722',
            'nome' => 'Ciências dos materiais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0722E012',
            'area_detalhada_id' => '0722',
            'nome' => 'Engenharia de materiais - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0722P013',
            'area_detalhada_id' => '0722',
            'nome' => 'Papel e celulose - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722P022',
            'area_detalhada_id' => '0722',
            'nome' => 'Polímeros - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0722P023',
            'area_detalhada_id' => '0722',
            'nome' => 'Polímeros - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722P033',
            'area_detalhada_id' => '0722',
            'nome' => 'Produção joalheira - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0722P043',
            'area_detalhada_id' => '0722',
            'nome' => 'Produção moveleira - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0723E012',
            'area_detalhada_id' => '0723',
            'nome' => 'Engenharia têxtil - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0723P013',
            'area_detalhada_id' => '0723',
            'nome' => 'Produção de vestuário - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0723P022',
            'area_detalhada_id' => '0723',
            'nome' => 'Produção têxtil - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0723P023',
            'area_detalhada_id' => '0723',
            'nome' => 'Produção têxtil - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0724E012',
            'area_detalhada_id' => '0724',
            'nome' => 'Engenharia de minas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0724E022',
            'area_detalhada_id' => '0724',
            'nome' => 'Engenharia de petróleo - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0724E032',
            'area_detalhada_id' => '0724',
            'nome' => 'Engenharia geológica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0724M013',
            'area_detalhada_id' => '0724',
            'nome' => 'Mineração - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0724P013',
            'area_detalhada_id' => '0724',
            'nome' => 'Petróleo e gás - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0724R013',
            'area_detalhada_id' => '0724',
            'nome' => 'Rochas ornamentais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0725E012',
            'area_detalhada_id' => '0725',
            'nome' => 'Engenharia de manufatura - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0725E013',
            'area_detalhada_id' => '0725',
            'nome' => 'Engenharia de manufatura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0725E022',
            'area_detalhada_id' => '0725',
            'nome' => 'Engenharia de produção - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0725E032',
            'area_detalhada_id' => '0725',
            'nome' => 'Engenharia industrial - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0725P013',
            'area_detalhada_id' => '0725',
            'nome' => 'Produção gráfica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0725P023',
            'area_detalhada_id' => '0725',
            'nome' => 'Produção industrial - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0731A013',
            'area_detalhada_id' => '0731',
            'nome' => 'Agrimensura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0731A022',
            'area_detalhada_id' => '0731',
            'nome' => 'Arquitetura e urbanismo - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0731A023',
            'area_detalhada_id' => '0731',
            'nome' => 'Arquitetura e urbanismo - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0731A024',
            'area_detalhada_id' => '0731',
            'nome' => 'Arquitetura e urbanismo - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0731E012',
            'area_detalhada_id' => '0731',
            'nome' => 'Engenharia cartográfica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0731E022',
            'area_detalhada_id' => '0731',
            'nome' => 'Engenharia de agrimensura - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0731E024',
            'area_detalhada_id' => '0731',
            'nome' => 'Engenharia de agrimensura - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0731E032',
            'area_detalhada_id' => '0731',
            'nome' => 'Engenharia de agrimensura e cartográfica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0732C013',
            'area_detalhada_id' => '0732',
            'nome' => 'Construção de edifícios - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0732C023',
            'area_detalhada_id' => '0732',
            'nome' => 'Controle de obras - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0732C024',
            'area_detalhada_id' => '0732',
            'nome' => 'Controle de obras - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0732E012',
            'area_detalhada_id' => '0732',
            'nome' => 'Engenharia civil - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0732E022',
            'area_detalhada_id' => '0732',
            'nome' => 'Engenharia de recursos hídricos - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0732E032',
            'area_detalhada_id' => '0732',
            'nome' => 'Engenharia de transportes - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0732E042',
            'area_detalhada_id' => '0732',
            'nome' => 'Engenharia portuária - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0732E053',
            'area_detalhada_id' => '0732',
            'nome' => 'Estradas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0732G013',
            'area_detalhada_id' => '0732',
            'nome' => 'Gestão de recursos hídricos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0732M013',
            'area_detalhada_id' => '0732',
            'nome' => 'Material de construção - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0788P012',
            'area_detalhada_id' => '0788',
            'nome' => 'Programas interdisciplinares abrangendo engenharia, produção e construção - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811A012',
            'area_detalhada_id' => '0811',
            'nome' => 'Agroecologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811A013',
            'area_detalhada_id' => '0811',
            'nome' => 'Agroecologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811A022',
            'area_detalhada_id' => '0811',
            'nome' => 'Agroindústria - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811A023',
            'area_detalhada_id' => '0811',
            'nome' => 'Agroindústria - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811A024',
            'area_detalhada_id' => '0811',
            'nome' => 'Agroindústria - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0811A032',
            'area_detalhada_id' => '0811',
            'nome' => 'Agronegócio - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811A033',
            'area_detalhada_id' => '0811',
            'nome' => 'Agronegócio - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811A042',
            'area_detalhada_id' => '0811',
            'nome' => 'Agronomia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811A043',
            'area_detalhada_id' => '0811',
            'nome' => 'Agronomia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811A053',
            'area_detalhada_id' => '0811',
            'nome' => 'Agropecuária - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811C013',
            'area_detalhada_id' => '0811',
            'nome' => 'Cafeicultura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811E012',
            'area_detalhada_id' => '0811',
            'nome' => 'Engenharia agrícola - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811E013',
            'area_detalhada_id' => '0811',
            'nome' => 'Engenharia agrícola - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811E022',
            'area_detalhada_id' => '0811',
            'nome' => 'Engenharia de biossistemas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811F013',
            'area_detalhada_id' => '0811',
            'nome' => 'Fruticultura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811F014',
            'area_detalhada_id' => '0811',
            'nome' => 'Fruticultura - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0811I013',
            'area_detalhada_id' => '0811',
            'nome' => 'Irrigação e drenagem - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811M013',
            'area_detalhada_id' => '0811',
            'nome' => 'Manejo da produção agrícola - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811V012',
            'area_detalhada_id' => '0811',
            'nome' => 'Viticultura e enologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811V013',
            'area_detalhada_id' => '0811',
            'nome' => 'Viticultura e enologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811Z012',
            'area_detalhada_id' => '0811',
            'nome' => 'Zootecnia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0811Z013',
            'area_detalhada_id' => '0811',
            'nome' => 'Zootecnia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0811Z014',
            'area_detalhada_id' => '0811',
            'nome' => 'Zootecnia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0812H013',
            'area_detalhada_id' => '0812',
            'nome' => 'Horticultura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0821E012',
            'area_detalhada_id' => '0821',
            'nome' => 'Engenharia florestal - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0821E013',
            'area_detalhada_id' => '0821',
            'nome' => 'Engenharia florestal - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0821S013',
            'area_detalhada_id' => '0821',
            'nome' => 'Silvicultura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0831A012',
            'area_detalhada_id' => '0831',
            'nome' => 'Aquicultura - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0831A013',
            'area_detalhada_id' => '0831',
            'nome' => 'Aquicultura - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0831A014',
            'area_detalhada_id' => '0831',
            'nome' => 'Aquicultura - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0831E012',
            'area_detalhada_id' => '0831',
            'nome' => 'Engenharia de pesca - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0831P013',
            'area_detalhada_id' => '0831',
            'nome' => 'Produção pesqueira - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0841M012',
            'area_detalhada_id' => '0841',
            'nome' => 'Medicina veterinária - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0841M013',
            'area_detalhada_id' => '0841',
            'nome' => 'Medicina veterinária - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0841M014',
            'area_detalhada_id' => '0841',
            'nome' => 'Medicina veterinária - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0888P012',
            'area_detalhada_id' => '0888',
            'nome' => 'Programas interdisciplinares abrangendo agricultura, silvicultura, pesca e veterinária - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0911O012',
            'area_detalhada_id' => '0911',
            'nome' => 'Odontologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0911O014',
            'area_detalhada_id' => '0911',
            'nome' => 'Odontologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0912M012',
            'area_detalhada_id' => '0912',
            'nome' => 'Medicina - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0912M013',
            'area_detalhada_id' => '0912',
            'nome' => 'Medicina - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0912M014',
            'area_detalhada_id' => '0912',
            'nome' => 'Medicina - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0913E012',
            'area_detalhada_id' => '0913',
            'nome' => 'Enfermagem - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0913E014',
            'area_detalhada_id' => '0913',
            'nome' => 'Enfermagem - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0914A013',
            'area_detalhada_id' => '0914',
            'nome' => 'Análises clínicas e toxicológicas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0914A014',
            'area_detalhada_id' => '0914',
            'nome' => 'Análises clínicas e toxicológicas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0914B012',
            'area_detalhada_id' => '0914',
            'nome' => 'Biomedicina - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0914B014',
            'area_detalhada_id' => '0914',
            'nome' => 'Biomedicina - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0914O013',
            'area_detalhada_id' => '0914',
            'nome' => 'Oftálmica - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0914O022',
            'area_detalhada_id' => '0914',
            'nome' => 'Optometria - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0914O023',
            'area_detalhada_id' => '0914',
            'nome' => 'Optometria - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0914P013',
            'area_detalhada_id' => '0914',
            'nome' => 'Prótese e órtese - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0914P014',
            'area_detalhada_id' => '0914',
            'nome' => 'Prótese e órtese - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0914R013',
            'area_detalhada_id' => '0914',
            'nome' => 'Radiologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0914R014',
            'area_detalhada_id' => '0914',
            'nome' => 'Radiologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0915E012',
            'area_detalhada_id' => '0915',
            'nome' => 'Educação física - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0915E014',
            'area_detalhada_id' => '0915',
            'nome' => 'Educação física  - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0915F012',
            'area_detalhada_id' => '0915',
            'nome' => 'Fisioterapia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0915F022',
            'area_detalhada_id' => '0915',
            'nome' => 'Fonoaudiologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0915N012',
            'area_detalhada_id' => '0915',
            'nome' => 'Nutrição - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0915N013',
            'area_detalhada_id' => '0915',
            'nome' => 'Nutrição - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0915N014',
            'area_detalhada_id' => '0915',
            'nome' => 'Nutrição - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0915P012',
            'area_detalhada_id' => '0915',
            'nome' => 'Podologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0915P013',
            'area_detalhada_id' => '0915',
            'nome' => 'Podologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0915T012',
            'area_detalhada_id' => '0915',
            'nome' => 'Terapia ocupacional - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0916F012',
            'area_detalhada_id' => '0916',
            'nome' => 'Farmácia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0916F013',
            'area_detalhada_id' => '0916',
            'nome' => 'Farmácia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0916F014',
            'area_detalhada_id' => '0916',
            'nome' => 'Farmácia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0917M012',
            'area_detalhada_id' => '0917',
            'nome' => 'Musicoterapia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0917P012',
            'area_detalhada_id' => '0917',
            'nome' => 'Práticas integrativas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0917P013',
            'area_detalhada_id' => '0917',
            'nome' => 'Práticas integrativas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0917P014',
            'area_detalhada_id' => '0917',
            'nome' => 'Práticas integrativas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0918S012',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde coletiva - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0918S013',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde coletiva - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0918S014',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde coletiva - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0918S022',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde pública - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0918S023',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde pública - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0918S024',
            'area_detalhada_id' => '0918',
            'nome' => 'Saúde pública - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0921A014',
            'area_detalhada_id' => '0921',
            'nome' => 'Assistência a idosos e a deficientes - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0921G012',
            'area_detalhada_id' => '0921',
            'nome' => 'Gerontologia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0921G013',
            'area_detalhada_id' => '0921',
            'nome' => 'Gerontologia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0921G014',
            'area_detalhada_id' => '0921',
            'nome' => 'Gerontologia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0923S012',
            'area_detalhada_id' => '0923',
            'nome' => 'Serviço social - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0923S013',
            'area_detalhada_id' => '0923',
            'nome' => 'Serviço social - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0923S014',
            'area_detalhada_id' => '0923',
            'nome' => 'Serviço social - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '0988P012',
            'area_detalhada_id' => '0988',
            'nome' => 'Programas interdisciplinares abrangendo saúde e bem-estar - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '0988P013',
            'area_detalhada_id' => '0988',
            'nome' => 'Programas interdisciplinares abrangendo saúde e bem-estar - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '0988P014',
            'area_detalhada_id' => '0988',
            'nome' => 'Programas interdisciplinares abrangendo saúde e bem-estar - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1011E012',
            'area_detalhada_id' => '1011',
            'nome' => 'Economia doméstica - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1012E012',
            'area_detalhada_id' => '1012',
            'nome' => 'Estética e cosmética - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1012E013',
            'area_detalhada_id' => '1012',
            'nome' => 'Estética e cosmética - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1012E014',
            'area_detalhada_id' => '1012',
            'nome' => 'Estética e cosmética - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1013G012',
            'area_detalhada_id' => '1013',
            'nome' => 'Gastronomia - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1013G013',
            'area_detalhada_id' => '1013',
            'nome' => 'Gastronomia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1013G014',
            'area_detalhada_id' => '1013',
            'nome' => 'Gastronomia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1014F013',
            'area_detalhada_id' => '1014',
            'nome' => 'Formação de técnicos e treinadores esportivos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1014F014',
            'area_detalhada_id' => '1014',
            'nome' => 'Formação de técnicos e treinadores esportivos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1014G012',
            'area_detalhada_id' => '1014',
            'nome' => 'Gestão desportiva e de lazer - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1014G013',
            'area_detalhada_id' => '1014',
            'nome' => 'Gestão desportiva e de lazer - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1014G014',
            'area_detalhada_id' => '1014',
            'nome' => 'Gestão desportiva e de lazer - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1015E013',
            'area_detalhada_id' => '1015',
            'nome' => 'Eventos - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1015E014',
            'area_detalhada_id' => '1015',
            'nome' => 'Eventos - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1015H012',
            'area_detalhada_id' => '1015',
            'nome' => 'Hotelaria - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1015H013',
            'area_detalhada_id' => '1015',
            'nome' => 'Hotelaria - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1015H014',
            'area_detalhada_id' => '1015',
            'nome' => 'Hotelaria - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1015T012',
            'area_detalhada_id' => '1015',
            'nome' => 'Turismo - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1015T013',
            'area_detalhada_id' => '1015',
            'nome' => 'Turismo - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1015T014',
            'area_detalhada_id' => '1015',
            'nome' => 'Turismo - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1022S012',
            'area_detalhada_id' => '1022',
            'nome' => 'Segurança no trabalho - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1022S013',
            'area_detalhada_id' => '1022',
            'nome' => 'Segurança no trabalho - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1022S014',
            'area_detalhada_id' => '1022',
            'nome' => 'Segurança no trabalho - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1031C012',
            'area_detalhada_id' => '1031',
            'nome' => 'Ciências militares - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1032I013',
            'area_detalhada_id' => '1032',
            'nome' => 'Investigação e perícia - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1032I014',
            'area_detalhada_id' => '1032',
            'nome' => 'Investigação e perícia - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1032S013',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança no trânsito - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1032S014',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança no trânsito - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1032S023',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança privada - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1032S024',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança privada - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1032S032',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança pública - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1032S033',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança pública - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1032S034',
            'area_detalhada_id' => '1032',
            'nome' => 'Segurança pública - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1032S043',
            'area_detalhada_id' => '1032',
            'nome' => 'Serviços penais - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1032S044',
            'area_detalhada_id' => '1032',
            'nome' => 'Serviços penais - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1041C012',
            'area_detalhada_id' => '1041',
            'nome' => 'Ciências aeronáuticas - Bacharelado',
            'grau_academico' => 1
        ],
        [
            'id' => '1041C013',
            'area_detalhada_id' => '1041',
            'nome' => 'Ciências aeronáuticas - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1041C014',
            'area_detalhada_id' => '1041',
            'nome' => 'Ciências aeronáuticas - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1041G013',
            'area_detalhada_id' => '1041',
            'nome' => 'Gestão portuária - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1041G014',
            'area_detalhada_id' => '1041',
            'nome' => 'Gestão portuária - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1041T013',
            'area_detalhada_id' => '1041',
            'nome' => 'Transporte aéreo - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1041T023',
            'area_detalhada_id' => '1041',
            'nome' => 'Transporte terrestre - Tecnológico',
            'grau_academico' => 3
        ],
        [
            'id' => '1041T024',
            'area_detalhada_id' => '1041',
            'nome' => 'Transporte terrestre  - Sequencial',
            'grau_academico' => 2
        ],
        [
            'id' => '1088P013',
            'area_detalhada_id' => '1088',
            'nome' => 'Programas interdisciplinares abrangendo serviços',
            'grau_academico' => 3
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursoSuperior::insertOrIgnore($this->cursos);
    }
}
