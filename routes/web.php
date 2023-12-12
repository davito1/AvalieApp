<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AvaliacaoController;
//use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pagelogin');
});
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao');
Route::delete('/delete/{id}', [AvaliacaoController::class, 'destroy'])->name('delete');
Route::get('/editavaliacao/{id}', [AvaliacaoController::class, 'edit'])->name('editar');
Route::put('/editar', [AvaliacaoController::class, 'update'])->name('up');
Route::get('/exportar-pdf/{id}', [AvaliacaoController::class, 'exportarPDF'])->name('exportar.pdf');
Route::get('/sair', [LoginController::class, 'logout'])->name('sair');

