<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdViolenciaCrearRequest;
use App\Http\Requests\Csd\CsdViolenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Traits\Fi\VcontviolTrait;

class CsdViolenciaController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdviolencia';
        $this->opciones['routxxxx'] = 'csdviolencia';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Violencia';
        $this->opciones['slotxxxx'] = 'csdviolencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "VIOLENCIA";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['condixxx'] = Tema::combo(57, true, false);


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

        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['departxx'] = SisDepartamento::orderBy('s_departamento')->get();
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['deparexp'] = ['' => 'Seleccione'];
        $this->opciones['municexp'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['pestpadr'] = 3;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->departamento_cond_id, false);
            $this->opciones['departam'] = SisDepartamento::combo(2, false);

            $this->opciones['municexp'] = SisMunicipio::combo($dataxxxx['modeloxx']->departamento_cert_id, false);
            $this->opciones['deparexp'] = SisDepartamento::combo(2, false);
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
    public function create(CsdSisNnaj  $padrexxx)
    {
        $vestuari = CsdViolencia::where('csd_id', $padrexxx->id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdviolencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear','formulario', 'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('csdviolencia.editar', [$padrexxx->id, CsdViolencia::transaccion($dataxxxx, $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdViolenciaCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        return $this->grabar($dataxxxx, '', 'Violencia y condición especial creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdViolencia $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdViolencia $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['editar','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdViolenciaEditarRequest $request, CsdSisNnaj $padrexxx, CsdViolencia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Violencia y condición especial actualizada con exito', $padrexxx);
    }
}
