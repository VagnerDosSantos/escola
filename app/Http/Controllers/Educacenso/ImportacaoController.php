<?php

namespace App\Http\Controllers\Educacenso;

use App\Http\Controllers\Controller;
use App\Utils\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\LazyCollection;

class ImportacaoController extends Controller
{
    public function importar(Request $request)
    {
        $dados = [];

        try {
            LazyCollection::make(function () {
                $handle = fopen(public_path('censo'), 'r');

                while (($line = fgets($handle)) !== false) {
                    yield $line;
                }
            })->chunk(1000)->map(function ($lines) {
                return $lines;
            })->each(function ($lines) use (&$dados) {
                foreach ($lines as $line) {
                    $line = explode("|", $line);
                    array_unshift($line, "");
                    unset($line[0]);

                    $tipoRegistro = "App\Services\Educacenso\Importacao\Registro{$line[1]}";
                    $dados[$line[1]][] = (new $tipoRegistro($line))->toArray();
                }
            });
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        print_r($dados);
    }
}
