<?php

namespace App\Utils;

use App\Exceptions\UnprocessableEntityException;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

final class Exception
{
    public static function handle(\Throwable $th): JsonResponse
    {
        $code = $th->getCode();

        if (0 == $th->getCode()) {
            $code = 500;
        }

        if ($th instanceof UnprocessableEntityException) {
            return response()->json([
                'mensagem' => 'Parâmetros informados incorretamente.',
                'erros' => json_decode($th->getMessage()),
            ], $code);
        }

        if ($th instanceof QueryException) {
            Log::error($th->getMessage());
            abort(500);
        }

        return response()->json([
            'mensagem' => $th->getMessage(),
        ], $code);
    }
}
