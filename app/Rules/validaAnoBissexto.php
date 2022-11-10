<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class validaAnoBissexto implements InvokableRule
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
        $bissexto= date('L', mktime(0, 0, 0, 1, 1, $value));
        if($bissexto){
            $fail('O campo :attribute é um ano bissexto portanto não pode ser inferior a 365 dias do censo escolar.');
        }
    }
}
