<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;

class AISalidaMayoresController extends Controller{

    public function __construct(){
        $this->middleware(['permission:aisalidamayores-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamayores-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamayores-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamayores-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $salidas = $dato->AiSalidaMayores->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        return view('Acciones.Individuales.index', ['accion' => 'SalidaMayores', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'salidas'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $salidas = $dato->AiSalidaMayores->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $upis  = SisDepen::orderBy('nombre')->pluck('nombre', 'id');
        $razones = Tema::findOrFail(272)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        return view('Acciones.Individuales.index', ['accion' => 'SalidaMayores', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'salidas', 'upis', 'razones', 'usuarios'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = AiSalidaMayores::create($request->all());
        foreach ($request->razones as $d) {
            $dato->razones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('ai.salidamayores', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $salidas = $dato->AiSalidaMayores->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $upis  = SisDepen::orderBy('nombre')->pluck('nombre', 'id');
        $razones = Tema::findOrFail(272)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $valor = AiSalidaMayores::findOrFail($id0);
        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        return view('Acciones.Individuales.index', ['accion' => 'SalidaMayores', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'salidas', 'valor', 'upis', 'razones', 'usuarios'));
    }

    public function update(Request $request, $id, $id0){
        $this->validator($request->all())->validate();
        $dato = AiSalidaMayores::findOrFail($id0);
        $dato->fill($request->all())->save();
        $dato->razones()->detach();
        foreach ($request->razones as $d) {
            $dato->razones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('ai.salidamayores', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id' => 'required|exists:sis_nnajs,id',
            'fecha'       => 'required|date',
            'prm_upi_id'  => 'required|exists:sis_depens,id',
            'razones'     => 'required|array',
            'descripcion' => 'required|string|max:4000'
        ]);
    }
}
