<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {

        return view('magazine');
    }
}
