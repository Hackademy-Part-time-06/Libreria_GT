<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/home', [BookController::class, 'index'])-> name('book.index');
Route::get('/libri/crea', [BookController::class, 'create'])-> name('book.create');
Route::post('/libri/salva', [BookController::class, 'store'])-> name('book.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])-> name('book.show');

Route::get('/categoria', [CategoryController::class, 'index'])-> name('category.index');
Route::get('/categoria/crea', [CategoryController::class, 'create'])-> name('category.create');
Route::post('/categoria/salva', [CategoryController::class, 'store'])-> name('category.store');
Route::get('/categoria/{category}/dettagli', [CategoryController::class, 'show'])-> name('category.show');