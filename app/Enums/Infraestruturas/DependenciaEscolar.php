<?php

namespace App\Enums\Infraestruturas;

enum DependenciaEscolar: int
{
    case Almoxarifado = 24;
    case AreaVerde = 27;
    case Auditorio = 22;
    case Banheiro = 41;
    case BanheiroAcessivel = 12;
    case BanheiroEducacaoinfantil = 17;
    case BanheiroFuncionários = 32;
    case BanheiroComChuveiro = 23;
    case Biblioteca = 8;
    case Cozinha = 7;
    case Despensa = 30;
    case DormitorioAluno = 28;
    case DormitorioProfessor = 29;
    case LaboratorioCiencias = 4;
    case LaboratorioInformatica = 3;
    case LaboratorioEducacaoProfissional = 42;
    case Parqueinfantil = 9;
    case PatioCoberto = 25;
    case PatioDescoberto = 26;
    case Piscina = 33;
    case QuadraEsportesCoberta = 19;
    case QuadraEsportesDescoberta = 18;
    case Refeitorio = 20;
    case SalaRepousoAluno = 40;
    case SalaAtelie = 34;
    case SalaMusica = 35;
    case SalaDanca = 36;
    case SalaMultiuso = 37;
    case Terreirao = 38;
    case ViveiroAnimais = 39;
    case SalaDiretoria = 1;
    case SalaLeitura = 15;
    case SalaProfessores = 2;
    case SalaAtendimentoEducacionalEspecializado = 5;
    case SalaSecretaria = 31;
    case SalaEducacaoProfissional = 43;
    case Nenhuma = 14;

    public function traducao()
    {
        $valores = self::valoresTraduzidos();

        return $valores[$this->value];
    }

    private static function valoresTraduzidos()
    {
        return [
            24 => 'Almoxarifado',
            27 => 'Área verde',
            22 => 'Auditório',
            41 => 'Banheiro',
            12 => 'Banheiro acessível, adequado ao uso de pessoas com deficiência ou mobilidade reduzida',
            17 => 'Banheiro adequado à educação infantil',
            32 => 'Banheiro exclusivo para os funcionários',
            23 => 'Banheiro ou vestiário com chuveiro',
            8 => 'Biblioteca',
            7 => 'Cozinha',
            30 => 'Despensa',
            28 => 'Dormitório de aluno(a)',
            29 => 'Dormitório de professor(a)',
            4 => 'Laboratório de ciências',
            3 => 'Laboratório de informática ',
            42 => 'Laboratório específico para a educação profissional',
            9 => 'Parque infantil',
            25 => 'Pátio coberto',
            26 => 'Pátio descoberto',
            33 => 'Piscina ',
            19 => 'Quadra de esportes coberta',
            18 => 'Quadra de esportes descoberta',
            20 => 'Refeitório',
            40 => 'Sala de repouso para aluno(a)',
            34 => 'Sala/ateliê de artes',
            35 => 'Sala de música/coral',
            36 => 'Sala/estúdio de dança',
            37 => 'Sala multiuso (música, dança e artes)',
            38 => 'Terreirão (área para prática desportiva e recreação sem cobertura, sem piso e sem edificações)',
            39 => 'Viveiro/criação de animais',
            1 => 'Sala de diretoria',
            15 => 'Sala de leitura',
            2 => 'Sala de professores',
            5 => 'Sala de recursos multifuncionais para Atendimento Educacional Especializado (AEE)',
            31 => 'Sala de secretaria',
            43 => 'Sala de oficinas da educação profissional',
            14 => 'Nenhuma das dependências relacionadas',
        ];
    }

    public static function toArray()
    {
        return array_combine(array_column(self::cases(), 'value'), self::valoresTraduzidos());
    }
}
