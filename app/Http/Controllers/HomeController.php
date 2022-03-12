<?php

namespace App\Http\Controllers;
use App\Models\Posts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Posts $model)
    {
        if(auth()->user()->role == 'client'){
            return view('profile.edit');
        }

        return view('posts.index', ['posts' => $model->simplePaginate(15)]);
    }
}
