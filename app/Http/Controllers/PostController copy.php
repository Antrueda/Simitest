<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function create(){
         return view('post.create');
        }

    public function store(request $request){
    //  $data= $request->all();
    //  $id=$request->id;
        $request->sis_esta_id=1;
        $request->user_id=Auth::user()->id;
        $post = post::create($request->all());
    
        return redirect()->back()->with('info', 'Registro migracion realizada con éxito');
        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [VsiRelFamiliar::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['menssage']);

    }
}


