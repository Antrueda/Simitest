<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\CsdGeningAporta;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;


class CsdGeneracionIngresosController extends Controller{

    public function __construct(){
        $this->middleware(['permission:csdgeningresos-crear'], ['only' => ['show, store, storeaportante']]);
        $this->middleware(['permission:csdgeningresos-editar'], ['only' => ['show, update, destroyaportante']]);
    }

    public function show($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valor = $dato->CsdGenIngreso->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $valorAporta = $dato->CsdGeningAporta->where('sis_esta_id', 1)->sortByDesc('id');
        $actividad = Tema::findOrFail(114)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $dias = Tema::findOrFail(124)->parametros()->orderBy('id')->pluck('nombre', 'id');
        $otros = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(116)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $otros[$k] = $d;
        }
        $laboral = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(117)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $laboral[$k] = $d;
        }
        $informal = Tema::findOrFail(115)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $familiares[$k] = $d;
        }
        $tiempo = Tema::findOrFail(4)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $frecuencia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(110)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $frecuencia[$k] = $d;
        }
        return view('Domicilio.index', ['accion' => 'GenIngresos'], compact('dato', 'nnajs', 'valor', 'valorAporta', 'actividad', 'sino', 'familiares', 'ampm', 'dias', 'informal', 'otros', 'laboral', 'tiempo', 'frecuencia'));
    }

    public function store(Request $request, $id){
        $this->validator($request->all())->validate();
        if ($request->prm_actividad_id == 626) {
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
        }
        if ($request->prm_actividad_id == 627) {
            $request["trabaja"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 628) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 853) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_laboral_id"] = null;
            $request["prm_frecuencia_id"] = null;
            $request["intensidad"] = null;
        }
        $dato=CsdGenIngreso::create($request->all());
        Vsi::indicador($id, 131);
        return redirect()->route('CSD.geningresos', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_actividad_id == 626) {
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
        }
        if ($request->prm_actividad_id == 627) {
            $request["trabaja"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 628) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 853) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_laboral_id"] = null;
            $request["prm_frecuencia_id"] = null;
            $request["intensidad"] = null;
        }
        $dato = CsdGenIngreso::findOrFail($id1);
        $dato->fill($request->all())->save();

        Vsi::indicador($id, 130);
        return redirect()->route('CSD.geningresos', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function storeaportante(Request $request, $id){
        $this->validatorAporta($request->all())->validate();
        $dato = CsdGeningAporta::create($request->all());
        foreach ($request->dias as $d) {
            $dato->dias()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($id, 132);
        return redirect()->route('CSD.geningresos', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function destroyaportante($id, $id1){
        $dato = CsdGeningAporta::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('CSD.geningresos', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'observacion' => 'required|string|max:4000',
            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'prm_frecuencia_id' => 'required_without:prm_actividad_id,853',
            'intensidad' => 'required_unless:prm_actividad_id,853',
            'prm_dificultad_id' => 'required|exists:parametros,id',
            'razon' => 'required|string|max:4000',
        ]);
    }

    protected function validatorAporta(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_aporta_id' => 'required|exists:parametros,id',
            'mensual' => 'required|integer|min:0|max:99999999',
            'aporte' => 'required|integer|min:0|max:99999999',
            'jornada_entre' => 'required|integer|min:1|max:12',
            'prm_entre_id' => 'required|exists:parametros,id',
            'jornada_a' => 'required|integer|min:1|max:12',
            'prm_a_id' => 'required|exists:parametros,id',
            'dias' => 'required|array',
        ]);
    }
}
