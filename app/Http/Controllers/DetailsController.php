<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Commentary;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($id)
    {
        $posts = Posts::all();
        $post = Posts::find($id);
        $user = User::findOrFail($post->user_id);
        $category = Category::findOrFail($post->category_id);
        $comments = Commentary::where('post_id', $id)->get();
        return view('layouts.article-details',compact('post','user', 'category', 'comments', 'posts'));
    }

}
