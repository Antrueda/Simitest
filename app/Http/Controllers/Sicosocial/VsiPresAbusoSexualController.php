<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiAbuSexual;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiPresAbusoSexualController extends Controller{
    public function __construct(){
        $this->middleware(['permission:vsipresabusosexual-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsipresabusosexual-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiAbuSexual->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $sino       = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $evento     = Tema::findOrFail(202)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sexual     = Tema::findOrFail(203)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $estado     = Tema::findOrFail(204)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'PresAbusoSexual'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'familiares', 'evento', 'sexual', 'sis_esta_id'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if($request->prm_evento_id == 228) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_momento_id"] = null;
            $request["prm_persona_id"] = null;
            $request["prm_tipo_id"] = null;
            $request["prm_terapia_id"] = null;
        }
        if($request->prm_momento_id == 1013) {
            $request["dia_ult"] = null;
            $request["mes_ult"] = null;
            $request["ano_ult"] = null;
            $request["prm_momento_ult_id"] = null;
            $request["prm_persona_ult_id"] = null;
            $request["prm_tipo_ult_id"] = null;
        }

        if ($request->prm_tipo_id == 338) {
            $request["prm_convive_id"] = null;
            $request["prm_presencia_id"] = null;
            $request["prm_reconoce_id"] = null;
            $request["prm_apoyo_id"] = null;
            $request["prm_denuncia_id"] = null;
            $request["prm_terapia_id"] = null;
            $request["informacion"] = null;
        }

        if($request->prm_terapia_id == 228) {
            $request["prm_terapia_id"] = null;
        }

        $dato = VsiAbuSexual::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id, 40);
        return redirect()->route('VSI.presabusosexual', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if($request->prm_evento_id == 228) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_momento_id"] = null;
            $request["prm_persona_id"] = null;
            $request["prm_tipo_id"] = null;
            $request["prm_terapia_id"] = null;
        }
        if($request->prm_momento_id == 1013) {
            $request["dia_ult"] = null;
            $request["mes_ult"] = null;
            $request["ano_ult"] = null;
            $request["prm_momento_ult_id"] = null;
            $request["prm_persona_ult_id"] = null;
            $request["prm_tipo_ult_id"] = null;
        }

        if($request->prm_tipo_id == 338) {
            $request["prm_convive_id"] = null;
            $request["prm_presencia_id"] = null;
            $request["prm_reconoce_id"] = null;
            $request["prm_apoyo_id"] = null;
            $request["prm_denuncia_id"] = null;
            $request["prm_terapia_id"] = null;
            $request["informacion"] = null;
        }

        if($request->prm_terapia_id == 228) {
            $request["prm_terapia_id"] = null;
        }
        $dato = VsiAbuSexual::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($dato->vsi->sis_nnaj_id, 40);
        return redirect()->route('VSI.presabusosexual', $id)->with('info', 'Registro creado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_evento_id' => 'required|exists:parametros,id',
            'dia' => 'required_if:prm_evento_id,227|min:0|max:99',
            'mes' => 'required_if:prm_evento_id,227|min:0|max:99',
            'ano' => 'required_if:prm_evento_id,227|min:0|max:99',
            'prm_persona_id' => 'required_if:prm_evento_id,227|exists:parametros,id',
            'prm_terapia_id' => 'required_if:prm_evento_id,227',
            'prm_estado_id' => 'required_if:prm_terapia_id,227',
            'prm_momento_id' => 'required_if:prm_evento_id,227|exists:parametros,id',
            'dia_ult' => 'required_if:prm_momento_id,1014|min:0|max:99',
            'mes_ult' => 'required_if:prm_momento_id,1014|min:0|max:99',
            'ano_ult' => 'required_if:prm_momento_id,1014|min:0|max:99',
            'prm_momento_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_persona_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_tipo_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'prm_convive_id' => 'required_unless:prm_tipo_id,338',
            'prm_presencia_id' => 'required_unless:prm_tipo_id,338',
            'prm_reconoce_id' => 'required_unless:prm_tipo_id,338',
            'prm_apoyo_id' => 'required_unless:prm_tipo_id,338',
            'prm_denuncia_id' => 'required_unless:prm_tipo_id,338',
            'informacion' => 'nullable|string|max:4000',
        ]);
    }
}
