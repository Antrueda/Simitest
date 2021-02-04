<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdCompfamiObservacionCrearRequest;
use App\Http\Requests\Csd\CsdCompfamiObservacionEditarRequest;
use App\Models\consulta\CsdComfamob;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Traits\Csd\CsdTrait;
use App\Traits\Fi\DatosBasicosTrait;

class CsdCompfamiObservacionController extends Controller
{

    private $opciones;
    use CsdTrait;
    use DatosBasicosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdcomfamirobserva';
        $this->opciones['routxxxx'] = 'csdcomfamirobserva';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Composicion';
        $this->opciones['slotxxxx'] = 'csdcomfamirobserva';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        }

    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['aniosxxx'] = '';

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route('csdcomfamiliar.listaxxx', [$dataxxxx['padrexxx']->id,$dataxxxx['padrexxx']->csd_id]),

                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_com_familiars.id'],
                    ['data' => 's_primer_nombre', 'name' => 'csd_com_familiars.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'csd_com_familiars.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'csd_com_familiars.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'csd_com_familiars.s_segundo_apellido'],
                    ['data' => 's_documento', 'name' => 'csd_com_familiars.s_documento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'csdcomfamiliar',
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],

        ];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
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
        $vestuari = CsdComfamob::where('csd_id', $padrexxx->csd_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdcomfamirobserva.editar', [$padrexxx->csd_id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'observacion'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {

        return redirect()
        ->route('csdcomfamirobserva.editar', [$dataxxxx['padrexxx']->id,CsdComfamob::getTransaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['menssage']);;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CsdCompfamiObservacionCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->grabar(['requestx'=>$request, 'objetoxx'=>'', 'menssage'=>'Observación guardada con exito', 'padrexxx'=>$padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiCompfami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdComfamob $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'observacion'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,CsdComfamob $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'observacion', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdCompfamiObservacionEditarRequest $request, CsdSisNnaj $padrexxx, CsdComfamob $modeloxx)
    {
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        return $this->grabar(['requestx'=>$request, 'objetoxx'=>$modeloxx, 'menssage'=>'Observación actualizada con exito', 'padrexxx'=>$padrexxx]);

    }

}
