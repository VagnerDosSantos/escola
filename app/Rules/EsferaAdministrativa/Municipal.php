<?php

namespace App\Rules\EsferaAdministrativa;

use Illuminate\Contracts\Validation\InvokableRule;

class Municipal implements InvokableRule
{
    public function __construct(
        private array $esferaAdministrativa,
        private int $dependenciaAdministrativa,
        private string $codigoMunicipio
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
        if ($value == 1 && $this->dependenciaAdministrativa == 1) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Dependência administrativa' for preenchido com 1 (Federal).");
        }

        if ($value == 1 && $this->dependenciaAdministrativa == 2) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Dependência administrativa' for preenchido com 2 (Estadual).");
        }

        if ($value == 1 && $this->esferaAdministrativa['federal'] == 1) {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Esfera administrativa' for preenchido com 1 (Federal).");
        }

        if ($value == 1 && $this->codigoMunicipio == '5300108') {
            $fail("O campo :attribute não pode ser preenchido com 1 (Sim) quando o campo 'Código do município' for preenchido com 5300108 (Brasília).");
        }
    }
}
