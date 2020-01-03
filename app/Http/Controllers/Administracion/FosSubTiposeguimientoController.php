<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\sistema\SisFosArea;
use App\Models\sistema\SisFosTipoSeguimiento;
use App\Models\sistema\SisFosSubTipoSeguimiento;

class FosSubTiposeguimientoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:fossubtipo-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:fossubtipo-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:fossubtipo-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:fossubtipo-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    }

    public function index(Request $request){
        $datos = $this->datos($request->all());
        $buscar = ($request->buscar) ? $request->buscar : '';
        
        return view('FichaObservacion.Admin.SubTipoSeguimiento.index', compact('datos', 'buscar'));
    }

    public function create(){
        $areas = ['' => 'Seleccione...'];
        foreach (SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id') as $k => $d){
            $areas[$k] = $d;
        }
        $tipos = ['' => 'Seleccione...'];

        return view('FichaObservacion.Admin.SubTipoSeguimiento.index', ['accion' => 'Nuevo'], compact('areas', 'tipos'));
    }

    public function store(Request $request){
        //dd($request);
        $this->validator($request->all())->validate();
        SisFosSubTipoSeguimiento::create($request->all());

        return redirect()->route('fossubtipo')->with('info', 'Registro creado con éxito');
    }

    public function show($id){

        $dato = SisFosSubTipoSeguimiento::findOrFail($id);
        $areas = ['' => 'Seleccione...'];
        foreach (SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id') as $k => $d){
            $areas[$k] = $d;
        }
        $tipos = ['' => 'Seleccione...'];

        return view('FichaObservacion.Admin.SubTipoSeguimiento.index', ['accion' => 'Ver'], compact('dato', 'areas', 'tipos'));
    }

    public function edit($id){
        $dato = SisFosSubTipoSeguimiento::findOrFail($id);
        $areas = SisFosArea::orderBy('nombre')->where('activo', '1')->pluck('nombre', 'id');
        $tipos = ['' => 'Seleccione...'];

        return view('FichaObservacion.Admin.SubTipoSeguimiento.index', ['accion' => 'Editar'], compact('dato', 'areas', 'tipos'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = SisFosSubTipoSeguimiento::findOrFail($id);
        $dato->fill($request->all())->save();

        return redirect()->route('fossubtipo')->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id){
        $dato = SisFosSubTipoSeguimiento::findOrFail($id);
        $dato->activo = ($dato->activo == 0) ? 1 : 0;
        $dato->save();
        $activado = $dato->activo == 0 ? 'inactivado' : 'activado';

        return redirect()->route('fossubtipo')->with('info', 'Registro '.$activado. ' con éxito');
    }

    protected function datos(array $request){
        return SisFosSubTipoSeguimiento::select('id', 'nombre', 'area_id', 'seg_id', 'activo')
            ->when(request('buscar'), function($q, $buscar){
                return $q->where('nombre', 'like', '%'.$buscar.'%');
            })
            ->orderBy('area_id')->orderBy('seg_id')->orderBy('nombre')->paginate(10);
    }

    public function getTipoSeguimientos(Request $request, $id){
        if ($request->ajax()) {
            $tipos = SisFosTipoSeguimiento::tipoSeguimientos($id);
            return response()->json($tipos);
        }
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre'        => 'required|string|max:120|unique:sis_fos_tipo_seguimientos',
            'area_id'       => 'required',
            'seg_id'        => 'required',
            'descripcion'   => 'nullable|max:4000'
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre'        => 'required|string|max:120|unique:sis_fos_tipo_seguimientos,nombre,'.$id,
            'area_id'       => 'required',
            'seg_id'        => 'required',
            'descripcion'   => 'nullable|max:4000'
        ]);
    }

}
