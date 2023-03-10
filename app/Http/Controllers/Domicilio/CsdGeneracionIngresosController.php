<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdGeneracionIngresosCrearRequest;
use App\Http\Requests\Csd\CsdGeneracionIngresosEditarRequest;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CsdGeneracionIngresosController extends Controller
{
    ///
    use CsdTrait;
    use PuedeTrait;
    private $opciones=['botoform'=>[]];
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdgeningresos';
        $this->opciones['routxxxx'] = 'csdgeningresos';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Ingresos';
        $this->opciones['slotxxxx'] = 'csdgeningresos';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "GENERACIÓN DE INGRESOS";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
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
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablafooter']
        ];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $vercrear=true;
        $value = Session::get('csdver_' . Auth::id());
        if (!$value) {
            $vercrear=false;
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'AGREGAR APORTANTE',
                'titulist' => 'LISTA DE APORTANTES',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.indexfooter',
                'vercrear' =>  $vercrear,
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


        // indica si se esta actualizando o viendo
 
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
    public function create(CsdSisNnaj $padrexxx)
    {
        $vestuari = CsdGenIngreso::where('csd_id', $padrexxx->csd_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdgeningresos.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
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


    public function store(CsdGeneracionIngresosCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        return $this->grabar($dataxxxx, '', 'Generación de ingresos guardado con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdGenIngreso $modeloxx)
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
    public function edit(CsdSisNnaj $padrexxx, CsdGenIngreso $modeloxx)
    {
        $value = Session::get('csdver_' . Auth::id());
        if (!$value) {
            return redirect()
                ->route($this->opciones['permisox'].'.ver', [$padrexxx->id,$modeloxx->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
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
    public function update(CsdGeneracionIngresosEditarRequest $request, CsdSisNnaj $padrexxx, CsdGenIngreso $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Generación de ingresos actualizado con éxito', $padrexxx);
    }
}
