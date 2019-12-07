<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiEducacion;

use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiEducacionController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsieducacion-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsieducacion-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiEducacion->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $motivos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(205)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $motivos[$k] = $d;
        }
        $causas = Tema::findOrFail(207)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $rendimientos = Tema::findOrFail(206)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $materias = Tema::findOrFail(208)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $dificultad1 = Tema::findOrFail(209)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $dificultad2 = Tema::findOrFail(210)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Educacion'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'motivos', 'causas', 'rendimientos', 'materias', 'dificultad1', 'dificultad2'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_estudia_id == 227) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_motivo_id"] = null;
        }
        if ($request->prm_dificultad_id == 228) {
            $request["prm_leer_id"] = null;
            $request["prm_escribir_id"] = null;
        }
        $dato = VsiEducacion::create($request->all());
        if($request->causas){
            foreach ($request->causas as $d) {
                $dato->causas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->fortalezas){
            foreach ($request->fortalezas as $d) {
                $dato->fortalezas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->dificultades){
            foreach ($request->dificultades as $d) {
                $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->dificultadesa){
            foreach ($request->dificultadesa as $d) {
                $dato->dificultadesa()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->dificultadesb){
            foreach ($request->dificultadesb as $d) {
                $dato->dificultadesb()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.educacion', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_estudia_id == 227) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_motivo_id"] = null;
        }
        if ($request->prm_dificultad_id == 228) {
            $request["prm_leer_id"] = null;
            $request["prm_escribir_id"] = null;
        }

        $dato = VsiEducacion::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->causas()->detach();
        if($request->causas){
            foreach ($request->causas as $d) {
                $dato->causas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->fortalezas()->detach();
        if($request->fortalezas){
            foreach ($request->fortalezas as $d) {
                $dato->fortalezas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->dificultades()->detach();
        if($request->dificultades){
            foreach ($request->dificultades as $d) {
                $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->dificultadesa()->detach();
        if($request->dificultadesa){
            foreach ($request->dificultadesa as $d) {
                $dato->dificultadesa()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->dificultadesb()->detach();
        if($request->dificultadesb){
            foreach ($request->dificultadesb as $d) {
                $dato->dificultadesb()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.educacion', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_estudia_id' => 'required|exists:parametros,id',
            'dia' => 'required_if:prm_estudia_id,228|min:0|max:99',
            'mes' => 'required_if:prm_estudia_id,228|min:0|max:99',
            'ano' => 'required_if:prm_estudia_id,228|min:0|max:99',
            'prm_motivo_id' => 'required_if:prm_estudia_id,228',
            'prm_rendimiento_id' => 'required|exists:parametros,id',
            'prm_dificultad_id' => 'required|exists:parametros,id',
            'prm_leer_id' => 'required_if:prm_dificultad_id,227',
            'prm_escribir_id' => 'required_if:prm_dificultad_id,227',
            'descripcion' => 'required|max:4000',
            'causas' => 'required_if:prm_motivo_id,1022|array',
            'fortalezas' => 'required_if:prm_estudia_id,227|array',
            'dificultades' => 'required_if:prm_estudia_id,227|array',
            'dificultadesa' => 'required_if:prm_dificultad_id,227|array',
            'dificultadesb' => 'required_if:prm_dificultad_id,227|array',
        ]);
    }
}