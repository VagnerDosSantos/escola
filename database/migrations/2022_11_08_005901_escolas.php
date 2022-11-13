<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_inep', 10)->unique();
            $table->string('nome', 100);
            $table->tinyInteger('situacao')->default(1);
            $table->date('inicio_ano_letivo')->nullable();
            $table->date('termino_ano_letivo')->nullable();
            $table->string('cep', 10);
            $table->tinyInteger('localizacao');
            $table->tinyInteger('localizacao_diferenciada');
            $table->string('municipio_id', 10);
            $table->string('distrito_id', 20);
            $table->string('endereco', 100);
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('telefone_1', 11)->nullable();
            $table->string('telefone_2', 11)->nullable();
            $table->string('email', 100)->nullable();
            $table->tinyInteger('dependencia_administrativa');
            $table->string('orgao_escola_publica_vinculada')->nullable();
            $table->string('mantenedora_escola_privada')->nullable();
            $table->string('cnpj_mantenedora_escola_privada', 14)->nullable();
            $table->string('cnpj_escola_privada', 14)->nullable();
            $table->string('poder_publico_responsavel_parceria_convenio')->nullable();
            $table->string('formas_contratacao')->nullable();
            $table->tinyInteger('regulamentacao_conselho')->default(0);
            $table->string('esfera_administrativa_conselho')->nullable();
            $table->tinyInteger('vinculo_educacao_basica_superior')->default(0);
            $table->string('codigo_escola_sede', 8)->nullable();
            $table->string('codigo_ies', 9)->nullable();

            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('distrito_id')->references('id')->on('distritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
};
