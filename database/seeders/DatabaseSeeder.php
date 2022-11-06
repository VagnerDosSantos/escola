<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaComponentesCurricularesSeeder::class,
            ComponentesCurricularesSeeder::class,
            CategoriaCursosTecnicosSeeder::class,
            CursosTecnicosSeeder::class,
            AreasGeraisSeeder::class,
            AreasEspecificasSeeder::class,
            AreasDetalhadasSeeder::class,
            CursosSuperioresSeeder::class,
            InstituicoesEnsinoSeeder::class,
            LinguaIndigenaSeeder::class,
        ]);
    }
}
