<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\DB;

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

Route::get('/home', [BookController::class,"get"]);

Route::get('/login', [AccountController::class,"login"]);
Route::post('/checklogin', [AccountController::class,"checkLogin"]);
Route::get('/logout', [AccountController::class,"logout"]);


Route::prefix('admin')->name("admin")->middleware('checkLogin:admin')->group(function() {
    Route::get('users', [AccountController::class,"index"])->name('userlist');
    Route::get('create', [AccountController::class,"create"]);
    Route::post('post', [AccountController::class,"createPost"]);
    Route::get('resetpass/{id}',[AccountController::class,"resetPassword"]);
});
// Route::get('admin/users', [AccountController::class,"index"])->name("userlist");
// Route::get("admin/create", [AccountController::class,"create"]);
// Route::post("admin/post", [AccountController::class,"createPost"]);
// Route::get('admin/resetpass/{id}', [AccountController::class,"resetPassword"]);


Route::prefix('user')->name('user')->middleware('checkLogin:admin,user')->group(function(){
    Route::get("profile/{id}", [AccountController::class,"details"]);
});
// Route::get("user/profile/{id}", [AccountController::class,"details"]);

