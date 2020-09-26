<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdResidenciaCrearRequest;
use App\Http\Requests\Csd\CsdResidenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiDatosBasico;

use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;

class CsdResidenciaController extends Controller
{
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdresidencia';
        $this->opciones['routxxxx'] = 'csdresidencia';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'residencia';
        $this->opciones['tituloxx'] = 'RESIDENCIA';
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['dircondi'] = Tema::combo(23, true, false);
        $this->opciones['residees'] = Tema::combo(35, true, false);
        $this->opciones['tipodire'] = Tema::combo(36, true, false);
        $this->opciones['zonadire'] = Tema::combo(37, true, false);
        $this->opciones['cuadrant'] = Tema::combo(38, true, false);
        $this->opciones['alfabeto'] = Tema::combo(39, true, false);
        $this->opciones['estratox'] = Tema::combo(41, true, false);
        $this->opciones['condambi'] = Tema::combo(42, false, false);
        $this->opciones['tpviapal'] = Tema::combo(62, true, false);
        $this->opciones['pisoxxxx'] = Tema::combo(90, true, false);
        $this->opciones['murosxxx'] = Tema::combo(91, true, false);
        $this->opciones['esparcha'] = Tema::combo(291, true, false);
        $this->opciones['localida'] = SisLocalidad::combo();

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fidatbas', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
        $this->opciones['readchcx'] = '';
        if ($this->opciones['usuariox']->prm_poblacion_id == 650) {
            $this->opciones['readchcx'] = 'readonly';
            $this->opciones['residees'] = [1 => 'NO APLICA'];
            $this->opciones['localida'] = [22 => 'NO APLICA'];
            $this->opciones['upzxxxxx'] = [134 => 'NO APLICA'];
            $this->opciones['barrioxx'] = [1 => 'NO APLICA'];
            $this->opciones['tiporesi'] = Tema::combo(145, true, false);
        } else {
            $this->opciones['tiporesi'] = Tema::combo(34, true, false);
        }

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo

        $this->opciones['condsele'] = CsdResideambiente::getCondicionAbiente(0);
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            if ($dataxxxx['modeloxx']->i_prm_zona_direccion_id == 289) {
                $this->opciones['dircondi'] = [1 => 'NO APLICA'];
                $this->opciones['cuadrant'] = [1 => 'NO APLICA'];
                $this->opciones['alfabeto'] = [1 => 'NO APLICA'];
                $this->opciones['tpviapal'] = [1 => 'NO APLICA'];
            }

            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            if ($dataxxxx['padrexxx']->prm_tipoblaci_id != 650) {
                $dataxxxx['modeloxx']->sis_localidad_id=$dataxxxx['modeloxx']->sis_barrio->sis_localupz->sis_localidad_id;
                $this->opciones['upzxxxxx'] = SisUpz::combo($dataxxxx['modeloxx']->sis_localidad_id, false);
                $dataxxxx['modeloxx']->sis_upz_id=$dataxxxx['modeloxx']->sis_barrio->sis_localupz_id;
                $this->opciones['barrioxx'] = SisBarrio::combo($dataxxxx['modeloxx']->sis_upz_id, false);
                $this->opciones['condsele'] = CsdResideambiente::getCondicionAbiente($dataxxxx['modeloxx']->id);
            }
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
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
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        $modeloxx = CsdResidencia::transaccion($dataxxxx,  $objetoxx);
        return redirect()
            ->route('fi.residencia.editar', [$modeloxx->sis_nnaj->fi_datos_basico->id,  $modeloxx->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Csd $padrexxx, CsdResidenciaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Datos de residencia creados con exito', $padrexxx);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdResidencia $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * * @param    $nnajregi
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx,  CsdResidencia $modeloxx)
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
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdResidenciaEditarRequest $request,  Csd $padrexxx, CsdResidencia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Datos de residencia actualizados con exito', $padrexxx);
    }
}
