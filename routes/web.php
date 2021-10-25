<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



/**DEFAULT */

Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('home', function(){
    if(Auth::user()->role->code == 'admin')
        return redirect('quantri/trangchu');
    else
        return redirect('trangchu');
})->name('home');


/** ADMIN MANAGER */
Auth::routes();
Route::middleware(['auth','role:admin'])->group(function()
{

    Route::get('quantri/trangchu',function(){
        return view('admin.home');
    });

    Route::resource('quantri/baiviet','admin\ArticleController');
    Route::delete('deleteAllArticle','admin\ArticleController@deleteAll');

    Route::resource('quantri/theloai','admin\CategoryController');
    Route::delete('deleteAllCategory','admin\CategoryController@deleteAll');

    Route::resource('quantri/role','admin\RoleController');
    Route::delete('deleteAllRole','admin\RoleController@deleteAll');

    Route::resource('quantri/nguoidung','admin\UserController');
    Route::delete('deleteAllUser','admin\UserController@deleteAll');

    Route::resource('quantri/binhluan','admin\CommentController');
    Route::delete('deleteAllComment','admin\CommentController@deleteAll');
});

/** USER MANAGER */

Route::middleware(['auth','role:user'])->group(function()
{
    Route::resource('post','web\ArticleController');
    Route::delete('deleteAllPost','web\ArticleController@deleteAll');

    Route::resource('profile','web\ProfileController');
    Route::resource('comment','web\CommentController');
});

Route::resource('category','web\CategoryController');
Route::get('trangchu','web\HomeController@home')->name('trangchu');

