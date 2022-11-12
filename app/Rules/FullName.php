<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class FullName implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     *
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $remove = ['dos', 'das', 'de', 'do', 'da', 'e'];
        $nome = array_diff(explode(' ', $value), $remove);

        if (count($nome) < 2) {
            $fail('O campo :attribute deve conter nome e sobrenome.');
        }
    }
}
