<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('web.category.list',
        [
            'categories' => Category::all()
        ]);
    }

   
    
    public function show($id)
    {
        return view('web.category.view',
        [
            'category' => Category::find($id),
            'articles' => Article::where('category_id',$id)->latest()->paginate(10)
        ]);
    }

   
}
