<?php

namespace App\Utils;

use App\Enums\HttpStatus;
use App\Exceptions\UnprocessableEntityException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;

class ValidateForm
{
    public static function validate(Request $request, array $rules)
    {
        $validator = Validator::make($request->all(), $rules, self::messages());

        if ($validator->fails()) {
            throw new UnprocessableEntityException($validator->errors()->toJson(), HttpStatus::UNPROCESSABLE_ENTITY->value);
        }

        return $validator->validated();
    }

    private static function messages(): array
    {
        return [
            'required' => 'O campo :attribute deve ser preenchido',
            'numeric' => 'O campo :attribute deve ser numérico',
            'string' => 'O Campo :attribute não é do tipo string',
            'array' => 'O Campo :attribute não é do tipo array',
            'email' => 'O Email informado não é valido',
            'min' => 'O campo :attribute não pode ser inferior a :min caracteres',
            'max' => 'O campo :attribute não pode ser superior a :max caracteres',
            'integer' => 'O campo :attribute precisa ser um valor inteiro',
            'regex' => 'O valor passado em :attribute está em um formato inválido',
            'date' => 'A data do campo :attribute não é uma data válida',
            'date_format' => 'A data do campo :attribute deve estar no formato :format',
            'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a hoje',
            'in' => 'O valor informado no campo :attribute não corresponde a um valor válido',
            'unique' => 'O Valor informado no campo :attribute já existe em nossa base de dados',
            'lte' => 'O campo :attribute deve ser menor ou igual à :value',
            'digits' => 'O campo :attribute deve conter :digits dígitos',
            'boolean' => 'O valor do campo :attribute deve ser 1:true ou 0:false',
            'between' => 'O campo :attribute deve estar entre :min e :max',
            'senha.confirmed' => 'O campo de confirmação da :attribute não confere.',
            'exists' => 'O Valor do campo :attribute não existe em nossa base de dados',
            'enum' => 'O valor informado no campo :attribute não corresponde a um valor válido',
            Enum::class => 'O valor informado no campo :attribute não corresponde a um valor válido',
            'required_if' => 'O campo :attribute é obrigatório quando o campo :other é :value',
        ];
    }
}
