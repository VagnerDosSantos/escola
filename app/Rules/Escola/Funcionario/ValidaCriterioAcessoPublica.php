<?php

namespace App\Rules\Escola\Funcionario;

use App\Models\Escola;
use Illuminate\Contracts\Validation\Rule;

class ValidaCriterioAcessoPublica implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $escola = Escola::find($this->escolaId);
        return !(in_array($value, [4, 5, 6]) && $escola->dependencia_administrativa == 4);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "O campo :attribute não pode ser preenchido com 4, 5, 6 quando o campo 'Dependência administrativa' for preenchido com 4 (Privada).";
    }
}
