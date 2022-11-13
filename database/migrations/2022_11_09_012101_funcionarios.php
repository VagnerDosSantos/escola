<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->constrained('escolas');
            $table->string('codigo_sistema', 20);
            $table->string('codigo_inep', 12)->nullable();
            $table->string('cpf', 11);
            $table->string('nome', 100);
            $table->string('email', 100)->nullable();
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
            $table->string('deficiencia_altas_habilidades_autismo')->nullable();
            $table->tinyInteger('escolaridade_concluida')->nullable();
            $table->tinyInteger('ensino_medio_cursado')->nullable();
            $table->string('codigo_curso_1', 10)->nullable();
            $table->year('ano_conclusao_curso_1')->nullable();
            $table->string('instituicao_curso_1', 20)->nullable();
            $table->string('codigo_curso_2', 10)->nullable();
            $table->year('ano_conclusao_curso_2')->nullable();
            $table->string('instituicao_curso_2', 20)->nullable();
            $table->string('codigo_curso_3', 10)->nullable();
            $table->year('ano_conclusao_curso_3')->nullable();
            $table->string('instituicao_curso_3', 20)->nullable();
            $table->integer('componente_curricular_1')->nullable();
            $table->integer('componente_curricular_2')->nullable();
            $table->integer('componente_curricular_3')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_1')->nullable();
            $table->integer('area_pos_graduacao_1')->nullable();
            $table->year('ano_conclusao_pos_graduacao_1')->nullable();
            $table->integer('area_pos_graduacao_2')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_2')->nullable();
            $table->year('ano_conclusao_pos_graduacao_2')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_3')->nullable();
            $table->integer('area_pos_graduacao_3')->nullable();
            $table->year('ano_conclusao_pos_graduacao_3')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_4')->nullable();
            $table->integer('area_pos_graduacao_4')->nullable();
            $table->year('ano_conclusao_pos_graduacao_4')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_5')->nullable();
            $table->integer('area_pos_graduacao_5')->nullable();
            $table->year('ano_conclusao_pos_graduacao_5')->nullable();
            $table->tinyInteger('tipo_pos_graduacao_6')->nullable();
            $table->integer('area_pos_graduacao_6')->nullable();
            $table->year('ano_conclusao_pos_graduacao_6')->nullable();
            $table->boolean('possui_pos_graduacao')->nullable();
            $table->string('formacao_continuada')->nullable();

            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pais_nacionalidade_id')->references('id')->on('paises');
            $table->foreign('pais_residencia_id')->references('id')->on('paises');
            $table->foreign('municipio_nascimento_id')->references('id')->on('municipios');
            $table->foreign('municipio_residencia_id')->references('id')->on('municipios');
            $table->foreign('codigo_curso_1')->references('id')->on('cursos_superiores');
            $table->foreign('codigo_curso_2')->references('id')->on('cursos_superiores');
            $table->foreign('codigo_curso_3')->references('id')->on('cursos_superiores');
            $table->foreign('instituicao_curso_1')->references('id')->on('instituicoes_ensino_superior');
            $table->foreign('instituicao_curso_2')->references('id')->on('instituicoes_ensino_superior');
            $table->foreign('instituicao_curso_3')->references('id')->on('instituicoes_ensino_superior');
            $table->foreign('componente_curricular_1')->references('censo_id')->on('componentes_curriculares');
            $table->foreign('componente_curricular_2')->references('censo_id')->on('componentes_curriculares');
            $table->foreign('componente_curricular_3')->references('censo_id')->on('componentes_curriculares');
            $table->foreign('area_pos_graduacao_1')->references('id')->on('areas_pos_graduacao');
            $table->foreign('area_pos_graduacao_2')->references('id')->on('areas_pos_graduacao');
            $table->foreign('area_pos_graduacao_3')->references('id')->on('areas_pos_graduacao');
            $table->foreign('area_pos_graduacao_4')->references('id')->on('areas_pos_graduacao');
            $table->foreign('area_pos_graduacao_5')->references('id')->on('areas_pos_graduacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
