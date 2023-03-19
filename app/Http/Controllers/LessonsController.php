<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\LessonComment;
use Illuminate\Http\Request;


class LessonsController extends Controller
{
    public function show($title,$lessontitle)
    {
        $category= Category::where('title',$title)->get();
        $lesson= Lesson::whereBelongsTo($category)->where('title',$lessontitle)->first();
        $comments= LessonComment::whereBelongsTo($lesson)->get();
        return view('/lessons/show-lesson')->with('lesson',$lesson)->with('comments',$comments);
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
            'category_id' => $request->option,
            'link' => $request->link
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
            'description' => ['required', 'string', 'max:5024'],

        ],
        [
           'title.required'=>'title is required',
            'description.required'=>'description is required'
        ]);
        $lesson->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);;
        return back()->with('success', 'Lesson updated successfully');
    }


}
