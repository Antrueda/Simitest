<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Mitigacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Salud\Mitigacion\Vspa;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;

class VspaController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vspa-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:vspa-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:vspa-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:vspa-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $vspa = $dato->Vspa->where('activo', 1)->sortByDesc('fecha')->all();

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'vspa'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $vspa = $dato->Vspa->where('activo', 1)->sortByDesc('fecha')->all();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $tValoracion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(312)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tValoracion[$k] = $d;
        }
        $sexo = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(11)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sexo[$k] = $d;
        }
        $genero = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(12)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $genero[$k] = $d;
        }
        $orientacion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(13)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $orientacion[$k] = $d;
        }
        $documentos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $documentos[$k] = $d;
        }
        $sino = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sino[$k] = $d;
        }
        $escolar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(313)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $escolar[$k] = $d;
        }
        $ingresos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(314)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $ingresos[$k] = $d;
        }
        $modalidad = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(315)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $modalidad[$k] = $d;
        }
        $acude = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(316)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $acude[$k] = $d;
        }
        $sitio = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(317)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sitio[$k] = $d;
        }
        $frecuencia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(318)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $frecuencia[$k] = $d;
        }
        $via = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(55)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $via[$k] = $d;
        }
        $impacto = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(319)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $impacto[$k] = $d;
        }
        $sustancia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(320)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sustancia[$k] = $d;
        }
        $cantidad = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(321)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $cantidad[$k] = $d;
        }
        $obtiene = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(322)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $obtiene[$k] = $d;
        }
        $medida = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(323)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $medida[$k] = $d;
        }
        $costumbre = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(324)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $costumbre[$k] = $d;
        }
        $comparte = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(325)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $comparte[$k] = $d;
        }
        $usuarios = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'vspa', 'upis', 
                                                                                                'tValoracion', 'sexo', 'genero', 'orientacion',
                                                                                                'documentos', 'sino', 'escolar', 'ingresos',
                                                                                                'modalidad', 'acude', 'sitio', 'frecuencia',
                                                                                                'via', 'impacto', 'sustancia', 'cantidad', 
                                                                                                'obtiene', 'medida', 'costumbre', 'comparte',
                                                                                                'usuarios'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = Vspa::create($request->all());

        return redirect()->route('mitigacion.vspa', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $vspa = $dato->AiSalidaMayores->where('activo', 1)->sortByDesc('fecha')->all();
        $upis = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $tValoracion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(312)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tValoracion[$k] = $d;
        }
        $sexo = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(11)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sexo[$k] = $d;
        }
        $genero = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(12)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $genero[$k] = $d;
        }
        $orientacion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(13)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $orientacion[$k] = $d;
        }
        $documentos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $documentos[$k] = $d;
        }
        $sino = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sino[$k] = $d;
        }
        $escolar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(313)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $escolar[$k] = $d;
        }
        $ingresos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(314)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $ingresos[$k] = $d;
        }
        $modalidad = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(315)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $modalidad[$k] = $d;
        }
        $acude = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(316)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $acude[$k] = $d;
        }
        $sitio = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(317)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sitio[$k] = $d;
        }
        $frecuencia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(318)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $frecuencia[$k] = $d;
        }
        $via = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(55)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $via[$k] = $d;
        }
        $impacto = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(319)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $impacto[$k] = $d;
        }
        $sustancia = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(320)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sustancia[$k] = $d;
        }
        $cantidad = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(321)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $cantidad[$k] = $d;
        }
        $obtiene = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(322)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $obtiene[$k] = $d;
        }
        $medida = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(323)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $medida[$k] = $d;
        }
        $costumbre = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(324)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $costumbre[$k] = $d;
        }
        $comparte = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(325)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $comparte[$k] = $d;
        }
        $usuarios = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $valor    = Vspa::findOrFail($id0);

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'vspa', 'upis', 
                                                                                                'tValoracion', 'sexo', 'genero', 'orientacion',
                                                                                                'documentos', 'sino', 'escolar', 'ingresos',
                                                                                                'modalidad', 'acude', 'sitio', 'frecuencia',
                                                                                                'via', 'impacto', 'sustancia', 'cantidad', 
                                                                                                'obtiene', 'medida', 'costumbre', 'comparte',
                                                                                                'usuarios', 'valor'));

    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = Vspa::findOrFail($id1);
        $dato->fill($request->all())->save();

        return redirect()->route('mitigacion.vspa', $id)->with('info', 'Registro actualizado con éxito');        
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id'       => 'required|exists:sis_nnajs,id',
            'prm_upi_id'        => 'required|exists:sis_dependencias,id',
            'fecha'             => 'required|date',
            'prm_valoracion_id' => 'required|exists:parametros,id',
            'primer_apellido'   => 'required|string|max:120',
            'segundo_apellido'  => 'required|string|max:120',
            'primer_nombre'     => 'required|string|max:120',
            'segundo_nombre'    => 'required|string|max:120',
            'identitario'       => 'nullable|string|max:120',
            'apodo'             => 'nullable|string|max:120',
            'nacimiento'        => 'required|date',
            'prm_sexo_id'       => 'required|exists:parametros,id',
            'prm_genero_id'     => 'required|exists:parametros,id',
            'prm_sexual_id'     => 'required|exists:parametros,id',
            'prm_documento_id'  => 'required|exists:parametros,id',
            'documento'         => 'required|integer',
            'prm_icbf_id'       => 'required|exists:parametros,id',
            'previos'           => 'required|integer',
            'prm_gestante_id'   => 'nullable|exists:parametros,id',
            'semanas_gestacion' => 'nullable|integer',
            'prm_escolar_id'    => 'required|exists:parametros,id',
            'prm_ingresos_id'   => 'required|exists:parametros,id',
            'prm_modalidad_id'  => 'required|exists:parametros,id',
            'prm_acude_id'      => 'required|exists:parametros,id',
            'prm_sitio_id'      => 'required|exists:parametros,id',
            'prm_probado_id'    => 'required|exists:parametros,id',
            'prm_droga_ini_id'  => 'nullable|exists:parametros,id',
            'prm_droga_dos_id'  => 'nullable|exists:parametros,id',
            'prm_droga_tres_id' => 'nullable|exists:parametros,id',
            'prm_droga_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_droga_cinco_id'=> 'nullable|exists:parametros,id',
            'prm_droga_seis_id' => 'nullable|exists:parametros,id',
            'prm_droga_siete_id'=> 'nullable|exists:parametros,id',
            'prm_droga_dmi_id'  => 'nullable|exists:parametros,id',
            'prm_fre_ini_id'    => 'nullable|exists:parametros,id',
            'prm_fre_dos_id'    => 'nullable|exists:parametros,id',
            'prm_fre_tres_id'   => 'nullable|exists:parametros,id',
            'prm_fre_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_fre_cinco_id'  => 'nullable|exists:parametros,id',
            'prm_fre_seis_id'   => 'nullable|exists:parametros,id',
            'prm_fre_siete_id'  => 'nullable|exists:parametros,id',
            'prm_fre_dmi_id'    => 'nullable|exists:parametros,id',
            'prm_via_ini_id'    => 'nullable|exists:parametros,id',
            'prm_via_dos_id'    => 'nullable|exists:parametros,id',
            'prm_via_tres_id'   => 'nullable|exists:parametros,id',
            'prm_via_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_via_cinco_id'  => 'nullable|exists:parametros,id',
            'prm_via_seis_id'   => 'nullable|exists:parametros,id',
            'prm_via_siete_id'  => 'nullable|exists:parametros,id',
            'prm_via_dmi_id'    => 'nullable|exists:parametros,id',
            'pri_ini_id'        => 'nullable|integer',
            'pri_dos_id'        => 'nullable|integer',
            'pri_tres_id'       => 'nullable|integer',
            'pri_cuatro_id'     => 'nullable|integer',
            'pri_cinco_id'      => 'nullable|integer',
            'pri_seis_id'       => 'nullable|integer',
            'pri_siete_id'      => 'nullable|integer',
            'pri_dmi_id'        => 'nullable|integer',
            'prm_mes_ini_id'    => 'nullable|exists:parametros,id',
            'prm_mes_dos_id'    => 'nullable|exists:parametros,id',
            'prm_mes_tres_id'   => 'nullable|exists:parametros,id',
            'prm_mes_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_mes_cinco_id'  => 'nullable|exists:parametros,id',
            'prm_mes_seis_id'   => 'nullable|exists:parametros,id',
            'prm_mes_siete_id'  => 'nullable|exists:parametros,id',
            'prm_mes_dmi_id'    => 'nullable|exists:parametros,id',
            'prm_anio_ini_id'   => 'nullable|exists:parametros,id',
            'prm_anio_dos_id'   => 'nullable|exists:parametros,id',
            'prm_anio_tres_id'  => 'nullable|exists:parametros,id',
            'prm_anio_cuatro_id'=> 'nullable|exists:parametros,id',
            'prm_anio_cinco_id' => 'nullable|exists:parametros,id',
            'prm_anio_seis_id'  => 'nullable|exists:parametros,id',
            'prm_anio_siete_id' => 'nullable|exists:parametros,id',
            'prm_anio_dmi_id'   => 'nullable|exists:parametros,id',
            'ult_ini_id'        => 'nullable|integer',
            'ult_dos_id'        => 'nullable|integer',
            'ult_tres_id'       => 'nullable|integer',
            'ult_cuatro_id'     => 'nullable|integer',
            'ult_cinco_id'      => 'nullable|integer',
            'ult_seis_id'       => 'nullable|integer',
            'ult_siete_id'      => 'nullable|integer',
            'ult_dmi_id'        => 'nullable|integer',
            'prm_imp_ini_id'    => 'nullable|exists:parametros,id',
            'prm_imp_dos_id'    => 'nullable|exists:parametros,id',
            'prm_imp_tres_id'   => 'nullable|exists:parametros,id',
            'prm_imp_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_imp_cinco_id'  => 'nullable|exists:parametros,id',
            'prm_imp_seis_id'   => 'nullable|exists:parametros,id',
            'prm_imp_siete_id'  => 'nullable|exists:parametros,id',
            'prm_imp_dmi_id'    => 'nullable|exists:parametros,id',
            'prm_cantidad_id'   => 'nullable|exists:parametros,id',
            'prm_inyectadas_id' => 'nullable|exists:parametros,id',
            'edad'              => 'nullable|integer',
            'prm_dificultad_id' => 'nullable|exists:parametros,id',
            'descripcion'       => 'nullable|string|max:4000',
            'prm_obtiene_id'    => 'nullable|exists:parametros,id',
            'donde'             => 'nullable|string, max:120',
            'precio'            => 'nullable|integer',
            'cantidad'          => 'nullable|integer',
            'prm_medida_id'     => 'nullable|exists:parametros,id',
            'prm_frecuencia_id' => 'nullable|exists:parametros,id',
            'prm_costumbre_id'  => 'nullable|exists:parametros,id',
            'porque'            => 'nullable|string|max:4000',
            'sustancia'         => 'nullable|string, max:120',
            'prm_comparte_id'   => 'nullable|exists:parametros,id',
            'porque_comparte'   => 'nullable|string|max:4000',
            'prm_prueba_id'     => 'nullable|exists:parametros,id',
            'porque_prueba'     => 'nullable|string|max:4000',
            'observaciones'     => 'nullable|string|max:4000',
            'prm_cuatro_uno_id' => 'nullable|exists:parametros,id',
            'prm_cuatro_dos_id' => 'nullable|exists:parametros,id',
            'prm_cuatro_tres_id' => 'nullable|exists:parametros,id',
            'prm_cuatro_cuatro_id'  => 'nullable|exists:parametros,id',
            'prm_cuatro_cinco_id'   => 'nullable|exists:parametros,id',
            'prm_cuatro_seis_id'    => 'nullable|exists:parametros,id',
            'prm_cuatro_siete_id'   => 'nullable|exists:parametros,id',
            'prm_cuatro_ocho_id'    => 'nullable|exists:parametros,id',
            'prm_cuatro_nueve_id'   => 'nullable|exists:parametros,id',
            'prm_cuatro_diez_id'    => 'nullable|exists:parametros,id',
            'prm_cuatro_once_id'    => 'nullable|exists:parametros,id',
            'prm_cuatro_doce_id'    => 'nullable|exists:parametros,id',
            'prm_cinco_uno_id'      => 'required|exists:parametros,id',
            'prm_cinco_dos_id'      => 'required|exists:parametros,id',
            'prm_cinco_tres_id'     => 'required|exists:parametros,id',
            'prm_cinco_cuatro_id'   => 'required|exists:parametros,id',
            'prm_cinco_cinco_id'    => 'required|exists:parametros,id',
            'prm_cinco_seis_id'     => 'required|exists:parametros,id',
            'prm_cinco_siete_id'    => 'required|exists:parametros,id',
            'prm_cinco_ocho_id'     => 'required|exists:parametros,id',
            'prm_cinco_nueve_id'    => 'required|exists:parametros,id',
            'prm_cinco_diez_id'     => 'required|exists:parametros,id',
            'prm_cinco_once_id'     => 'required|exists:parametros,id',
            'prm_cinco_doce_id'     => 'required|exists:parametros,id',
            'prm_seis_uno_id'       => 'required|exists:parametros,id',
            'prm_seis_dos_id'       => 'required|exists:parametros,id',
            'prm_seis_tres_id'      => 'required|exists:parametros,id',
            'prm_seis_cuatro_id'    => 'required|exists:parametros,id',
            'prm_seis_cinco_id'     => 'required|exists:parametros,id',
            'prm_seis_seis_id'      => 'required|exists:parametros,id',
            'obs_generales'         => 'required|string|max:4000',
            'obs_generales_dos'     => 'required|string|max:4000',
            'user_doc1_id'          => 'required|exists:users,id'
        ]);
    }
}
