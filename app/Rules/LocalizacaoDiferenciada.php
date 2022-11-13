<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class LocalizacaoDiferenciada implements InvokableRule
{
    private ?int $zonaLocalizacao;

    public function __construct(?int $zonaLocalizacao)
    {
        $this->zonaLocalizacao = $zonaLocalizacao;
    }

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
        if ($this->zonaLocalizacao == 1 && $value == 1) {
            $fail('O campo Localização diferenciada não pode ser preenchido com 1 (Área de assentamento) quando o campo "Localização/ Zona de residência" for preenchido com 1 (Urbana).');
        }
    }
}
