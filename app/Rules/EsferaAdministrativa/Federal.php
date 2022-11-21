<?php

namespace App\Rules\EsferaAdministrativa;

use Illuminate\Contracts\Validation\InvokableRule;

class Federal implements InvokableRule
{
    public function __construct(
        private int $dependenciaAdministrativa
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
        if ($value == 1 && $this->dependenciaAdministrativa == 2) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Dependência administrativa' for preenchido com 2 (Estadual).");
        }

        if ($value == 1 && $this->dependenciaAdministrativa == 3) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Dependência administrativa' for preenchido com 3 (Municipal).");
        }
    }
}
