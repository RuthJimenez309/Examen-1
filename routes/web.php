<?php

use App\Http\Controllers\PrestamoController;
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
    return view('welcome');
});


Route::get('/prestamo/crear', [PrestamorController::class, 'prestamo'])->name('prestamo_create');
Route::post('/prestmo/guardar', [PrestamoController::class, 'prestamo'])->name('prestamo_guarda');