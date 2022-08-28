<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalesController;
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

Route::get('/', 'App\Http\Controllers\ProductosController@index');

Route::resource('/categorias', CategoriasController::class);

Route::resource('/sucursales', SucursalesController::class);

Route::resource('/productos', ProductosController::class);

Route::get('/sucursales/{id}', 'App\Http\Controllers\SucursalesController@index');

Route::get('/categorias/{id}', 'App\Http\Controllers\CategoriasController@index');
