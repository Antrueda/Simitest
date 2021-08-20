<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Mitigacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDiagnosticos;
use App\Models\Salud\Mitigacion\Vma\MitVma;
use App\Models\User;
use App\Traits\Combos\CombosTrait;

class VmaController extends Controller{

    use CombosTrait;
    public function __construct(){

        $this->opciones['permisox']='vma';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vma  = $dato->MitVma->where('sis_esta_id', 1)->sortByDesc('fecha')->all();

        return view('Acciones.Individuales.index', ['accion' => 'Vma', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'vma'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vma  = $dato->MitVma->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $upis = SisDepen::orderBy('nombre')->pluck('nombre', 'id');

        $sinoc = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'cabecera' => false,
        ])['comboxxx'];

        $tValoracion = $this->getTemacomboCT([
            'temaxxxx' => 312,
        ])['comboxxx'];

        $sino = $this->getTemacomboCT([
            'temaxxxx' => 23,
        ])['comboxxx'];

        $sustancia = $this->getTemacomboCT([
            'temaxxxx' => 320,
        ])['comboxxx'];
        $frecuencia = $this->getTemacomboCT([
            'temaxxxx' => 318,
        ])['comboxxx'];
        $nivel = $this->getTemacomboCT([
            'temaxxxx' => 319,
        ])['comboxxx'];
        $trastorno = $this->getTemacomboCT([
            'temaxxxx' => 329,
        ])['comboxxx'];

        $apetito = $this->getTemacomboCT([
            'temaxxxx' => 330,
        ])['comboxxx'];

        $sudoracion = $this->getTemacomboCT([
            'temaxxxx' => 331,
        ])['comboxxx'];
        $animo = $this->getTemacomboCT([
            'temaxxxx' => 332,
        ])['comboxxx'];

        $tratamiento = $this->getTemacomboCT([
            'temaxxxx' => 333,
            'cabecera' => false,
        ])['comboxxx'];

        $conducta = $this->getTemacomboCT([
            'temaxxxx' => 334,
        ])['comboxxx'];


        $diagnosticos = ['' => 'Seleccione...'];
        foreach (SisDiagnosticos::orderBy('codigo')->get()->pluck('codigo_nombre', 'id') as $k => $d) {
            $diagnosticos[$k] = $d;
        }

        $tipoDx = $this->getTemacomboCT([
            'temaxxxx' => 335,
        ])['comboxxx'];

        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');

        return view('Acciones.Individuales.index', ['accion' => 'Vma', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'vma', 'upis', 'tValoracion',
                                                                                               'sino', 'sustancia', 'frecuencia', 'nivel',
                                                                                               'trastorno','apetito','sudoracion','animo',
                                                                                               'tratamiento', 'conducta', 'diagnosticos', 'tipoDx',
                                                                                               'sinoc', 'usuarios'));
    }

    public function store(Request $request){
        if($request->prm_probado_id == 228){
            $request['prm_sustancia_id'] = null;
            $request['edad'] = null;
            $request['prm_ansiedad_id'] = null;
        }
        if($request->prm_mari_sino_id == 228){
            $request['mari_edad'] = null;
            $request['prm_mari_frec_id'] = null;
            $request['mari_dosis'] = null;
            $request['mari_dia'] = null;
            $request['mari_mes'] = null;
            $request['mari_anio'] = null;
            $request['mari_dejo'] = null;
        }
        if($request->prm_tabaco_sino_id == 228){
            $request['tabaco_edad'] = null;
            $request['prm_tabaco_frec_id'] = null;
            $request['tabaco_dosis'] = null;
            $request['tabaco_dia'] = null;
            $request['tabaco_mes'] = null;
            $request['tabaco_anio'] = null;
            $request['tabaco_dejo'] = null;
        }
        if($request->prm_alcohol_sino_id == 228){
            $request['alcohol_edad'] = null;
            $request['prm_alcohol_frec_id'] = null;
            $request['alcohol_dosis'] = null;
            $request['alcohol_dia'] = null;
            $request['alcohol_mes'] = null;
            $request['alcohol_anio'] = null;
            $request['alcohol_dejo'] = null;
        }
        if($request->prm_tran_sino_id == 228){
            $request['tran_edad'] = null;
            $request['prm_tran_frec_id'] = null;
            $request['tran_dosis'] = null;
            $request['tran_dia'] = null;
            $request['tran_mes'] = null;
            $request['tran_anio'] = null;
            $request['tran_dejo'] = null;
        }
        if($request->prm_pegante_sino_id == 228){
            $request['pegante_edad'] = null;
            $request['prm_pegante_frec_id'] = null;
            $request['pegante_dosis'] = null;
            $request['pegante_dia'] = null;
            $request['pegante_mes'] = null;
            $request['pegante_anio'] = null;
            $request['pegante_dejo'] = null;
        }
        if($request->prm_popper_sino_id == 228){
            $request['popper_edad'] = null;
            $request['prm_popper_frec_id'] = null;
            $request['popper_dosis'] = null;
            $request['popper_dia'] = null;
            $request['popper_mes'] = null;
            $request['popper_anio'] = null;
            $request['popper_dejo'] = null;
        }
        if($request->prm_dick_sino_id == 228){
            $request['dick_edad'] = null;
            $request['prm_dick_frec_id'] = null;
            $request['dick_dosis'] = null;
            $request['dick_dia'] = null;
            $request['dick_mes'] = null;
            $request['dick_anio'] = null;
            $request['dick_dejo'] = null;
        }
        if($request->prm_basuco_sino_id == 228){
            $request['basuco_edad'] = null;
            $request['prm_basuco_frec_id'] = null;
            $request['basuco_dosis'] = null;
            $request['basuco_dia'] = null;
            $request['basuco_mes'] = null;
            $request['basuco_anio'] = null;
            $request['basuco_dejo'] = null;
        }
        if($request->prm_cocaina_sino_id == 228){
            $request['cocaina_edad'] = null;
            $request['prm_cocaina_frec_id'] = null;
            $request['cocaina_dosis'] = null;
            $request['cocaina_dia'] = null;
            $request['cocaina_mes'] = null;
            $request['cocaina_anio'] = null;
            $request['cocaina_dejo'] = null;
        }
        if($request->prm_heroina_sino_id == 228){
            $request['heroina_edad'] = null;
            $request['prm_heroina_frec_id'] = null;
            $request['heroina_dosis'] = null;
            $request['heroina_dia'] = null;
            $request['heroina_mes'] = null;
            $request['heroina_anio'] = null;
            $request['heroina_dejo'] = null;
        }
        if($request->prm_doscb_sino_id == 228){
            $request['doscb_edad'] = null;
            $request['prm_doscb_frec_id'] = null;
            $request['doscb_dosis'] = null;
            $request['doscb_dia'] = null;
            $request['doscb_mes'] = null;
            $request['doscb_anio'] = null;
            $request['doscb_dejo'] = null;
        }
        if($request->prm_acidos_sino_id == 228){
            $request['acidos_edad'] = null;
            $request['prm_acidos_frec_id'] = null;
            $request['acidos_dosis'] = null;
            $request['acidos_dia'] = null;
            $request['acidos_mes'] = null;
            $request['acidos_anio'] = null;
            $request['acidos_dejo'] = null;
        }
        if($request->prm_lsd_sino_id == 228){
            $request['lsd_edad'] = null;
            $request['prm_lsd_frec_id'] = null;
            $request['lsd_dosis'] = null;
            $request['lsd_dia'] = null;
            $request['lsd_mes'] = null;
            $request['lsd_anio'] = null;
            $request['lsd_dejo'] = null;
        }
        if($request->prm_trastorno_id == 228){
            $request['prm_tTrastorno_id'] = null;
        }
        if($request->prm_apetito_id == 228){
            $request['prm_tapetito_id'] = null;
        }
        if($request->prm_sudoracion_id == 228){
            $request['prm_tsudoracion_id'] = null;
        }
        if($request->prm_animo_id == 228){
            $request['prm_tanimo_id'] = null;
        }

        $this->validator($request->all())->validate();
        $dato = MitVma::create($request->all());

        foreach ($request->tratamiento as $d) {
            $dato->tratamiento()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        return redirect()->route('mitigacion.vma', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vma  = $dato->MitVma->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
        $upis = SisDepen::orderBy('nombre')->pluck('nombre', 'id');

        $sinoc = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'cabecera' => false,
        ])['comboxxx'];

        $tValoracion = $this->getTemacomboCT([
            'temaxxxx' => 312,
        ])['comboxxx'];

        $sino = $this->getTemacomboCT([
            'temaxxxx' => 23,
        ])['comboxxx'];

        $sustancia = $this->getTemacomboCT([
            'temaxxxx' => 320,
        ])['comboxxx'];

        $frecuencia = $this->getTemacomboCT([
            'temaxxxx' => 318,
        ])['comboxxx'];

        $nivel = $this->getTemacomboCT([
            'temaxxxx' => 319,
        ])['comboxxx'];

        $apetito = $this->getTemacomboCT([
            'temaxxxx' => 330,
        ])['comboxxx'];


        $sudoracion = $this->getTemacomboCT([
            'temaxxxx' => 331,
        ])['comboxxx'];

        $animo = $this->getTemacomboCT([
            'temaxxxx' => 332,
        ])['comboxxx'];

        $tratamiento = $this->getTemacomboCT([
            'temaxxxx' => 333,
            'cabecera' => false,
        ])['comboxxx'];

        $conducta = $this->getTemacomboCT([
            'temaxxxx' => 334,
        ])['comboxxx'];


        $diagnosticos = ['' => 'Seleccione...'];
        foreach (SisDiagnosticos::orderBy('codigo')->get()->pluck('codigo_nombre', 'id') as $k => $d) {
            $diagnosticos[$k] = $d;
        }

        $tipoDx = $this->getTemacomboCT([
            'temaxxxx' => 335,
        ])['comboxxx'];


        $valor = MitVma::findOrFail($id0);
        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');

        return view('Acciones.Individuales.index', ['accion' => 'Vma', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'vma', 'upis', 'tValoracion',
                                                                                               'sino', 'sustancia', 'frecuencia', 'nivel',
                                                                                               'trastorno','apetito','sudoracion','animo',
                                                                                               'tratamiento', 'conducta', 'diagnosticos', 'tipoDx',
                                                                                               'sinoc', 'valor', 'usuarios'));
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = MitVma::findOrFail($id1);
        $dato->fill($request->all())->save();

        $dato->tratamiento()->detach();
        foreach ($request->tratamiento as $d) {
            $dato->tratamiento()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }

        return redirect()->route('mitigacion.vma', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id'       => 'required|exists:sis_nnajs,id',
            'prm_upi_id'        => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'prm_valoracion_id' => 'required|exists:parametros,id',
            'sesion'            => 'required|integer',
            'prm_probado_id'    => 'required|exists:parametros,id',
            'prm_sustancia_id'  => 'required_if:prm_probado_id,227',
            'edad'              => 'required_if:prm_probado_id,227',
            'prm_calle_id'      => 'required|exists:parametros,id',
            'prm_ansiedad_id'   => 'required_if:prm_probado_id,227',
            'prm_mari_sino_id'  => 'required|exists:parametros,id',
            'mari_edad'         => 'required_if:prm_mari_sino_id,227',
            'prm_mari_frec_id'  => 'required_if:prm_mari_sino_id,227',
            'mari_dosis'        => 'required_if:prm_mari_sino_id,227',
            'mari_dia'          => 'required_if:prm_mari_sino_id,227',
            'mari_mes'          => 'required_if:prm_mari_sino_id,227',
            'mari_anio'         => 'required_if:prm_mari_sino_id,227',
            'mari_dejo'         => 'required_if:prm_mari_sino_id,227',
            'prm_tabaco_sino_id'=> 'required|exists:parametros,id',
            'tabaco_edad'       => 'required_if:prm_tabaco_sino_id,227',
            'prm_tabaco_frec_id'=> 'required_if:prm_tabaco_sino_id,227',
            'tabaco_dosis'      => 'required_if:prm_tabaco_sino_id,227',
            'tabaco_dia'        => 'required_if:prm_tabaco_sino_id,227',
            'tabaco_mes'        => 'required_if:prm_tabaco_sino_id,227',
            'tabaco_anio'       => 'required_if:prm_tabaco_sino_id,227',
            'tabaco_dejo'       => 'required_if:prm_tabaco_sino_id,227',
            'prm_alcohol_sino_id'=> 'required|exists:parametros,id',
            'alcohol_edad'      => 'required_if:prm_alcohol_sino_id,227',
            'prm_alcohol_frec_id'=> 'required_if:prm_alcohol_sino_id,227',
            'alcohol_dosis'     => 'required_if:prm_alcohol_sino_id,227',
            'alcohol_dia'       => 'required_if:prm_alcohol_sino_id,227',
            'alcohol_mes'       => 'required_if:prm_alcohol_sino_id,227',
            'alcohol_anio'      => 'required_if:prm_alcohol_sino_id,227',
            'alcohol_dejo'      => 'required_if:prm_alcohol_sino_id,227',
            'prm_tran_sino_id'  => 'required|exists:parametros,id',
            'tran_edad'         => 'required_if:prm_tran_sino_id,227',
            'prm_tran_frec_id'  => 'required_if:prm_tran_sino_id,227',
            'tran_dosis'        => 'required_if:prm_tran_sino_id,227',
            'tran_dia'          => 'required_if:prm_tran_sino_id,227',
            'tran_mes'          => 'required_if:prm_tran_sino_id,227',
            'tran_anio'         => 'required_if:prm_tran_sino_id,227',
            'tran_dejo'         => 'required_if:prm_tran_sino_id,227',
            'prm_pegante_sino_id'=> 'required|exists:parametros,id',
            'pegante_edad'      => 'required_if:prm_pegante_sino_id,227',
            'prm_pegante_frec_id'=> 'required_if:prm_pegante_sino_id,227',
            'pegante_dosis'     => 'required_if:prm_pegante_sino_id,227',
            'pegante_dia'       => 'required_if:prm_pegante_sino_id,227',
            'pegante_mes'       => 'required_if:prm_pegante_sino_id,227',
            'pegante_anio'      => 'required_if:prm_pegante_sino_id,227',
            'pegante_dejo'      => 'required_if:prm_pegante_sino_id,227',
            'prm_popper_sino_id'=> 'required|exists:parametros,id',
            'popper_edad'       => 'required_if:prm_popper_sino_id,227',
            'prm_popper_frec_id'=> 'required_if:prm_popper_sino_id,227',
            'popper_dosis'      => 'required_if:prm_popper_sino_id,227',
            'popper_dia'        => 'required_if:prm_popper_sino_id,227',
            'popper_mes'        => 'required_if:prm_popper_sino_id,227',
            'popper_anio'       => 'required_if:prm_popper_sino_id,227',
            'popper_dejo'       => 'required_if:prm_popper_sino_id,227',
            'prm_dick_sino_id'  => 'required|exists:parametros,id',
            'dick_edad'         => 'required_if:prm_dick_sino_id,227',
            'prm_dick_frec_id'  => 'required_if:prm_dick_sino_id,227',
            'dick_dosis'        => 'required_if:prm_dick_sino_id,227',
            'dick_dia'          => 'required_if:prm_dick_sino_id,227',
            'dick_mes'          => 'required_if:prm_dick_sino_id,227',
            'dick_anio'         => 'required_if:prm_dick_sino_id,227',
            'dick_dejo'         => 'required_if:prm_dick_sino_id,227',
            'prm_basuco_sino_id'=> 'required|exists:parametros,id',
            'basuco_edad'       => 'required_if:prm_basuco_sino_id,227',
            'prm_basuco_frec_id'=> 'required_if:prm_basuco_sino_id,227',
            'basuco_dosis'      => 'required_if:prm_basuco_sino_id,227',
            'basuco_dia'        => 'required_if:prm_basuco_sino_id,227',
            'basuco_mes'        => 'required_if:prm_basuco_sino_id,227',
            'basuco_anio'       => 'required_if:prm_basuco_sino_id,227',
            'basuco_dejo'       => 'required_if:prm_basuco_sino_id,227',
            'prm_cocaina_sino_id'=> 'required|exists:parametros,id',
            'cocaina_edad'      => 'required_if:prm_cocaina_sino_id,227',
            'prm_cocaina_frec_id'=> 'required_if:prm_cocaina_sino_id,227',
            'cocaina_dosis'     => 'required_if:prm_cocaina_sino_id,227',
            'cocaina_dia'       => 'required_if:prm_cocaina_sino_id,227',
            'cocaina_mes'       => 'required_if:prm_cocaina_sino_id,227',
            'cocaina_anio'      => 'required_if:prm_cocaina_sino_id,227',
            'cocaina_dejo'      => 'required_if:prm_cocaina_sino_id,227',
            'prm_heroina_sino_id'=> 'required|exists:parametros,id',
            'heroina_edad'      => 'required_if:prm_heroina_sino_id,227',
            'prm_heroina_frec_id'=> 'required_if:prm_heroina_sino_id,227',
            'heroina_dosis'     => 'required_if:prm_heroina_sino_id,227',
            'heroina_dia'       => 'required_if:prm_heroina_sino_id,227',
            'heroina_mes'       => 'required_if:prm_heroina_sino_id,227',
            'heroina_anio'      => 'required_if:prm_heroina_sino_id,227',
            'heroina_dejo'      => 'required_if:prm_heroina_sino_id,227',
            'prm_doscb_sino_id'   => 'required|exists:parametros,id',
            'doscb_edad'          => 'required_if:prm_doscb_sino_id,227',
            'prm_doscb_frec_id'   => 'required_if:prm_doscb_sino_id,227',
            'doscb_dosis'         => 'required_if:prm_doscb_sino_id,227',
            'doscb_dia'           => 'required_if:prm_doscb_sino_id,227',
            'doscb_mes'           => 'required_if:prm_doscb_sino_id,227',
            'doscb_anio'          => 'required_if:prm_doscb_sino_id,227',
            'doscb_dejo'          => 'required_if:prm_doscb_sino_id,227',
            'prm_acidos_sino_id'=> 'required|exists:parametros,id',
            'acidos_edad'       => 'required_if:prm_acidos_sino_id,227',
            'prm_acidos_frec_id'=> 'required_if:prm_acidos_sino_id,227',
            'acidos_dosis'      => 'required_if:prm_acidos_sino_id,227',
            'acidos_dia'        => 'required_if:prm_acidos_sino_id,227',
            'acidos_mes'        => 'required_if:prm_acidos_sino_id,227',
            'acidos_anio'       => 'required_if:prm_acidos_sino_id,227',
            'acidos_dejo'       => 'required_if:prm_acidos_sino_id,227',
            'prm_lsd_sino_id'   => 'required|exists:parametros,id',
            'lsd_edad'          => 'required_if:prm_lsd_sino_id,227',
            'prm_lsd_frec_id'   => 'required_if:prm_pegante_sino_id,227',
            'lsd_dosis'         => 'required_if:prm_lsd_sino_id,227',
            'lsd_dia'           => 'required_if:prm_lsd_sino_id,227',
            'lsd_mes'           => 'required_if:prm_lsd_sino_id,227',
            'lsd_anio'          => 'required_if:prm_lsd_sino_id,227',
            'lsd_dejo'          => 'required_if:prm_lsd_sino_id,227',
            'sustancias_consumidas' => 'required|integer',
            'prm_recaida_id'    => 'required|exists:parametros,id',
            'prm_niv_ansiedad_id'=> 'required|exists:parametros,id',
            'prm_trastorno_id'  => 'required|exists:parametros,id',
            'prm_tTrastorno_id' => 'required_if:prm_trastorno_id,227',
            'prm_apetito_id'    => 'required|exists:parametros,id',
            'prm_tapetito_id'   => 'required_if:prm_apetito_id,227',
            'prm_sudoracion_id' => 'required|exists:parametros,id',
            'prm_tsudoracion_id'=> 'required_if:prm_sudoracion_id,227',
            'prm_animo_id'      => 'required|exists:parametros,id',
            'prm_tanimo_id'     => 'required_if:prm_animo_id,227',
            'prm_palpitaciones_id' => 'required|exists:parametros,id',
            'prm_dolor_id'      => 'required|exists:parametros,id',
            'patologicos'       => 'required|string|max:4000',
            'quirurgicos'       => 'required|string|max:4000',
            'familiares'        => 'required|string|max:4000',
            'traumaticos'       => 'required|string|max:4000',
            'gineco'            => 'nullable|string|max:4000',
            'prm_tatuajes_id'   => 'required|exists:parametros,id',
            'prm_piercing_id'   => 'required|exists:parametros,id',
            'prm_dx_ppal_id'    => 'required|exists:sis_diagnosticos,id',
            'prm_dx_rel_uno_id' => 'nullable|exists:parametros,id',
            'prm_dx_rel_dos_id' => 'nullable|exists:parametros,id',
            'prm_dx_rel_tres_id'=> 'nullable|exists:parametros,id',
            'prm_dx_rel_com_id' => 'nullable|exists:parametros,id',
            'prm_tipo_dx_id'    => 'required|exists:parametros,id',
            'prm_conducta_id'   => 'required|exists:parametros,id',
            'alerta'            => 'nullable|string|max:4000',
            'observaciones'     => 'required|string|max:4000',
            'tratamiento'       => 'required|array',
            'user_doc1_id'      => 'required|exists:users,id'
        ]);
    }
}
