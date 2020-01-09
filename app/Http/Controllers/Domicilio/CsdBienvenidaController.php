<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdBienvenida;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;

class CsdBienvenidaController extends Controller{

  public function __construct(){
    $this->middleware(['permission:csdbienvenida-crear'], ['only' => ['show, store']]);
    $this->middleware(['permission:csdbienvenida-editar'], ['only' => ['show, update']]);
  }

  public function show($id){
    $dato  = Csd::findOrFail($id);
    $nnajs = $dato->nnajs->where('activo', 1)->all();
    $valor = $dato->CsdBienvenida->where('activo', 1)->sortByDesc('id')->first();
    $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $personas = Tema::findOrFail(159)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $motivos  = Tema::findOrFail(63)->parametros()->orderBy('nombre')->pluck('nombre', 'id');

    return view('Domicilio.index', ['accion' => 'Bienvenida'], compact('dato', 'nnajs', 'valor', 'sino', 'personas', 'motivos'));
  }

  public function store(Request $request, $id){

    $this->validator($request->all())->validate();
    $dato = CsdBienvenida::create($request->all());

    foreach ($request->motivos as $d) {
      $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
    }
    Vsi::indicador($id, 117);
    Vsi::indicador($id, 118);
    return redirect()->route('CSD.bienvenida', $request->csd_id)->with('info', 'Registro creado con éxito');
  }


  public function update(Request $request, $id, $id1){

    $this->validator($request->all())->validate();
    $dato = CsdBienvenida::findOrFail($id1);
    $dato->fill($request->all())->save();

    $dato->motivos()->detach();
    foreach ($request->motivos as $d) {
      $dato->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
    }
    Vsi::indicador($id, 117);
    Vsi::indicador($id, 118);
    return redirect()->route('CSD.bienvenida', $id)->with('info', 'Registro actualizado con éxito');
  }

  protected function validator(array $data){
    return Validator::make($data, [
      'csd_id'    => 'required|exists:csds,id',
      'prm_persona_id' => 'required|exists:parametros,id',
      'motivos'  => 'required|array'
    ]);
  }
}
