<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
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
    return view('layouts.web');
})->middleware('auth');


//Inlog verificatie
Route::resource('products', \App\Http\Controllers\ProductController::Class);

//users  pages
Route::resource('users', \App\Http\Controllers\UserController::Class);

//Admin
Route::resource('admins', \App\Http\Controllers\AdminController::Class);

//Route::get('/home', [Login::class, 'home']);//

Auth::routes();

Route::get('/home', [App\Http\Controllers\Login::class, 'index'])->name('home');

//Search route
Route::get('search', [\App\Http\Controllers\ProductController::class, 'search'])->name('search');

//status
Route::post('changeStatus', [\App\Http\Controllers\ProductController::class, 'changeStatus'])->name('changeStatus');

// Filter
Route::get('filter', [\App\Http\Controllers\ProductController::class, 'filter'])->name('filter');
