<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Tema;
use App\Models\Parametro;
use Illuminate\Support\Facades\Validator;

class TemaController extends Controller{
    public function __construct(){
        $this->middleware(['permission:tema-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:tema-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:tema-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:tema-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.tema.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.tema.index', ['accion' => 'Nuevo']);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = Tema::create($request->all());
        return redirect()->route('tema.editar', $dato->id)->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = Tema::findOrFail($id);
        return view('administracion.tema.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit(Request $request, $id){
        $dato = Tema::findOrFail($id);
        $parametros = $this->datosParametros($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.tema.index', ['accion' => 'Editar'], compact('dato', 'parametros', 'buscar'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = Tema::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('tema')->with('info', 'Registro actualizado con éxito');
    }

    public function updateParametro($id, $id0){
        $dato = Tema::findOrFail($id);
        $dato->parametros()->attach($id0, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        return redirect()->route('tema.editar', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = Tema::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('tema')->with('info', 'Registro '.$activado.' con éxito');
    }

    public function destroyParametro($id, $id0){
        $dato = Tema::findOrFail($id);
        $dato->parametros()->detach($id0);
        return redirect()->route('tema.editar', $id)->with('info', 'Registro Eliminado con éxito');
    }

    protected function datos(array $request){
        return Tema::select('id', 'nombre', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->orWhere('nombre', 'like', '%'.$buscar.'%')
                ->orWhere('id', $buscar);
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function datosParametros(array $request){
        return Parametro::select('id', 'nombre', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:temas',
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:temas,nombre,'.$id,
        ]);
    }
}