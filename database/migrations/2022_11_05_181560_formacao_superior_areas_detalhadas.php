<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacao_superior_areas_detalhadas', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('nome');
            $table->string('area_especifica_id', 10);
            $table->foreign('area_especifica_id')->references('id')->on('formacao_superior_areas_especificas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacao_superior_areas_detalhadas');
    }
};
