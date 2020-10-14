<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdDinfamiliarCrearRequest;
use App\Http\Requests\Csd\CsdDinfamiliarEditarRequest;
use App\Http\Requests\FichaIngreso\FiConsumoSpaCrearRequest;
use App\Http\Requests\FichaIngreso\FiConsumoSpaUpdateRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;

use Illuminate\Http\Request;

class CsdDinFamiliarController extends Controller
{
    use CsdTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csddinfamiliar';
        $this->opciones['routxxxx'] = 'csddinfamiliar';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'dimfamiliar';
        $this->opciones['slotxxxx'] = 'csddinfamiliar';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "DINAMICA FAMILIAR";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
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
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['antecede'] = Tema::combo(97, false, false);
        $this->opciones['familiar'] = Tema::combo(66, false, false);
        $this->opciones['familiax'] = Tema::combo(98, true, false);
        $this->opciones['hogarxxx'] = Tema::combo(99, true, false);
        $this->opciones['separacx'] = Tema::combo(176, true, false);
        $this->opciones['traslado'] = Tema::combo(100, true, false);
        $this->opciones['problema'] = Tema::combo(102, false, false);
        $this->opciones['reglasxx'] = Tema::combo(103, true, false);
        $this->opciones['actuandx'] = Tema::combo(104, true, false);
        $this->opciones['manerasx'] = Tema::combo(105, true, false);
        $this->opciones['acudexxx'] = Tema::combo(106, false, false);
        $this->opciones['incumple'] = Tema::combo(107, false, false);
        $this->opciones['destacan'] = Tema::combo(108, true, false);
        $this->opciones['sucesosx'] = Tema::combo(109, true, false);
        

    }
    public function getListadop(Request $request, Csd $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['csddfpad'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getPadres($request);
        }
    }

    public function getListadom(Request $request, Csd $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['csddfmad'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getMadres($request);
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
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;
            $this->opciones['puedexxx'] = '';
            $vercrear = true;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR RELACION',
                'titulist' => 'LISTA DE RELACIONES DEL PROGENITOR',
                'dataxxxx' => [],
                'vercrear' => $vercrear,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listapxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONVIVIERON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO DE CONVIVENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '# HIJOS(AS)', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MOTIVO DE SEPARACION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_dinfam_padres.id'],
                    ['data' => 'convive', 'name' => 'convive.nombre as convive'],
                    ['data' => 'dia', 'name' => 'csd_dinfam_padres.dia'],
                    ['data' => 'mes', 'name' => 'csd_dinfam_padres.mes'],
                    ['data' => 'ano', 'name' => 'csd_dinfam_padres.ano'],
                    ['data' => 'hijo', 'name' => 'csd_dinfam_padres.hijo'],
                    ['data' => 'separado', 'name' => 'separado.nombre as separado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepadre',
                'permisox' => 'csddfpad',
                'routxxxx' => 'csddfpad',
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
            [
                'titunuev' => 'CREAR RELACION',
                'titulist' => 'LISTA DE RELACIONES DEL PROGENITORA',
                'dataxxxx' => [],
                'vercrear' => $vercrear,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listamxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONVIVIERON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO DE CONVIVENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '# HIJOS(AS)', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MOTIVO DE SEPARACION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_dinfam_madres.id'],
                    ['data' => 'convive', 'name' => 'convive.nombre as convive'],
                    ['data' => 'dia', 'name' => 'csd_dinfam_madres.dia'],
                    ['data' => 'mes', 'name' => 'csd_dinfam_madres.mes'],
                    ['data' => 'ano', 'name' => 'csd_dinfam_madres.ano'],
                    ['data' => 'hijo', 'name' => 'csd_dinfam_madres.hijo'],
                    ['data' => 'separado', 'name' => 'separado.nombre as separado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablemadre',
                'permisox' => 'csddfmad',
                'routxxxx' => 'csddfmad',
                'parametr' => $this->opciones['parametr'] ,
            ]
            
        ];

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Csd $padrexxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
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
        $dataxxxx['sis_esta_id'] = 1;
        return redirect()
            ->route('csddinfamiliar.editar', [$padrexxx->id, CsdDinFamiliar::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdDinfamiliarCrearRequest $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Consumo SPA creado con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdDinFamiliar $modeloxx,Csd $padrexxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx,  CsdDinFamiliar $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdDinfamiliarEditarRequest $request, Csd $padrexxx, CsdDinFamiliar $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Consumo SPA actualizado con exito', $padrexxx);
    }
}
