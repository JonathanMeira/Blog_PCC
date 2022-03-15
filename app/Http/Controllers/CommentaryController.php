<?php

namespace App\Http\Controllers;

use App\Models\Commentary;
use Illuminate\Http\Request;

class CommentaryController extends Controller
{
   public function store(Request $request, $post_id)
   {
        $data['text'] = $request->comment;
        $data['post_id'] = $post_id;
        $data['user_id'] = auth()->user()->id;
       
        Commentary::create($data);

        return redirect()->back()->withSuccess("Comentário publicado com sucesso.");
   }

   public function delete($id)
    {
        $commentary = Commentary::find($id);
        if(auth()->user()->id == $commentary->user_id){
            Commentary::destroy($id);
            return redirect()->back()->with('success', 'Comentario deletado com sucesso.');       
        }
        return redirect()->back()->with('error', 'Este comentário não pertence a você.');
    }
}
