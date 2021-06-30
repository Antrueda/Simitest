<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdBasicoCrearRequest;
use App\Http\Requests\Csd\CsdBasicoEditarRequest;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;
use App\Traits\Fi\DatosBasicosTrait;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdBasicoController extends Controller
{
    use DatosBasicosTrait;
    use CsdTrait;
    use PuedeTrait;
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

        $this->opciones['tituloxx'] = "DATOS BÁSICOS (De quién brinda la información – Debe ser mayor de edad)";
    }
    private function grabar($dataxxxx)
    {
        $dataxxxx['requestx']->request->add(['tipoacci' => 3]);
        $usuariox = $this->getTransaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id, $usuariox['objetoxx']->id])
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
        $this->opciones['neciayud'] = Tema::comboAsc(23, false, false);
        $this->opciones['docufisi'] = Tema::combo(23, true, false);
        $this->opciones['situdefi'] = Tema::combo(23, true, false);
        $this->opciones['sindocum'] = Tema::comboAsc(286, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['generoxx'] = Tema::comboAsc(12, true, false);
        $this->opciones['orientax'] = Tema::comboAsc(13, true, false);
        $this->opciones['gruposax'] = Tema::combo(17, true, false);
        $this->opciones['rhxxxxxx'] = Tema::combo(18, true, false);
        $this->opciones['libretax'] = Tema::comboAsc(33, true, false);
        $this->opciones['estacivi'] = Tema::comboAsc(19, true, false);
        $this->opciones['grupetni'] = Tema::comboAsc(20, true, false);
        $this->opciones['grupindi'] = Tema::comboAsc(61, true, false);
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];

        $this->opciones['tipoblac'] = Tema::combo(359, true, false);
        $this->opciones['paisxxxx'] = SisPai::combo(true, false);
        $this->opciones['localida'] = SisLocalidad::combo();
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablatodos']
        ];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;

        $sispaisx=0;
        $sispaexp=0;
        $departam=0;
        $deparexp=0;

        if ($dataxxxx['modeloxx'] != '') {

            if ($dataxxxx['modeloxx']->prm_etnia_id != 157) {
                $this->opciones['grupindi'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_doc_fisico_id == 227) {
                $this->opciones['sindocum'] = Parametro::find(235)->Combo;
            }

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $sispaisx=$dataxxxx['modeloxx']->sis_pai_id;
            $sispaexp=$dataxxxx['modeloxx']->sis_paiexp_id;
            $departam=$dataxxxx['modeloxx']->sis_departam_id;
            $deparexp=$dataxxxx['modeloxx']->sis_departamexp_id;

        }

            $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
            $this->opciones['departam'] = SisDepartam::combo($sispaisx, false);
            $this->opciones['municexp'] = SisMunicipio::combo($deparexp, false);
            $this->opciones['deparexp'] = SisDepartam::combo($sispaexp, false);
            $this->opciones['tablasxx'] = [
                [
                    'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                    'titulist' => 'REPRESENTANTE LEGAL',
                    'dataxxxx' => [],
                    'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'vercrear' => false,
                    'urlxxxxx' => route($this->opciones['routxxxx'] . '.listodox', $this->opciones['parametr']),
                    'cabecera' => [
                        [
                            // ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA NACIMIENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ],
                    ],
                    'columnsx' => [
                        // ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'fi_compfamis.id'],
                        ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                        ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
                        ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                        ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                        ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                        ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ],
    
                    'tablaxxx' => 'datatable',
                    'permisox' => $this->opciones['permisox'],
                    'routxxxx' => $this->opciones['routxxxx'],
                    'parametr' => $this->opciones['parametr'],
                ],
    
            ];
            // Se arma el titulo de acuerdo al array opciones
      
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getListodo(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->sis_nnaj_id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getTodoComFamilia($request);
        }
    }
    public function create(CsdSisNnaj $padrexxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    public function store(CsdBasicoCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['user_crea_id' => Auth::user()->id]);
        $request->request->add(['user_edita_id' => Auth::user()->id]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Consulta creada con éxito', 'objetoxx' => '', 'padrexxx' => $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CsdDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdDatosBasico $modeloxx)
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
    public function edit(CsdSisNnaj $padrexxx, CsdDatosBasico $modeloxx)
    {
        
        $this->opciones['csdxxxxx'] = $padrexxx;
        if(Auth::user()->id==$modeloxx->user_crea_id){
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            }
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
    public function update(CsdBasicoEditarRequest $request, CsdSisNnaj $padrexxx, CsdDatosBasico $modeloxx)
    {
        $request->request->add(['user_edita_id' => Auth::user()->id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Datos básicos actualizados con éxito', 'objetoxx' => $modeloxx, 'padrexxx' => $padrexxx]);
    }
}
