<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InActsoporteCrearRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\sistema\SisFsoporte;
use Illuminate\Http\Request;

class InActFuenteController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:inacciongestion-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:inacciongestion-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Fuentes de la actividad',
            'rutaxxxx' => 'ag.acciongestion',
            'accionxx' => '',
            'volverax' => 'Fuentes de la actividad',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Acciongestion',
            'modeloxx' => '',
            'permisox' => 'inacciongestion',
            'routxxxx' => 'ag.actfuente',
            'routinde' => 'ag.actfuente.actividad',
            'parametr' => [],
            'routnuev' => 'ag.actfuente',
            'nuevoxxx' => 'Nuevo Registro',
            'rutacarp' => 'Indicadores.Admin.Acciongestion.Fuentes.'
        ];
        $this->opciones['dataxxxx'] = [];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nnajxxxx, $basexxxx, $activida)

    {
        $accionxx = InAccionGestion::where('id', $activida)->first();
        $nombresx = FiDatosBasico::where('sis_nnaj_id', $nnajxxxx)->first();
        $this->opciones['padrexxx'] = [
            'NNAJ: ' . $nombresx->s_primer_nombre . ' ' .
                $nombresx->s_segundo_nombre . ' ' .
                $nombresx->s_primer_apellido . ' ' .
                $nombresx->s_segundo_apellido,
            'Línea base: ' . $accionxx->in_lineabase_nnaj->in_fuente->in_linea_base->s_linea_base,
            'Actividad: ' . $accionxx->sis_actividad->nombre,
            'Listado Documentos Fuente'
        ];

        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'nnajxxxx', 'dataxxxx' => $nnajxxxx],
            ['campoxxx' => 'basexxxx', 'dataxxxx' => $basexxxx],
            ['campoxxx' => 'activida', 'dataxxxx' => $activida],
        ];
        $this->opciones['urlxxxxx'] = 'api/indicadores/actfuente';
        $this->opciones['parametr'] = [$nnajxxxx, $basexxxx, $activida];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'DOCUMENTO FUENTE'],
            ['td' => 'ESTADO'],
        ];

        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_accion_gestions.id'],
            ['data' => 'nombre', 'name' => 'sis_actividads.nombre'],
            ['data' => 'sis_esta_id', 'name' => 'in_accion_gestions.sis_esta_id'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }



    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo




        $optionxx='';

        if ($nombobje != '') {

            //dd($this->opciones['activida']);
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $optionxx=$objetoxx->sis_fsoporte_id;
        }
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => false,
            'padrexxx' => $this->opciones['parametr'][2],
            'optionxx' => $optionxx
        ];

        $this->opciones['fsoporte'] = SisFsoporte::getSoportes($dataxxxx);
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nnajxxxx, $basexxxx, $activida)
    {
        $this->opciones['parametr'] = [$nnajxxxx, $basexxxx, $activida];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx, $nnajxxxx, $basexxxx, $activida)
    {
        $dataxxxx['in_accion_gestion_id'] =$activida;
        return redirect()
            ->route('ag.actfuente.editar', [$nnajxxxx, $basexxxx,$activida, InActsoporte::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InActsoporteCrearRequest $request, $nnajxxxx, $basexxxx, $activida)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito', $nnajxxxx, $basexxxx, $activida);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InActsoporte $objetoxx)
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
    public function edit($nnajxxxx, $basexxxx, $activida, InActsoporte $objetoxx)
    {

        $this->opciones['parametr'] = [$nnajxxxx, $nnajxxxx, $activida];

        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update(InActsoporteCrearRequest $request, InActsoporte $objetoxx, $nnajxxxx, $basexxxx, $activida)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Indicador actualizado con éxito', $nnajxxxx, $basexxxx, $activida);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InActsoporte $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('in')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
