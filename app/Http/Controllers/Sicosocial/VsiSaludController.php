<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiSalud;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiSaludController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsisalud-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsisalud-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiSalud->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $motivos = Tema::findOrFail(87)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Salud'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'motivos'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_atencion_id == 228) {
            $request["prm_condicion_id"] = null;
        }
        if ($request->prm_medicamento_id == 228) {
            $request["medicamento"] = null;
            $request["prm_prescripcion_id"] = null;
            $request["descripcion"] = null;
        }
        if ($request->prm_sexual_id == 228) {
            $request["edad"] = null;
            $request["prm_activa_id"] = null;
            $request["prm_embarazo_id"] = null;
            $request["embarazo"] = null;
            $request["prm_hijo_id"] = null;
            $request["hijo"] = null;
            $request["prm_interrupcion_id"] = null;
            $request["interrupcion"] = null;
        }
        if ($request->prm_embarazo_id == 228) {
            $request["embarazo"] = null;
        }
        if ($request->prm_hijo_id == 228) {
            $request["hijo"] = null;
        }
        if ($request->prm_interrupcion_id == 228) {
            $request["interrupcion"] = null;
        }
        VsiSalud::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 103);
        return redirect()->route('VSI.salud', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_atencion_id == 228) {
            $request["prm_condicion_id"] = null;
        }
        if ($request->prm_medicamento_id == 228) {
            $request["medicamento"] = null;
            $request["prm_prescripcion_id"] = null;
            $request["descripcion"] = null;
        }
        if ($request->prm_sexual_id == 228) {
            $request["edad"] = null;
            $request["prm_activa_id"] = null;
            $request["prm_embarazo_id"] = null;
            $request["embarazo"] = null;
            $request["prm_hijo_id"] = null;
            $request["hijo"] = null;
            $request["prm_interrupcion_id"] = null;
            $request["interrupcion"] = null;
        }
        if ($request->prm_embarazo_id == 228) {
            $request["embarazo"] = null;
        }
        if ($request->prm_hijo_id == 228) {
            $request["hijo"] = null;
        }
        if ($request->prm_interrupcion_id == 228) {
            $request["interrupcion"] = null;
        }
        $dato = VsiSalud::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($dato->vsi->sis_nnaj_id, 103);
        return redirect()->route('VSI.salud', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_atencion_id' => 'required|exists:parametros,id',
            'prm_condicion_id' => 'required_if:prm_atencion_id,227',
            'prm_medicamento_id' => 'required|exists:parametros,id',
            'prm_prescripcion_id' => 'required_if:prm_medicamento_id,227',
            'prm_sexual_id' => 'required|exists:parametros,id',
            'prm_activa_id' => 'required_if:prm_sexual_id,227',
            'prm_embarazo_id' => 'required_if:prm_sexual_id,227',
            'prm_hijo_id' => 'required_if:prm_sexual_id,227',
            'prm_interrupcion_id' => 'required_if:prm_sexual_id,227',
            'medicamento' => 'required_if:prm_medicamento_id,227|max:120',
            'descripcion' => 'required_if:prm_medicamento_id,227|max:120',
            'edad' => 'required_if:prm_sexual_id,227|max:99',
            'embarazo' => 'required_if:prm_embarazo_id,227|max:99',
            'hijo' => 'required_if:prm_hijo_id,227|max:99',
            'interrupcion' => 'required_if:prm_interrupcion_id,227|max:99',
        ]);
    }
}
