<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSituacionEspecialCrearRequest;
use App\Http\Requests\FichaIngreso\FiSituacionEspecialUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\Tema;
use Illuminate\Http\Request;

class FiSituacionEspecialController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fisituacion';
        $this->opciones['routxxxx'] = 'fisituacion';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Situacion';
        $this->opciones['slotxxxx'] = 'fisituacion';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "TIPO DE POBLACIÓN";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['viescnna'] = [];

        $this->opciones['situavul'] = Tema::combo(89, false, false);
        $this->opciones['ttiempox'] = Tema::combo(4, true, false);
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
        $this->opciones['tipoescn'] = Tema::combo(326, true, false);
        $this->opciones['iniciado'] = Tema::combo(327, false, false);
        $this->opciones['continua'] = Tema::combo(328, false, false);
        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo
        $this->opciones['situacio'] = FiSituacionEspecial::situaciones($dataxxxx['padrexxx']->sis_nnaj_id);
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

            $this->opciones['viescnna'] = $this->data(['padrexxx' => $dataxxxx['modeloxx']->i_prm_tipo_id], false, false)['escnnaxx'];
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
        $situespe = FiSituacionEspecial::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if (isset($situespe->id)) {
            return redirect()
                ->route('fisituacion.editar', [$padrexxx->id, $situespe->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fisituacion.editar', [$padrexxx->id, FiSituacionEspecial::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiSituacionEspecialCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Situación especial creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiSituacionEspecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiSituacionEspecial $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSituacionEspecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiSituacionEspecial $modeloxx)
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
     * @param  \App\Models\FiSituacionEspecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiSituacionEspecialUpdateRequest $request,  FiDatosBasico $padrexxx,  FiSituacionEspecial $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Situación especial actualizada con exito', $padrexxx);
    }


    private function data($requestx, $cabecera, $ajaxxxxx)
    {
        return [
            'escnnaxx' => ($requestx['padrexxx'] == '') ? [] : (trim($requestx['padrexxx'] == 563) ? Tema::combo(58, $cabecera, $ajaxxxxx) : Tema::combo(126, $cabecera, $ajaxxxxx))
        ];
    }
    public function getEscnna(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $this->data($request->all(), false, true);
            $comboxxx = [];
            foreach ($dataxxxx['escnnaxx'] as $escnnaxx) {
                $selected = '';
                if ($request->all()['selected'] != '') {

                    foreach ($request->all()['selected'] as $pselecte) {

                        if ($escnnaxx['valuexxx'] == $pselecte) {
                            $selected = 'selected';
                        }
                    }
                }

                $comboxxx[] = ['valuexxx' => $escnnaxx['valuexxx'], 'optionxx' => $escnnaxx['optionxx'], 'selected' => $selected];
            }
            return response()->json(['escnnaxx' => $comboxxx]);
        }
    }
}
