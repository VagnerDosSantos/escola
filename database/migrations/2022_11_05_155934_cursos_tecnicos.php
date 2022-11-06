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
        Schema::create('cursos_tecnicos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nome');
            $table->integer('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias_cursos_tecnicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_tecnicos');
    }
};
