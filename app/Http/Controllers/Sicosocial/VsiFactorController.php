<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiFacProtector;
use App\Models\sicosocial\VsiFacRiesgo;
use Illuminate\Support\Facades\Validator;

class VsiFactorController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsifactor-crear'], ['only' => ['show, storeProtector, storeRiesgo']]);
        $this->middleware(['permission:vsifactor-editar'], ['only' => ['show, storeProtector, storeRiesgo']]);
        $this->middleware(['permission:vsifactor-borrar'], ['only' => ['show, destroyProtector, destroyRiesgo']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valorProt = $vsi->VsiFacProtector->where('activo', 1)->sortBy('id');
        $valorRies = $vsi->VsiFacRiesgo->where('activo', 1)->sortBy('id');
        return view('Sicosocial.index', ['accion' => 'Factor'], compact('vsi', 'dato', 'nnaj', 'valorProt', 'valorRies'));
    }

    public function storeProtector(Request $request){
        $this->validatorProtector($request->all())->validate();
        $dato = VsiFacProtector::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 77);
        return redirect()->route('VSI.factor', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storeRiesgo(Request $request){
        $this->validatorRiesgo($request->all())->validate();
        $dato = VsiFacRiesgo::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 78);
        return redirect()->route('VSI.factor', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function destroyProtector($id, $id1){
        $dato = VsiFacProtector::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.factor', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyRiesgo($id, $id1){
        $dato = VsiFacRiesgo::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.factor', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validatorProtector(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'protector' => 'required|string|max:120'
        ]);
    }

    protected function validatorRiesgo(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'riesgo' => 'required|string|max:120'
        ]);
    }
}
