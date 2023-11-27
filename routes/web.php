<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PagosController;

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


Route::resource('clientes', ClienteController::class)->except('update');
Route::put('clientes', [ClienteController::class, 'update'])->name('clientes.update');

Route::resource('productos',ProductosController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('pagos', PagosController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/configuracion', function () {
        return view('configuracion');
    })->name('config');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
