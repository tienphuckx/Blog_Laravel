<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

// Route::get('/home', 'HomeController@index')->name('home');


/** GET ADMIN  PAGE */
Route::get('/admin/login',[AdminController::class,'get_login']);

Route::post('/admin/login',[AdminController::class,'post_login']);

Route::get('/admin/logout',[AdminController::class,'logout']);

Route::get('/admin/dashboard',[AdminController::class,'get_dashboard']);

Route::get('/admin/category',[AdminController::class,'get_category']);

Route::get('/admin/user',[AdminController::class,'get_user']);

Route::get('/admin/post',[AdminController::class,'get_post']);

Route::get('/admin/comment',[AdminController::class,'get_comment']);

Route::get('/admin/setting',[AdminController::class,'get_setting']);


