<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdGeneracionAportanteCrearRequest;
use App\Http\Requests\Csd\CsdGeneracionAportanteEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdGeneracionAportanteController extends Controller
{
    use CsdTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdgenaporta';
        $this->opciones['routxxxx'] = 'csdgenaporta';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Ingresos';
        $this->opciones['slotxxxx'] = 'csdgeningresos';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "GENERACIÓN DE INGRESOS";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

            $this->opciones['acgening'] = Tema::comboAsc(114, true, false);
            $this->opciones['trabinfo'] = Tema::comboAsc(115, true, false);
            $this->opciones['otractiv'] = Tema::comboAsc(116, true, false);
            $this->opciones['tiporela'] = Tema::comboAsc(117, true, false);
            $this->opciones['raznogen'] = Tema::comboAsc(122, true, false);
            $this->opciones['jorgener'] = Tema::comboAsc(123, true, false);
            $this->opciones['diaseman'] = Tema::comboAsc(124, false, false);
            $this->opciones['ampmxxxx'] = Tema::comboAsc(5, true, false);
            $this->opciones['frecugen'] = Tema::comboAsc(125, true, false);
            $this->opciones['condicio'] = Tema::combo(23, true, false);
            $this->opciones['familiar'] = Tema::comboAsc(66, true, false);
        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdgeningresos.nuevo', []],
            'formhref' => 2, 'tituloxx' => "VOLVER A GENERACIÓN DE INGRESOS", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
    }
    public function getListado(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->diaseman = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.diaseman';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getAportantes($request);
         }
    }
    private function view($dataxxxx)
    {
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablafooter']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'AGREGAR APORTANTE',
                'titulist' => 'LISTA DE APORTANTES',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.indexfooter',
                'vercrear' => true,
                'urlxxxxx' => route('csdgenaporta.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.1 ¿Quién Aporta?', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.2 Total Ingresos Mensuales', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.3 Aporte que le hace al hogar', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.4 Jornada en que realiza la actividad', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 4],
                        ['td' => '10.5 Días', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'Hora', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Periodo', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Hora ', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Periodo', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'footerxx' => [
                    [
                        ['td' => 'TOTA INGRESOS MENSUALES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => '', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => '', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 6],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_gening_aportas.id'],
                    ['data' => 'aporta', 'name' => 'parametros.nombre as aporta'],
                    ['data' => 'mensual', 'name' => 'csd_gening_aportas.mensual'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 'jornada_entre', 'name' => 'csd_gening_aportas.jornada_entre'],
                    ['data' => 'entre', 'name' => 'parametros.nombre as aporta'],
                    ['data' => 'jornada_a', 'name' => 'csd_gening_aportas.jornada_a'],
                    ['data' => 'jornada', 'name' => 'parametros.nombre as jornada'],
                    ['data' => 'diaseman', 'name' => 'diaseman'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'csdgenaporta',
                'routxxxx' => 'csdgenaporta',
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
        ];

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'aportante'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('csdgenaporta.editar', [$padrexxx->id, CsdGeningAporta::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdGeneracionAportanteCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Aportante creado con éxito', $padrexxx);
    }


    public function show(CsdSisNnaj $padrexxx, CsdGeningAporta $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'aportante'], 'padrexxx' => $padrexxx]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSustanciaaportante $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdGeningAporta $modeloxx)
    {

        $this->opciones['csdxxxxx'] = $padrexxx;
        if(Auth::user()->id==$padrexxx->user_crea_id||User::userAdmin()){
      
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        
         }else{
        $this->opciones['botoform'][] =
        [
            'mostrars' => false,
        ];
    }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'aportante'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\FiSustanciaaportante $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdGeneracionAportanteEditarRequest $request,  CsdSisNnaj $padrexxx, CsdGeningAporta $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Aportante actualizado con éxito', $padrexxx);
    }

    public function inactivate(CsdSisNnaj $padrexxx,CsdGeningAporta $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx]);
    }
    public function destroy(CsdSisNnaj $padrexxx,CsdGeningAporta $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csdgeningresos.nuevo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}
