<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tema;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdViolencia;
use Illuminate\Support\Facades\Validator;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisMunicipio;

class CsdViolenciaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:csdviolencia-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csdviolencia-editar'], ['only' => ['show, update']]);
    }

    public function show($id){ 
        $dato  = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        $valor = $dato->CsdViolencia->where('activo', 1)->sortByDesc('id')->first();
        $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condicion  = Tema::findOrFail(57)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $depajs = SisDepartamento::orderBy('s_departamento')->get();
        $departamentos = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
        if(!$valor){
            $municipios = $municipios1 = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', 6)->pluck('s_municipio', 'id');
        } else {
            $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', $valor->departamento_cond_id)->pluck('s_municipio', 'id');
            $municipios1 = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', $valor->departamento_cert_id)->pluck('s_municipio', 'id');
        }
        return view('Domicilio.index', ['accion' => 'Violencia'], compact('dato', 'nnajs', 'valor', 'sino', 'condicion', 'depajs', 'departamentos', 'municipios', 'municipios1'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_condicion_id != 450 && $request->prm_condicion_id != 451 && $request->prm_condicion_id != 452 && $request->prm_condicion_id != 936 && $request->prm_condicion_id != 454) {
            $request["departamento_cond_id"] = null;
            $request["municipio_cond_id"] = null;
        }
        if ($request->prm_certificado_id == 228) {
            $request["departamento_cert_id"] = null;
            $request["municipio_cert_id"] = null;
        }
        CsdViolencia::create($request->all());
        return redirect()->route('CSD.violencia', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_condicion_id != 450 && $request->prm_condicion_id != 451 && $request->prm_condicion_id != 452 && $request->prm_condicion_id != 936 && $request->prm_condicion_id != 454) {
            $request["departamento_cond_id"] = null;
            $request["municipio_cond_id"] = null;
        }
        if ($request->prm_certificado_id == 228) {
            $request["departamento_cert_id"] = null;
            $request["municipio_cert_id"] = null;
        }
        $dato = CsdViolencia::findOrFail($id1);
        $dato->fill($request->all())->save();
        return redirect()->route('CSD.violencia', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_condicion_id' => 'required|exists:parametros,id',
            'departamento_cond_id' => 'required_if:prm_condicion_id,450|required_if:prm_condicion_id,451|required_if:prm_condicion_id,452|required_if:prm_condicion_id,936|required_if:prm_condicion_id,454',
            'municipio_cond_id' => 'required_if:prm_condicion_id,450|required_if:prm_condicion_id,451|required_if:prm_condicion_id,452|required_if:prm_condicion_id,936|required_if:prm_condicion_id,454',
            'prm_certificado_id' => 'required|exists:parametros,id',
            'departamento_cert_id' => 'required_if:prm_certificado_id,227',
            'municipio_cert_id' => 'required_if:prm_certificado_id,227',
        ]);
    }
}