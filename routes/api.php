<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AutenticarController;
use App\Http\Controllers\Api\AvaliacoesController;
use App\Http\Controllers\Api\UsuarioController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/pacientes')->group(function() {
    Route::get('/', [AvaliacoesController::class, 'listar']);
    Route::post('/', [AvaliacoesController::class, 'cadastrar']);

});
Route::prefix('/cadastrar')->group(function() {
    Route::post('/', [UsuarioController::class, 'cadastrar']);

});
Route::post('/login', [UsuarioController::class, 'login']);

Route::post('/auth/login', [AutenticarController::class, 'login']);


//ipconfig /all ( Endereço IPv4)
//php artisan serve --host=0.0.0.0
