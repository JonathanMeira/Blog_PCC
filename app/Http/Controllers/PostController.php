<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Posts $model)
    {
        return view('posts.index', ['posts' => $model->simplePaginate(15)]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

}
