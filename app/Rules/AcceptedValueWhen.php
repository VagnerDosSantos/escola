<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AcceptedValueWhen implements Rule
{
    private bool $condition;
    private string|int $accepts;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(bool $condition, string|int $accepts)
    {
        $this->condition = $condition;
        $this->accepts = $accepts;
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
        return $this->condition && $value == $this->accepts;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "O campo :attribute foi informado incorretamente. Valor Esperado: {$this->accepts}.";
    }
}
