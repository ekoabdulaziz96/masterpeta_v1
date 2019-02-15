<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class LessonController extends Controller
{
    public function index()
    {
        $data['course']= Course::get()->all();
        return view('lesson',$data);
    }

    public function subjek(Request $request)
    {
        // $id=$request->get('id');
        $id=$request->id;
        // dd($id);
        $data['lesson']= Lesson::where('id_subjek', '=', $id)->get();
        $data['id_course']=$request->id;
        // dd($data);
        return view('subjek',$data);
    }
}
