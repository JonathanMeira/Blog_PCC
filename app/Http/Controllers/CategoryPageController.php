<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('layouts.category',compact('posts'));
    }
}
