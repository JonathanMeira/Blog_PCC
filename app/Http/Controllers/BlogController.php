<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Commentary;
use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(15);

        $recentPosts = Posts::orderBy('created_at')->paginate(7);
        $recentPosts = $recentPosts->slice(0,-1);
        $secondMostRecentPost = $recentPosts->last();
        $recentPosts = $recentPosts->slice(0,-1);
        $thirdMostRecentPost = $recentPosts->last();
        $recentPosts = $recentPosts->slice(0,-1);
        $recentPosts2 = $recentPosts->slice(2);
        $recentPosts = $recentPosts->slice(0,-2);

        $lastUpdatedPosts = Posts::orderBy('updated_at', 'desc')->paginate(5);

        $categories= Category::all();

        $latestPost = Posts::latest('created_at')->first();

        return view('index',compact(
            'posts',
            'latestPost',
            'categories',
            'recentPosts',
            'recentPosts2',
            'secondMostRecentPost',
            'thirdMostRecentPost',
            'lastUpdatedPosts'
        ));
    }
}
