<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdCompfamiCrearRequest;
use App\Http\Requests\Csd\CsdCompfamiEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComfamob;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use App\Traits\Fi\DatosBasicosTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CsdCompfamiController extends Controller
{
    ///

    private $opciones = ['botoform' => []];
    use CsdTrait;
    use DatosBasicosTrait;
    use PuedeTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdcomfamiliar';
        $this->opciones['routxxxx'] = 'csdcomfamiliar';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Composicion';
        $this->opciones['slotxxxx'] = 'csdcomfamirobserva';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['tipodocu'] = Tema::comboAsc(3, true, false);
        $this->opciones['estafili'] = Tema::comboAsc(21, true, false);
        $this->opciones['condicix'] = Tema::combo(23, true, false);
        $this->opciones['sexoxxxx'] = Tema::comboAsc(11, true, false);
        $this->opciones['generoxx'] = Tema::comboAsc(12, true, false);
        $this->opciones['orexualx'] = Tema::comboAsc(13, true, false);
        $this->opciones['aprobado'] = Tema::comboAsc(154, true, false);
        $this->opciones['discapac'] = Tema::comboAsc(24, true, false);
        $this->opciones['educacio'] = Tema::comboAsc(153, true, false);
        $this->opciones['estadciv'] = Tema::comboAsc(19, true, false);
        // $this->opciones['parentes'] = Tema::comboAsc(66, true, false);
        $this->opciones['grupoetn'] = Tema::comboAsc(20, true, false);
        $this->opciones['ocupacio'] = Tema::comboAsc(294, true, false);
        $this->opciones['vinculax'] = Tema::comboAsc(287, true, false);
        $this->opciones['vinculaz'] = Tema::comboAsc(287, true, false);
        $this->opciones['sexoxxxx'] = Tema::comboAsc(11, true, false);
        $this->opciones['parentes'] = Tema::comboAsc(358, true, false);
        $this->opciones['tipotele'] = Tema::comboAsc(44, true, false);
        $this->opciones['vinculad'] = Tema::comboAsc(287, true, false);
        $this->opciones['convivex'] = Tema::comboAsc(23, true, false);
        $this->opciones['reprlega'] = Tema::combo(23, true, false);
        $this->opciones['ocupacio'] = Tema::comboAsc(156, true, false);
        $this->opciones['nsnoresp'] = Tema::comboAsc(26, true, false);
        $this->opciones['educacio'] = Tema::comboAsc(153, true, false);
        $this->opciones['convenci'] = Tema::comboAsc(287, true, false);
        $this->opciones['entid_id'] = ['' => 'Seleccione'];
        $this->opciones['observac'] = 'csdcomfamirobserva.nuevo';

        $this->opciones['nacicomp'] = '';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['observac'], []],
                'formhref' => 2, 'tituloxx' => "VOLVER A COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR", 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(CsdSisNnaj $padrexxx)
    {
        
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        /** informacion que se va a mostrar en la vista */
        // $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['pestpara'][0] = [$padrexxx->id];
        $this->opciones['usuariox'] = $padrexxx->sis_nnaj->fi_datos_basico;

        if (Auth::user()->s_documento=='17496705') {
            // $compfami = CsdComFamiliar::where('s_documento', $dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento)
            // ->first();
            // ddd($padrexxx);
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.componente',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx->sis_nnaj_id, $padrexxx->csd_id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA Y HORA CREA REGISTRO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'USUARIO CREA REGISTRO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA Y HORA EDITA REGISTRO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'USUARIO CREA EDITA REGISTRO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_com_familiars.id'],
                    ['data' => 's_primer_nombre', 'name' => 'csd_com_familiars.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'csd_com_familiars.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'csd_com_familiars.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'csd_com_familiars.s_segundo_apellido'],
                    ['data' => 's_documento', 'name' => 'csd_com_familiars.s_documento'],
                    ['data' => 'created_at', 'name' => 'csd_com_familiars.created_at'],
                    ['data' => 'usercrea', 'name' => 'usercrea.name as usercrea'],
                    ['data' => 'updated_at', 'name' => 'csd_com_familiars.updated_at'],
                    ['data' => 'useredit', 'name' => 'useredit.name as useredit'],

                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],

                ],
                'contviol' => [
                    'observaciones',
                    '7.31 Observaciones'
                ],
                'observar' => 'GUARDAR OBSERVACION',
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['parametr'],
            ],

        ];
        $this->opciones['botoform'][0]['routingx'][1] = $padrexxx->id;
        $this->opciones['accionxx'] = 'index';
        $this->opciones['parametr'] = [$padrexxx->id];
        return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
    }



    public function getListado(Request $request, SisNnaj $padrexxx, Csd $csdxxxxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $csdxxxxx->id;
            $request->datobasi = $padrexxx->id;
            $request->sesionxx = Session::get('csdver_' . Auth::id());
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getCompoFami($request);
        }
    }


    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablatodos']
        ];

        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['pais_idx'] = SisPai::combo(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['aniosxxx'] = '';
        $this->opciones['poblindi'] = Tema::combo(61, true, false);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // ddd($dataxxxx['modeloxx']->prm_cualeps_id);
            if ($dataxxxx['modeloxx']->prm_etnia_id != 157) {
                $this->opciones['poblindi'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_discapacidad_id == 228) {
                $this->opciones['discapac'] = Parametro::find(235)->Combo;
            }


            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['aniosxxx'] = $dataxxxx['modeloxx']->Edad;
            $this->opciones['entid_id'] = SisEntidadSalud::combo($dataxxxx['modeloxx']->prm_regimen_id, true, false);

            if ($dataxxxx['modeloxx']->sisben != '') { //
                $this->opciones['nsnoresp'] = Parametro::find(235)->Combo;
            }
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES PARA ASIGNAR (BUSQUE Y SELECCIONE EL COMPONENTE FAMILIAR)',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listodox', [$this->opciones['csdxxxxx']->id]),
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
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ],
                'tablaxxx' => 'compfami',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['parametr'],
            ],

        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    // public function getListodo(Request $request, CsdSisNnaj $padrexxx)
    public function getListodo(Request $request, CsdSisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            // $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->request->add([
                'padrexxx' => $padrexxx,
                'datobasi' => $padrexxx->id,
                'csdxxxxx' => $padrexxx->csd_id,
                'routexxx' => [$this->opciones['routxxxx']],
                'botonesx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.todoxxxx',
                'estadoxx' => 'layouts.components.botones.estadosx'
            ]);

            return $this->getTodoComFami($request);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {
        $dataxxxx['requestx']->request->add(['tipoacci' => 4]);
        $dataxxxx['requestx']->request->add(['prm_peso_dos_id' => 235]);
        $usuariox = $this->getTransaccion($dataxxxx);
        return redirect()->route('csdcomfamiliar.editar', [
            $dataxxxx['padrexxx']->id,
            $usuariox->id
        ])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CsdCompfamiCrearRequest $request, CsdSisNnaj $padrexxx)
    {

        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->grabar(['requestx' => $request, 'objetoxx' => '', 'infoxxxx' => 'Composicion familiar creada con éxito', 'padrexxx' => $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiCompfami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $value = Session::get('csdver_' . Auth::id());
        if (!$value) {
            return redirect()
                ->route($this->opciones['permisox'] . '.ver', [$padrexxx->id, $modeloxx->id]);
        }
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (Auth::user()->id == $padrexxx->user_crea_id || User::userAdmin()) {
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        } else {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdCompfamiEditarRequest $request, CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        return $this->grabar(['requestx' => $request, 'objetoxx' => $modeloxx, 'infoxxxx' => 'Composicion familiar actualizada con éxito', 'padrexxx' => $padrexxx]);
    }

    public function inactivate(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx]);
    }
    public function destroy(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', 'Componenete familiar inactivado correctamente');
    }


    public function storeObservaciones(Request $request, CsdSisNnaj $padrexxx)
    {
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->grabarObservacion(['requestx' => $request, 'objetoxx' => '', 'infoxxxx' => 'Observacion creada con éxito', 'padrexxx' => $padrexxx]);;
    }

    private function grabarObservacion($dataxxxx)
    {
        $usuariox = CsdComfamob::getTransaccion($dataxxxx);
        return redirect()
            ->route('csdcomfamiliar', [$dataxxxx['padrexxx']->id, $usuariox->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function updateObservaciones(Request $request, CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        $request->request->add(['csd_id' => $padrexxx->csd_id]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        return $this->grabar(['requestx' => $request, 'objetoxx' => $modeloxx, 'infoxxxx' => 'Observacion actualizada con éxito', 'padrexxx' => $padrexxx]);
    }
}
