<?php

namespace App\Utils;

use App\Enums\HttpStatus;
use App\Exceptions\UnprocessableEntityException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateForm
{
    public static function validate(Request $request, array $rules)
    {
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            throw new UnprocessableEntityException($validator->errors()->toJson(), HttpStatus::UNPROCESSABLE_ENTITY->value);
        }

        return $validator->validated();
    }
}
