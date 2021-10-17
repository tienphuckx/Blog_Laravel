<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.list',
        [
            'users' => User::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.edit',
        [
            'user' => new User,
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->avatar = $request->file('avatar')->store('uploads','public');
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('nguoidung.create')->with('msg','Thêm thành công');
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
        return view('admin.user.edit',
        [
            'user' => User::find($id),
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        if($request->file('avatar') != null){
            $user->avatar = $request->file('avatar')->store('uploads','public');
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('nguoidung.edit',$id)->with('msg','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteAll(Request $request){
        $ids = $request->ids;
        DB::delete('delete from users where id in ('.implode(",",$ids).')');
        return redirect()->route('nguoidung.index')->with('msg','Xóa thành công');
    }
}
