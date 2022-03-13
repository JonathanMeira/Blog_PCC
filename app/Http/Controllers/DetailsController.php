<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($id)
    {
        $post = Posts::find($id);
        $user = User::findOrFail($post->user_id);
        $category = User::findOrFail($post->category_id);
        return view('layouts.article-details',compact('post','user', 'category'));
    }

}
