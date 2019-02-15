<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('homeprofile');
    }

    public function database()
    {
        return view('database');
    }

    public function jasa()
    {
        return view('jasa');
    }
}
