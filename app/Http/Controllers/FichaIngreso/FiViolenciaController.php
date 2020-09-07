<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiViolenciaCrearRequest;
use App\Http\Requests\FichaIngreso\FiViolenciaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;

class FiViolenciaController extends Controller
{

    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fiviolencia';
        $this->opciones['routxxxx'] = 'fiviolencia';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Violencia';
        $this->opciones['slotxxxx'] = 'fiviolencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "VIOLENCIAS Y CONDICIÓN ESPECIAL";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['condespe'] = Tema::combo(57, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['condiesp'] = Tema::combo(23, true, false);
        $this->opciones['conditab'] = Tema::comboDesc(23, false, false);
    }

    private function view($dataxxxx)
    {

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';


        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['deparexp'] = ['' => 'Seleccione'];
        $this->opciones['municexp'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_condicion_id, false);
            $this->opciones['departam'] = SisDepartamento::combo(2, false);

            $this->opciones['municexp'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_certifica_id, false);
            $this->opciones['deparexp'] = SisDepartamento::combo(2, false);

            if ($dataxxxx['modeloxx']->i_prm_condicion_presenta_id == 853 || $dataxxxx['modeloxx']->i_prm_condicion_presenta_id == 455) {
                $this->opciones['condiesp'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_presenta_violencia_id != 227) {
                $this->opciones['conditab'] = [1 => 'NO APLICA'];
            }
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
    public function create(FiDatosBasico $padrexxx)
    {
        $vestuari = FiViolencia::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fiviolencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx,$padrexxx)
    {
        return redirect()
            ->route('fiviolencia.editar', [$padrexxx->id, FiViolencia::transaccion($dataxxxx, $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiViolenciaCrearRequest $request,FiDatosBasico $padrexxx)
    {
        $dataxxxx=$request->all();
        $dataxxxx['sis_nnaj_id']=$padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Violencia y condición especial creada con exito',$padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx,FiViolencia $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,FiViolencia $modeloxx)
    {

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
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiViolenciaUpdateRequest $request, FiDatosBasico $padrexxx,FiViolencia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Violencia y condición especial actualizada con exito',$padrexxx);
    }
}
