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

Route::get('/', function () {
    //return view('auth.login');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/roles', App\Http\Controllers\RolController::class);
Route::resource('/usuarios', App\Http\Controllers\UserController::class);
Route::resource('/productos', App\Http\Controllers\ProductoController::class);
Route::resource('/compras', App\Http\Controllers\CompraController::class);
Route::resource('/facturas', App\Http\Controllers\FacturaController::class);
Route::resource('/ventas', App\Http\Controllers\VentaController::class);
Route::resource('/traslados', App\Http\Controllers\TrasladoController::class);
