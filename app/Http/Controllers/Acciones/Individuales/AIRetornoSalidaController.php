<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;

class AIRetornoSalidaController extends Controller{
    
    public function __construct(){
        $this->middleware(['permission:airetornosalida-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $retorno = $dato->AiRetornoSalida->where('activo', 1)->sortByDesc('fecha')->all();
        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'retorno'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor= $dato->AiRetornoSalida->where('activo', 1)->sortByDesc('id')->first();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $parentezco= Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios  = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $retorno = $dato->AiRetornoSalida->where('activo', 1)->sortByDesc('fecha')->all();

        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'valor', 'upis', 
                                                                                        'ampm', 'usuarios', 'documento', 'parentezco', 
                                                                                        'condiciones', 'sino', 'retorno'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = AiRetornoSalida::create($request->all());

        return redirect()->route('ai.retornosalida', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }
    
    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor= $dato->AiRetornoSalida->where('activo', 1)->sortByDesc('id')->first();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $parentezco= Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios  = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $retorno = $dato->AiRetornoSalida->where('activo', 1)->sortByDesc('fecha')->all();
        $valor = AiRetornoSalida::findOrFail($id0);

        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'valor', 'upis', 
                                                                                        'ampm', 'usuarios', 'documento', 'parentezco', 
                                                                                        'condiciones', 'sino', 'retorno', 'valor'));
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = AiRetornoSalida::findOrFail($id1);
        $dato->fill($request->all())->save();

        return redirect()->route('ai.retornosalida', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id'    => 'required|exists:sis_nnajs,id',
            'prm_upi_id'     => 'required|exists:sis_dependencias,id',
            'fecha'          => 'required|date',
            'hora_retorno'   => 'required|date_format:H:i',
            'prm_hor_ret_id' => 'required|exists:parametros,id',
            'descripcion'    => 'required|string|max:4000',
            'observaciones'  => 'required|string|max:4000',
            'nombres_retorna'=> 'required|string|max:120',
            'prm_doc_id'     => 'required|exists:parametros,id',
            'doc_retorna'    => 'required|integer',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'responsable'    => 'required|exists:users,id',
            'user_doc1_id'   => 'required|exists:users,id',
        ]);
    }
}
