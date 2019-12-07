<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisMapaProc;
use App\Models\sistema\SisEntidad;
use Illuminate\Support\Facades\Validator;

class MapaProcesoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:mapaProceso-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:mapaProceso-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:mapaProceso-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:mapaProceso-borrar'], ['only' => ['index, show, destroy']]);
    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.mapaProceso.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.mapaProceso.index', ['accion' => 'Nuevo', 'SisEntidad' => $this->SisEntidad()]);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisMapaProc::create($request->all());
        return redirect()->route('mapaProceso')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisMapaProc::findOrFail($id);
        return view('administracion.mapaProceso.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisMapaProc::findOrFail($id);
        return view('administracion.mapaProceso.index', ['accion' => 'Editar', 'SisEntidad' => $this->SisEntidad()], compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validator($request->all())->validate();
        $dato = SisMapaProc::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('mapaProceso')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisMapaProc::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('mapaProceso')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisMapaProc::select('id', 'version', 'sis_entidad_id', 'vigencia', 'cierre', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('version', 'like', '%'.$buscar.'%');
            })
            ->orderBy('version')->paginate(10);
    }

    protected function SisEntidad(){
        return SisEntidad::orderBy('nombre')->pluck('nombre', 'id');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_entidad_id' => 'required|exists:sis_entidads,id',
            'version' => 'required|integer|min:0',
            'vigencia' => 'required|date',
            'cierre' => 'required|date',
        ]);
    }
}