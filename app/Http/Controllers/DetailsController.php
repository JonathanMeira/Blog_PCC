<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($id)
    {
        $post = Posts::find($id);
        return view('layouts.article-details',compact('post'));
    }

}
