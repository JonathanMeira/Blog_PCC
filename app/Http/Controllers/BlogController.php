<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        $categories= Category::all();

        $latestPost = Posts::latest('created_at')->first();

        return view('index',compact(
            'posts',
            'latestPost',
            'categories'
        ));
    }
}
