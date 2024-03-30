<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas',[ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas',[ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create',[ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}',[ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}',[ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');