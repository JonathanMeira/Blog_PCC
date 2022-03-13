<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Posts $model)
    {
        if(auth()->user()->role == 'admin')
            return view('posts.index', ['posts' => $model->simplePaginate(15)]);
        $posts = auth()->user()->posts();
        return view('posts.index', ['posts' => $posts->simplePaginate(15)]);
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

        $photo = $request->file('photo');

        if($photo){    
            $name = Str::random(16) . "." . $photo->getClientOriginalExtension();
            $photo->move(public_path('storage/posts/'), $name);
            $data['photo'] = $name;
        }
        
        Posts::create($data);

        return back()->withSuccess('Post criado com sucesso.');
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::all();
        $post = Posts::find($id);

        if(auth()->user()->id != $post->id && auth()->user()->role =='author')
            return redirect()->back()->with('errors', 'Não é possível editar uma postagem que não é sua');

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

        $photo = $request->file('photo');

        if($photo){
            # Delete old photo if exists
            $currentphoto = $post->photo;
            if ($currentphoto && file_exists(public_path('storage/posts/' . $currentphoto))) {
                Storage::delete($currentphoto);
                unlink(public_path('storage/posts/' . $currentphoto));
            }

            $name = Str::random(16) . "." . $photo->getClientOriginalExtension();
            $photo->move(public_path('storage/posts/'), $name);
            $data['photo'] = $name;
        }

        $post->update($data);

        return back()->withSuccess('Post editado com sucesso.');
    }

    public function delete($id)
    {
        Posts::destroy($id);
        return redirect()->back()->with('success', 'Posts '. $id . ' deletada com sucesso.');       
    }

}
