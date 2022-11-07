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
    return view('/home');
});


Route::resource('gameas', 'App\Http\Controllers\GameaController');

Route::resource('externos', 'App\Http\Controllers\ExternoController');

Route::resource('organizacions', 'App\Http\Controllers\OrganizacionController');

Route::resource('urbanizacions', 'App\Http\Controllers\UrbanizacionController');

Route::resource('tipoactas', 'App\Http\Controllers\TipoActaController');

Route::resource('regactas', 'App\Http\Controllers\RegactaController');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
