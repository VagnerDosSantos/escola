<?php

namespace App\Utils;

use App\Exceptions\UnprocessableEntityException;
use Illuminate\Http\JsonResponse;

final class Exception
{
    public static function handle(\Throwable $th): JsonResponse
    {
        $code = $th->getCode();

        if($th->getCode() == 0) {
            $code = 500;    
        }

        if ($th instanceof UnprocessableEntityException) {
            return response()->json([
                'mensagem' => 'Parâmetros informados incorretamente.',
                'erros' => json_decode($th->getMessage()),
            ], $code);
        }

        return response()->json([
            'mensagem' => $th->getMessage(),
        ], $code);
    }
}
