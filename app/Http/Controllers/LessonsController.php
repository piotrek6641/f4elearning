<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function show($title,$lessontitle)
    {
        $category= Category::where('title',$title)->get();
        $lesson= Lesson::whereBelongsTo($category)->where('title',$lessontitle)->first();
        return view('/lessons/show-lesson')->with('lesson',$lesson);
    }
    public function create()
    {
        $categories = Category::all();
        return view('lessons/create-lesson')->with('categories',$categories);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],

        ]);

        Lesson::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->option

        ]);

        return to_route('add-lesson');
    }
}
