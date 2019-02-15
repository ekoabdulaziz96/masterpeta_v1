<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecomeACoachController extends Controller
{
    public function index()
    {
        return view('coach');
    }
}
