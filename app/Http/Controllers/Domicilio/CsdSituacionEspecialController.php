<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\consulta\Csd;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class CsdSituacionEspecialController extends Controller{
  
    public function __construct(){
        $this->middleware(['permission:csdsituacionespecial-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csdsituacionespecial-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $dato  = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        $situaciones  = Tema::findOrFail(89)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Domicilio.index', ['accion' => 'SituacionEspecial'], compact('dato', 'nnajs', 'situaciones'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = Csd::findOrFail($request->csd_id);
        $dato->especiales()->detach();
        if($request->especiales){
            foreach ($request->especiales as $d) {
                $dato->especiales()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('CSD.situacionespecial', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'especiales' => 'nullable|array',
        ]);
    }
}