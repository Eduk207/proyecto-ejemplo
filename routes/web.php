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
use App\Http\Controllers\ReoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\DelitoController;
use App\Http\Controllers\DifuntoController;
use App\Http\Controllers\FugaController;
use App\Http\Controllers\CondenaController;
use App\Http\Controllers\ExcarseladoController;
use App\Http\Controllers\Reo_delitoController;
use App\Http\Controllers\RasgosController;
use App\Http\Controllers\IngresoController;



Route::get('/home', [HomeController::class,'index']);

//Reo
Route::get('reo', [ReoController::class, 'index']);
Route::get('reo/create', [ReoController::class, 'create']);
Route::get('reo/{reo}', [ReoController::class, 'show']);

//Ubicacion
Route::get('ubicacion', [UbicacionController::class, 'index']);
Route::get('ubicacion/create', [UbicacionController::class, 'create']);
Route::get('ubicacion/{ubicacion}', [UbicacionController::class, 'show']);

//Delito
Route::get('delito', [DelitoController::class, 'index']);
Route::get('delito/create', [DelitoController::class, 'create']);
Route::get('delito/{delito}', [DelitoController::class, 'show']);

//Difunto
Route::get('difunto', [DifuntoController::class, 'index']);
Route::get('difunto/create', [DifuntoController::class, 'create']);
Route::get('difunto/{difunto}', [DifuntoController::class, 'show']);

//Fuga
Route::get('fuga', [FugaController::class, 'index']);
Route::get('fuga/create', [FugaController::class, 'create']);
Route::get('fuga/{fuga}', [FugaController::class, 'show']);

//Condena
Route::get('condena', [CondenaController::class, 'index']);
Route::get('condena/create', [CondenaController::class, 'create']);
Route::get('condena/{condena}', [CondenaController::class, 'show']);

//Excarselado
Route::get('excarselado', [ExcarseladoController::class, 'index']);
Route::get('excarselado/create', [ExcarseladoController::class, 'create']);
Route::get('excarselado/{excarselado}', [ExcarseladoController::class, 'show']);

//Reo_delito
Route::get('reo_delito', [Reo_delitoController::class, 'index']);
Route::get('reo_delito/create', [Reo_delitoController::class, 'create']);
Route::get('reo_delito/{reo_delito}', [Reo_delitoController::class, 'show']);

//Rasgos
Route::get('rasgos', [RasgosController::class, 'index']);
Route::get('rasgos/create', [RasgosController::class, 'create']);
Route::get('rasgos/{rasgos}', [RasgosController::class, 'show']);

//Ingreso
Route::get('ingreso', [IngresoController::class, 'index']);
Route::get('ingreso/create', [IngresoController::class, 'create']);
Route::get('ingreso/{ingreso}', [IngresoController::class, 'show']);

