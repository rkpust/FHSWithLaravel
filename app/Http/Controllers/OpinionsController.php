<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Controllers;
use\App\Models\Opinion;

class OpinionsController extends Controller
{
    
    public function Contact()
    {
        return view('contact');
    }
}
