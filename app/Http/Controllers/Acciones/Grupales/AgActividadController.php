<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgActividadCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgActividadEditarRequest;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\fichaobservacion\FosTse;
use App\Models\Indicadores\Area;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgActividadController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox']='agactividad';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones = [
            'tituloxx' => 'TALLERES Y ACCIONES FORMATIVAS',
            'rutaxxxx' => 'ag.acti.actividad',
            'accionxx' => '',
            'rutacarp' => 'Acciones.Grupales.Agactividad.',
            'volverax' => 'Volver a Actividades',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agactividad',
            'modeloxx' => '',
            'permisox' => 'agactividad',
            'routxxxx' => 'ag.acti.actividad',
            'routinde' => 'ag.acti',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/actividades',
            'routnuev' => 'ag.acti.actividad',
            'nuevoxxx' => 'Nuevo Registro',
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'REGISTRO ACTIVIDAD'],
            ['td' => 'DEPENDENCIA ORIGEN'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_actividads.id'],
            ['data' => 'd_registro', 'name' => 'ag_actividads.d_registro'],
            ['data' => 'sis_deporigen_id', 'name' => 'sis_depens.nombre as sis_deporigen_id'],
            ['data' => 'sis_esta_id', 'name' => 'ag_actividads.sis_esta_id'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones["tiempoxx"] = - (Auth::user()->i_tiempo - 1);

        $this->opciones["urlxxxag"] = 'api/ag/responsables';
        $this->opciones['routxxxa'] = 'ag.acti.actividad';
        $this->opciones['cabeceag'] = [
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'RESPONSABLE DE LA ACTIVIDAD'],
            ['td' => 'DOCUMENTO'],
        ];
        $this->opciones['columnag'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'apellido1', 'name' => 'user.s_primer_apellido as apellido1'],
            ['data' => 'apellido2', 'name' => 'user.s_segundo_apellido as apellido2'],
            ['data' => 'nombre1', 'name' => 'user.s_primer_nombre as nombre1'],
            ['data' => 'nombre2', 'name' => 'user.s_primer_nombre as nombre2'],
            ['data' => 'i_prm_responsable_id', 'name' => 'parametros.name as i_prm_responsable_id'],
            ['data' => 'documento1', 'name' => 'user.s_documento as documento1'],
        ];

        $this->opciones["urlxxxas"] = 'api/ag/asistentes';
        $this->opciones['routxxxb'] = 'ag.acti.actividad';
        $this->opciones['cabeceas'] = [
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'DOCUMENTO'],
        ];
        $this->opciones['columnas'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'apellido11', 'name' => 'fi_datos_basicos.s_primer_apellido as apellido11'],
            ['data' => 'apellido22', 'name' => 'fi_datos_basicos.s_segundo_apellido as apellido22'],
            ['data' => 'nombre11', 'name' => 'fi_datos_basicos.s_primer_nombre as nombre11'],
            ['data' => 'nombre22', 'name' => 'fi_datos_basicos.s_primer_nombre as nombre22'],
            ['data' => 'documento2', 'name' => 'nnaj_docus.s_documento as documento2'],
        ];

        $this->opciones['urlxxxre'] = 'api/ag/relaciones';
        $this->opciones['routxxxc'] = 'ag.acti.actividad';
        $this->opciones['cabecere'] = [
            ['td' => 'CANTIDAD'],
            ['td' => 'RECURSO'],
            ['td' => 'TIPO DE RECURSO'],
            ['td' => 'UNIDAD DE MEDIDA'],
        ];
        $this->opciones['columnre'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'cantidad', 'name' => 'ag_relacions.i_cantidad as cantidad'],
            ['data' => 'recursox', 'name' => 'ag_recursos.s_recurso as recursox'],
            ['data' => 'trecurso', 'name' => 'parametros.nombre as trecurso'],
            ['data' => 'umedidax', 'name' => 'parametros.nombre as umedidax'],

        ];


        $this->opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['entidadx'] = SisEntidad::combo(true, false);
        $this->opciones['dependen'] = User::getDependenciasUser(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['upidepen'] = SisDepen::combo(true, false);

        //$this->opciones['dependen'] = SisDepen::combo(true, false);
        $this->opciones['agtemaxx'] = ['' => 'Seleccione'];
        $this->opciones['lugarxxx'] = [1 => 'NO APLICA'];
        //Tema::combo(291, true, false);
        $this->opciones['tallerxx'] = ['' => 'Seleccione'];
        $this->opciones['subtemax'] = [1 => 'NO APLICA'];
        $this->opciones['transver'] = AgTaller::comb(true, false);
        $this->opciones['dirigido'] = Tema::combo(285, true, false);
        $this->opciones['condicio'] = Tema::combo(338, true, false);
        $this->opciones['recursox'] = AgRecurso::comb(true, false);
        $notinxxx = [];
     

        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            
            $responsa = AgAsistente::where('ag_actividad_id', $objetoxx->id)->get();
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->fi_dato_basico_id;
            }
            
            if ($objetoxx->sis_depdestino_id == 1) {
                $this->opciones['lugarxxx'] = Tema::combo(336, true, false);
            }
            $this->opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false, 'areasele' => $objetoxx->area_id]);
            $this->opciones['agtemaxx'] = Area::combo_temas(['cabecera' => true, 'ajaxxxxx' => false, 'areaxxxx' => $objetoxx->area_id]);
            $this->opciones['tallerxx'] = AgTema::combo_talleres(['cabecera' => true, 'ajaxxxxx' => false, 'agtemaid' => $objetoxx->ag_tema_id]);

            $agtaller = AgTaller::combo_subtemas(['cabecera' => true, 'ajaxxxxx' => false, 'agtaller' => $objetoxx->ag_taller_id]);
            if (count($agtaller) == 1) {
                $this->opciones['subtemax'] = [1 => 'NO APLICA'];
            }
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'] . $vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'Crear', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        
        return redirect()
            ->route('ag.acti.actividad.editar', [AgActividad::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgActividadCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AgActividad $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AgActividad $objetoxx)
    {
        $this->opciones['actualiz'] = '';
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgActividadEditarRequest $request, AgActividad $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Indicador actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgActividad $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function getEliminar(Request $request)
    {
         if ($request->ajax()) {
            $dataxxxx = $request->all();
            switch($request->tablaxxx){
                case 1:

               break;
            }
           return response()->json(FosTse::combo($dataxxxx['padrexxx'], false, true));
         }

    }
}
