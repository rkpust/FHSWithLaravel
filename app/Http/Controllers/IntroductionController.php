<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    
    public function introduction()
    {
        return view('introduction');
    }
    
}
