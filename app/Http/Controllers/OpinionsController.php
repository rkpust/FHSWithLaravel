<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opinion;
use Illuminate\Support\Facades\DB;

class OpinionsController extends Controller
{
    
    public function Contact()
    {
        return view('contact');
    }

    public function OpinionStore(Request $request)
    {
      
      // print_r($request->input());

        $data = array(

            'fullname' => $request->fullname,
            'mobile_no' => $request->mobileno,
            'email' => $request->email,
            'address' => $request->address,
            'comments' => $request->subject
            
        );

        DB::table('opinions')->insert($data);
        return redirect()->back();


    }
}
