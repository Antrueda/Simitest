<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiVcontviolCrearRequest;
use App\Http\Requests\FichaIngreso\FiVcontviolUpdateRequest;
use App\Models\fichaIngreso\FiContviol;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\Tema;
use App\Traits\Fi\FiContviol\FiContviolCrudTrait;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;


class FiVcontviolController extends Controller
{
    use FiTrait;
    use FiContviolCrudTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'ficonvio';
        $this->opciones['routxxxx'] = 'ficonvio';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Violencia';
        $this->opciones['slotxxxx'] = 'fiviolencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "VIOLENCIA PRESENTADA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['violenci'] = Tema::comboAsc(347, true, false);
        $this->opciones['contexto'] = Tema::comboAsc(348, true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fiviolencia.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A VIOLENCIA Y CONDICI'.$this->opciones['vocalesx'][3].'N ESPECIAL', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx, $temaxxxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->padrexxx = $temaxxxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getArchivosTrait($request);
        }
    }
    private function view($dataxxxx)
    {
        if ($dataxxxx['temaxxxx'] == 346) {
            $this->opciones['tituloxx'] = 'VIOLENCIA EJERCIDA';
        }
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id,$dataxxxx['temaxxxx']];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['botoform'][0]['routingx'][1]=[$this->opciones['usuariox']->id,$dataxxxx['padrexxx']->id];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiViolencia $padrexxx, $temaxxxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'violcont'], 'padrexxx' => $padrexxx, 'temaxxxx' => $temaxxxx]);
    }

    public function store(FiVcontviolCrearRequest $request, $padrexxx, $temaxxxx)
    {
        $request->request->add(['sis_esta_id'=>1]);
        $request->request->add(['tema_id'=>$temaxxxx]);
        $request->request->add(['fi_violencia_id'=>$padrexxx]);
        return $this->setFiContviol(['requestx'=>$request,'modeloxx'=>'','infoxxxx'=>'Violencia y condición especial creada con éxito'] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiContviol $modeloxx)
    {
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['ver', 'violcont'],
            'padrexxx' => $modeloxx->fi_violencia,
            'temaxxxx' => $modeloxx->tema_id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiContviol $modeloxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'violcont'],
            'padrexxx' => $modeloxx->fi_violencia,
            'temaxxxx' => $modeloxx->tema_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiVcontviolUpdateRequest $request, FiDatosBasico $padrexxx, FiContviol $modeloxx)
    {
        return $this->setFiContviol(['requestx'=>$request,'modeloxx'=> $modeloxx,'infoxxxx'=>'Violencia y condición especial actualizada con éxito'] );
    }
}
