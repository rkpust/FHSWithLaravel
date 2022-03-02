<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function index()
    {
        return view('notices');
    }
}
