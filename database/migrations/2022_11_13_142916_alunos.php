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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->constrained('escolas');
            $table->year('ano_letivo');
            $table->string('codigo_sistema', 20);
            $table->string('codigo_inep', 12)->nullable();
            $table->string('nome', 100);
            $table->string('email', 100)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('certidao_nascimento')->nullable();
            $table->string('numero_nis', 20)->nullable();
            $table->string('numero_cartao_sus', 20)->nullable();
            $table->date('data_nascimento');
            $table->boolean('filiacao');
            $table->string('filiacao_1', 100)->nullable(); // Preferencialmente mãe
            $table->string('filiacao_2', 100)->nullable(); // Preferencialmente pai
            $table->tinyInteger('sexo');
            $table->tinyInteger('cor_raca');
            $table->tinyInteger('nacionalidade');
            $table->integer('pais_nacionalidade_id');
            $table->integer('pais_residencia_id');
            $table->string('municipio_nascimento_id', 10)->nullable();
            $table->string('municipio_residencia_id', 10)->nullable();
            $table->tinyInteger('zona_localizacao')->nullable();
            $table->tinyInteger('localizacao_diferenciada')->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->boolean('possui_deficiencia');
            $table->string('deficiencia_altas_habilidades_autismo')->nullable();
            $table->string('recursos_sala_aula');

            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pais_nacionalidade_id')->references('id')->on('paises');
            $table->foreign('pais_residencia_id')->references('id')->on('paises');
            $table->foreign('municipio_nascimento_id')->references('id')->on('municipios');
            $table->foreign('municipio_residencia_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
