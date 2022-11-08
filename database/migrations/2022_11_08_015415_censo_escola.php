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
        Schema::create('censo_escola', function (Blueprint $table) {
            $table->id();
            $table->year('periodo');
            $table->foreignId('escola_id')->constrained('escolas');
            $table->string('local_funcionamento');
            $table->tinyInteger('forma_ocupacao')->nullable();
            $table->boolean('predio_escolar_compartilhado')->nullable();
            $table->string('codigo_escola_compartilha')->nullable();
            $table->boolean('fornece_agua_potavel');
            $table->string('abastecimento_agua');
            $table->string('fonte_energia');
            $table->string('esgotamento_sanitario');
            $table->string('destinacao_lixo');
            $table->string('tratamento_lixo');
            $table->string('dependencias_fisicas_existentes');
            $table->string('recursos_acessibilidade');
            $table->integer('qtd_salas_dentro_predio')->nullable();
            $table->integer('qtd_salas_fora_predio')->nullable();
            $table->integer('qtd_salas_climatizadas')->nullable();
            $table->integer('qtd_salas_acessibilidade')->nullable();
            $table->string('equipamentos_uso_tecnico_administrativo');
            $table->integer('qtd_dvds')->nullable();
            $table->integer('qtd_aparelhos_som')->nullable();
            $table->integer('qtd_tv')->nullable();
            $table->integer('qtd_lousa_digital')->nullable();
            $table->integer('qtd_projetor_multimidia')->nullable();
            $table->integer('qtd_desktop_alunos')->nullable();
            $table->integer('qtd_computadores_portateis_alunos')->nullable();
            $table->integer('qtd_tablets_alunos')->nullable();
            $table->string('acesso_internet');
            $table->string('equipamentos_alunos_utilizam_internet')->nullable();
            $table->string('rede_local_computadores');
            $table->integer('qtd_aux_administrativos')->nullable();
            $table->integer('qtd_aux_servicos_gerais')->nullable();
            $table->integer('qtd_bibliotecarios')->nullable();
            $table->integer('qtd_bombeiros')->nullable();
            $table->integer('qtd_coord_turno_disciplinar')->nullable();
            $table->integer('qtd_fonoaudiologos')->nullable();
            $table->integer('qtd_nutricioniastas')->nullable();
            $table->integer('qtd_psicologos')->nullable();
            $table->integer('qtd_cozinheiros')->nullable();
            $table->integer('qtd_supervisores_pedagogicos')->nullable();
            $table->integer('qtd_secretarios_escolares')->nullable();
            $table->integer('qtd_segurancas')->nullable();
            $table->integer('qtd_monitores')->nullable();
            $table->integer('qtd_diretores_adjuntos')->nullable();
            $table->integer('qtd_assistentes_sociais')->nullable();
            $table->boolean('oferece_alimentacao');
            $table->string('instrumentos_materiais_socioculturais');
            $table->boolean('educacao_escolar_indigena');
            $table->string('lingua_ensino_ministrado', 100)->nullable();
            $table->string('codigos_lingua_indigena')->nullable();
            $table->boolean('realiza_exame_ingresso')->nullable();
            $table->string('reserva_vagas_cotas')->nullable();
            $table->boolean('possui_blog')->nullable();
            $table->boolean('compartilha_espaco_comunidade')->nullable();
            $table->boolean('utiliza_espaco_equipamentos_alunos')->nullable();
            $table->string('orgaos_colegiados');
            $table->tinyInteger('possui_ppp');

            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('censo_escola');
    }
};
