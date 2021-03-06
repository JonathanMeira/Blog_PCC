<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->simplePaginate(15)]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        $data = new User();
        $data->email_verified_at = now();
        $data->fill($request->all());
        
        unset($data->is_super);
        unset($data->is_author);

        $role = $this -> validateCheckbox($request);
        
        $data->role = $role;

        $data->password = Hash::make($data->password);
        $data->save();

        return redirect('admin/user')->with('success', 'Novo usuario criado com sucesso.');  
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $role = $this -> validateCheckbox($request);

        if ($role == null) 
        {
            $data['role'] = $user->role;
        }else
        {
            $data['role'] = $role;
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        
        $user->fill($data);
        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario editado com sucesso.');  
    }

    private function validateCheckbox(Request $request)
    {
        if($request->is_super == "on"){
            return 'admin';
        }
        elseif($request->is_author == "on"){
            return 'author';
        }
        return 'client';
    }


    public function password(PasswordRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Usuario '. $id . ' deletado com sucesso');       
    }
}
