<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
    public function edit()
    {
        $categories = Category::all();
        return view('categories/edit-category')->with('categories',$categories);
    }
    public function update(Request $request)
    {
        $category = Category::where('id',$request->option);
        $request->validate([
            'title' => ['required','string', 'max:255']
        ]);
        $category->update(['title' => $request->title]);
        return back()->with('success','Successfully changed category name');

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
