<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function show($id)
    {
        return view('web.profile.edit',
        [
            'profile' => User::find($id)
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        if($request->file('avatar') != null){
            $user->avatar = $request->file('avatar')->store('uploads','public');
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('msg','Cập nhật thành công');
    }
}
