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
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
