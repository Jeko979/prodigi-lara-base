<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientiController;
use App\Http\Controllers\ordiniController;
use App\Http\Controllers\fattureController;
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


Route::get('/clienti',[clientiController::class, 'prova']);
Route::get('/ordini',[ordiniController::class, 'prova']);
Route::get('/fatture',[fattureController::class, 'prova']);