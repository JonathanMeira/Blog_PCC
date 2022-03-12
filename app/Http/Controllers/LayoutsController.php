<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('layouts.article-details',compact('posts'));
    }
}
