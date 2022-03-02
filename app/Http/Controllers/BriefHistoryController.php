<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BriefHistoryController extends Controller
{
    public function index()
    {
       return view('briefhistory');
   }
}
