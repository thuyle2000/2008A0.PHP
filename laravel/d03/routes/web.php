<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookPageController;


use Illuminate\Http\Request;
use App\Models\Cat;

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

// Route::get('/test', function () {
//     $cat = Cat::find(1);
//     dd($cat , $cat->suppliers, $cat->products);

//     echo "<h2> Category: $cat->name <h2><hr>";

//     echo "<h3>Supplier </h3>";
//     echo "<ul>" ;
//     foreach ($cat->suppliers as $supplier) {
//         echo " <li> $supplier->name, $supplier->email </li>";
//     }
//     echo "</ul>";

//     echo "<h3>Product </h3>";
//     echo "<ul>" ;
//     foreach ($cat->products as $pro) {
//         echo " <li> $pro->name, $pro->price, $pro->qoh </li>";
//     }
//     echo "</ul>";

// });



//Pagination Ajax
Route::get('/pagination', [BookPageController::class,'index']);  // 'PaginationController@index');

Route::post('pagination/fetch', [BookPageController::class,'fetch'])->name('pagination.fetch');
// Route::post('pagination/fetch', 'PaginationController@fetch')->name('pagination.fetch');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.home');
});


Route::get('/admin/book',[BookController::class,'get']);
Route::get('/admin/book/create',[BookController::class,'create']);
Route::post('/admin/book/createPost',[BookController::class,'createPost']);
Route::get('/admin/book/edit/{id}',[BookController::class,'edit']);
Route::post('/admin/book/editPost',[BookController::class,'editPost']);
Route::get('/admin/book/delete/{id}',[BookController::class,'delete']);
