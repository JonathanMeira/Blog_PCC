<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        if($categories->ToArray() < array(0))
            return redirect()->back()->with('errors', 'Não é possível criar uma postagem sem antes houver uma categoria');
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['lead'] = $request->lead;
        $data['category_id'] = (int)$request->category_id;
        $data['description'] = $request->description;
        $data['user_id'] = auth()->user()->id;

        Posts::create($data);

        return back()->withSuccess('Post criado com sucesso.');
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::all();
        $post = Posts::find($id);
        return view('posts.edit', compact('categories', 'post'));
    }

    public function update(Request $request, $id)
    {
        $post = Posts::find($id);

        $data['title'] = $request->title ?? $post->title;
        $data['lead'] = $request->lead ?? $post->lead;
        $data['category_id'] = (int)$request->category_id ?? $post->category_id;
        $data['description'] = $request->description ?? $post->description;
        $data['user_id'] = $post->user_id;

        $post->update($data);

        return back()->withSuccess('Post editado com sucesso.');
    }

    public function delete($id)
    {
        Posts::destroy($id);
        return redirect()->back()->with('success', 'Posts '. $id . ' deletada com sucesso.');       
    }

}
