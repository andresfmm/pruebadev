<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosCiudad\DepartamentosCiudadController;
use App\Http\Controllers\Cotizacion\CotizacionController;

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

Route::get('get-departamentos', [DepartamentosCiudadController::class, 'index']);
Route::post('get-ciudades', [DepartamentosCiudadController::class, 'ciudades']);

Route::post('guardar-cotizacion', [CotizacionController::class, 'store']);
