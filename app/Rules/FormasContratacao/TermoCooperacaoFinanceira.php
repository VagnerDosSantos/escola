<?php

namespace App\Rules\FormasContratacao;

use Illuminate\Contracts\Validation\InvokableRule;

class TermoCooperacaoFinanceira implements InvokableRule
{
    public function __construct(
        private ?int $categoriaEscolaPrivada
    ) {
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
        if ($value == 1 && in_array($this->categoriaEscolaPrivada, [1, 2, 3, 4])) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Categoria da escola privada' for preenchido com 1 (Particular), 2 (Comunitária), 3 (Confessional) ou 4 (Filantrópica).");
        }
    }
}
