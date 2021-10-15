<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    
    public function index()
    {
        return view('admin.comment.list',
        [
            'comments' => Comment::latest()->paginate(10),

        ]);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        return view('admin.comment.edit',
        [
            'comment' => Comment::find($id),
        ]);
    }

   
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->fill($request->all());
        $comment->save();
        return back()->with('msg','Cập nhật thành công');
    }

    
    public function destroy($id)
    {
        //
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        foreach ($ids as $id) {
            Comment::find($id)->delete();
        }
    }
}
