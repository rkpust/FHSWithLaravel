<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

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

        $adminInfo = Admin::where('email','=',$request->email)->first();

        if(!$adminInfo){
            return back()->with('fail','Email address is not correct.');
        }

        else{
            if(Hash::check($request->password,$adminInfo->password)){
                $request->session()->put('LoggedAdmin',$adminInfo->id);

                return redirect('admin/dashboard');

            }
            else{
                return back()->with('fail','Password is not correct.');
            }
        }

    }

    function Logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/login');
        }

    }

    function dashboard()
    {
        $data = ['LoggedAdminInfo'=>Admin::where('id','=',session('LoggedAdmin'))->first()];
        return view('admin.dashboard',$data);
     }

    
}
