<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\SisDocumentoFuente;
use Illuminate\Support\Facades\Validator;

class ActividadController extends Controller{

    public function __construct(){

        $this->opciones['permisox']='actividad';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        return view('administracion.actividad.index', compact('datos', 'buscar'));
    }

    public function create(Request $request){
        return view('administracion.actividad.index', ['accion' => 'Nuevo', 'docsFuente' => $this->docsFuente()]);
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        SisActividad::create($request->all());
        return redirect()->route('actividad')->with('info', 'Registro creado con éxito');
    }

    public function show($id){
        $dato = SisActividad::findOrFail($id);
        return view('administracion.actividad.index', ['accion' => 'Ver'], compact('dato'));
    }

    public function edit($id){
        $dato = SisActividad::findOrFail($id);
        return view('administracion.actividad.index', ['accion' => 'Editar', 'docsFuente' => $this->docsFuente()], compact('dato'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisActividad::findOrFail($id);
        $dato->fill($request->all())->save();
        return redirect()->route('actividad')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisActividad::findOrFail($id);
        $dato->sis_esta_id = ($dato->sis_esta_id == 2) ? 1 : 2;
        $dato->save();
        $activado = $dato->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('actividad')->with('info', 'Registro '.$activado.' con éxito');
    }

    protected function datos(array $request){
        return SisActividad::select('id', 'nombre', 'sis_docfuen_id', 'sis_esta_id')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('nombre')->paginate(10);
    }

    protected function docsFuente(){
        return SisDocfuen::orderBy('nombre')->pluck('nombre', 'id');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_actividads',
            'sis_docfuen_id' => 'required|exists:sis_docfuens,id',
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:120|unique:sis_actividads,nombre,'.$id,
            'sis_docfuen_id' => 'required|exists:sis_docfuens,id',
        ]);
    }
}
