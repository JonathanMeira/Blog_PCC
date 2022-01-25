<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(Category $model)
    {
        return view('categories.index', ['categories' => $model->simplePaginate(15)]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
            'name' => ['required','unique:categories', 'string', 'max:255'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends


        $data = new Category();

        $data->fill($request->all());
        $data->save();

        //--- Redirect Section

        return view('categories.create');
        //--- Redirect Section Ends    
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->save();

        return view('categories.edit', compact('category'));
    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->back()->with('success', 'Usuario '. $id . 'deletado com sucesso');       
    }

}
