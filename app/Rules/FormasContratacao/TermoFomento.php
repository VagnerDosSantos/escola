<?php

namespace App\Rules\FormasContratacao;

use App\Enums\Escola\CategoriaEscolaPrivada;
use Illuminate\Contracts\Validation\InvokableRule;

class TermoFomento implements InvokableRule
{
    public function __construct(
        private int $dependenciaAdministrativa,
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
        if ($value == 1 && in_array($this->dependenciaAdministrativa, [1, 2, 3])) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Dependência administrativa' for preenchido com 1 (Federal), 2 (Estadual) ou 3 (Municipal).");
        }

        if ($value == 1 && $this->categoriaEscolaPrivada == CategoriaEscolaPrivada::Particular->value) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Categoria da escola' for preenchido com 1 (Particular).");
        }
    }
}
