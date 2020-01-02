<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Models\sistema\SisFosArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FosAreaController extends Controller{
    public function __construct(){
        $this->middleware(['permission:fosarea-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:fosarea-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:fosarea-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:fosarea-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    }

    public function index(Request $request){

        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('FichaObservacion.Admin.Areas.index', compact('datos', 'buscar'));
    }

    public function create(){
        return view('FichaObservacion.Admin.Areas.index', ['accion' => 'Nuevo']);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisFosArea::create($request->all());
        return redirect()->route('fosarea')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisFosArea::findOrFail($id);
        return view('FichaObservacion.Admin.Areas.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){

        $dato = SisFosArea::findOrFail($id);
        return view('FichaObservacion.Admin.Areas.index', ['accion' => 'Editar'], compact('dato'));
    }

    public function update(Request $request, $id){
        
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisFosArea::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('fosarea')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisFosArea::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('fosarea')->with('info', 'Registro '.$activado. ' con éxito');
    }

    protected function datos(array $request){
        return SisFosArea::select('id', 'nombre', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_fos_areas',
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_fos_areas,nombre,'.$id,
        ]);
    }
}
