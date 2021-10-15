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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.article.list',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.edit',
        [
            'article'=>new Article,
            'categories'=>Category::all()
        ]);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {   
        
        $article = new Article;
        $article->fill($request->all());
        $article->user_id = Auth::user()->id;
        $article->thumbnail = $request->thumbnail->store('uploads','public');
        $article->save();
        return redirect()->route('baiviet.create')->with('msg','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.article.edit',['article'=>$article,'categories'=>Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect()->route('baiviet.edit',$id)->with('msg','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back()->with('msg','Xóa thành công');
    }

    public function deleteAll(Request $request){
        $ids = $request->ids;
        DB::delete('delete from articles where id in ('.implode(",",$ids).')');
        return redirect()->route('baiviet.index')->with('msg','Xóa thành công');
    }
}
