<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;

class CsdAlimentacionController extends Controller{

  public function __construct(){
    $this->middleware(['permission:csdalimentacion-crear'], ['only' => ['show, store']]);
    $this->middleware(['permission:csdalimentacion-editar'], ['only' => ['show, update']]);
  }

  public function show($id){
    $dato  = Csd::findOrFail($id);
    $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
    $valor = $dato->CsdAlimentacion->where('sis_esta_id', 1)->sortByDesc('id')->first();
    $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $frecuencia   = Tema::findOrFail(110)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $lugares      = Tema::findOrFail(111)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $alimentacion = Tema::findOrFail(112)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $familiares   = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $entidad      = Tema::findOrFail(113)->parametros()->orderBy('nombre')->pluck('nombre', 'id');

    return view('Domicilio.index', ['accion' => 'Alimentacion'], compact('dato', 'nnajs', 'valor', 'sino', 'frecuencia', 'lugares', 'alimentacion', 'familiares', 'entidad'));
  }

  public function store(Request $request, $id){

    $this->validator($request->all())->validate();

    if ($request->prm_apoyo_id == 228) {
      $request["prm_entidad_id"] = null;
    }

    $dato = CsdAlimentacion::create($request->all());

    if($request->frecuencia) {
      foreach ($request->frecuencia as $d) {
        $dato->frecuencia()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->compra) {
      foreach ($request->compra as $d) {
        $dato->compra()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->ingeridas) {
      foreach ($request->ingeridas as $d) {
        $dato->ingeridas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->prepara) {
      foreach ($request->prepara as $d) {
        $dato->prepara()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    Vsi::indicador($id, 112);
    Vsi::indicador($id, 115);
    Vsi::indicador($id, 116);
    Vsi::indicador($id, 117);
    Vsi::indicador($id, 118);
    return redirect()->route('CSD.alimentacion', $request->csd_id)->with('info', 'Registro creado con éxito');
  }

  public function update(Request $request, $id, $id1){
    $this->validator($request->all())->validate();

    if ($request->prm_apoyo_id == 228) {
      $request["prm_entidad_id"] = null;
    }

    $dato = CsdAlimentacion::findOrFail($id1);
    $dato->fill($request->all())->save();

    if($request->frecuencia) {
      $dato->frecuencia()->detach();
      foreach ($request->frecuencia as $d) {
        $dato->frecuencia()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->compra) {
      $dato->compra()->detach();
      foreach ($request->compra as $d) {
        $dato->compra()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->ingeridas) {
      $dato->ingeridas()->detach();
      foreach ($request->ingeridas as $d) {
        $dato->ingeridas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }

    if($request->prepara) {
      $dato->prepara()->detach();
      foreach ($request->prepara as $d) {
        $dato->prepara()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    Vsi::indicador($id, 112);
    Vsi::indicador($id, 115);
    Vsi::indicador($id, 116);
    Vsi::indicador($id, 117);
    Vsi::indicador($id, 118);

    return redirect()->route('CSD.alimentacion', $request->csd_id)->with('info', 'Registro creado con éxito');

  }

  protected function validator(array $data){
    return Validator::make($data, [
      'csd_id'       => 'required|exists:csds,id',
      'cant_personas'     => 'required|integer|min:0|max:99',
      'frecuencia'        => 'required|array',
      'compra'            => 'required|array',
      'ingeridas'         => 'required|array',
      'prm_horario_id'    => 'required|exists:parametros,id',
      'prepara'           => 'required|array',
      'prm_apoyo_id'      => 'required|exists:parametros,id',
      'prm_entidad_id'    => 'required|exists:parametros,id',
    ]);
  }
}
