<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sistema\SisActividadProceso;
use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisProceso;
use Illuminate\Support\Facades\Validator;

class ActividadProcesoController extends Controller{

    public function __construct(){

        $this->opciones['permisox']='actividadProceso';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.actividadproceso.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.actividadproceso.index', [
            'accion' => 'Nuevo',
            'SisActividad' => $this->SisActividad(),
            'SisProceso' => $this->SisProceso()
            ]
        );
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisActividadProceso::create($request->all());
        return redirect()->route('actividadProceso')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisActividadProceso::findOrFail($id);
        return view('administracion.actividadproceso.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisActividadProceso::findOrFail($id);
        return view('administracion.actividadproceso.index', [
            'accion' => 'Editar',
            'SisActividad' => $this->SisActividad(),
            'SisProceso' => $this->SisProceso()
        ], compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validator($request->all())->validate();
        $dato = SisActividadProceso::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('actividadProceso')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisActividadProceso::findOrFail($id);
        $dato->sis_esta_id = ($dato->sis_esta_id == 2) ? 1 : 2;
        $dato->save();
        $activado = $dato->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('actividadProceso')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisActividadProceso::select('id', 'sis_actividad_id', 'sis_proceso_id', 'tiempo', 'sis_esta_id')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('tiempo', 'like', '%'.$buscar.'%');
            })
            ->orderBy('tiempo')->paginate(10);
    }

    protected function SisActividad(){
        return SisActividad::orderBy('nombre')->pluck('nombre', 'id');
    }

    protected function SisProceso(){
        return SisProceso::orderBy('nombre')->pluck('nombre', 'id');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_actividad_id' => 'required|exists:sis_actividads,id',
            'sis_proceso_id' => 'required|exists:sis_procesos,id',
            'tiempo' => 'required|integer|min:1'
        ]);
    }
}
