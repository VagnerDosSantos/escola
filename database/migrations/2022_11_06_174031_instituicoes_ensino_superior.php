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
        Schema::create('instituicoes_ensino_superior', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('nome');
            $table->tinyInteger('situacao');
            $table->tinyInteger('categoria');
            $table->string('codigo_municipio', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicoes_ensino_superior');
    }
};
