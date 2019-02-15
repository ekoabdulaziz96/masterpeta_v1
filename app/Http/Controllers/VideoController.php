<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;
use App\Lesson;
use Form;

class VideoController extends Controller
{
    //buat nampilin user
    public function index(Request $request)
    {
        $idLesson=$request->id_lesson;
        // dd($idLesson);
        $data['video']= DB::table('videos')
                -> join('lessons', 'videos.id_lesson','=','lessons.id')
                -> where('id_lesson','=', $idLesson)
                ->get();
        // dd($data);
        return view('video',$data);
    }

    public function video(Request $request)
    {   
        // dd($request);
        return (asd);
    }

    //opening admin add page
    public function addView()
    {
        $data['lesson']=Lesson::select('id')->get();
        // dd($data);
        return view('addVideo',$data);
    }

    //admin add new videos
    public function add(Request $request)
    {
        
    }
}
