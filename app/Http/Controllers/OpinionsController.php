<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionsController extends Controller
{
    
    public function Contact()
    {
        return view('contact');
    }

    public function OpinionStore(Request $request)
    {
       print_r($request->input());
    }
}
