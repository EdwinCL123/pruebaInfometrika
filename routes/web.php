<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::get('/index', 'App\Http\Controllers\ShowAll@show');
Route::get('/newPrestamo', 'App\Http\Controllers\ShowAll@newPrestamo');
Route::get('/createAutores', 'App\Http\Controllers\AutoresController@create');
Route::get('/createUsuarios', 'App\Http\Controllers\UsuariosController@create');


