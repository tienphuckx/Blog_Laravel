<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.article.list',['articles' => $articles]);
    }

    
    public function create()
    {
        return view('admin.article.edit',
        [
            'article'=>new Article,
            'categories'=>Category::all()
        ]);
    }

   
    public function store(ArticleRequest $request)
    {   
        
        $article = new Article;
        $article->fill($request->all());
        $article->user_id = Auth::user()->id;
        $article->thumbnail = $request->file('thumbnail')->store('uploads','public');
        $article->save();
        return redirect()->route('baiviet.create')->with('msg','Thêm thành công');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.article.edit',['article'=>$article,'categories'=>Category::all()]);
    }

   
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->user_id = Auth::user()->id;
        if($request->file('thumbnail') != null){
            $article->thumbnail = $request->file('thumbnail')->store('uploads','public');
        }
        $article->save();
        return redirect()->route('baiviet.edit',$id)->with('msg','Cập nhật thành công');
    }

    

    public function deleteAll(Request $request){
        $ids = $request->ids;
        DB::delete('delete from articles where id in ('.implode(",",$ids).')');
        return redirect()->route('baiviet.index')->with('msg','Xóa thành công');
    }
}
