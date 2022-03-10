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
    

         $request->validate([
            'fullname' => 'required',
            'mobileno' => 'required|min:11',
            'address' => 'required',
            'subject' => 'required'

        ]);

        $data = array(

            'fullname' => $request->fullname,
            'mobile_no' => $request->mobileno,
            'email' => $request->email,
            'address' => $request->address,
            'comments' => $request->subject
            
        );

        $result  = DB::table('opinions')->insert($data);

        if($result){

            return redirect()->back()->With('success','আপনার মূল্যবান মতামতের জন্য ধন্যবাদ ।');

        }
        else{
            return redirect()->back()->With('fail','কোন সমস্যার কারণে আপনার মূল্যবান মতামত সংরক্ষণ করা যায়নি ।');
        }

        


    }


    function ShowOpinion(){
        $data = array(
            'list'=> DB::table('opinions')->get()
        );

        return view('admin.show-opinions',$data);
     }
}
