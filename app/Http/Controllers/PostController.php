<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::latest()->get();
        $categories = Category::all();
        return view('/post/posts')->with(['posts'=>$posts,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('/post/create-post', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'author_id' => Auth::id()

        ]);

        return to_route('post-view')->with('success','post successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::where('id',$id)->get()->first();
        return view('/post/view-post')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Post::where('id',$id)->get()->first()->delete();
        return to_route('post-view')->with('success','post successfully deleted');
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        if($request->category =="all")
            return view('/post/posts')->with(['posts'=>Post::latest()->get(),'categories'=>$categories]);
        $request->validate([
           'category' => 'required'
        ]);

        $cat = $request->category;
        $posts = Post::where('category_id',$cat)->latest()->get();
        return view('/post/posts')->with(['posts'=>$posts,'categories'=>$categories, 'cat' =>$cat]);
    }
}
