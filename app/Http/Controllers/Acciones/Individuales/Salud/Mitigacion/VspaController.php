<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Mitigacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Salud\Mitigacion\Vspa;
use App\Models\Salud\Mitigacion\VspaTabla;
use App\Models\Salud\Mitigacion\VspaTablaDos;
use App\Models\Salud\Mitigacion\VspaTablaTres;
use App\Models\Salud\Mitigacion\VspaTablaCuatro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use app\Traits\Combos\CombosTrait;

class VspaController extends Controller{
    use CombosTrait;
    public function __construct(){

        $this->opciones['permisox']='vspa';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
    }

    public function index($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vspa = $dato->Vspa->where('sis_esta_id', 1)->sortByDesc('fecha')->all();

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Inicio'], compact('dato', 'nnaj', 'vspa'));
    }

    public function create($id){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vspa = $dato->Vspa->where('sis_esta_id', 1)->sortByDesc('fecha')->all();
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

        $escolar = $this->getTemacomboCT([
            'temaxxxx' => 313,
        ])['comboxxx'];

        $ingresos = $this->getTemacomboCT([
            'temaxxxx' => 314,
        ])['comboxxx'];

        $modalidad = $this->getTemacomboCT([
            'temaxxxx' => 315,
        ])['comboxxx'];

        $acude = $this->getTemacomboCT([
            'temaxxxx' => 316,
        ])['comboxxx'];

        $sitio = $this->getTemacomboCT([
            'temaxxxx' => 317,
        ])['comboxxx'];

        $frecuencia = $this->getTemacomboCT([
            'temaxxxx' => 318,
        ])['comboxxx'];

        $via = $this->getTemacomboCT([
            'temaxxxx' => 55,
        ])['comboxxx'];

        $impacto = $this->getTemacomboCT([
            'temaxxxx' => 319,
        ])['comboxxx'];

        $sustancia = $this->getTemacomboCT([
            'temaxxxx' => 320,
        ])['comboxxx'];

        $cantidad = $this->getTemacomboCT([
            'temaxxxx' => 321,
        ])['comboxxx'];

        $obtiene = $this->getTemacomboCT([
            'temaxxxx' => 322,
        ])['comboxxx'];

        $medida = $this->getTemacomboCT([
            'temaxxxx' => 323,
        ])['comboxxx'];

        $costumbre = $this->getTemacomboCT([
            'temaxxxx' => 324,
        ])['comboxxx'];

        $comparte = $this->getTemacomboCT([
            'temaxxxx' => 325,
        ])['comboxxx'];

        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Nueva'], compact('dato', 'nnaj', 'vspa', 'upis',
                                                                                                'tValoracion', 'sino', 'escolar',
                                                                                                'ingresos', 'modalidad', 'acude', 'sitio', 'frecuencia',
                                                                                                'via', 'impacto', 'sustancia', 'cantidad',
                                                                                                'obtiene', 'medida', 'costumbre', 'comparte',
                                                                                                'usuarios', 'sinoc'));
    }

    public function store(Request $request){
        if($request->prm_probado_id == 228){
            $request['prm_cantidad_id'] = null;
            $request['prm_inyectadas_id'] = null;
            $request['prm_droga_ini_id'] = null;
            $request['prm_droga_dos_id'] = null;
            $request['prm_droga_tres_id'] = null;
            $request['prm_droga_cuatro_id'] = null;
            $request['prm_droga_cinco_id'] = null;
            $request['prm_droga_seis_id'] = null;
            $request['prm_droga_siete_id'] = null;
            $request['prm_droga_dmi_id'] = null;
            $request['prm_cuatro_uno_id'] = null;
            $request['prm_cuatro_dos_id'] = null;
            $request['prm_cuatro_tres_id'] = null;
            $request['prm_cuatro_cuatro_id'] = null;
            $request['prm_cuatro_cinco_id'] = null;
            $request['prm_cuatro_seis_id'] = null;
            $request['prm_cuatro_siete_id'] = null;
            $request['prm_cuatro_ocho_id'] = null;
            $request['prm_cuatro_nueve_id'] = null;
            $request['prm_cuatro_diez_id'] = null;
            $request['prm_cuatro_once_id'] = null;
            $request['prm_cuatro_doce_id'] = null;
            $request['prm_cinco_uno_id'] = null;
            $request['prm_cinco_dos_id'] = null;
            $request['prm_cinco_tres_id'] = null;
            $request['prm_cinco_cuatro_id'] = null;
            $request['prm_cinco_cinco_id'] = null;
            $request['prm_cinco_seis_id'] = null;
            $request['prm_cinco_siete_id'] = null;
            $request['prm_cinco_ocho_id'] = null;
            $request['prm_cinco_nueve_id'] = null;
            $request['prm_cinco_diez_id'] = null;
            $request['prm_cinco_once_id'] = null;
            $request['prm_cinco_doce_id'] = null;
        }
        if($request->prm_inyectadas_id == 228){
            $request['edad_inicio'] = null;
            $request['prm_dificultad_id'] = null;
            $request['descripcion'] = null;
            $request['prm_obtiene_id'] = null;
            $request['donde'] = null;
            $request['precio'] = null;
            $request['cantidad'] = null;
            $request['prm_medida_id'] = null;
            $request['prm_frecuencia_id'] = null;
            $request['prm_costumbre_id'] = null;
            $request['porque'] = null;
            $request['sustancia'] = null;
            $request['prm_comparte_id'] = null;
            $request['porque_comparte'] = null;
            $request['prm_prueba_id'] = null;
            $request['porque_prueba'] = null;
        }
        if($request->prm_droga_ini_id == 228){
            $request['prm_fre_ini_id'] = null;
            $request['prm_via_ini_id'] = null;
            $request['primera_ini'] = null;
            $request['prm_mes_ini_id'] = null;
            $request['prm_anio_ini_id'] = null;
            $request['ultima_ini'] = null;
            $request['prm_imp_ini_id'] = null;
        }
        if($request->prm_droga_dos_id == 228){
            $request['prm_fre_dos_id'] = null;
            $request['prm_via_dos_id'] = null;
            $request['primera_dos'] = null;
            $request['prm_mes_dos_id'] = null;
            $request['prm_anio_dos_id'] = null;
            $request['ultima_dos'] = null;
            $request['prm_imp_dos_id'] = null;
        }
        if($request->prm_droga_tres_id == 228){
            $request['prm_fre_tres_id'] = null;
            $request['prm_via_tres_id'] = null;
            $request['primera_tres'] = null;
            $request['prm_mes_tres_id'] = null;
            $request['prm_anio_tres_id'] = null;
            $request['ultima_tres'] = null;
            $request['prm_imp_tres_id'] = null;
        }
        if($request->prm_droga_cuatro_id == 228){
            $request['prm_fre_cuatro_id'] = null;
            $request['prm_via_cuatro_id'] = null;
            $request['primera_cuatro'] = null;
            $request['prm_mes_cuatro_id'] = null;
            $request['prm_anio_cuatro_id'] = null;
            $request['ultima_cuatro'] = null;
            $request['prm_imp_cuatro_id'] = null;
        }
        if($request->prm_droga_cinco_id == 228){
            $request['prm_fre_cinco_id'] = null;
            $request['prm_via_cinco_id'] = null;
            $request['primera_cinco'] = null;
            $request['prm_mes_cinco_id'] = null;
            $request['prm_anio_cinco_id'] = null;
            $request['ultima_cinco'] = null;
            $request['prm_imp_cinco_id'] = null;
        }
        if($request->prm_droga_seis_id == 228){
            $request['prm_fre_seis_id'] = null;
            $request['prm_via_seis_id'] = null;
            $request['primera_seis'] = null;
            $request['prm_mes_seis_id'] = null;
            $request['prm_anio_seis_id'] = null;
            $request['ultima_seis'] = null;
            $request['prm_imp_seis_id'] = null;
        }
        if($request->prm_droga_siete_id == 228){
            $request['prm_fre_siete_id'] = null;
            $request['prm_via_siete_id'] = null;
            $request['primera_siete'] = null;
            $request['prm_mes_siete_id'] = null;
            $request['prm_anio_siete_id'] = null;
            $request['ultima_siete'] = null;
            $request['prm_imp_siete_id'] = null;
        }
        if($request->prm_droga_dmi_id == 228){
            $request['prm_fre_dmi_id'] = null;
            $request['prm_via_dmi_id'] = null;
            $request['primera_dmi'] = null;
            $request['prm_mes_dmi_id'] = null;
            $request['prm_anio_dmi_id'] = null;
            $request['ultima_dmi'] = null;
            $request['prm_imp_dmi_id'] = null;
        }

        $this->validator($request->all())->validate();
        $dato = Vspa::create($request->all());
        $request['mit_vspa_id'] = $dato->id;
        VspaTabla::create($request->all());
        VspaTablaDos::create($request->all());
        VspaTablaTres::create($request->all());
        VspaTablaCuatro::create($request->all());

        return redirect()->route('mitigacion.vspa', $request->sis_nnaj_id)->with('info', 'Registro creado con éxito');
    }

    public function edit($id, $id0){
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->fi_datos_basico;
        $vspa = $dato->Vspa->where('mit_vspa_id', 1)->sortByDesc('fecha')->all();
        //$vspaTablaCuatro = $dato->VspaTablaCuatro->where('sis_esta_id', 1)->all();

        //dd($vspaTabla4);
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

        $escolar = $this->getTemacomboCT([
            'temaxxxx' => 313,
        ])['comboxxx'];

        $ingresos = $this->getTemacomboCT([
            'temaxxxx' => 314,
        ])['comboxxx'];

        $modalidad = $this->getTemacomboCT([
            'temaxxxx' => 315,
        ])['comboxxx'];

        $acude = $this->getTemacomboCT([
            'temaxxxx' => 316,
        ])['comboxxx'];

        $sitio = $this->getTemacomboCT([
            'temaxxxx' => 317,
        ])['comboxxx'];

        $frecuencia = $this->getTemacomboCT([
            'temaxxxx' => 318,
        ])['comboxxx'];

        $via = $this->getTemacomboCT([
            'temaxxxx' => 55,
        ])['comboxxx'];

        $impacto = $this->getTemacomboCT([
            'temaxxxx' => 319,
        ])['comboxxx'];

        $sustancia = $this->getTemacomboCT([
            'temaxxxx' => 320,
        ])['comboxxx'];

        $cantidad = $this->getTemacomboCT([
            'temaxxxx' => 321,
        ])['comboxxx'];

        $obtiene = $this->getTemacomboCT([
            'temaxxxx' => 322,
        ])['comboxxx'];

        $medida = $this->getTemacomboCT([
            'temaxxxx' => 323,
        ])['comboxxx'];

        $costumbre = $this->getTemacomboCT([
            'temaxxxx' => 324,
        ])['comboxxx'];

        $comparte = $this->getTemacomboCT([
            'temaxxxx' => 325,
        ])['comboxxx'];


        $usuarios = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
        $valor    = Vspa::findOrFail($id0);

        return view('Acciones.Individuales.index', ['accion' => 'Vspa', 'tarea' => 'Editar'], compact('dato', 'nnaj', 'vspa', 'upis',
                                                                                                'tValoracion', 'sino', 'escolar', 'ingresos',
                                                                                                'modalidad', 'acude', 'sitio', 'frecuencia',
                                                                                                'via', 'impacto', 'sustancia', 'cantidad',
                                                                                                'obtiene', 'medida', 'costumbre', 'comparte',
                                                                                                'usuarios', 'valor', 'sinoc'));

    }

    public function update(Request $request, $id, $id1){
        if($request->prm_probado_id == 228){
            $request['prm_cantidad_id'] = null;
            $request['prm_inyectadas_id'] = null;
            $request['prm_droga_ini_id'] = null;
            $request['prm_droga_dos_id'] = null;
            $request['prm_droga_tres_id'] = null;
            $request['prm_droga_cuatro_id'] = null;
            $request['prm_droga_cinco_id'] = null;
            $request['prm_droga_seis_id'] = null;
            $request['prm_droga_siete_id'] = null;
            $request['prm_droga_dmi_id'] = null;
            $request['prm_cuatro_uno_id'] = null;
            $request['prm_cuatro_dos_id'] = null;
            $request['prm_cuatro_tres_id'] = null;
            $request['prm_cuatro_cuatro_id'] = null;
            $request['prm_cuatro_cinco_id'] = null;
            $request['prm_cuatro_seis_id'] = null;
            $request['prm_cuatro_siete_id'] = null;
            $request['prm_cuatro_ocho_id'] = null;
            $request['prm_cuatro_nueve_id'] = null;
            $request['prm_cuatro_diez_id'] = null;
            $request['prm_cuatro_once_id'] = null;
            $request['prm_cuatro_doce_id'] = null;
            $request['prm_cinco_uno_id'] = null;
            $request['prm_cinco_dos_id'] = null;
            $request['prm_cinco_tres_id'] = null;
            $request['prm_cinco_cuatro_id'] = null;
            $request['prm_cinco_cinco_id'] = null;
            $request['prm_cinco_seis_id'] = null;
            $request['prm_cinco_siete_id'] = null;
            $request['prm_cinco_ocho_id'] = null;
            $request['prm_cinco_nueve_id'] = null;
            $request['prm_cinco_diez_id'] = null;
            $request['prm_cinco_once_id'] = null;
            $request['prm_cinco_doce_id'] = null;
        }
        if($request->prm_inyectadas_id == 228){
            $request['edad_inicio'] = null;
            $request['prm_dificultad_id'] = null;
            $request['descripcion'] = null;
            $request['prm_obtiene_id'] = null;
            $request['donde'] = null;
            $request['precio'] = null;
            $request['cantidad'] = null;
            $request['prm_medida_id'] = null;
            $request['prm_frecuencia_id'] = null;
            $request['prm_costumbre_id'] = null;
            $request['porque'] = null;
            $request['sustancia'] = null;
            $request['prm_comparte_id'] = null;
            $request['porque_comparte'] = null;
            $request['prm_prueba_id'] = null;
            $request['porque_prueba'] = null;
        }
        if($request->prm_droga_ini_id == 228){
            $request['prm_fre_ini_id'] = null;
            $request['prm_via_ini_id'] = null;
            $request['primera_ini'] = null;
            $request['prm_mes_ini_id'] = null;
            $request['prm_anio_ini_id'] = null;
            $request['ultima_ini'] = null;
            $request['prm_imp_ini_id'] = null;
        }
        if($request->prm_droga_dos_id == 228){
            $request['prm_fre_dos_id'] = null;
            $request['prm_via_dos_id'] = null;
            $request['primera_dos'] = null;
            $request['prm_mes_dos_id'] = null;
            $request['prm_anio_dos_id'] = null;
            $request['ultima_dos'] = null;
            $request['prm_imp_dos_id'] = null;
        }
        if($request->prm_droga_tres_id == 228){
            $request['prm_fre_tres_id'] = null;
            $request['prm_via_tres_id'] = null;
            $request['primera_tres'] = null;
            $request['prm_mes_tres_id'] = null;
            $request['prm_anio_tres_id'] = null;
            $request['ultima_tres'] = null;
            $request['prm_imp_tres_id'] = null;
        }
        if($request->prm_droga_cuatro_id == 228){
            $request['prm_fre_cuatro_id'] = null;
            $request['prm_via_cuatro_id'] = null;
            $request['primera_cuatro'] = null;
            $request['prm_mes_cuatro_id'] = null;
            $request['prm_anio_cuatro_id'] = null;
            $request['ultima_cuatro'] = null;
            $request['prm_imp_cuatro_id'] = null;
        }
        if($request->prm_droga_cinco_id == 228){
            $request['prm_fre_cinco_id'] = null;
            $request['prm_via_cinco_id'] = null;
            $request['primera_cinco'] = null;
            $request['prm_mes_cinco_id'] = null;
            $request['prm_anio_cinco_id'] = null;
            $request['ultima_cinco'] = null;
            $request['prm_imp_cinco_id'] = null;
        }
        if($request->prm_droga_seis_id == 228){
            $request['prm_fre_seis_id'] = null;
            $request['prm_via_seis_id'] = null;
            $request['primera_seis'] = null;
            $request['prm_mes_seis_id'] = null;
            $request['prm_anio_seis_id'] = null;
            $request['ultima_seis'] = null;
            $request['prm_imp_seis_id'] = null;
        }
        if($request->prm_droga_siete_id == 228){
            $request['prm_fre_siete_id'] = null;
            $request['prm_via_siete_id'] = null;
            $request['primera_siete'] = null;
            $request['prm_mes_siete_id'] = null;
            $request['prm_anio_siete_id'] = null;
            $request['ultima_siete'] = null;
            $request['prm_imp_siete_id'] = null;
        }
        if($request->prm_droga_dmi_id == 228){
            $request['prm_fre_dmi_id'] = null;
            $request['prm_via_dmi_id'] = null;
            $request['primera_dmi'] = null;
            $request['prm_mes_dmi_id'] = null;
            $request['prm_anio_dmi_id'] = null;
            $request['ultima_dmi'] = null;
            $request['prm_imp_dmi_id'] = null;
        }

        $this->validator($request->all())->validate();
        $dato = Vspa::findOrFail($id1);
        $dato->fill($request->all())->save();

        return redirect()->route('mitigacion.vspa', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'sis_nnaj_id'       => 'required|exists:sis_nnajs,id',
            'prm_upi_id'        => 'required|exists:sis_depens,id',
            'fecha'             => 'required|date',
            'prm_valoracion_id' => 'required|exists:parametros,id',
            'prm_icbf_id'       => 'required|exists:parametros,id',
            'previos'           => 'required|integer',
            'prm_gestante_id'   => 'nullable|exists:parametros,id',
            'semanas_gestacion' => 'required_if:prm_gestante_id,227',
            'prm_escolar_id'    => 'required|exists:parametros,id',
            'prm_ingresos_id'   => 'required|exists:parametros,id',
            'prm_modalidad_id'  => 'required|exists:parametros,id',
            'prm_acude_id'      => 'required|exists:parametros,id',
            'prm_sitio_id'      => 'required|exists:parametros,id',
            'prm_probado_id'    => 'required|exists:parametros,id',

            'prm_droga_ini_id'  => 'required_if:prm_probado_id,227',
            'prm_fre_ini_id'    => 'required_with_all:prm_droga_ini_id',
            'prm_via_ini_id'    => 'required_with_all:prm_droga_ini_id',
            'primera_ini'    => 'required_with_all:prm_droga_ini_id',
            'prm_mes_ini_id'    => 'required_with_all:prm_droga_ini_id',
            'prm_anio_ini_id'   => 'required_with_all:prm_droga_ini_id',
            'ultima_ini'     => 'required_with_all:prm_droga_ini_id',
            'prm_imp_ini_id'    => 'required_with_all:prm_droga_ini_id',

            'prm_droga_dos_id'  => 'nullable|exists:parametros,id',
            'prm_fre_dos_id'    => 'required_with_all:prm_droga_dos',
            'prm_via_dos_id'    => 'required_with_all:prm_droga_dos',
            'pri_dos_id'        => 'required_with_all:prm_droga_dos',
            'prm_mes_dos_id'    => 'required_with_all:prm_droga_dos',
            'prm_anio_dos_id'   => 'required_with_all:prm_droga_dos',
            'ult_dos_id'        => 'required_with_all:prm_droga_dos',
            'prm_imp_dos_id'    => 'required_with_all:prm_droga_dos',

            'prm_droga_tres_id' => 'nullable|exists:parametros,id',
            'prm_fre_tres_id'   => 'required_with_all:prm_droga_tres_id',
            'prm_via_tres_id'   => 'required_with_all:prm_droga_tres_id',
            'pri_tres_id'       => 'required_with_all:prm_droga_tres_id',
            'prm_mes_tres_id'   => 'required_with_all:prm_droga_tres_id',
            'prm_anio_tres_id'  => 'required_with_all:prm_droga_tres_id',
            'ult_tres_id'       => 'required_with_all:prm_droga_tres_id',
            'prm_imp_tres_id'   => 'required_with_all:prm_droga_tres_id',

            'prm_droga_cuatro_id' => 'nullable|exists:parametros,id',
            'prm_fre_cuatro_id' => 'required_with_all:prm_droga_cuatro_id',
            'prm_via_cuatro_id' => 'required_with_all:prm_droga_cuatro_id',
            'pri_cuatro_id'     => 'required_with_all:prm_droga_cuatro_id',
            'prm_mes_cuatro_id' => 'required_with_all:prm_droga_cuatro_id',
            'prm_anio_cuatro_id'=> 'required_with_all:prm_droga_cuatro_id',
            'ult_cuatro_id'     => 'required_with_all:prm_droga_cuatro_id',
            'prm_imp_cuatro_id' => 'required_with_all:prm_droga_cuatro_id',

            'prm_droga_cinco_id'=> 'nullable|exists:parametros,id',
            'prm_fre_cinco_id'  => 'required_with_all:prm_droga_cinco_id',
            'prm_via_cinco_id'  => 'required_with_all:prm_droga_cinco_id',
            'pri_cinco_id'      => 'required_with_all:prm_droga_cinco_id',
            'prm_mes_cinco_id'  => 'required_with_all:prm_droga_cinco_id',
            'prm_anio_cinco_id' => 'required_with_all:prm_droga_cinco_id',
            'ult_cinco_id'      => 'required_with_all:prm_droga_cinco_id',
            'prm_imp_cinco_id'  => 'required_with_all:prm_droga_cinco_id',

            'prm_droga_seis_id' => 'nullable|exists:parametros,id',
            'prm_fre_seis_id'   => 'required_with_all:prm_droga_seis_id',
            'prm_via_seis_id'   => 'required_with_all:prm_droga_seis_id',
            'pri_seis_id'       => 'required_with_all:prm_droga_seis_id',
            'prm_mes_seis_id'   => 'required_with_all:prm_droga_seis_id',
            'prm_anio_seis_id'  => 'required_with_all:prm_droga_seis_id',
            'ult_seis_id'       => 'required_with_all:prm_droga_seis_id',
            'prm_imp_seis_id'   => 'required_with_all:prm_droga_seis_id',

            'prm_droga_siete_id'=> 'nullable|exists:parametros,id',
            'prm_fre_siete_id'  => 'required_with_all:prm_droga_siete_id',
            'prm_via_siete_id'  => 'required_with_all:prm_droga_siete_id',
            'pri_siete_id'      => 'required_with_all:prm_droga_siete_id',
            'prm_mes_siete_id'  => 'required_with_all:prm_droga_siete_id',
            'prm_anio_siete_id' => 'required_with_all:prm_droga_siete_id',
            'ult_siete_id'      => 'required_with_all:prm_droga_siete_id',
            'prm_imp_siete_id'  => 'required_with_all:prm_droga_siete_id',

            'prm_droga_dmi_id'  => 'required_if:prm_probado_id,227',
            'prm_fre_dmi_id'    => 'required_with_all:prm_droga_dmi_id',
            'prm_via_dmi_id'    => 'required_with_all:prm_droga_dmi_id',
            'primera_dmi'        => 'required_with_all:prm_droga_dmi_id',
            'prm_mes_dmi_id'    => 'required_with_all:prm_droga_dmi_id',
            'prm_anio_dmi_id'   => 'required_with_all:prm_droga_dmi_id',
            'ultima_dmi'        => 'required_with_all:prm_droga_dmi_id',
            'prm_imp_dmi_id'    => 'required_with_all:prm_droga_dmi_id',

            'prm_cantidad_id'   => 'required_if:prm_probado_id,227',

            'prm_inyectadas_id' => 'required_if:prm_probado_id,227',
            'edad_inicio'       => 'required_if:prm_inyectadas_id,227',
            'prm_dificultad_id' => 'required_if:prm_inyectadas_id,227',
            'descripcion'       => 'required_if:prm_inyectadas_id,227',
            'prm_obtiene_id'    => 'required_if:prm_inyectadas_id,227',
            'donde'             => 'required_if:prm_inyectadas_id,227',
            'precio'            => 'required_if:prm_inyectadas_id,227',
            'cantidad'          => 'required_if:prm_inyectadas_id,227',
            'prm_medida_id'     => 'required_if:prm_inyectadas_id,227',
            'prm_frecuencia_id' => 'required_if:prm_inyectadas_id,227',
            'prm_costumbre_id'  => 'required_if:prm_inyectadas_id,227',
            'porque'            => 'required_if:prm_inyectadas_id,227',
            'sustancia'         => 'required_if:prm_inyectadas_id,227',
            'prm_comparte_id'   => 'required_if:prm_inyectadas_id,227',
            'porque_comparte'   => 'required_if:prm_inyectadas_id,227',
            'prm_prueba_id'     => 'required_if:prm_inyectadas_id,227',
            'porque_prueba'     => 'required_if:prm_inyectadas_id,227',

            'observaciones'     => 'nullable|string|max:4000',

            'prm_cuatro_uno_id' => 'required_if:prm_probado_id,227',
            'prm_cuatro_dos_id' => 'required_if:prm_probado_id,227',
            'prm_cuatro_tres_id' => 'required_if:prm_probado_id,227',
            'prm_cuatro_cuatro_id'  => 'required_if:prm_probado_id,227',
            'prm_cuatro_cinco_id'   => 'required_if:prm_probado_id,227',
            'prm_cuatro_seis_id'    => 'required_if:prm_probado_id,227',
            'prm_cuatro_siete_id'   => 'required_if:prm_probado_id,227',
            'prm_cuatro_ocho_id'    => 'required_if:prm_probado_id,227',
            'prm_cuatro_nueve_id'   => 'required_if:prm_probado_id,227',
            'prm_cuatro_diez_id'    => 'required_if:prm_probado_id,227',
            'prm_cuatro_once_id'    => 'required_if:prm_probado_id,227',
            'prm_cuatro_doce_id'    => 'required_if:prm_probado_id,227',

            'prm_cinco_uno_id'      => 'required_if:prm_probado_id,227',
            'prm_cinco_dos_id'      => 'required_if:prm_probado_id,227',
            'prm_cinco_tres_id'     => 'required_if:prm_probado_id,227',
            'prm_cinco_cuatro_id'   => 'required_if:prm_probado_id,227',
            'prm_cinco_cinco_id'    => 'required_if:prm_probado_id,227',
            'prm_cinco_seis_id'     => 'required_if:prm_probado_id,227',
            'prm_cinco_siete_id'    => 'required_if:prm_probado_id,227',
            'prm_cinco_ocho_id'     => 'required_if:prm_probado_id,227',
            'prm_cinco_nueve_id'    => 'required_if:prm_probado_id,227',
            'prm_cinco_diez_id'     => 'required_if:prm_probado_id,227',
            'prm_cinco_once_id'     => 'required_if:prm_probado_id,227',
            'prm_cinco_doce_id'     => 'required_if:prm_probado_id,227',

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
