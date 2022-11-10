<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('show-categories')->with('categories', $categories);
    }
    public function showlessons($title)
    {
        $categories= Category::where('title',$title)->get();
        return view('show-lessons')->with('categories', $categories);
    }
}
