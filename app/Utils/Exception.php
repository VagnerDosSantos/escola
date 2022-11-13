<?php

namespace App\Utils;

use App\Enums\HttpStatus;
use App\Exceptions\UnprocessableEntityException;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

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
            $mensagem = "Ocorreu um erro interno do servidor. Por favor, tente novamente mais tarde.";

            if (env("APP_DEBUG")) {
                $mensagem = $th->getMessage();
            }

            abort(response()->json([
                'mensagem' => $mensagem,
            ], HttpStatus::SERVER_ERROR->value));
        }

        return response()->json([
            'mensagem' => $th->getMessage(),
        ], $code);
    }
}
