<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;

class AIController extends Controller{

    public function __construct(){
        $this->middleware(['permission:aiindex-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:aiindex-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:aiindex-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:aiindex-borrar'], ['only' => ['index, show']]);
    }

    public function index(){
        return view('Acciones.Individuales.index');
    }

    public function show($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        return view('Acciones.Individuales.index', ['accion' => 'Editar'], compact('dato', 'nnaj'));
    }
}
