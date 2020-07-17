<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDependencia;
use App\Models\sicosocial\Vsi;
use Illuminate\Support\Facades\Validator;

class VsiController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsidatobasico-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:vsidatobasico-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:vsidatobasico-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:vsidatobasico-borrar'], ['only' => ['index, show']]);
    }

    public function index(Request $request){
        return view('Sicosocial.index');
    }

    public function nnaj($id){ 
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $vsis = $dato->Vsi->sortByDesc('fecha')->all();
        
        return view('Sicosocial.index', ['accion' => 'Nnaj'], compact('dato', 'nnaj', 'vsis'));
    }

    public function create(Request $request, $id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $vsis = $dato->Vsi->sortByDesc('fecha')->all();
        $dependencias = SisDependencia::where('sis_esta_id', 1)->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Nueva'], compact('dato', 'nnaj', 'vsis', 'dependencias'));
    }

    public function store(Request $request, $id){
        $this->validator($request->all())->validate();
        $dato = Vsi::create($request->all());
        return redirect()->route('VSI.nnaj', $id)->with('info', 'Registro creado con éxito');
    }

    public function edit(Request $request, $id, $id0){
        $valor = Vsi::findOrFail($id0);
        if($valor->sis_esta_id == 2) {
            return redirect()->route('VSI.nnaj', $id);
        }
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $vsis = $dato->Vsi->sortByDesc('fecha')->all();
        $dependencias = SisDependencia::where('sis_esta_id', 1)->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Editar'], compact('dato', 'nnaj', 'vsis', 'dependencias', 'valor'));
    }

    public function update(Request $request, $id, $id0){
        $this->validator($request->all(), $id)->validate();
        $dato = Vsi::findOrFail($id0);
        $dato->fill($request->all())->save();
        return redirect()->route('VSI.nnaj', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id, $id1){
        $dato = Vsi::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('VSI.nnaj', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        ddd($vsi->VsiDinFamiliar);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        return view('Sicosocial.index', ['accion' => 'VSI'], compact('vsi', 'dato', 'nnaj'));
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id' => 'required|exists:sis_nnajs,id',
            'dependencia_id' => 'required|exists:sis_dependencias,id',
            'fecha' => 'required|date',
        ]);
    }
}
