<?php

namespace App\Http\Controllers\sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiGenIngresosController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsigeningresos-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsigeningresos-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiGenIngreso->where('activo', 1)->sortByDesc('id')->first();
        $actividad = Tema::findOrFail(114)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $informal = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(115)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $informal[$k] = $d;
        }
        $otros = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(116)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $otros[$k] = $d;
        }
        $ninguna = Tema::findOrFail(122)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tiempo = Tema::findOrFail(4)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $semana = Tema::findOrFail(129)->parametros()->orderBy('id')->pluck('nombre', 'id');
        $frecuencia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(6)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $frecuencia[$k] = $d;
        }
        $laboral = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(117)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $laboral[$k] = $d;
        }
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $parentesco = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'genIngresos'], compact('vsi', 'dato', 'nnaj', 'valor', 'actividad', 'informal', 'otros', 'ninguna', 'tiempo', 'ampm', 'semana', 'frecuencia', 'laboral', 'sino', 'parentesco'));
    }

    public function store(Request $request){
        if ($request->prm_actividad_id == 626) {
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_no_id"] = null;
        }
        if ($request->prm_actividad_id == 627) {
            $request["trabaja"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_no_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 628) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_no_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 853) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["jornada_entre"] = null;
            $request["prm_jor_entre_id"] = null;
            $request["jornada_a"] = null;
            $request["prm_jor_a_id"] = null;
            $request["dias"] = null;
            $request["prm_frecuencia_id"] = null;
            $request["prm_laboral_id"] = null;
            $request["aporte"] = null;
            $request["prm_aporta_id"] = null;
        }
        if ($request->prm_actividad_id != 853 && $request->prm_no_id != 711) {
            $request["cuanto"] = null;
            $request["prm_periodo_id"] = null;
        }
        if ($request->prm_actividad_id == 853 && $request->prm_aporta_id != 227) {
            $request["porque"] = null;
            $request["cuanto_aporta"] = null;
        }
        $this->validator($request->all())->validate();
        $dato = Vsi::findOrFail($request->vsi_id);
        if($dato->nnaj->FiDatosBasico->first()->edad >= 18){
            $this->validatorMayor($request->all())->validate();
        }
        $dato = VsiGenIngreso::create($request->all());
        if($request->dias){
            foreach ($request->dias as $d) {
                $dato->dias()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->quienes){
            foreach ($request->quienes as $d) {
                $dato->quienes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->labores){
            foreach ($request->labores as $d) {
                $dato->labores()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 79);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 80);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 81);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 82);
        return redirect()->route('VSI.genIngresos', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        if ($request->prm_actividad_id == 626) {
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_no_id"] = null;
        }
        if ($request->prm_actividad_id == 627) {
            $request["trabaja"] = null;
            $request["prm_otra_id"] = null;
            $request["prm_no_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 628) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_no_id"] = null;
            $request["prm_laboral_id"] = null;
        }
        if ($request->prm_actividad_id == 853) {
            $request["trabaja"] = null;
            $request["prm_informal_id"] = null;
            $request["prm_otra_id"] = null;
            $request["jornada_entre"] = null;
            $request["prm_jor_entre_id"] = null;
            $request["jornada_a"] = null;
            $request["prm_jor_a_id"] = null;
            $request["dias"] = null;
            $request["prm_frecuencia_id"] = null;
            $request["prm_laboral_id"] = null;
            $request["aporte"] = null;
            $request["prm_aporta_id"] = null;
        }
        if ($request->prm_actividad_id != 853 && $request->prm_no_id != 711) {
            $request["cuanto"] = null;
            $request["prm_periodo_id"] = null;
        }
        if ($request->prm_actividad_id == 853 && $request->prm_aporta_id != 227) {
            $request["porque"] = null;
            $request["cuanto_aporta"] = null;
        }
        $this->validator($request->all())->validate();
        $dato = Vsi::findOrFail($request->vsi_id);
        if($dato->nnaj->FiDatosBasico->first()->edad >= 18){
            $this->validatorMayor($request->all())->validate();
        }
        $dato = VsiGenIngreso::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->dias()->detach();
        if($request->dias){
            foreach ($request->dias as $d) {
                $dato->dias()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->quienes()->detach();
        if($request->quienes){
            foreach ($request->quienes as $d) {
                $dato->quienes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->labores()->detach();
        if($request->labores){
            foreach ($request->labores as $d) {
                $dato->labores()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 79);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 80);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 81);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 82);
        return redirect()->route('VSI.genIngresos', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626|max:120',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_no_id' => 'required_if:prm_actividad_id,853',
            'cuanto' => 'required_if:prm_no_id,711',
            'prm_periodo_id' => 'required_if:prm_actividad_id,853|required_if:prm_no_id,711',
            'jornada_entre' => 'required_unless:prm_actividad_id,853',
            'prm_jor_entre_id' => 'required_unless:prm_actividad_id,853',
            'jornada_a' => 'required_unless:prm_actividad_id,853',
            'prm_jor_a_id' => 'required_unless:prm_actividad_id,853',
            'prm_frecuencia_id' => 'required_unless:prm_actividad_id,853',
            'aporte' => 'required_unless:prm_actividad_id,853',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'prm_aporta_id' => 'required_unless:prm_actividad_id,853',
            'porque' => 'required_if:prm_aporta_id,227',
            'cuanto_aporta' => 'required_if:prm_aporta_id,227',
            'expectativa' => 'nullable|string|max:4000',
            'descripcion' => 'nullable|string|max:4000',
            'dias' => 'required_unless:prm_actividad_id,853',
            'quienes' => 'nullable|array',
            'labores' => 'nullable|array',
        ]);
    }

    protected function validatorMayor(array $data){
        return Validator::make($data, [
            'expectativa' => 'required|string|max:4000',
            'descripcion' => 'required|string|max:4000',
            'quienes' => 'required|array',
            'labores' => 'required|array',
        ]);
    }
}
