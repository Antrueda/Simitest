<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Carbon;

class AIRetornoSalidaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:airetornosalida-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:airetornosalida-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $retorno = $dato->AiRetornoSalida->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'retorno'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $upis = SisDepen::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $documento[$k] = $d;
        }
        $parentezco = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $parentezco[$k] = $d;
        }
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios = ['' => 'Seleccione...'];
        foreach (User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id') as $k => $d) {
                $usuarios[$k] = $d;
        }
        $retorno = $dato->AiRetornoSalida->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'upis',
                                                                                        'ampm', 'usuarios', 'documento', 'parentezco',
                                                                                        'condiciones', 'sino', 'retorno', 'hoy'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = AiRetornoSalida::create($request->all());
        foreach ($request->condiciones as $k => $d) {
            $dato->condiciones()->attach($k, ['valor_id' => $d, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('ai.retornosalida', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $upis = SisDepen::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $documento[$k] = $d;
        }
        $parentezco = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $parentezco[$k] = $d;
        }
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios = ['' => 'Seleccione...'];
        foreach (User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id') as $k => $d) {
                $usuarios[$k] = $d;
        }
        $retorno = $dato->AiRetornoSalida->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $valor = AiRetornoSalida::findOrFail($id0);
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Acciones.Individuales.index', ['accion' => 'RetornoSalida', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'valor', 'upis', 'ampm', 'usuarios', 'documento', 'parentezco', 'condiciones', 'sino', 'retorno', 'valor', 'hoy'));
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = AiRetornoSalida::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->condiciones()->detach();
        foreach ($request->condiciones as $k => $d) {
            $dato->condiciones()->attach($k, ['valor_id' => $d, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()->route('ai.retornosalida', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return Validator::make($data, [
            'sis_nnaj_id'    => 'required|exists:sis_nnajs,id',
            'prm_upi_id'     => 'required|exists:sis_depens,id',
            'fecha'          => 'required|date|before_or_equal:'.$hoy,
            'hora_retorno'   => 'required',
            'prm_hor_ret_id' => 'required|exists:parametros,id',
            'descripcion'    => 'required|string|max:4000',
            'observaciones'  => 'required|string|max:4000',
            'nombres_retorna'=> 'nullable|string|max:120',
            'prm_doc_id'     => 'nullable|exists:parametros,id',
            'doc_retorna'    => 'nullable|integer',
            'prm_parentezco_id' => 'nullable|exists:parametros,id',
            'responsable'    => 'required|exists:users,id',
            'user_doc1_id'   => 'required|exists:users,id',
            'condiciones' => 'required|array',
        ]);
    }
}
