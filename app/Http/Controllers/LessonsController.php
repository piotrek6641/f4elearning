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

        return back()->with('success','lesson created successfully');
    }
    public function edit($title,$lessontitle)
    {
        $category= Category::where('title',$title)->get();
        $lesson= Lesson::whereBelongsTo($category)->where('title',$lessontitle)->first();
        return view('/lessons/edit-lesson')->with('lesson',$lesson);
    }
    public function update(Request $request,$title,$lessontitle)
    {
        $category= Category::where('title',$title)->get();
        $lesson= Lesson::whereBelongsTo($category)->where('title',$lessontitle)->first();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],

        ],
        [
           'title.required'=>'title is required',
            'description.required'=>'description is required'
        ]);
        $lesson->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);;
        return back()->with('success', 'Lesson updated successfully');
    }


}
