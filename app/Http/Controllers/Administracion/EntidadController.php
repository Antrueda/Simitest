<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisEntidad;
use Illuminate\Support\Facades\Validator;

class EntidadController extends Controller{

  public function __construct(){
        $this->middleware(['permission:entidad-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:entidad-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:entidad-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:entidad-borrar'], ['only' => ['index, show, destroy']]);
    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.entidad.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.entidad.index', ['accion' => 'Nuevo']);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisEntidad::create($request->all());
        return redirect()->route('entidad')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisEntidad::findOrFail($id);
        return view('administracion.entidad.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisEntidad::findOrFail($id);
        return view('administracion.entidad.index', ['accion' => 'Editar'], compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisEntidad::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('entidad')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisEntidad::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('entidad')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisEntidad::select('id', 'nombre', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_entidads',
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_entidads,nombre,'.$id,
        ]);
    }
}