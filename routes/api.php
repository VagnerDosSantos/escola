<?php

use App\Http\Controllers\Escola\AlunoController;
use App\Http\Controllers\Escola\EscolaController;
use App\Http\Controllers\Escola\FuncionarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('escola')->group(function () {
    Route::post('/', [EscolaController::class, 'salvar']);
});

Route::prefix('funcionario')->group(function () {
    Route::get('/', [FuncionarioController::class, 'listar']);
    Route::get('/{id}', [FuncionarioController::class, 'getFuncionario']);
    Route::post('/', [FuncionarioController::class, 'salvar']);
    Route::put('/{id}', [FuncionarioController::class, 'editar']);
    Route::delete('/{id}', [FuncionarioController::class, 'excluir']);
    Route::patch('/{id}', [FuncionarioController::class, 'recuperar']);
});

Route::prefix('aluno')->group(function () {
    Route::post('/', [AlunoController::class, 'salvar']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
