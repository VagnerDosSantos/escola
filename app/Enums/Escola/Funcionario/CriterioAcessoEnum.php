<?php

namespace App\Enums\Escola\Funcionario;

enum CriterioAcessoEnum: int
{
    case ProprietarioOuSocioEscola = 1;
    case ExclusivamentePorIndicacaoEscola = 2;
    case ProcessoSeletivoQualificadoEscola = 3;
    case ConcursoPublicoEspecificoCargoGestorEscolar = 4;
    case ExclusivamentePorProcessoEleitoralComunidadeEscolar = 5;
    case ProcessoSeletivoQualificadoEleicaoComunidadeEscolar = 6;
    case Outros = 7;

    public function traducao(): string
    {
        return match ($this) {
            self::ProprietarioOuSocioEscola => 'Ser proprietário(a) ou sócio(a)-proprietário(a) da escola',
            self::ExclusivamentePorIndicacaoEscola => 'Exclusivamente por indicação/escolha da gestão',
            self::ProcessoSeletivoQualificadoEscola => 'Processo seletivo qualificado e escolha/nomeação da gestão',
            self::ConcursoPublicoEspecificoCargoGestorEscolar => 'Concurso público específico para o cargo de gestor escolar',
            self::ExclusivamentePorProcessoEleitoralComunidadeEscolar => 'Exclusivamente por processo eleitoral com a participação da comunidade escolar',
            self::ProcessoSeletivoQualificadoEleicaoComunidadeEscolar => 'Processo seletivo qualificado e eleição com a participação da comunidade escolar',
            self::Outros => 'Outros',
        };
    }
}
