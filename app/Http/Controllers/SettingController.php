<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SettingController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $data['user']=User::where('id','=',$id)->get();
        // dd($data);
        return view('setting',$data);
    }
}
