<?php

namespace App\Http\Controllers\Ayuda\Vista;

use App\Models\Ayuda\Ayuda;
use App\Http\Controllers\Controller;

class AyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Ayuda::where('status', 1)->orderby('updated_at', 'desc')->take(10)->get();
        return view('ayuda.vista.index', [
            'resultados' => $result,
        ]);
    }

    /**
     * Método referido a la busqueda de URL amigable
     */
    public function slugfind($var)
    {
        $cuerpo_data = Ayuda::where('slug', $var)->first();
        $resultado = Ayuda::select('titulo', 'slug')->orderby('id', 'asc')->paginate(20);
        return view('ayuda.vista.show', [
            'resultado' => $resultado,
            'cuerpo_data' => $cuerpo_data,
            'total_resultado' => $resultado->total(),
        ]);
    }

    
}
