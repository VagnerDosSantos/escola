<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Cnpj implements InvokableRule
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
        $cnpj = preg_replace('/[^0-9]/', '', (string) $value);

        // Valida tamanho
        if (strlen($cnpj) != 14) {
            $fail("O campo :attribute não é um CNPJ válido.");
        }

        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto)) {
            $fail("O campo :attribute não é um CNPJ válido.");
        }

        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        if ($cnpj[13] != ($resto < 2 ? 0 : 11 - $resto)) {
            $fail("O campo :attribute não é um CNPJ válido.");
        }
    }
}
