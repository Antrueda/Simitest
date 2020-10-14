<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdGenIngreso;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;

use Illuminate\Http\Request;

class CsdGeneracionIngresosController extends Controller
{
    use CsdTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdgeningresos';
        $this->opciones['routxxxx'] = 'csdgeningresos';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Ingresos';
        $this->opciones['slotxxxx'] = 'csdgeningresos';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "GENERACION DE INGRESOS";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        // 'urlxxxxx' => 'api/fi/fisustanciaconsumida',
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
            $this->opciones['acgening'] = Tema::combo(114, true, false);
            $this->opciones['trabinfo'] = Tema::combo(115, true, false);
            $this->opciones['otractiv'] = Tema::combo(116, true, false);
            $this->opciones['tiporela'] = Tema::combo(117, true, false);
            $this->opciones['raznogen'] = Tema::combo(122, true, false);
            $this->opciones['jorgener'] = Tema::combo(123, true, false);
            $this->opciones['diaseman'] = Tema::combo(124, false, false);
            $this->opciones['ampmxxxx'] = Tema::combo(5, true, false);
            $this->opciones['frecugen'] = Tema::combo(125, true, false);
            $this->opciones['condicio'] = Tema::combo(23, true, false);
            $this->opciones['familiar'] = Tema::combo(66, true, false);


    }
    public function getListado(Request $request, Csd $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['csdgenaporta'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getAportantes($request);
        }
    }


    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR APORTANTE',
                'titulist' => 'LISTA DE APORTANTES',
                'dataxxxx' => [],
                'vercrear' => true,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route('csdgeningresos.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.1 ¿Quién Aporta?', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.2 Total Ingresos Mensuales', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '10.3 Aporte que le hace al hogar', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.4 Jornada en que realiza la actividad', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.5 Días', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],

                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_gening_aportas.id'],
                    ['data' => 'aporta', 'name' => 'aporta.nombre as aporta'],
                    ['data' => 'mensual', 'name' => 'csd_gening_aportas.mensual'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'csdgenaporta',
                'routxxxx' => 'csdgenaporta',
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],

        ];

        // indica si se esta actualizando o viendo
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['puedexxx'] = '';
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Csd $padrexxx)
    {
        $vestuari = CsdGenIngreso::where('csd_id', $padrexxx->id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdgeningresos.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        $dataxxxx['csd_id'] = $padrexxx->id;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        $dataxxxx['sis_esta_id'] = 1;
        return redirect()
            ->route('csdgeningresos.editar', [$padrexxx->id, CsdGenIngreso::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Generacion de ingresos guardado con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdGenIngreso $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdGenIngreso $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Csd $padrexxx, CsdGenIngreso $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Generacion de ingresos actualizado con exito', $padrexxx);
    }
}
