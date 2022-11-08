<?php

namespace App\Utils;

use App\Exceptions\UnprocessableEntityException;
use Illuminate\Http\JsonResponse;

final class Exception
{
    public static function handle(\Throwable $th): JsonResponse
    {
        if ($th instanceof UnprocessableEntityException) {
            return response()->json([
                'mensagem' => 'Parâmetros informados incorretamente.',
                'erros' => json_decode($th->getMessage()),
            ], $th->getCode());
        }

        return response()->json([
            'mensagem' => $th->getMessage(),
        ], $th->getCode());
    }
}
