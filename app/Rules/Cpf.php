<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Cpf implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     *
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $cpf = preg_replace('/[^0-9]/', '', (string) $value);

        // Valida tamanho
        if (11 != strlen($cpf)) {
            return $fail('O campo :attribute deve conter 11 dígitos.');
        }

        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return $fail('O campo :attribute não pode conter todos os dígitos iguais.');
        }

        // Calcula e confere primeiro dígito verificador
        for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--) {
            $soma += $cpf[$i] * $j;
        }

        $resto = $soma % 11;

        if ($cpf[9] != ($resto < 2 ? 0 : 11 - $resto)) {
            return $fail('O campo :attribute não é válido.');
        }

        // Calcula e confere segundo dígito verificador
        for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--) {
            $soma += $cpf[$i] * $j;
        }

        $resto = $soma % 11;

        if ($cpf[10] != ($resto < 2 ? 0 : 11 - $resto)) {
            $fail('O campo :attribute não é válido.');
        }
    }
}
