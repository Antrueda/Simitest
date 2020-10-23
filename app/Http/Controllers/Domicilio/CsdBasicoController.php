<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdBasicoCrearRequest;
use App\Http\Requests\Csd\CsdBasicoEditarRequest;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use Carbon\Carbon;

class CsdBasicoController extends Controller
{

    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'csdatbas';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['routxxxx'] = 'csdatbas';
        $this->opciones['slotxxxx'] = 'csdatbas';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Basico';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->opciones['estrateg'] = ['' => 'Seleccione'];

        $this->opciones['tituloxx'] = "INFORMACI{$this->opciones['vocalesx'][3]}N";
    }
    private function grabar($dataxxxx)
    {
        $usuariox = CsdDatosBasico::getTransactionCsd($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id,$usuariox->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['document'] = Tema::combo(361, true, false);
        $this->opciones['neciayud'] = Tema::combo(23, false, false);
        $this->opciones['docufisi'] = Tema::combo(23, false, false);
        $this->opciones['situdefi'] = Tema::combo(23, false, false);
        $this->opciones['sindocum'] = Tema::combo(286, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientax'] = Tema::combo(13, true, false);
        $this->opciones['gruposax'] = Tema::combo(17, true, false);
        $this->opciones['rhxxxxxx'] = Tema::combo(18, true, false);
        $this->opciones['libretax'] = Tema::combo(33, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);
        $this->opciones['grupetni'] = Tema::combo(20, true, false);
        $this->opciones['grupindi'] = Tema::combo(61, true, false);
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];

        $this->opciones['tipoblac'] = Tema::combo(359, true, false);
        $this->opciones['paisxxxx'] = SisPai::combo(true, false);
        $this->opciones['localida'] = SisLocalidad::combo();
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $localida = 0;
        $paisxxxx = $localida;
        $paisexpe = $localida;
        $departam = $localida;
        $depaexpe = $localida;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        if ($dataxxxx['modeloxx'] != '') {
            if ($dataxxxx['modeloxx']->nnaj_fi_csd->prm_etnia_id != 157) {
                $this->opciones['grupindi'] = Parametro::find(1269)->Combo;
            }

            $this->opciones['parametr'][1] =$dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            $dataxxxx['modeloxx']->prm_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_etnia_id;
            $dataxxxx['modeloxx']->prm_poblacion_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_poblacion_etnia_id;
            $dataxxxx['modeloxx']->prm_gsanguino_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_gsanguino_id;
            $dataxxxx['modeloxx']->prm_factor_rh_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_factor_rh_id;
            $dataxxxx['modeloxx']->prm_estado_civil_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_estado_civil_id;

            /** orientacion sexual */
            $dataxxxx['modeloxx']->s_nombre_identitario = $dataxxxx['modeloxx']->nnaj_sexo->s_nombre_identitario;
            $dataxxxx['modeloxx']->prm_sexo_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_sexo_id;
            $dataxxxx['modeloxx']->prm_identidad_genero_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_identidad_genero_id;
            $dataxxxx['modeloxx']->prm_orientacion_sexual_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_orientacion_sexual_id;

            // /** Nacimiento */

            $dataxxxx['modeloxx']->d_nacimiento = $dataxxxx['modeloxx']->nnaj_nacimi->d_nacimiento;
            $dataxxxx['modeloxx']->aniosxxx = $dataxxxx['modeloxx']->nnaj_nacimi->Edad;
            $dataxxxx['modeloxx']->sis_pai_id = $paisxxxx = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departamento->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departamento_id = $departam = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departamento_id;

            /** documento de identidad */
            $dataxxxx['modeloxx']->s_documento = $dataxxxx['modeloxx']->nnaj_docu->s_documento;

            $dataxxxx['modeloxx']->prm_ayuda_id = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
            $dataxxxx['modeloxx']->prm_tipodocu_id = $dataxxxx['modeloxx']->nnaj_docu->prm_tipodocu_id;
            $dataxxxx['modeloxx']->prm_doc_fisico_id = $dataxxxx['modeloxx']->nnaj_docu->prm_doc_fisico_id;

            $dataxxxx['modeloxx']->sis_paiexp_id = $paisexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departamento->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departamentoexp_id = $depaexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departamento_id;
            $dataxxxx['modeloxx']->sis_municipioexp_id = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio_id;

            /** situacion militar */
            $dataxxxx['modeloxx']->prm_situacion_militar_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_situacion_militar_id;
            $dataxxxx['modeloxx']->prm_clase_libreta_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_clase_libreta_id;

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        }
        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartamento::combo($paisxxxx, false);
        $this->opciones['municexp'] = SisMunicipio::combo($depaexpe, false);
        $this->opciones['deparexp'] = SisDepartamento::combo($paisexpe, false);


        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(CsdSisNnaj $padrexxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    public function store(CsdBasicoCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Consulta creada con exito', 'modeloxx' => '','padrexxx'=>$padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CsdDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx,CsdDatosBasico $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.ver', $modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CsdDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,CsdDatosBasico $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $padrexxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdBasicoEditarRequest $request, CsdSisNnaj $padrexxx,CsdDatosBasico $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Datos básicos actualizados con exito', 'modeloxx' => $modeloxx,'padrexxx'=>$padrexxx]);
    }
}
