<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdViolenciaCrearRequest;
use App\Http\Requests\Csd\CsdViolenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdViolencia;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Traits\Fi\VcontviolTrait;

class CsdViolenciaController extends Controller
{
    use VcontviolTrait;
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
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
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
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],

        ];
                if ($dataxxxx['padrexxx']->prm_estrateg_id == 2323) {
            $condespe = 351;
        }
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['deparexp'] = ['' => 'Seleccione'];
        $this->opciones['municexp'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_condicion_id, false);
            $this->opciones['departam'] = SisDepartamento::combo(2, false);

            $this->opciones['municexp'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_certifica_id, false);
            $this->opciones['deparexp'] = SisDepartamento::combo(2, false);
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        $this->setModelo((isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx'] : false);
       
        
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
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear','formulario', 'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx)
    {
        $usuariox = CsdViolencia::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$usuariox->id])
            ->with('info',$dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdViolenciaCrearRequest $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Violencia y condición especial creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdViolencia $modeloxx)
    {
        
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdViolencia $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.editar',$modeloxx->id);
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
     * @param  \App\Models\csdviolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdViolenciaEditarRequest $request, Csd $padrexxx, CsdViolencia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Violencia y condición especial actualizada con exito', $padrexxx);
    }
}
