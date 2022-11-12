<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidaAnoConclusaoPosGraduacao implements Rule
{
    private array $years;
    private string $attribute;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $years)
    {
        $this->years = $years;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->attribute = str_replace('_', ' ', $attribute);

        foreach ($this->years as $year) {
            if ($value < $year) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "O Campo {$this->attribute} Não pode ser anterior a todos os anos indicados nos campos (Ano de Conclusão Curso Superior 1), (Ano de Conclusão Curso Superior 2) e 54 (Ano de Conclusão Curso superior 3).";
    }
}
