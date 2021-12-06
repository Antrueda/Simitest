<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdDinfamiliarCrearRequest;
use App\Http\Requests\Csd\CsdDinfamiliarEditarRequest;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdDinFamiliarController extends Controller
{
    use CsdTrait;
    use PuedeTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csddinfamiliar';
        $this->opciones['routxxxx'] = 'csddinfamiliar';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Dimfamiliar';
        $this->opciones['slotxxxx'] = 'csddinfamiliar';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "DINÁMICA FAMILIAR";
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
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['antecede'] = Tema::comboAsc(97, false, false);
        $this->opciones['familiar'] = Tema::comboAsc(66, true, false);
        $this->opciones['familian'] = Tema::comboAsc(66, false, false);
        $this->opciones['familiax'] = Tema::comboAsc(98, true, false);
        $this->opciones['hogarxxx'] = Tema::comboAsc(99, true, false);
        $this->opciones['separacx'] = Tema::combo(176, true, false);
        $this->opciones['traslado'] = Tema::comboAsc(100, true, false);
        $this->opciones['problema'] = Tema::comboAsc(360, false, false);
        $this->opciones['reglasxx'] = Tema::comboAsc(103, false, false);
        $this->opciones['actuandx'] = Tema::comboAsc(104, true, false);
        $this->opciones['manerasx'] = Tema::comboAsc(105, true, false);
        $this->opciones['acudexxx'] = Tema::comboAsc(106, true, false);
        $this->opciones['incumple'] = Tema::comboAsc(107, false, false);
        $this->opciones['destacan'] = Tema::comboAsc(108, true, false);
        $this->opciones['sucesosx'] = Tema::comboAsc(109, true, false);


    }
    public function getListadop(Request $request, CsdSisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->datobasi = $padrexxx->id;
            $padrexxx=$padrexxx->csd;
            $request->padrexxx = $padrexxx->id;
            $request->routexxx = ['csddfpad'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getPadres($request);
        }
    }
    public function getListadom(Request $request, CsdSisNnaj $padrexxx)
    {


        if ($request->ajax()) {
            $request->datobasi = $padrexxx->id;

            $request->padrexxx = $padrexxx->csd_id;
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
        $this->opciones['document'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico->nnaj_docu->s_documento;
        // $this->opciones['documenx'] = $dataxxxx['padrexxx']->Csd->CsdDatosBasico->s_documento;

        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['archivox']='';
        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $this->opciones['archivox'] = $value;
            }
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;
            $this->opciones['puedexxx'] = '';
            $vercrear = true;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
             $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR RELACIÓN',
                'titulist' => '6.2.1 RELACIONES DE LA PROGENITORA ',
                'dataxxxx' => [],
                'vercrear' => $vercrear,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route('csddinfamiliar.listamxx', [$dataxxxx['padrexxx']->id]),
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
                        ['td' => 'AÑO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
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
            ],[
            'titunuev' => 'CREAR RELACIÓN',
            'titulist' => '6.2.2 RELACIONES DEL PROGENITOR ',
            'dataxxxx' => [],
            'vercrear' => $vercrear,
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'urlxxxxx' => route('csddinfamiliar.listapxx', [$dataxxxx['padrexxx']->id]),
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
                    ['td' => 'AÑO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
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
        ]

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


        if(is_null($padrexxx->Csd->CsdDatosBasico)){
            return redirect()
            ->route('csdatbas.nuevo', [$padrexxx->id])->with('info', "Para continuar debe llenar datos básicos");
        }


        $vestuari = CsdDinFamiliar::where('csd_id', $padrexxx->csd_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csddinfamiliar.editar', [$padrexxx->id, $vestuari->id]);
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

    private function grabar($dataxxxx)
    {

        return redirect()
            ->route('csddinfamiliar.editar', [$dataxxxx['padrexxx']->id,CsdDinFamiliar::transaccion($dataxxxx)->id])
            ->with('info', $dataxxxx['menssage']);;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdDinfamiliarCrearRequest $requestx, CsdSisNnaj $padrexxx)
    {

        $requestx->request->add(['csd_id'=> $padrexxx->csd_id]);
        $requestx->request->add(['sis_esta_id'=> 1]);
        $requestx->request->add(['prm_tipofuen_id'=> 2315]);
        return $this->grabar([
            'requestx' => $requestx,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito',
            'padrexxx'=>$padrexxx
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx,CsdDinFamiliar $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,CsdDinFamiliar $modeloxx)
    {

        $this->opciones['csdxxxxx']=$padrexxx;
        if(Auth::user()->id==$padrexxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
             }else{
            $this->opciones['botoform'][] =
            [
                'mostrars' => false,
            ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar',  'formulario', 'js',], 'padrexxx' => $padrexxx]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdDinfamiliarEditarRequest $requestx,CsdSisNnaj $padrexxx, CsdDinFamiliar $modeloxx)
    {
        return $this->grabar([
            'requestx'=>$requestx,
            'menssage'=>'Dinamica familiar actualizada con éxito',
            'padrexxx'=>$padrexxx,'modeloxx'=>$modeloxx]);
    }
}

///