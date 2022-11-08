<?php

namespace App\Http\Controllers\Escola;

use App\Http\Controllers\Controller;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function salvar(Request $request)
    {
        try {
            $validated = ValidateForm::validate($request, [
                'codigo_inep' => 'required|digits:8|numeric',
                'nome' => 'required|string|min:4|max:100',
                'situacao' => '',
                'inicio_ano_letivo' => '',
                'termino_ano_letivo' => '',
                'cep' => '',
                'localizacao' => '',
                'localizacao_diferenciada' => '',
                'municipio_id' => '',
                'distrito_id' => '',
                'endereco' => '',
                'numero' => '',
                'complemento' => '',
                'bairro' => '',
                'telefone_1' => '',
                'telefone_2' => '',
                'email' => '',
                'dependencia_administrativa' => '',
                'orgao_escola_publica_vinculada' => '',
                'mantenedora_escola_privada' => '',
                'cnpj_mantenedora_escola_privada' => '',
                'cnpj_escola_privada' => '',
                'poder_publico_responsavel_parceria_convenio' => '',
                'formas_contratacao' => '',
                'regulamentacao_conselho' => '',
                'esfera_administrativa_conselho' => '',
                'vinculo_educacao_basica_superior' => '',
                'codigo_escola_sede' => '',
                'codigo_ies' => '',
            ]);
        } catch (\Throwable $th) {
            return Exception::handle($th);
        }

        return $validated;
    }
}
