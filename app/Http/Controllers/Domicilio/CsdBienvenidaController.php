<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdBienvenidaCrearRequest;
use App\Http\Requests\Csd\CsdBienvenidaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdBienvenida;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Traits\Puede\PuedeTrait;

class CsdBienvenidaController extends Controller
{

    private $opciones;
    use PuedeTrait;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdbienvenida';
        $this->opciones['routxxxx'] = 'csdbienvenida';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Bienvenida';
        $this->opciones['slotxxxx'] = 'csdbienvenida';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "MOTIVOS DE VINCULACIÓN Y BIENVENIDA";
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
        $this->opciones['personax'] = Tema::combo(159,true, false);
        $this->opciones['motivosx'] = Tema::combo(63, false, false);
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
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;
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
        ->route('csdbienvenida.editar', [$dataxxxx['padrexxx']->id,CsdBienvenida::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdBienvenidaCrearRequest $request,CsdSisNnaj $padrexxx)
    {
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' =>1]);
        $request->request->add(['prm_tipofuen_id' =>2315]);
        return $this->grabar([
            'requestx'=>$request,
            'infoxxxx'=>'Bienvenida creada con éxito',
            'padrexxx'=>$padrexxx,
            'modeloxx'=>''
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx,CsdBienvenida $modeloxx)
    {
        return $this->view([
            'modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,CsdBienvenida $modeloxx)
    {

        $this->opciones['csdxxxxx']=$padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
           }
        
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar',  'formulario', 'js',], 'padrexxx' => $padrexxx]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdBienvenidaEditarRequest $request,CsdSisNnaj $padrexxx, CsdBienvenida $modeloxx)
    {
        return $this->grabar([
            'requestx'=>$request,
            'infoxxxx'=>'Bienvenida actualizada con éxito',
            'padrexxx'=>$padrexxx,
            'modeloxx'=>$modeloxx]);
    }
}
