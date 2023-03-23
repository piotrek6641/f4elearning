<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request)
    {
         $post = Post::find($request->post);
         $request->user()->like($post);
         return redirect()->back();
        // $request->user()->like($request->likeable());

        // if ($request->ajax()) {
        //     return response()->json([
        //         'likes' => $request->likeable()->likes()->count(),
        //     ]);
        // }

        // return redirect()->back();
    }

    public function unlike(Request $request)
    {
        $post = Post::find($request->post);
        $request->user()->unlike($post);
        return redirect()->back();
        // $request->user()->unlike($request->likeable());

        // if ($request->ajax()) {
        //     return response()->json([
        //         'likes' => $request->likeable()->likes()->count(),
        //     ]);
        // }

        // return redirect()->back();
    }
}
