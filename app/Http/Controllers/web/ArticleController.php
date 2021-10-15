<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Category;

class ArticleController extends Controller
{
   
    public function index()
    {
        return view('web.article.list',
        [
            'articles' => Article::where('user_id',Auth::user()->id)->latest()->paginate(10)
        ]);
    }

    
    public function create()
    {
        return view('web.article.edit',
        [
            'article' => new Article(),
            'categories' => Category::all()
        ]);
    }

   
    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $article->fill($request->all());
        $article->thumbnail = $request->thumbnail->store('uploads','public');
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect()->route('post.create')->with('msg','Thêm thành công');
    }

  
    public function show($id)
    {
        
        return view('web.article.view',
        [
            'article' => Article::find($id),
            'comments' => Comment::where('article_id',$id)->get()
        ]);
    }

    
    public function edit($id)
    {
        return view('web.article.edit',
        [
            'article' => Article::find($id),
            'categories' => Category::all()
        ]);
    }

   
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect()->route('post.edit',$id)->with('msg','Cập nhật thành công');
    }

   

    public function deleteAll(Request $request){
        $ids = $request->ids;
        DB::delete('delete from articles where id in ('.implode(",",$ids).')');
        return redirect()->route('post.index')->with('msg','Xóa thành công');
    }
}
