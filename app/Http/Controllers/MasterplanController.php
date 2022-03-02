<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterplanController extends Controller
{
    public function index()
    {
        return view('masterplan');
    }
}
