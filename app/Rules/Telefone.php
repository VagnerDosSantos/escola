<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Telefone implements InvokableRule
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
        $number = preg_replace('/[^0-9]/', '', $value);
        $thirdNumber = substr($number, 2, 1);

        if (strlen($number) == 11 && $thirdNumber != 9) {
            $fail("O campo {$attribute} possui 11 dígitos, então o primeiro dígito após o DDD deve ser 9.");
        }
    }
}
