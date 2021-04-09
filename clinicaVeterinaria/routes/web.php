<?php

use App\Http\Controllers\ControladorAnimais;
use App\Http\Controllers\ControladorClientes;
use App\Http\Controllers\ControladorConsultas;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::resource('/animais', ControladorAnimais::class);
Route::resource('/clientes', ControladorClientes::class);
Route::resource('/consultas', ControladorConsultas::class);

Route::resource('/animais/novo', ControladorAnimais::class);
Route::resource('/clientes/novo', ControladorClientes::class);
Route::resource('/consultas/novo', ControladorConsultas::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
