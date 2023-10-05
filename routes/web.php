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
    return view('auth.login');
});
Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home ');
    })->name('home');
});

Auth::routes();

Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class);
Route::resource('mantenimientos', App\Http\Controllers\MantenimientoController::class);
Route::resource('piezas', App\Http\Controllers\PiezaController::class);
Route::resource('notificaciones', App\Http\Controllers\NotificacioneController::class);