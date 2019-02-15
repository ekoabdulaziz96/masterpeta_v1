<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $data['class']=Classroom::get()->all();
        dd($data);
        return view('myClassRoom',$data);
    }
}
