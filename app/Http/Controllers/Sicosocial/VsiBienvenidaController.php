<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiBienvenidaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsibienvenida-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsibienvenida-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiBienvenida->where('activo', 1)->sortByDesc('id')->first();
        $motivos = Tema::findOrFail(63)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Bienvenida'], compact('vsi', 'dato', 'nnaj', 'valor', 'motivos'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = VsiBienvenida::create($request->all());
        foreach ($request->motivos as $d) {
            $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 45);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 44);
        return redirect()->route('VSI.bienvenida', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = VsiBienvenida::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->motivos()->detach();
        foreach ($request->motivos as $d) {
            $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 45);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 44);
        return redirect()->route('VSI.bienvenida', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'descripcion' => 'required|string|max:4000',
            'motivos' => 'required|array'
        ]);
    }
}
