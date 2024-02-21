<?php

use App\Http\Controllers\AbogadoController;
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

Route::get('/abogados/create', [AbogadoController::class, 'create'])->name('abogados-create');
Route::post('/abogados/store', [AbogadoController::class, 'store'])->name('abogados-store');
