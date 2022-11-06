<?php

use App\Models\Localidade\Estado;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('teste', function () {
    $arquivo = explode(PHP_EOL, file_get_contents(public_path('municipios.csv')));
    $json = 'private array $municipios = [';
    $estadosArray = Estado::all()->toArray();
    $estados = [];

    foreach ($estadosArray as $estado) {
        $estados[$estado['sigla']] = $estado['id'];
    }

    foreach ($arquivo as $row) {
        if ('' == $row) {
            continue;
        }

        $row = explode(';', $row);
        // dd($row[0], $estados[$row[0]]);
        // $estadoId = $estados[$row[0]];
        $estadoId = Estado::where('sigla', $row[0])->first()->id;
        $nome = addslashes($row[2]);
        $json .= "
        [
            'id' => '$row[1]',
            'nome' => '$nome',
            'estado_id' => $estadoId,
        ],";
    }

    $json .= '
];';

    echo '<pre>';
    print_r($json);
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
