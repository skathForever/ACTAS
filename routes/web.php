<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameaController;
use App\Http\Controllers\ExternosController;
use App\Http\Controllers\OrganizacionController;
use App\Http\Controllers\UrbanizacionController;
use App\Http\Controllers\TipoActaController;
use App\Http\Controllers\RegActaController;

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
    return redirect ('home');
});



Route::resource('distritos', 'App\Http\Controllers\DistritoController');

Route::resource('gameas', 'App\Http\Controllers\GameaController');

Route::resource('externos', 'App\Http\Controllers\ExternoController');

Route::resource('organizacions', 'App\Http\Controllers\OrganizacionController');

Route::resource('urbanizacions', 'App\Http\Controllers\UrbanizacionController');

Route::resource('tipoactas', 'App\Http\Controllers\TipoActaController');

Route::resource('actas', 'App\Http\Controllers\ActaController');

Route::resource('actores', 'App\Http\Controllers\ActorController');

Route::resource('registroReuniones', 'App\Http\Controllers\RegistroreunionController');

Route::resource('proyectos', 'App\Http\Controllers\ProyectoController');

Route::resource('proyectos', 'App\Http\Controllers\ProyectoController');


Route::post('/otros','App\Http\Controllers\ActorController@otro');

Route::resource('estadisticas','App\Http\Controllers\EstadisticaController');


Route::get('/otros3','App\Http\Controllers\ActaController@crear2');

Route::get('/acta/{id}/actaByProyecto','App\Http\Controllers\RegistroreunionController@index2');

Route::get('/acta/{id}/asignarByActa','App\Http\Controllers\ActaController@edit2');


Route::put('/acta/{id}/editByActa','App\Http\Controllers\ActaController@update2');



Route::get('/reunions2/{id}/reunionByActa','App\Http\Controllers\ActorController@reunionByActa');

Route::get('/reunions3/{id}/ActorReunionByActa','App\Http\Controllers\ActorController@actorReunionByActa');





//Auth::routes('');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
