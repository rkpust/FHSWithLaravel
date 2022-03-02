<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AimObjectivesController extends Controller
{
    public function index()
    {
        return view('aim&objectives');
    }
}
