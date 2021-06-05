<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


// dinh nghia route cho cac xu ly CRUD tren bang tbBOOK
Route::get('/book', [BookController::class,'index'])->name('book-index');

Route::get('/book/create',[BookController::class,'create']);
Route::post('/book/postCreate',[BookController::class,'postCreate']) ;

Route::get('/book/edit/{id}',[BookController::class,'edit']);
Route::post('/book/postedit/{id}',[BookController::class,'postEdit']);

Route::get('/book/delete/{id}',[BookController::class,'delete']);
