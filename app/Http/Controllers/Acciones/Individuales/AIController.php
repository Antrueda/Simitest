<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sistema\SisNnaj;

class AIController extends Controller{

    public function __construct(){
        $this->opciones['permisox']='aiindex';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
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
