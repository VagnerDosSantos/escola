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
    $arquivo = explode(PHP_EOL, file_get_contents(public_path('ies.csv')));
    $json = [];

    foreach ($arquivo as $row) {
        if ('' == $row) {
            continue;
        }

        $row = explode(';', $row);

        $json[] = [
            'id' => "'$row[0]',",
            'nome' => "'$row[1]',",
            'situacao' => "'$row[2]',",
            'categoria' => "'$row[3]',",
            'codigo_municipio' => "'$row[4]'",
        ];
    }

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
