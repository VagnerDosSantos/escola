<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class ValidaPoderPublicoResponsavelPorConvenio implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $value = collect([$value]);

        $secretariaEstadual = $value->pluck('secretaria_estadual')[0];
        $secretariaMunicipal = $value->pluck('secretaria_municipal')[0];
        $naoPossui = $value->pluck('nao_possui')[0];

        if ($secretariaEstadual == 1 && $naoPossui == 1) {
            $fail("O campo Poder Público Responsável por Parceria ou Convênio não pode ser preenchido com Secretaria Estadual quando o campo \"Não possui parceria ou convênio\" for preenchido.");
        }

        if ($secretariaMunicipal == 1 && $naoPossui == 1) {
            $fail("O campo Poder Público Responsável por Parceria ou Convênio não pode ser preenchido com Secretaria Municipal quando o campo \"Não possui parceria ou convênio\" for preenchido.");
        }
    }
}
