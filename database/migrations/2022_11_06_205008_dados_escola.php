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
        // Refazer as seeders de estados / municipios / distritos
        Schema::create('dados_escola', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->constrained('escolas');
            $table->string('nome', 100);
            $table->tinyInteger('situacao')->default(1);
            $table->date('inicio_ano_letivo')->nullable();
            $table->date('termino_ano_letivo')->nullable();
            $table->string('cep', 10);
            $table->string('municipio_id', 10);
            $table->string('distrito_id', 20);
            $table->string('endereco', 100);
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('telefone_1', 11)->nullable();
            $table->string('telefone_2', 11)->nullable();
            $table->string('email', 100)->nullable();

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
    }
};
