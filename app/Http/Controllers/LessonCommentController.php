<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\LessonComment;
class LessonCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'content'=>['required','max:255','min:10']
            ]
        );
        LessonComment::create([
            'content' => $request->text,
            'user_id'=>Auth::id(),
            'lesson_id'=>$request->lessonid
        ]);
        return back(302)->with('success','comment successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title, $lesson, $id)
    {
        $lc = LessonComment::where('id',$id)->get()->first();
        $category= Category::where('title',$title)->get();

        return view('/lessons/show-lesson-comment')->with('comment',$lc)->with('title',$category)->with('lesson',$lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LessonComment::where('id',$id)->get()->first()->delete();
        return back()->with('success','comment successfully deleted');
    }
}
