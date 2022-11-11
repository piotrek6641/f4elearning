<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function show($title)
    {
        $lesson= Lesson::where('title',$title)->first();
        return view('/lessons/show-lesson')->with('lesson',$lesson);
    }
}
