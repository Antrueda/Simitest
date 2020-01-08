<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiRelFamiliarController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsirelfamiliar-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsirelfamiliar-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiRelFamiliar->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sinona = Tema::findOrFail(25)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $familiares[$k] = $d;
        }
        $motivos = Tema::findOrFail(174)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $acciones = Tema::findOrFail(298)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $relaciones = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(175)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $relaciones[$k] = $d;
        }
        $dificultades = Tema::findOrFail(176)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $responde = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(177)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $responde[$k] = $d;
        }
        $entidad = Tema::findOrFail(178)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'RelFamiliar'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'motivos', 'familiares', 'relaciones', 'sinona', 'dificultades', 'responde', 'entidad', 'acciones'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();

        if($request['prm_familia_id'] == 228) {
            $request['prm_denuncia_id'] = null;
            $request['descripcion'] = null;
        }

        if ($request->prm_pareja_id == 228 || $request->prm_pareja_id == 235) {
            $request["prm_dificultad_id"] = null;
        }

        if (!$request->prm_dificultad_id || $request->prm_dificultad_id == 228 || $request->prm_pareja_id == 235) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_responde_id"] = null;
            $request["descripcion1"] = null;
        }

        $dato = VsiRelFamiliar::create($request->all());

        if($request->motivos){
            foreach ($request->motivos as $d) {
                $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }

        if($request->famDificultades){
            foreach ($request->famDificultades as $d) {
                $dato->famDificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }

        if($request->acciones){
            foreach ($request->acciones as $d) {
                $dato->acciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 96);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 98);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 99);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 100);
        return redirect()->route('VSI.relfamiliar', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id1){
        $this->validator($request->all())->validate();

        if($request['prm_familia_id'] == 228) {
            $request['prm_denuncia_id'] = null;
            $request['descripcion'] = null;
        }

        if ($request->prm_pareja_id == 228 || $request->prm_pareja_id == 235) {
            $request["prm_dificultad_id"] = null;
        }

        if (!$request->prm_dificultad_id || $request->prm_dificultad_id == 228 || $request->prm_pareja_id == 235) {
            $request["dia"] = null;
            $request["mes"] = null;
            $request["ano"] = null;
            $request["prm_responde_id"] = null;
            $request["descripcion1"] = null;
        }

        $dato = VsiRelFamiliar::findOrFail($id1);
        $dato->fill($request->all())->save();


        $dato->motivos()->detach();
        if($request->motivos){
            foreach ($request->motivos as $d) {
                $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }

        $dato->famDificultades()->detach();
        if($request->famDificultades){
            foreach ($request->famDificultades as $d) {
                $dato->famDificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }

        $dato->acciones()->detach();
        if($request->acciones){
            foreach ($request->acciones as $d) {
                $dato->acciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 96);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 98);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 99);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 100);
        return redirect()->route('VSI.relfamiliar', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_representativa_id' => 'required|exists:parametros,id',
            'representativa' => 'required|string|max:4000',
            'prm_mala_id' => 'required|exists:parametros,id',
            'prm_relacion_id' => 'required|exists:parametros,id',
            'motivos' => 'required_unless:prm_mala_id,235|array',
            'prm_gusto_id' => 'required|exists:parametros,id',
            'porque' => 'required|string|max:4000',
            'prm_familia_id' => 'required|exists:parametros,id',
            'famDificultades' => 'required_if:prm_familia_id,227|array',
            'acciones' => 'required_if:prm_familia_id,227|array',
            'prm_denuncia_id' => 'required_if:prm_familia_id,227',
            'descripcion' => 'required_if:prm_familia_id,227',
            'prm_pareja_id' => 'required|exists:parametros,id',
            'prm_dificultad_id' => 'required_if:prm_pareja_id,227',
            'dia' => 'required_if:prm_dificultad_id,227|min:0|max:99',
            'mes' => 'required_if:prm_dificultad_id,227|min:0|max:99',
            'ano' => 'required_if:prm_dificultad_id,227|min:0|max:99',
            'prm_responde_id' => 'required_if:prm_dificultad_id,227',
            'descripcion1' => 'required_if:prm_dificultad_id,227'
        ]);
    }
}
