<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    
    public function show($id)
    {
        return view('web.profile.view',
        [
            'profile' => User::find($id)
        ]);
    }

    
}
