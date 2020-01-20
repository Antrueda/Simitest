<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InAccionGestionCrearRequest;
use App\Http\Requests\Indicadores\InAccionGestionEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\sistema\SisActividad;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\Tema;
use Illuminate\Http\Request;

class InAccionGestionController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:inacciongestion-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:inacciongestion-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Acción Gestion',
            'rutaxxxx' => 'ag.acciongestion',
            'accionxx' => '',
            'volverax' => 'Acción Gestion',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Acciongestion',
            'modeloxx' => '',
            'permisox' => 'inacciongestion',
            'routxxxx' => 'ag.acciongestion',

            'routinde' => 'ag.acciongestion.actividad',
            'parametr' => [],
            'routnuev' => 'ag.acciongestion',
            'nuevoxxx' => 'Nuevo Registro',
            'rutacarp' => 'Indicadores.Admin.Acciongestion.Actividad.'
        ];
        $this->opciones['dataxxxx'] = [];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nnajxxxx, $basexxxx)
    {
        $accionxx = InLineabaseNnaj::where('id', $basexxxx)->first();
        $nombresx = FiDatosBasico::where('sis_nnaj_id', $nnajxxxx)->first();
        $this->opciones['padrexxx'] = [
            'NNAJ: ' . $nombresx->s_primer_nombre . ' ' .
                $nombresx->s_segundo_nombre . ' ' .
                $nombresx->s_primer_apellido . ' ' .
                $nombresx->s_segundo_apellido,
            'Línea base: ' . $accionxx->in_fuente->in_linea_base->s_linea_base,
            'Listado de Actividades'
        ];




        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'nnajxxxx', 'dataxxxx' => $nnajxxxx],
            ['campoxxx' => 'basexxxx', 'dataxxxx' => $accionxx->in_fuente_id],
        ];
        $this->opciones['urlxxxxx'] = 'api/indicadores/baseactividades';
        $this->opciones['parametr'] = [$nnajxxxx, $basexxxx];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'ACTIVIDAD'],
            ['td' => 'ESTADO'],
        ];

        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_accion_gestions.id'],
            ['data' => 'nombre', 'name' => 'sis_actividads.nombre'],
            ['data' => 'activo', 'name' => 'in_accion_gestions.activo'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }



    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['docufuen'] = SisDocumentoFuente::getDocBase(true, false, $this->opciones['parametr']);
        $this->opciones['ttiempox'] = Tema::combo(4, true, false);
        $this->opciones['fsoporte'] = ['' => 'Seleccione'];
        $this->opciones['activida'] = ['' => 'Seleccione'];
        if ($nombobje != '') {
            $this->opciones['activida'] = SisActividad::combo($objetoxx->sis_documento_fuente_id, true, false);
            //dd($this->opciones['activida']);
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nnaj, $base)
    {
        $this->opciones['parametr'] = [$nnaj, $base];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx, $nnajxxxx, $basexxxx)
    {
        $dataxxxx['in_lineabase_nnaj_id'] = $basexxxx;
        $dataxxxx['sis_nnaj_id'] = $nnajxxxx;
        return redirect()
            ->route('ag.acciongestion.editar', [$nnajxxxx, $basexxxx, InAccionGestion::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InAccionGestionCrearRequest $request, $nnaj, $base)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito', $nnaj, $base);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InAccionGestion $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nnajxxxx, $basexxxx, InAccionGestion $objetoxx)
    { //dd($objetoxx);
        $this->opciones['parametr'] = [$nnajxxxx, $basexxxx];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update($nnaj, $base,InAccionGestionEditarRequest $request, InAccionGestion $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Indicador actualizado con éxito', $nnaj, $base);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InAccionGestion $objetoxx)
    {
        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('in')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function porcentaje(Request $request, $nnajxxxx, $basexxxx)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $porcenta = InAccionGestion::where('in_lineabase_nnaj_id', $basexxxx)->sum('i_porcentaje');
            /** saber que porcentaje hace falta para el 100% */
            $totalxxx = 100 - $porcenta;
            $respusta = [];
            /** saber si el porcentaje que se esta ingresando es mayor al que hace falta para el 100% */
            if ($totalxxx < (int) $dataxxxx['i_porcentaje']) {
                $respusta = ['mostrarx' => 'show', 'msnxxxxx' => 'El porcentaje es superior al faltante: ' . $totalxxx, 'faltante' => $totalxxx];
            } else {
                $respusta = ['mostrarx' => 'hide', 'msnxxxxx' => '', 'faltante' => $dataxxxx['i_porcentaje']];
            }

            return response()->json($respusta);
        }
    }
}
