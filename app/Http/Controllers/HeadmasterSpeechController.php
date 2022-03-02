<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadmasterSpeechController extends Controller
{
    public function index()
    {
        return view('headmasters_speech');
    }
}
