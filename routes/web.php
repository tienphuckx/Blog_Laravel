<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

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





Route::get('/', function(){
    return redirect()->route('login');
});


Route::get('home', function(){
    if(Auth::user()->role->code == 'admin')
        return redirect('/quantri/trangchu');
    else
        return redirect('/trangchu');
})->name('home');



Route::get('/trangchu',function(){
    return view('web.home',['articles'=> Article::paginate(10)]);
});

Auth::routes();
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/quantri/trangchu',function(){
        return view('admin.home');
    });

    Route::resource('quantri/baiviet','ArticleController');
    Route::delete('/deleteAllArticle','ArticleController@deleteAll');

    Route::resource('quantri/theloai','CategoryController');
    Route::delete('/deleteAllCategory','CategoryController@deleteAll');

    Route::resource('quantri/role','RoleController');
    Route::delete('/deleteAllRole','RoleController@deleteAll');

    Route::resource('quantri/nguoidung','UserController');
    Route::delete('/deleteAllUser','UserController@deleteAll');

});


