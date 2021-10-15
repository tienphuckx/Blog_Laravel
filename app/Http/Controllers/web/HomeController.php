<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Article;
class HomeController extends Controller
{

    
    public function home(){
        return view('web.home',
        [
            'articles' => Article::latest()->paginate(10)
        ]);
    }
}
