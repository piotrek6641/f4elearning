<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('categories/show-categories')->with('categories', $categories);
    }
    public function showlessons($title)
    {
        $categories= Category::where('title',$title)->get();
        return view('lessons/show-lessons')->with('categories', $categories);
    }
    public function create()
    {
        return view('categories/add-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],

        ]);

        Category::create([
            'title' => $request->title,

        ]);

        return back()->with('success','new category successfully added');

    }
}
