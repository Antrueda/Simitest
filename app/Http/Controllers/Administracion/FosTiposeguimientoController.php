<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Models\sistema\SisFosArea;
use App\Models\sistema\SisFosTipoSeguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FosTipoSeguimientoController extends Controller{
    public function __construct(){
        $this->middleware(['permission:fostipo-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:fostipo-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:fostipo-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:fostipo-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    }
    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        
        return view('FichaObservacion.Admin.TipoSeguimiento.index', compact('datos', 'buscar'));
    }

    public function create(){
        $areas = SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id');
        return view('FichaObservacion.Admin.TipoSeguimiento.index', ['accion' => 'Nuevo'], compact('areas'));
    }

    public function store(Request $request){

        $this->validator($request->all())->validate();
        SisFosTipoSeguimiento::create($request->all());

        return redirect()->route('fostipo')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisFosTipoSeguimiento::findOrFail($id);
        $areas = SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id');
        return view('FichaObservacion.Admin.TipoSeguimiento.index', ['accion' => 'Ver'], compact('dato', 'areas'));
    }

    public function edit($id){
        
        $dato = SisFosTipoSeguimiento::findOrFail($id);
        $areas = SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id');
        
        return view('FichaObservacion.Admin.TipoSeguimiento.index', ['accion' => 'Editar'], compact('dato', 'areas'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisFosTipoSeguimiento::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('fostipo')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){

        $dato = SisFosTipoSeguimiento::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';

        return redirect()->route('fostipo')->with('info', 'Registro '.$activado. ' con éxito');
    }

    protected function datos(array $request){
        return SisFosTipoSeguimiento::select('id', 'nombre', 'area_id', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('area_id')->orderBy('nombre')->paginate(10);
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_fos_tipo_seguimientos',
            'area_id' => 'required'
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_fos_tipo_seguimientos,nombre,'.$id,
            'area_id' => 'required'
        ]);
    }
}
