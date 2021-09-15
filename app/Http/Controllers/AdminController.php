<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    // Get Login View
    public function get_login()
    {
    	return view('back-end.login');
    }

    // Handle Submit Form
    function post_login(Request $request)
    {
    	$request->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck = Admin::where([
            'username'=>$request->username,
            'password'=>$request->password
        ])->count();

    	if($userCheck>0)
        {
            $adminData=Admin::where([
                'username'=>$request->username,
                'password'=>$request->password
            ])->first();

            session(['adminData'=>$adminData]);
    		return redirect('admin/dashboard');
    	}else{
    		return redirect('admin/login')->with('error','Invalid username/password!!');
    	}

    }

    // Return Dashboard of Admin
    function get_dashboard()
    {
        // $posts=Post::orderBy('id','desc')->get();
    	// return view('backend.dashboard',['posts'=>$posts]);

        return view('back-end.dashboard');
    }

    //Return List Category
    public function get_category()
    {
        return view('back-end.category.list');
    }

    //Return view list User
    public function get_user()
    {
        return view('back-end.user.list');
    }

    public function get_user_detail()
    {
        return view('back-end.user.detail');
    }

   
}
