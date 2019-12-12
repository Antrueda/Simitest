<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisMunicipio;
use Illuminate\Support\Carbon;

class AIEvasionController extends Controller{
    public function __construct(){
        $this->middleware(['permission:evasion-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:evasion-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:evasion-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:evasion-borrar'], ['only' => ['index, show']]);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $evasiones = $dato->AiReporteEvasion->where('activo', 1)->sortByDesc('fecha')->all();
        return view('Acciones.Individuales.index', ['accion' => 'Evasion', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'evasiones'));
    }

    public function create($id){
        $dato  = SisNnaj::findOrFail($id);
        $nnaj  = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $evasiones  = $dato->AiReporteEvasion->where('activo', 1)->sortByDesc('fecha')->all();
        $upis  = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm  = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $contextura = Tema::findOrFail(273)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $rostro= Tema::findOrFail(274)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $piel  = Tema::findOrFail(275)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $cabello    = Tema::findOrFail(276)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tCabello   = Tema::findOrFail(277)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $cCabello   = Tema::findOrFail(278)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $ojos  = Tema::findOrFail(279)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $nariz = Tema::findOrFail(280)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tamanio    = Tema::findOrFail(281)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $prendas    = Tema::findOrFail(304)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $atencion   = Tema::findOrFail(306)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios   = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $depajs = SisDepartamento::orderBy('s_departamento')->get();
        $upisjs = SisDependencia::orderBy('nombre')->get();
        $departamentos = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
        $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', 6)->pluck('s_municipio', 'id');
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Acciones.Individuales.index', ['accion' => 'Evasion', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'evasiones', 'upis', 'ampm', 'contextura', 'rostro', 'piel', 'cabello', 'sino', 'tCabello', 'cCabello', 'ojos', 'nariz', 'tamanio', 'prendas', 'familiares', 'atencion', 'usuarios', 'depajs', 'upisjs', 'departamentos', 'municipios', 'hoy'));    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if($request->prm_tinturado_id != 227) {
            $request["tintura"] = null;
        }
        if($request->prm_tipCabello_id != 227) {
            $request["prm_corCabello_id"] = null;
        }
        if($request->prm_tienelunar_id != 227) {
            $request["cuantos"] = null;
            $request["prm_tamlunar_id"] = null;
        }
        if($request->prm_reporta_id != 227) {
            $request["prm_llamada_id"] = null;
            $request["radicado"]       = null;
            $request["recibe_denuncia"]= null;
            $request["institución"]    = null;
            $request["nombre_recibe"]  = null;
            $request["cargo_recibe"]   = null;
            $request["placa_recibe"]   = null;
            $request["fecha_denuncia"] = null;
            $request["hora_denuncia"]  = null;
            $request["prm_hor_denuncia_id"] = null;
        }
        $dato = AiReporteEvasion::create($request->all());
        return redirect()->route('ai.evasion', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato  = SisNnaj::findOrFail($id);
        $nnaj  = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $evasiones  = $dato->AiReporteEvasion->where('activo', 1)->sortByDesc('fecha')->all();
        $upis  = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $ampm  = Tema::findOrFail(5)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $contextura = Tema::findOrFail(273)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $rostro= Tema::findOrFail(274)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $piel  = Tema::findOrFail(275)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $cabello    = Tema::findOrFail(276)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tCabello   = Tema::findOrFail(277)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $cCabello   = Tema::findOrFail(278)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $ojos  = Tema::findOrFail(279)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $nariz = Tema::findOrFail(280)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tamanio    = Tema::findOrFail(281)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $prendas    = Tema::findOrFail(304)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $atencion   = Tema::findOrFail(306)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios   = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $valor = AiReporteEvasion::findOrFail($id0);
        $depajs = SisDepartamento::orderBy('s_departamento')->get();
        $departamentos = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
        $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', $valor->departamento_id)->pluck('s_municipio', 'id');
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return view('Acciones.Individuales.index', ['accion' => 'Evasion', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'evasiones', 'upis', 'ampm', 'contextura', 'rostro', 'piel', 'cabello', 'sino', 'tCabello', 'cCabello', 'ojos', 'nariz', 'tamanio', 'prendas', 'familiares', 'atencion', 'usuarios', 'valor', 'depajs', 'departamentos', 'municipios', 'hoy'));
    }

    public function update(Request $request, $id, $id0){        
        $this->validator($request->all())->validate();

        if($request->prm_tinturado_id != 227) {
            $request["tintura"] = null;
        }
        
        if($request->prm_tipCabello_id != 227) {
            $request["prm_corCabello_id"] = null;
        }

        if($request->prm_tienelunar_id != 227) {
            $request["cuantos"] = null;
            $request["prm_tamlunar_id"] = null;
        }

        if($request->prm_reporta_id != 227) {
            $request["prm_llamada_id"] = null;
            $request["radicado"]       = null;
            $request["recibe_denuncia"]= null;
            $request["institución"]    = null;
            $request["nombre_recibe"]  = null;
            $request["cargo_recibe"]   = null;
            $request["placa_recibe"]   = null;
            $request["fecha_denuncia"] = null;
            $request["hora_denuncia"]  = null;
            $request["prm_hor_denuncia_id"] = null;
        }

        $dato = AiReporteEvasion::findOrFail($id0);
        $dato->fill($request->all())->save();

        return redirect()->route('ai.evasion', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        return Validator::make($data, [
            'sis_nnaj_id'   => 'required|exists:sis_nnajs,id',
            'departamento_id' => 'required|exists:sis_departamentos,id',
            'municipio_id' => 'required|exists:sis_municipios,id',
            'fecha_diligenciamiento' => 'required|date',
            'prm_upi_id'    => 'required|exists:sis_dependencias,id',
            'lugar_evasion' => 'required|string|max:120',
            'fecha_evasion' => 'required|date|before_or_equal:'.$hoy,
            'hora_evasion'  => 'required',
            'prm_hor_eva_id'=> 'required|exists:parametros,id',
            'nnaj_talla'    => 'required|integer',
            'nnaj_peso'     => 'required|integer',
            'prm_contextura_id' => 'required|exists:parametros,id',
            'prm_rostro_id' => 'required|exists:parametros,id',
            'prm_piel_id'   => 'required|exists:parametros,id',
            'prm_colCabello_id' => 'required|exists:parametros,id',
            'prm_tinturado_id'  => 'required|exists:parametros,id',
            'tintura'       => 'required_if:prm_tinturado_id,227|max:120',
            'prm_tipCabello_id' => 'required|exists:parametros,id',
            'prm_corCabello_id' => 'required_unless:prm_tipCabello_id,1459|exists:parametros,id',
            'prm_ojos_id'   => 'required|exists:parametros,id',
            'prm_nariz_id'  => 'required|exists:parametros,id',
            'prm_tienelunar_id' => 'required|exists:parametros,id',
            'cuantos'       => 'required_if:prm_tienelunar_id,227',
            'prm_tamlunar_id'   => 'required_if:prm_tienelunar_id,227|exists:parametros,id',
            'senias'        => 'required|string|max:4000',
            'circunstancias'=> 'required|string|max:4000',
            'prm_familiar1_id' => 'required|exists:parametros,id',
            'nombre_familiar1' => 'required|string|max:120',
            'direccion_familiar1' => 'required|string|max:120',
            'tel_familiar1'    => 'required|integer',
            'prm_familiar2_id' => 'required|exists:parametros,id',
            'nombre_familiar2' => 'required|string|max:120',
            'direccion_familiar2' => 'required|string|max:120',
            'tel_familiar2'    => 'required|integer',
            'observaciones_fam'=> 'required|string|max:4000',
            'prm_reporta_id'   => 'required|exists:parametros,id',
            'prm_llamada_id'   => 'required_if:prm_reporta_id,227|exists:parametros,id',
            'radicado'         => 'required_if:prm_reporta_id,227|max:120',
            'recibe_denuncia'  => 'required_if:prm_reporta_id,227|max:120',
            'user_doc1_id'     => 'required|exists:users,id',
            'user_doc2_id'     => 'required|exists:users,id',
            'responsable'      => 'required|exists:users,id',
            'institución'      => 'required_if:prm_reporta_id,227|max:120',
            'nombre_recibe'    => 'required_if:prm_reporta_id,227|max:120',
            'cargo_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'placa_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'fecha_denuncia'   => 'required_if:prm_reporta_id,227',
            'hora_denuncia'    => 'required_if:prm_reporta_id,227',
            'prm_hor_denuncia_id' => 'required_if:prm_reporta_id,227|exists:parametros,id'
        ]);
    }
}