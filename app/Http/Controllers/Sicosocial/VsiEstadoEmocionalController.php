<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiEstEmocional;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiEstadoEmocionalController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiestemocional-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiestemocional-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiEstEmocional->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sentimientos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(170)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sentimientos[$k] = $d;
        }
        $contexto = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(160)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $contexto[$k] = $d;
        }
        $reacciones = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(194)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $reacciones[$k] = $d;
        }
        $emociones = Tema::findOrFail(195)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $estresantes = Tema::findOrFail(293)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $acontecimientos = Tema::findOrFail(300)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $riesgo = Tema::findOrFail(198)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $conductas = Tema::findOrFail(200)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'EstEmocional'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'sentimientos', 'contexto', 'reacciones', 'emociones', 'acontecimientos', 'estresantes', 'riesgo', 'conductas'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_morir_id == 228) {
            $request["dia_morir"] = null;
            $request["mes_morir"] = null;
            $request["ano_morir"] = null;
            $request["descripcion_motivo"] = null;
            $request["motivos"] = [];
        }
        if ($request->prm_estresante_id == 228) {
            $request["estresantes"] = [];
        }
        if ($request->prm_lesiva_id == 228) {
            $request["lesivas"] = [];
        }
        if ($request->prm_amenaza_id == 228) {
            $request["ideacion"] = null;
        }
        if ($request->prm_pensamiento_id == 228) {
            $request["amenaza"] = null;
        }
        if ($request->prm_sueno_id == 228) {
            $request["dia_sueno"] = null;
            $request["mes_sueno"] = null;
            $request["ano_sueno"] = null;
        }
        if ($request->prm_alimenticio_id == 228) {
            $request["dia_alimenticio"] = null;
            $request["mes_alimenticio"] = null;
            $request["ano_alimenticio"] = null;
        }
        if ($request->prm_intento_id == 228) {
            $request["intento"] = null;
            $request["dia_ultimo"] = null;
            $request["mes_ultimo"] = null;
            $request["ano_ultimo"] = null;
        }
        $dato = VsiEstEmocional::create($request->all());
        foreach ($request->adecuados as $d) {
            $dato->adecuados()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        foreach ($request->dificultades as $d) {
            $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        if($request->estresantes){
            foreach ($request->estresantes as $d) {
                $dato->estresantes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->motivos){
            foreach ($request->motivos as $d) {
                $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->lesivas){
            foreach ($request->lesivas as $d) {
                $dato->lesivas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 71);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 72);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 73);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 74);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 75);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 76);
        return redirect()->route('VSI.estemocional', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_morir_id == 228) {
            $request["dia_morir"] = null;
            $request["mes_morir"] = null;
            $request["ano_morir"] = null;
            $request["descripcion_motivo"] = null;
            $request["motivos"] = [];
        }
        if ($request->prm_estresante_id == 228) {
            $request["estresantes"] = [];
        }
        if ($request->prm_lesiva_id == 228) {
            $request["lesivas"] = [];
        }
        if ($request->prm_amenaza_id == 228) {
            $request["ideacion"] = null;
        }
        if ($request->prm_pensamiento_id == 228) {
            $request["amenaza"] = null;
        }
        if ($request->prm_sueno_id == 228) {
            $request["dia_sueno"] = null;
            $request["mes_sueno"] = null;
            $request["ano_sueno"] = null;
        }
        if ($request->prm_alimenticio_id == 228) {
            $request["dia_alimenticio"] = null;
            $request["mes_alimenticio"] = null;
            $request["ano_alimenticio"] = null;
        }
        if ($request->prm_intento_id == 228) {
            $request["intento"] = null;
            $request["dia_ultimo"] = null;
            $request["mes_ultimo"] = null;
            $request["ano_ultimo"] = null;
        }
        $dato = VsiEstEmocional::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->adecuados()->detach();
        foreach ($request->adecuados as $d) {
            $dato->adecuados()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        $dato->dificultades()->detach();
        foreach ($request->dificultades as $d) {
            $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        $dato->estresantes()->detach();
        if($request->estresantes){
            foreach ($request->estresantes as $d) {
                $dato->estresantes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->motivos()->detach();
        if($request->motivos){
            foreach ($request->motivos as $d) {
                $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->lesivas()->detach();
        if($request->lesivas){
            foreach ($request->lesivas as $d) {
                $dato->lesivas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 71);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 72);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 73);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 74);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 75);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 76);
        return redirect()->route('VSI.estemocional', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_siente_id' => 'required|exists:parametros,id',
            'prm_contexto_id' => 'required|exists:parametros,id',
            'descripcion_siente' => 'required|string|max:4000',
            'prm_reacciona_id' => 'nullable|exists:parametros,id',
            'descripcion_reacciona' => 'required|string|max:4000',
            'descripcion_adecuado' => 'required|string|max:4000',
            'descripcion_dificulta' => 'required|string|max:4000',
            'prm_estresante_id' => 'required|exists:parametros,id',
            'descripcion_estresante' => 'required_if:prm_estresante_id,227|max:4000',
            'prm_morir_id' => 'required|exists:parametros,id',
            'dia_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'mes_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'ano_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'prm_pensamiento_id' => 'required_if:prm_morir_id,227',
            'prm_amenaza_id' => 'required_if:prm_morir_id,227',
            'prm_intento_id' => 'required_if:prm_morir_id,227',
            'ideacion' => 'required_if:prm_pensamiento_id,227|min:0|max:99',
            'amenaza' => 'required_if:prm_amenaza_id,227|min:0|max:99',
            'intento' => 'required_if:prm_intento_id,227|min:0|max:99',
            'prm_riesgo_id' => 'required_if:prm_morir_id,227',
            'dia_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'mes_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'ano_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'descripcion_motivo' => 'required_if:prm_morir_id,227|max:4000',
            'prm_lesiva_id' => 'required_if:prm_morir_id,227',
            'descripcion_lesiva' => 'required_if:prm_lesiva_id,227|max:4000',
            'prm_sueno_id' => 'required|exists:parametros,id',
            'dia_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'mes_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'ano_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'descripcion_sueno' => 'required_if:prm_sueno_id,227|max:4000',
            'prm_alimenticio_id' => 'required|exists:parametros,id',
            'dia_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'mes_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'ano_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'descripcion_alimenticio' => 'required_if:prm_alimenticio_id,227|max:4000',
            'adecuados' => 'required|array',
            'dificultades' => 'required|array',
            'estresantes' => 'required_if:prm_estresante_id,227|array',
            'motivos' => 'required_if:prm_morir_id,227|array',
            'lesivas' => 'required_if:prm_lesiva_id,227|array',
        ]);
    }
}
