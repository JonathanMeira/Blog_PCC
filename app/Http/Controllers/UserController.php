<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PasswordRequest;

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
        $data->user_type = 1;
        if($request->is_super == "on"){
            $data->user_type = 0;
        }
        $data->password = Hash::make($data->password);
        $data->save();

        //--- Redirect Section

        // $msg = __('Novo usuario criado com sucesso.') . '<a href="' . route('user.index') . '">' . __('Ver lista de usuarios.') . '</a>';
        // return response()->json($msg);

        return view('users.create');
        //--- Redirect Section Ends    
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        return view('users.edit', compact('user'));
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
        return redirect()->back()->with('success', 'Usuario '. $id . 'deletado com sucesso');       
    }
}
