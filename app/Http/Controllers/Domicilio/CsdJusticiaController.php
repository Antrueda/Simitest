<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tema;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdJusticia;
use Illuminate\Support\Facades\Validator;

class CsdJusticiaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:csdjusticia-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csdjusticia-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        $valor = $dato->CsdJusticia->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $causas= Tema::findOrFail(120)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Domicilio.index', ['accion' => 'Justicia'], compact('dato', 'nnajs', 'valor', 'sino', 'causas'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_vinculado_id == 228) {
            $request["prm_vin_causa_id"] = null;
        }
        if ($request->prm_riesgo_id == 228) {
            $request["prm_rie_causa_id"] = null;
        }
        CsdJusticia::create($request->all());
        return redirect()->route('CSD.justicia', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_vinculado_id == 228) {
            $request["prm_vin_causa_id"] = null;
        }
        if ($request->prm_riesgo_id == 228) {
            $request["prm_rie_causa_id"] = null;
        }
        $dato = CsdJusticia::findOrFail($id1);
        $dato->fill($request->all())->save();
        return redirect()->route('CSD.justicia', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_vinculado_id' => 'required|exists:parametros,id',
            'prm_vin_causa_id' => 'required_if:prm_vinculado_id,227',
            'prm_riesgo_id' => 'required|exists:parametros,id',
            'prm_rie_causa_id' => 'required_if:prm_riesgo_id,227',
        ]);
    }
}