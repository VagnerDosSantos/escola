<?php

namespace App\Rules\Escola\Funcionario;

use App\Models\Escola;
use Illuminate\Contracts\Validation\Rule;

class ValidaCriterioAcessoPrivada implements Rule
{
    private int $escolaId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $escolaId)
    {
        $this->escolaId = $escolaId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $escola = Escola::find($this->escolaId);
        return !($value == 1 && $escola->dependencia_administrativa != 4);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "O campo :attribute não pode ser preenchido com 1 (Ser proprietário(a) ou sócio(a)-proprietário(a) da escola) quando o campo 'Dependência administrativa' for preenchido com 1 (Federal), 2 (Estadual) ou 3 (Municipal).";
    }
}
