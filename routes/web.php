<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\ValorparametroController;
use App\Http\Controllers\ConductoreController;
use App\Http\Controllers\VehiculoController;
use App\http\Controllers\MapaController;
use App\http\Controllers\RutaController;

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

//Login 

Route::get('/login',function(){
   return view ('login');
});

Route::get('/prueba',function(){
    return view ('prueba');
 });

//Parametros
Route::get('/parametros/index',[ParametroController::class,'index'])->name('parametros.index');
Route::get('/parametros/frmregistro',[ParametroController::class,'create'])->name('parametros.frmregistro');
Route::post('parametrosRegistro',[ParametroController::class,'store'])->name('parametrosRegistro');

//Valor Parametro
Route::get('/valorparametros/index',[valorparametroController::class,'index'])->name('valorparametros.index');
Route::get('/valorparametros/frmregistro',[valorparametroController::class,'create'])->name('valorparametros.frmregistro');
Route::post('/valorparametrosRegistro',[valorparametroController::class,'store'])->name('valorparametrosRegistro');

// Route::resource('parametros',ParametroController::class);

//Conductores

Route::get('/conductores/index',[ConductoreController::class,'index'])->name('conductores.index');
Route::get('/conductores/Registro',[ConductoreController::class,'create'])->name('conductores.frmregistro');

Route::post('/conductoresRegistro',[ConductoreController::class,'store'])->name('conductoresRegistro');

//Vehiculos
Route::get('/vehiculos/index',[VehiculoController::class,'index'])->name('vehiculos.index');
Route::get('/vehiculos/Registro',[VehiculoController::class,'create'])->name('vehiculos.frmregistro');

Route::post('/vehiculoRegistro',[VehiculoController::class,'store'])->name('vehiculosRegistro');

//Mapas
Route::get('/mapa/index', [MapaController::class,'index'])->name('mapa.index');

//Rutas
Route::get('/rutas/index', [RutaController::class,'index'])->name('rutas.index');
Route::get('/rutas/Registro', [RutaController::class,'create'])->name('rutas.frmregistro');
Route::post('/rutasRegistro', [RutaController::class,'store'])->name('rutasRegistro');


