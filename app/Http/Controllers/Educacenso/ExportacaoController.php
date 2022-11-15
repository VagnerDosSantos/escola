<?php

namespace App\Http\Controllers\Educacenso;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use App\Services\Educacenso\Exportacao\Registro00;
use App\Services\Educacenso\Exportacao\Registro10;
use App\Services\Educacenso\Exportacao\Registro20;
use App\Services\Educacenso\Exportacao\Registro30Alunos;
use App\Services\Educacenso\Exportacao\Registro30Profissionais;
use App\Services\Educacenso\Exportacao\Registro40;
use App\Services\Educacenso\Exportacao\Registro50;
use App\Services\Educacenso\Exportacao\Registro60;
use Illuminate\Http\Request;

class ExportacaoController extends Controller
{
    public function exportar(Request $request)
    {
        $dados = [];
        $escolas = Escola::first();

        for ($i = 0; $i < 20; $i++) {
            $dados[] = (new Registro00($escolas))->toString();
            $dados[] = (new Registro10($escolas))->toString();

            for ($x = 0; $x < 10; $x++) {
                $dados[] = (new Registro20($escolas))->toString();
            }

            for ($x = 0; $x < 2000; $x++) {
                $dados[] = (new Registro30Alunos($escolas))->toString();
            }

            for ($x = 0; $x < 200; $x++) {
                $dados[] = (new Registro30Profissionais($escolas))->toString();
            }

            for ($x = 0; $x < 2; $x++) {
                $dados[] = (new Registro40($escolas))->toString();
            }

            for ($x = 0; $x < 200; $x++) {
                $dados[] = (new Registro50($escolas))->toString();
            }

            for ($x = 0; $x < 2100; $x++) {
                $dados[] = (new Registro60($escolas))->toString();
            }
        }

        $dados = implode(PHP_EOL, $dados);

        print_r($dados);
        die;
    }
}
