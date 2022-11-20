<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Facades\Http;

class Cep implements InvokableRule
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
        $cep = preg_replace("/[^0-9]/", "", $value);
        $result = Http::get("http://republicavirtual.com.br/web_cep.php?cep={$cep}&formato=json")->json();

        if ($result['resultado'] == 0) {
            $fail('Não foi possível localizar um CEP válido para o valor informado.');
        }
    }
}
