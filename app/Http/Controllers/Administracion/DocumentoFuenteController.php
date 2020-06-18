<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisDocufuen;
use Illuminate\Support\Facades\Validator;

class DocumentoFuenteController extends Controller{

  public function __construct(){
        $this->middleware(['permission:documentoFuente-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:documentoFuente-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:documentoFuente-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:documentoFuente-borrar'], ['only' => ['index, show, destroy']]);
    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.documentoFuente.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.documentoFuente.index', ['accion' => 'Nuevo']);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisDocufuen::create($request->all());
        return redirect()->route('documentoFuente')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisDocufuen::findOrFail($id);
        return view('administracion.documentoFuente.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisDocufuen::findOrFail($id);
        return view('administracion.documentoFuente.index', ['accion' => 'Editar'], compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisDocufuen::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('documentoFuente')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisDocufuen::findOrFail($id);
        $dato->sis_esta_id = ($dato->sis_esta_id == 2) ? 1 : 2;
        $dato->save();
        $activado = $dato->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('documentoFuente')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisDocufuen::select('id', 'nombre', 'sis_esta_id')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_docufuens',
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_docufuens,nombre,'.$id,
        ]);
    }
}