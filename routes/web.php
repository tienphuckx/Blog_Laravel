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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/quantri/baiviet', ArticleController::class);


// Route::get('/admin','AdminController@showImportantInfo')->middleware(['auth','role:admin']);

Route::get('/quantri/trangchu', function () {
    return view('admin.home');
})->name('quantri/trangchu');