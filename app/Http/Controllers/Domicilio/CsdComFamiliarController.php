<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComFamiliarObservaciones;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;

class CsdComFamiliarController extends Controller{

  public function __construct(){
    $this->middleware(['permission:csdcomfamiliar-crear'], ['only' => ['show, store']]);
    $this->middleware(['permission:csdcomfamiliar-editar'], ['only' => ['show, update']]);
  }

  public function show($id){
    $dato  = Csd::findOrFail($id);
    $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
    $valord = $dato->CsdComFamiliar->where('sis_esta_id', 1)->sortByDesc('id')->all();
    $valoro = $dato->CsdComFamiliarObservaciones->where('sis_esta_id', 1)->sortByDesc('id')->first();

    $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $sexo = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(11)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $sexo[$k] = $d;
    }
    $nsnr  = Tema::findOrFail(26)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $eps0 = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(22)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $eps0[$k] = $d;
    }
    $eps1 = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(67)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $eps1[$k] = $d;
    }
    $eps2 = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(68)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $eps2[$k] = $d;
    }
    $genero = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(12)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $genero[$k] = $d;
    }
    $sexual = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(13)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $sexual[$k] = $d;
    }
    $regimen = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(21)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $regimen[$k] = $d;
    }
    $aprobado = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(154)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $aprobado[$k] = $d;
    }
    $documentos = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $documentos[$k] = $d;
    }
    $discapacidad= Tema::findOrFail(24)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $educacion = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(153)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $educacion[$k] = $d;
    }
    $estadoCivil = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(19)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $estadoCivil[$k] = $d;
    }
    $familiares = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $familiares[$k] = $d;
    }
    $grupoEtnico = Tema::findOrFail(20)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $ocupacion = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(294)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $ocupacion[$k] = $d;
    }
    $vinculado = ['' => 'Seleccione...'];
    foreach (Tema::findOrFail(287)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
      $vinculado[$k] = $d;
    }
    $grupoIndigena= Tema::findOrFail(61)->parametros()->orderBy('nombre')->pluck('nombre', 'id');

    foreach ($valord as $k => $v) {
      $nacimiento = $v->nacimiento;
      $date = Carbon::parse($nacimiento);
      $ahora = Carbon::now();
      $edad = $date->diffInYears($ahora);
      $valord[$k]['edad'] = $edad;
    }

    return view('Domicilio.index', ['accion' => 'ComFamiliar'], compact('dato', 'nnajs', 'valord', 'sino', 'documentos', 'sexo',
                                                                        'estadoCivil', 'genero', 'sexual', 'grupoEtnico', 'ocupacion',
                                                                        'familiares', 'vinculado', 'regimen', 'eps0', 'eps1', 'eps2', 'nsnr',
                                                                        'discapacidad', 'aprobado', 'educacion', 'grupoIndigena', 'valoro'));
  }

  public function store(Request $request, $id){
    $this->validator($request->all())->validate();
    if ($request->prm_discapacidad_id == 228){
      $request["prm_cual_id"] = null;
    }
    if($request->prm_regimen_id == 168){
      $request["prm_cualeps_id"] = null;
    }
    if ($request->prm_grupo_etnico_id != 157) {
      $request['prm_cualGrupo_id'] = null;
    }
    $request["prm_tipofuen_id"]=2315;
    $dato = CsdComFamiliar::create($request->all());
    Vsi::indicador($id, 119);
    return redirect()->route('CSD.comfamiliar', $request->csd_id)->with('info', 'Registro creado con éxito');
  }

  public function storeObservaciones(Request $request, $id){
    $this->validatorObservaciones($request->all())->validate();
    $dato = CsdComFamiliarObservaciones::create($request->all());
    Vsi::indicador($id, 120);

    return redirect()->route('CSD.comfamiliar', $request->csd_id)->with('info', 'Registro creado con éxito');
  }

  public function updateObservaciones(Request $request, $id, $id1){
    $this->validatorObservaciones($request->all())->validate();
    $dato = CsdComFamiliarObservaciones::findOrFail($id1);
    $dato->fill($request->all())->save();
    Vsi::indicador($id, 120);

    return redirect()->route('CSD.comfamiliar', $request->csd_id)->with('info', 'Registro actualizado con éxito');
  }
  public function destroyFamiliar($id, $id1){
    $dato = CsdComFamiliar::findOrFail($id1);
    $dato->sis_esta_id = 2;
    $dato->save();
    return redirect()->route('CSD.comfamiliar', $id)->with('info', 'Registro eliminado con éxito');
}

  protected function validator(array $data){
    return Validator::make($data, [
      'csd_id'       => 'required|exists:csds,id',
      'primer_apellido'   => 'required|string|max:120',
      'segundo_apellido'  => 'nullable|string|max:120',
      'primer_nombre'     => 'required|string|max:120',
      'segundo_nombre'    => 'nullable|string|max:120',
      'identitario'       => 'nullable|string|max:120',
      'prm_documento_id'  => 'required|exists:parametros,id',
      'documento'         => 'required|string|max:120',
      'nacimiento'        => 'required|date',
      'prm_sexo_id'       => 'required|exists:parametros,id',
      'prm_estadoivil_id' => 'required|exists:parametros,id',
      'prm_genero_id'     => 'nullable|exists:parametros,id',
      'prm_sexual_id'     => 'nullable|exists:parametros,id',
      'prm_grupo_etnico_id' => 'required|exists:parametros,id',
      'prm_cualGrupo_id'  => 'required_if:prm_grupo_etnico_id,157',
      'prm_ocupacion_id'  => 'required|exists:parametros,id',
      'prm_parentezco_id' => 'required|exists:parametros,id',
      'prm_convive_id'    => 'required|exists:parametros,id',
      'prm_visitado_id'   => 'required|exists:parametros,id',
      'prm_vin_actual_id' => 'required|exists:parametros,id',
      'prm_vin_pasado_id' => 'required|exists:parametros,id',
      'prm_regimen_id'    => 'required|exists:parametros,id',
      'prm_cualeps_id'    => 'required_if:prm_regimen_id,227',
      'sisben'            => 'required|integer|min:0|max:99',
      'prm_sisben_id'     => 'required|exists:parametros,id',
      'prm_discapacidad_id' => 'required|exists:parametros,id',
      'prm_cual_id'       => 'required_if:prm_discapacidad_id,227',
      'prm_peso_id'       => 'required|exists:parametros,id',
      'prm_peso_dos_id'   => 'required|exists:parametros,id',
      'prm_leer_id'       => 'required|exists:parametros,id',
      'prm_escribir_id'   => 'required|exists:parametros,id',
      'prm_operaciones_id'=> 'required|exists:parametros,id',
      'prm_aprobado_id'   => 'required|exists:parametros,id',
      'prm_educacion_id'  => 'required|exists:parametros,id',
      'prm_estudia_id'    => 'required|exists:parametros,id',
    ]);
  }

  protected function validatorObservaciones(array $data){
    return Validator::make($data, [
        'csd_id' => 'required|exists:csds,id',
        'observaciones' => 'required|string|max:4000',
    ]);
  }
}
