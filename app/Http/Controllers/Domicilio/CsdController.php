<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;
use App\Models\consulta\Csd;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class CsdController extends Controller{

    public function __construct(){
        $this->middleware(['permission:csddatobasico-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:csddatobasico-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:csddatobasico-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:csddatobasico-borrar'], ['only' => ['index, show']]);
    }

    public function index(Request $request){ 
        return view('Domicilio.index');
    }

    public function nnaj($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $csds = $dato->csds->where('activo', 1)->sortByDesc('fecha')->all();
        return view('Domicilio.index', ['accion' => 'Nnaj'], compact('dato', 'nnaj', 'csds'));
    }

    public function create(Request $request, $id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $csds = $dato->csds->where('activo', 1)->sortByDesc('fecha')->all();
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Domicilio.index', ['accion' => 'Nueva'], compact('dato', 'nnaj', 'csds', 'hoy'));
    }

    public function store(Request $request, $id){
        $this->validator($request->all())->validate();
        $dato = Csd::create($request->all());
        $dato->nnajs()->attach($id, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        return redirect()->route('csd.nnaj', $id)->with('info', 'Registro creado con éxito');
    }

    public function edit(Request $request, $id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $csds = $dato->csds->where('activo', 1)->sortByDesc('fecha')->all();
        $valor = Csd::findOrFail($id0);
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Domicilio.index', ['accion' => 'Editar'], compact('dato', 'nnaj', 'csds', 'valor', 'hoy'));
    }

    public function update(Request $request, $id, $id0){
        $this->validator($request->all(), $id)->validate();
        $dato = Csd::findOrFail($id0);
        $dato->fill($request->all())->save();
        return redirect()->route('csd.nnaj', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function show($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        return view('Domicilio.index', ['accion' => 'Inicio'], compact('dato', 'nnajs'));
    }

    public function agregar($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('activo', 1)->all();
        $todos = SisNnaj::where('activo', 1)->get()->sortBy('nnaj_datos')->pluck('nnaj_datos', 'id');
        return view('Domicilio.index', ['accion' => 'Agregar'], compact('dato', 'nnajs', 'todos'));
    }

    public function agrega(Request $request, $id){
        $dato = Csd::findOrFail($id);
        $dato->nnajs()->attach($request->nnaj, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        return redirect()->route('csd.ver', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroy($id, $id1){
        $dato = Csd::findOrFail($id);
        $dato->nnajs()->detach($id1);
        return redirect()->route('csd.ver', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validator(array $data){
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return Validator::make($data, [
            'proposito' => 'required|string|max:200',
            'fecha' => 'required|date|before_or_equal:'.$hoy,
        ]);
    }
}