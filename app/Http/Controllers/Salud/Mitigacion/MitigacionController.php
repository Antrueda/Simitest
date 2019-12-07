<?php

namespace App\Http\Controllers\Salud\Mitigacion;

use App\Http\Controllers\Controller;
use App\Models\sistema\SisNnaj;

class MitigacionController extends Controller{
    
    public function __construct(){
        $this->middleware(['permission:mitigacionIndex-leer'], ['only' => ['index, show']]);
    }
    
    public function index(){
        
        return view('Salud.Mitigacion.index');
    }

    public function show($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        return view('Salud.Mitigacion.index', ['accion' => 'Editar'], compact('dato', 'nnaj'));
    }
}
