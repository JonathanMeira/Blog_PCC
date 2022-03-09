<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('index',compact('posts'));
    }
}
