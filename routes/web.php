<?php

use App\Http\Controllers\AnnoncesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChessController;

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

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/chess', [ChessController::class, 'index'])->name('chess');
Route::resource('annonces', AnnoncesController::class)->only(['index']);
