<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;

class AISalidaMenoresController extends Controller{
    
    public function __construct(){
        $this->middleware(['permission:aisalidamenores-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamenores-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamenores-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:aisalidamenores-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $salidas = $dato->AiSalidaMenores->where('activo', 1)->sortByDesc('fecha')->all();

        return view('Acciones.Individuales.index', ['accion' => 'SalidaMenores', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'salidas'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $salidas = $dato->AiSalidaMenores->where('activo', 1)->sortByDesc('fecha')->all();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $objetivos = Tema::findOrFail(307)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $parentezco= Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(25)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sina = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios    = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');

        return view('Acciones.Individuales.index', ['accion' => 'SalidaMenores', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'salidas', 'upis', 
                                                                                          'ampm','objetivos', 'documento', 'parentezco', 
                                                                                          'sino', 'usuarios', 'condiciones', 'sina'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();

        $dato = AiSalidaMenores::create($request->all());        
        foreach ($request->objetivo as $d) {
            $dato->objetivo()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        foreach ($request->condiciones as $d) {
            $dato->condiciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        return redirect()->route('ai.salidamenores', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $salidas = $dato->AiSalidaMenores->where('activo', 1)->sortByDesc('fecha')->all();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $objetivos = Tema::findOrFail(307)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $documento = Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $parentezco= Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(25)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sina = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $condiciones = Tema::findOrFail(308)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios    = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $valor = AiSalidaMenores::findOrFail($id0);

        return view('Acciones.Individuales.index', ['accion' => 'SalidaMenores', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'salidas', 'upis', 
                                                                                          'ampm','objetivos', 'documento', 'parentezco', 
                                                                                          'sino', 'usuarios', 'condiciones', 'sina', 'valor'));
    }


    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = AiSalidaMenores::findOrFail($id1);
        $dato->fill($request->all())->save();

        $dato->objetivo()->detach();
        foreach ($request->objetivo as $d) {
            $dato->objetivo()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        $dato->condiciones()->detach();
        foreach ($request->condiciones as $d) {
            $dato->condiciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        return redirect()->route('ai.salidamenores', $id)->with('info', 'Registro actualizado con éxito');
    }
    
    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id'       => 'required|exists:sis_nnajs,id',
            'prm_upi_id'        => 'required|exists:sis_dependencias,id',
            'fecha'             => 'required|date',
            'hora_salida'       => 'required|date_format:h:i',
            'prm_hor_sal_id'    => 'required|exists:parametros,id',
            'primer_apellido'   => 'required|string|max:120',
            'segundo_apellido'  => 'required|string|max:120',
            'primer_nombre'     => 'required|string|max:120',
            'segundo_nombre'    => 'required|string|max:120',
            'prm_doc_id'        => 'required|exists:parametros,id',
            'documento'         => 'required|integer',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'prm_autorizado_id' => 'required|exists:parametros,id',
            'ape1_autorizado'   => 'nullable|string|max:120',
            'ape2_autorizado'   => 'nullable|string|max:120',
            'nom1_autorizado'   => 'nullable|string|max:120',
            'nom2_autorizado'   => 'nullable|string|max:120',
            'prm_doc2_id'       => 'nullable|exists:parametros,id',
            'doc_autorizado'    => 'nullable|number',
            'prm_parentezco2_id'=> 'nullable|exists:parametros,id',
            'prm_carta_id'      => 'nullable|exists:parametros,id',
            'prm_copiaDoc_id'   => 'nullable|exists:parametros,id',
            'prm_copiaDoc2_id'  => 'nullable|exists:parametros,id',
            'descripcion'       => 'required|string|max:4000',
            'objetos'           => 'required|string|max:4000',
            'prm_upi2_id'       => 'required|exists:parametros,id',
            'tiempo'            => 'required|integer',
            'novedad'           => 'required|string|max:120',
            'dir_salida'        => 'required|string|max:120',
            'tel_contacto'      => 'required|integer',
            'causa'             => 'nullable|string|max:4000',
            'nombres_recoge'    => 'required|string|max:120',
            'doc_recoge'        => 'required|string|max:120',
            'responsable'       => 'required|exists:users,id',
            'user_doc1_id'      => 'required|exists:users,id',
            'objetivo'          => 'required|array',
            'condiciones'       => 'required|array'
        ]);
    }
}
