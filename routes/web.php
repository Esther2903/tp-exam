<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

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

Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');

Route::post('/inscription/store', [InscriptionController::class, 'store'])->name('inscription.store');

Route::get('/recherche', [InscriptionController::class, 'recherche'])->name('recherche');

Route::get('/menu', [InscriptionController::class, 'menu'])->name('menu');

Route::get('/info', [InscriptionController::class, 'info'])->name('info');

Route::get('/indexDec', [InscriptionController::class, 'indexDEC'])->name('index');