<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {

        $avatar = $request->file('avatar');

        # Delete old avatar if exists
        $user =  User::find (auth()->user()->id);
        $currentavatar = $user->photo;
        if ($currentavatar && file_exists(public_path('storage/users/' . $currentavatar))) {
            Storage::delete($currentavatar);
            unlink(public_path('storage/users/' . $currentavatar));
        }

        $name = Str::random(16) . "." . $avatar->getClientOriginalExtension();
        $avatar->move(public_path('storage/users/'), $name);
        $data['photo'] = $name;
        
        auth()->user()->update($request->all());
        auth()->user()->update($data);

        return back()->withStatus(__('Perfil editado com sucesso.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Senha alterada com sucesso.'));
    }
}
