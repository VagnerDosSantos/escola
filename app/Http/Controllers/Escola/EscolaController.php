<?php

namespace App\Http\Controllers\Escola;

use App\Enums\Escola\Situacao;
use App\Http\Controllers\Controller;
use App\Rules\validaAnoBissexto;
use App\Utils\Exception;
use App\Utils\ValidateForm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class EscolaController extends Controller
{
    public function salvar(Request $request)
    {
        try {
            $validated = ValidateForm::validate($request, [
                'codigo_inep' => 'required|digits:8|numeric',
                'nome' => 'required|string|min:4|max:100|regex:/^.+@.+$/i',
                'situacao' => new Enum(Situacao::class),
                'inicio_ano_letivo' => '[required_if:situacao=1, '.new validaAnoBissexto.']|date_format:d/m/Y|',
                'termino_ano_letivo' => 'required_if:situacao=1|date_format:d/m/Y',
                'cep' => 'required|min:8|max:8',
                'localizacao' => 'required|numeric',
                'localizacao_diferenciada' => 'string',
                'municipio_id' => 'numeric',
                'distrito_id' => 'required|numeric',
                'endereco' => 'required|max:100',
                'numero' => 'max:10',
                'complemento' => 'max:20',
                'bairro' => 'max:50',
                'telefone_1' => 'min:8|max:9|numeric',
                'telefone_2' => 'min:8|max:9|numeric',
                'email' => 'email',
                'dependencia_administrativa' => 'string',
                'orgao_escola_publica_vinculada' => '',
                'mantenedora_escola_privada' => '',
                'cnpj_mantenedora_escola_privada' => 'required_if:mantenedora_escola_privada=29|required_if:regulamentacao_conselho=1|numeric',
                'cnpj_escola_privada' => 'min:14|max:14|numeric',
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
