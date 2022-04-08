<?php

use App\Http\Controllers\Planos\PlanosDepaController;
use Illuminate\Support\Facades\Route;

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

// DECLARACION DE RUTA CON UN MEDODO IDENTIFICATIVO (->NAME)
Route::get('plano/Departamentos', [PlanosDepaController::class, 'index'])->name('planoDepa.index');

// DECLARACION DE RUTA PARA INGRESAR UNA IMAGEN A LA TABLA BBDD
Route::post('plano/Imagen', [PlanosDepaController::class, 'store'])->name('planoDepa.store');

