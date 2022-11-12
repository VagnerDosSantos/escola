<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidaComponenteCurricular implements Rule
{
    private array $components;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $components)
    {
        $this->components = $components;
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
        return !in_array($value, $this->components);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Verifique os componentes curriculares informados. Componente curricular informado em duplicidade.';
    }
}
