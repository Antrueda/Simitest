<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiPotencialidad;
use App\Models\sicosocial\VsiMeta;
use Illuminate\Support\Facades\Validator;

class VsiMetaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsimeta-crear'], ['only' => ['show, storePotencialidad, storeMeta']]);
        $this->middleware(['permission:vsimeta-editar'], ['only' => ['show, storePotencialidad, storeMeta']]);
        $this->middleware(['permission:vsimeta-borrar'], ['only' => ['show, destroyPotencialidad, destroyMeta']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valorPote = $vsi->VsiPotencialidad->where('activo', 1)->sortBy('id');
        $valorMeta = $vsi->VsiMeta->where('activo', 1)->sortBy('id');
        return view('Sicosocial.index', ['accion' => 'Meta'], compact('vsi', 'dato', 'nnaj', 'valorPote', 'valorMeta'));
    }

    public function storePotencialidad(Request $request){
        $this->validatorPotencialidad($request->all())->validate();
        $dato = VsiPotencialidad::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 90);
        return redirect()->route('VSI.meta', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storeMeta(Request $request){
        $this->validatorMeta($request->all())->validate();
        $dato = VsiMeta::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 83);
        return redirect()->route('VSI.meta', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function destroyPotencialidad($id, $id1){
        $dato = VsiPotencialidad::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.meta', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyMeta($id, $id1){
        $dato = VsiMeta::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.meta', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validatorPotencialidad(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'potencialidad' => 'required|string|max:120'
        ]);
    }

    protected function validatorMeta(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'meta' => 'required|string|max:120'
        ]);
    }
}
