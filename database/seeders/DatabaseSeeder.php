<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Remover depois
        User::firstOrCreate(
            [
                'username' => 'teste',
            ],
            [
                'name' => 'Administrador',
                'email' => 'teste@gmail.com',
                'password' => Hash::make('123456'),
            ]
        );

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
            EstruturaCurricularSeeder::class,
            ModalidadeSeeder::class,
            MediacaoPedagogicaSeeder::class,
            TipoAtendimentoPedagogicoSeeder::class,
            EtapasSeeder::class,
            AtividadesAeeSeeder::class,
            AtividadesComplementaresSeeder::class,
            PaisesSeeder::class,
            EstadosSeeder::class,
            MunicipiosSeeder::class,
            DistritosSeeder::class,
            OrgaoRegionalSeeder::class,
            AreasPosGraduacaoSeeder::class,
        ]);
    }
}
