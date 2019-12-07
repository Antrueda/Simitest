<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisBarrio;

class CsdResidenciaController extends Controller{
  
    public function __construct(){
        $this->middleware(['permission:csdresidencia-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csdresidencia-editar'], ['only' => ['show, update']]);
    }

    public function show($id, Request $request){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        $valor = $dato->CsdResidencia->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $actual = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(36)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $actual[$k] = $d;
        }
        $tipo = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(34)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tipo[$k] = $d;
        }
        $zona = Tema::findOrFail(37)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $muros = Tema::findOrFail(91)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $pisos = Tema::findOrFail(90)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $estado= Tema::findOrFail(93)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condiciones = Tema::findOrFail(42)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $residencia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(35)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $residencia[$k] = $d;
        }
        $estrato = Tema::findOrFail(41)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $alfabeto = ['' => ''];
        foreach (Tema::findOrFail(39)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $alfabeto[$k] = $d;
        }
        $cuadrante = ['' => ''];
        foreach (Tema::findOrFail(38)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $cuadrante[$k] = $d;
        }
        $tViaPrincipal = Tema::findOrFail(62)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $localidadjs = SisLocalidad::orderBy('s_localidad')->get();
        $localidades = $localidadjs->pluck('s_localidad', 'id');
        if(!$valor){
            if(!$request->old()){
                $upzs = $localidadjs->first()->upzs->pluck('codigoNombre', 'id');
                $barrios = $localidadjs->first()->upzs->first()->sis_barrios->pluck('s_barrio', 'id');
            } else {
                $upzs = $localidadjs->find($request->old('sis_localidad_id'))->upzs->pluck('codigoNombre', 'id');
                $barrios = $localidadjs->find($request->old('sis_localidad_id'))->upzs->find($request->old('sis_upz_id'))->sis_barrios->pluck('s_barrio', 'id');
            }
        } else {
            $upzs = $localidadjs->find($valor->sis_localidad_id)->upzs->pluck('codigoNombre', 'id');
            $barrios = $localidadjs->find($valor->sis_localidad_id)->upzs->find($valor->sis_upz_id)->sis_barrios->pluck('s_barrio', 'id');
        }
        return view('Domicilio.index', ['accion' => 'Residencia'], compact('dato', 'nnajs', 'valor', 'sino', 'residencia', 'tipo', 'actual', 'zona', 'tViaPrincipal', 'alfabeto', 'cuadrante', 'estrato', 'condiciones', 'pisos', 'muros', 'estado', 'localidadjs', 'localidades', 'upzs', 'barrios'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_dir_zona_id == 288 || $request->prm_dir_zona_id == 289) {
            $request["prm_dir_via_id"] = null;
            $request["dir_nombre"] = null;
            $request["prm_dir_alfavp_id"] = null;
            $request["prm_dir_bis_id"] = null;
            $request["prm_dir_alfabis_id"] = null;
            $request["prm_dir_cuadrantevp_id"] = null;
            $request["dir_generadora"] = null;
            $request["prm_dir_alfavg_id"] = null;
            $request["dir_placa"] = null;
            $request["prm_dir_cuadrantevg_id"] = null;
            $request["prm_estrato_id"] = null;
        }
        if ($request->prm_dir_zona_id == 289) {
            $request["dir_complemento"] = null;
        }
        $dato = CsdResidencia::create($request->all());
        foreach ($request->ambientes as $d) {
            $dato->ambientes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('CSD.residencia', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_dir_zona_id == 288 || $request->prm_dir_zona_id == 289) {
            $request["prm_dir_via_id"] = null;
            $request["dir_nombre"] = null;
            $request["prm_dir_alfavp_id"] = null;
            $request["prm_dir_bis_id"] = null;
            $request["prm_dir_alfabis_id"] = null;
            $request["prm_dir_cuadrantevp_id"] = null;
            $request["dir_generadora"] = null;
            $request["prm_dir_alfavg_id"] = null;
            $request["dir_placa"] = null;
            $request["prm_dir_cuadrantevg_id"] = null;
            $request["prm_estrato_id"] = null;
        }
        if ($request->prm_dir_zona_id == 289) {
            $request["dir_complemento"] = null;
        }
        $dato = CsdResidencia::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->ambientes()->detach();
        foreach ($request->ambientes as $d) {
            $dato->ambientes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('CSD.residencia', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'prm_es_id' => 'required|exists:parametros,id',
            'prm_dir_tipo_id' => 'required|exists:parametros,id',
            'prm_dir_zona_id' => 'required|exists:parametros,id',
            'prm_dir_via_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'dir_nombre' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_alfavp_id' => 'nullable|exists:parametros,id',
            'prm_dir_bis_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'prm_dir_alfabis_id' => 'nullable|exists:parametros,id',
            'prm_dir_cuadrantevp_id' => 'nullable|exists:parametros,id',
            'dir_generadora' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_alfavg_id' => 'nullable|exists:parametros,id',
            'dir_placa' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_cuadrantevg_id' => 'nullable|exists:parametros,id',
            'prm_estrato_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'dir_complemento' => 'required_if:prm_dir_zona_id,288|max:120',
            'sis_localidad_id' => 'required|exists:sis_localidads,id',
            'sis_upz_id' => 'required|exists:sis_upzs,id',
            'sis_barrio_id' => 'nullable|exists:sis_barrios,id',
            'telefono_uno' => 'nullable|string|max:120',
            'telefono_dos' => 'required|string|max:120',
            'telefono_tres' => 'nullable|string|max:120',
            'email' => 'nullable|email|max:120',
            'prm_piso_id' => 'required|exists:parametros,id',
            'prm_muro_id' => 'required|exists:parametros,id',
            'prm_higiene_id' => 'required|exists:parametros,id',
            'prm_ventilacion_id' => 'required|exists:parametros,id',
            'prm_iluminacion_id' => 'required|exists:parametros,id',
            'prm_orden_id' => 'required|exists:parametros,id',
            'ambientes' => 'required|array',
        ]);
    }
}