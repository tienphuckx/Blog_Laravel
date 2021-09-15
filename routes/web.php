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





Route::get('/', function(){
    return view('welcome');
})->name('/');


Route::get('home', function(){
    return view('home');
})->name('home');






Auth::routes();

Route::group(['prefix'=>'quantri','middleware'=>'auth'], function ()
{
    Route::get('/trangchu', function () {
        return view('admin.home');
    })->name('quantri/trangchu');

    Route::group(['prefix'=>'baiviet'], function ()
    {
        Route::get('/',['as'=>'admin.cate.getList','uses'=>'ArticleController@index']);
        // Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
        // Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
        // Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
        // Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
        // Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
    });

   
    
   
    
});

