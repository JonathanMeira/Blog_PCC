<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SystemController extends Controller
{

    public function edit()
    {
        $system = System::find(1);
        return view('system.edit',compact('system'));
    }


    public function update(Request $request, $id)
    {
        $system = System::find(1);
        $data['name'] = $request->name;
        $data['color'] = $request->color;

        $logo = $request->file('logo');

        $currentlogo = $system->photo;
        if ($currentlogo && file_exists(public_path('storage/system/' . $currentlogo))) {
            Storage::delete($currentlogo);
            unlink(public_path('storage/system/' . $currentlogo));
        }

        $name = Str::random(16) . "." . $logo->getClientOriginalExtension();
        $logo->move(public_path('storage/system/'), $name);
        $data['logo'] = $name;
        
        $system->update($data);

        return back()->withStatus(__('Site editado com sucesso.'));
    }
}
