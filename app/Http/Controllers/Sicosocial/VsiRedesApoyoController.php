<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRedsocPasado;
use App\Models\sicosocial\VsiRedsocActual;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiRedesApoyoController extends Controller{
  
    public function __construct(){
        $this->middleware(['permission:vsiredesapoyo-crear'], ['only' => ['show, store, storePasado, storeActual']]);
        $this->middleware(['permission:vsiredesapoyo-editar'], ['only' => ['show, update, destroyPasado, destroyActual']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiRedSocial->where('activo', 1)->sortByDesc('id')->first();
        $valorPasado = $vsi->VsiRedsocPasado->where('activo', 1)->sortByDesc('id');
        $valorActual = $vsi->VsiRedsocActual->where('activo', 1)->sortByDesc('id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $persona = Tema::findOrFail(70)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $motivos = Tema::findOrFail(72)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $acceso = Tema::findOrFail(71)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $beneficio = Tema::findOrFail(59)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tipoRed = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(299)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tipoRed[$k] = $d;
        }
        $tiempo = Tema::findOrFail(4)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'RedesApoyo'], compact('vsi', 'dato', 'nnaj', 'valor', 'valorPasado', 'valorActual', 'sino', 'persona', 'motivos', 'acceso', 'beneficio', 'tipoRed', 'tiempo'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_presenta_id == 228) {
            $request["prm_protector_id"] = null;
        }
        if ($request->prm_dificultad_id == 228) {
            $request["motivos"] = [];
            $request["prm_quien_id"] = null;
        }
        if ($request->prm_acceso_id == 228) {
            $request["accesos"] = [];
        }
        $dato = VsiRedSocial::create($request->all());
        foreach ($request->motivos as $d) {
            $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        foreach ($request->accesos as $d) {
            $dato->accesos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('VSI.redesapoyo', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storePasado(Request $request){
        $this->validatorPasado($request->all())->validate();
        $dato = VsiRedsocPasado::create($request->all());
        return redirect()->route('VSI.redesapoyo', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storeActual(Request $request){
        $this->validatorActual($request->all())->validate();
        $dato = VsiRedsocActual::create($request->all());
        return redirect()->route('VSI.redesapoyo', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_presenta_id == 228) {
            $request["prm_protector_id"] = null;
        }
        if ($request->prm_dificultad_id == 228) {
            $request["motivos"] = [];
            $request["prm_quien_id"] = null;
        }
        if ($request->prm_acceso_id == 228) {
            $request["accesos"] = [];
        }
        $dato = VsiRedSocial::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->motivos()->detach();
        foreach ($request->motivos as $d) {
            $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        $dato->accesos()->detach();
        foreach ($request->accesos as $d) {
            $dato->accesos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('VSI.redesapoyo', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroyPasado($id, $id1){
        $dato = VsiRedsocPasado::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.redesapoyo', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyActual($id, $id1){
        $dato = VsiRedsocActual::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.redesapoyo', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_presenta_id' => 'required|exists:parametros,id',
            'prm_protector_id' => 'required_if:prm_presenta_id,227|exists:parametros,id',
            'prm_dificultad_id' => 'required|exists:parametros,id',
            'prm_quien_id' => 'required_if:prm_dificultad_id,227',
            'prm_ruptura_genero_id' => 'required|exists:parametros,id',
            'prm_ruptura_sexual_id' => 'required|exists:parametros,id',
            'prm_acceso_id' => 'required|exists:parametros,id',
            'prm_servicio_id' => 'required|exists:parametros,id',
            'motivos' => 'required_if:prm_dificultad_id,227|array',
            'accesos' => 'required_if:prm_acceso_id,227|array',
        ]);
    }

    protected function validatorPasado(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'nombre' => 'required|string|max:120',
            'servicio' => 'required|string|max:120',
            'dia' => 'required|integer|min:0|max:99',
            'mes' => 'required|integer|min:0|max:99',
            'ano' => 'required|integer|min:0|max:99',
            'ano_prestacion' => 'required|integer|min:2000|max:2030',
        ]);
    }

    protected function validatorActual(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'nombre' => 'required|string|max:120',
            'servicio' => 'required|string|max:4000',
            'telefono' => 'required|string|max:120',
            'direccion' => 'required|string|max:120',
        ]);
    }
}