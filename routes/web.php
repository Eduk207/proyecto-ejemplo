<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\reoController;
use App\Http\Controllers\ubicacionController;
use App\Http\Controllers\delitoController;
use App\Http\Controllers\difuntoController;
use App\Http\Controllers\fugaController;
use App\Http\Controllers\condenaController;
use App\Http\Controllers\excarseladoController;
use App\Http\Controllers\reo_delitoController;
use App\Http\Controllers\rasgosController;
use App\Http\Controllers\ingresoController;



Route::get('/', HomeController::class);

//Reo
Route::get('reo', [reoController::class, 'index']);
Route::get('reo/create', [reoController::class, 'create']);
Route::get('reo/{reo}', [reoController::class, 'show']);

//Ubicacion
Route::get('ubicacion', [ubicacionController::class, 'index']);
Route::get('ubicacion/create', [ubicacionController::class, 'create']);
Route::get('ubicacion/{ubicacion}', [ubicacionController::class, 'show']);

//Delito
Route::get('delito', [delitoController::class, 'index']);
Route::get('delito/create', [delitoController::class, 'create']);
Route::get('delito/{delito}', [delitoController::class, 'show']);

//Difunto
Route::get('difunto', [difuntoController::class, 'index']);
Route::get('difunto/create', [difuntoController::class, 'create']);
Route::get('difunto/{difunto}', [difuntoController::class, 'show']);

//Fuga
Route::get('fuga', [fugaController::class, 'index']);
Route::get('fuga/create', [fugaController::class, 'create']);
Route::get('fuga/{fuga}', [fugaController::class, 'show']);

//Condena
Route::get('condena', [condenaController::class, 'index']);
Route::get('condena/create', [condenaController::class, 'create']);
Route::get('condena/{condena}', [condenaController::class, 'show']);

//Excarselado
Route::get('excarselado', [excarseladoController::class, 'index']);
Route::get('excarselado/create', [excarseladoController::class, 'create']);
Route::get('excarselado/{excarselado}', [excarseladoController::class, 'show']);

//Reo_delito
Route::get('reo_delito', [reo_delitoController::class, 'index']);
Route::get('reo_delito/create', [reo_delitoController::class, 'create']);
Route::get('reo_delito/{reo_delito}', [reo_delitoController::class, 'show']);

//Rasgos
Route::get('rasgos', [rasgosController::class, 'index']);
Route::get('rasgos/create', [rasgosController::class, 'create']);
Route::get('rasgos/{rasgos}', [rasgosController::class, 'show']);

//Ingreso
Route::get('ingreso', [ingresoController::class, 'index']);
Route::get('ingreso/create', [ingresoController::class, 'create']);
Route::get('ingreso/{ingreso}', [ingresoController::class, 'show']);

