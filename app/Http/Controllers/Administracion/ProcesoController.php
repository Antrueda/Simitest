<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sistema\SisProceso;
use App\Models\Sistema\SisMapaProc;
use App\Traits\Combos\CombosTrait;
use Illuminate\Support\Facades\Validator;

class ProcesoController extends Controller{
    use CombosTrait;
    public function __construct(){

        $this->opciones['permisox']='proceso';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.proceso.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        $PrmProceso = $this->getTemacomboCT([
            'temaxxxx' => 16,
            'cabecera' => false,
        ])['comboxxx'];
        return view('administracion.proceso.index', [
            'accion' => 'Nuevo',
            'SisEntidad' => $this->SisMapaProc(),
            'SisProceso' => $this->SisProceso(),
            'PrmProceso' => $PrmProceso]
        );
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisProceso::create($request->all());
        return redirect()->route('proceso')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisProceso::findOrFail($id);
        return view('administracion.proceso.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisProceso::findOrFail($id);
        $PrmProceso = $this->getTemacomboCT([
            'temaxxxx' => 16,
            'cabecera' => false,
        ])['comboxxx'];
        return view('administracion.proceso.index', [
            'accion' => 'Editar',
            'SisEntidad' => $this->SisMapaProc(),
            'SisProceso' => $this->SisProceso(),
            'PrmProceso' => $PrmProceso]
            , compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validator($request->all())->validate();
        $dato = SisProceso::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('proceso')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisProceso::findOrFail($id);
        $dato->sis_esta_id = ($dato->sis_esta_id == 2) ? 1 : 2;
        $dato->save();
        $activado = $dato->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('proceso')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisProceso::select('id', 'sis_proceso_id', 'sis_mapa_proc_id', 'prm_proceso_id', 'nombre', 'sis_esta_id')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function SisMapaProc(){
        return SisMapaProc::orderBy('version')->pluck('version', 'id');
    }

    protected function SisProceso(){
        $datos = ['' => ''];
        foreach (SisProceso::orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $datos[$k] = $d;
        }
        return $datos;
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_proceso_id' => 'nullable|exists:sis_procesos,id',
            'sis_mapa_proc_id' => 'required|exists:sis_mapa_procs,id',
            'prm_proceso_id' => 'required|exists:parametros,id',
            'nombre' => 'required|string|max:120'
        ]);
    }
}
