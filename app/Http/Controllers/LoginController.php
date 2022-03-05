<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }


    public function Check(Request $request)
    {

        //validated admin login info

        $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:6|max:10'

        ]);

        return view('auth.login');
    }
    
}
