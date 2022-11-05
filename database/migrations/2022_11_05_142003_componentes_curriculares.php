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
        Schema::create('componentes_curriculares', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('abreviacao')->nullable();
            $table->integer('censo_id')->nullable();
            $table->boolean('permite_excluir')->default(false);

            $table->foreignId('categoria_id')
                ->constrained('categoria_componentes_curriculares');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('componentes_curriculares');
    }
};
