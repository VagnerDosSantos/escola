<?php

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
    $arquivo = explode(PHP_EOL, file_get_contents(public_path('paises.csv')));
    $json = 'private array $paises = [';

    foreach ($arquivo as $row) {
        if ('' == $row) {
            continue;
        }

        $row = explode(';', $row);
        $nacionalidade = '' == $row[2] ? null : "'$row[2]'";
        $ddi = '' == $row[3] ? null : "'$row[3]'";

        $json .= "
        [
            'id' => '$row[0]',
            'nome' => '$row[1]',
            'nacionalidade' => $nacionalidade,
            'ddi' => $ddi,
        ],";
    }

    $json .= '];';

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
