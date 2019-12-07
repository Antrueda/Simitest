<?php

namespace App\Http\Controllers\Indicadores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Indicadores\Area;

use Illuminate\Support\Facades\Validator;

class AreaController extends Controller{
  public function __construct(){
    $this->middleware(['permission:area-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:area-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
    $this->middleware(['permission:area-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
    $this->middleware(['permission:area-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request){
    
    $datos = $this->datos($request->all());
    $buscar = ($request->buscar) ? $request->buscar : '';
    return view('Indicadores.Admin.Areas.index', compact('datos', 'buscar'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view('Indicadores.Admin.Areas.index', ['accion' => 'Nuevo']);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    $this->validator($request->all())->validate();
    Area::create($request->all());
    return redirect()->route('area')->with('info', 'Registro creado con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id){
    $dato = Area::findOrFail($id);
    return view('Indicadores.Admin.Areas.index', ['accion' => 'Ver'], compact('dato'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $dato = Area::findOrFail($id);
    return view('Indicadores.Admin.Areas.index', ['accion' => 'Editar'], compact('dato'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
    $this->validatorUpdate($request->all(), $id)->validate();
    $dato = Area::findOrFail($id);
    $dato->fill($request->all())->save();
    return redirect()->route('area')->with('info', 'Registro actualizado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    $dato = Area::findOrFail($id);
      $dato->activo = ($dato->activo == 0) ? 1 : 0;
      $dato->save();
      $activado = $dato->activo == 0 ? 'inactivado' : 'activado';
      return redirect()->route('area')->with('info', 'Registro '.$activado.' con éxito');
  }

  protected function datos(array $request){
    return Area::select('id', 'nombre', 'activo')
        ->when(request('buscar'), function($q, $buscar){
            return $q->where('nombre', 'like', '%'.$buscar.'%');
        })
        ->orderBy('nombre')->paginate(10);
  }

  protected function validator(array $data){
    return Validator::make($data, [
        'nombre' => 'required|string|max:120|unique:areas',
    ]);
  }

protected function validatorUpdate(array $data, $id){
    return Validator::make($data, [
        'nombre' => 'required|string|max:120|unique:areas,nombre,'.$id,
    ]);
  }
}
