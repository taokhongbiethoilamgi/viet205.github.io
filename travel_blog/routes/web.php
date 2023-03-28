<?php

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

Route::get('/','App\Http\Controllers\BlogsController@trangchu');
Route::get('/bai-viet/{id}','App\Http\Controllers\BlogsController@bai_viet');
Route::get('/tim-kiem','App\Http\Controllers\BlogsController@tim_kiem');

Route::resource('blogs','App\Http\Controllers\BlogsController');
Route::resource('category','App\Http\Controllers\CategoryController');
Route::resource('post','App\Http\Controllers\PostController');


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
