<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdVisitadoCrearRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisEsta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sistema\SisNnaj;
use App\Traits\Csd\CsdTrait;

class CsdNnajvisitadoController extends Controller
{
    use CsdTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'nnajvisi';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'NNAJ VISITADO';
        $this->opciones['routxxxx'] = 'nnajvisi';
        $this->opciones['slotxxxx'] = 'csdxxxxx';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Csd';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "NNAJ VISITADO";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdxxxxx.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A CSD', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function getListado(Request $request,SisNnaj $padrexxx,Csd $csdxxxxx)
    {
        if ($request->ajax()) {

            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $csdxxxxx->id;
            $request->nnajxxxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesxxx';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getNnajs($request);

        }
    }
    private function grabar($dataxxxx)
    {
        $usuariox = CsdSisNnaj::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id,$usuariox->id])
            ->with('info',$dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['csdxxxxx']=$dataxxxx['csdxxxxx'];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id,$dataxxxx['csdxxxxx']->id];

        $this->opciones['botoform'][0]['routingx'][1]=$this->opciones['parametr'];
        // $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.visitabla']
        ];

        $this->opciones['nnajidxx'] = [''=>'Seleccione'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['pestpadr'] = 3;
            $this->opciones['nnajidxx']=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->NombreCedula;

            $this->opciones['csdxxxxx']=$dataxxxx['modeloxx'];
            $this->opciones['modeloxx']=$dataxxxx['modeloxx'];
            $this->opciones['parametr'][2] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', [$dataxxxx['padrexxx']->id,$dataxxxx['csdxxxxx']->id]],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO NNAJ VISITADO',
                'titulist' => 'LISTA DE NNAJ, SELECCIONE EL VISITADO',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$dataxxxx['padrexxx']->id,$dataxxxx['csdxxxxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx,Csd $csdxxxxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'visitado'],'padrexxx'=>$padrexxx,'csdxxxxx'=>$csdxxxxx]);
    }
    public function store(CsdVisitadoCrearRequest $request, SisNnaj $padrexxx, Csd $csdxxxxx )
    {
        $request->request->add(['csd_id'=>$csdxxxxx->id]);
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Consulta creada con exito','modeloxx'=>'','padrexxx'=>$padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(SisNnaj $padrexxx,CsdSisNnaj $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'visitado'], 'padrexxx' => $padrexxx, 'csdxxxxx' => $modeloxx->csd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(SisNnaj $padrexxx,CsdSisNnaj $modeloxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'visitado'], 'padrexxx' => $padrexxx, 'csdxxxxx' => $modeloxx->csd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $padrexxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdVisitadoCrearRequest $request, SisNnaj $padrexxx, CsdSisNnaj $modeloxx)
    {
        $request->request->add(['csd_id'=>$modeloxx->csd_id]);
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Datos básicos actualizados con exito','modeloxx'=>$modeloxx,'padrexxx'=>$padrexxx]);
    }

    public function inactivate(SisNnaj $padrexxx,CsdSisNnaj $modeloxx)
    {
        $this->opciones['rutaxxxx']=route('csdxxxxx.borrar',$modeloxx->id);
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }


    public function destroy(Request $request, SisNnaj $padrexxx,CsdSisNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj->id])
            ->with('info', 'Nnaj visitado inactivado correctamente');
    }
}
