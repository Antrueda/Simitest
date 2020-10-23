<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdCompfamiCrearRequest;
use App\Http\Requests\Csd\CsdCompfamiEditarRequest;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdCompfamiController extends Controller
{

    private $opciones;
    use CsdTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdcomfamiliar';
        $this->opciones['routxxxx'] = 'csdcomfamiliar';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Composicion';
        $this->opciones['slotxxxx'] = 'csdcomfamiliar';
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
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['estafili'] = Tema::combo(21, true, false);
        $this->opciones['condicix'] = Tema::combo(23, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orexualx'] = Tema::combo(13, true, false);
        $this->opciones['aprobado'] = Tema::combo(154, true, false);
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['discapac'] = Tema::combo(24, true, false);
        $this->opciones['educacio'] = Tema::combo(153, true, false);
        $this->opciones['estadciv'] = Tema::combo(19, true, false);
        $this->opciones['parentes'] = Tema::combo(66, true, false);
        $this->opciones['grupoetn'] = Tema::combo(20, true, false);
        $this->opciones['ocupacio'] = Tema::combo(294, true, false);
        $this->opciones['vinculax'] = Tema::combo(287, true, false);
        $this->opciones['vinculaz'] = Tema::combo(287, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['parentes'] = Tema::combo(358, true, false);
        $this->opciones['tipotele'] = Tema::combo(44, true, false);
        $this->opciones['vinculad'] = Tema::combo(287, true, false);
        $this->opciones['convivex'] = Tema::combo(23, true, false);
        $this->opciones['reprlega'] = Tema::combo(23, true, false);
        $this->opciones['ocupacio'] = Tema::combo(156, true, false);
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['discapac'] = Tema::combo(24, true, false);
        $this->opciones['nsnoresp'] = Tema::combo(26, true, false);
        $this->opciones['educacio'] = Tema::combo(153, true, false);
        $this->opciones['entid_id'] = ['' => 'Seleccione'];

        $this->opciones['nacicomp'] = '';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
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
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['pestpara'][0] = [$padrexxx->id];
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_compfamis.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['parametr'],
            ],

        ];
        $this->opciones['accionxx'] = 'index';
        $this->opciones['usuariox'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getListado(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getCompoFami($request);
        }
    }
    public function getListodo(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getTodoComFami($request);
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
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['aniosxxx'] = '';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $datosbas = $dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico;
            $dataxxxx['modeloxx']->s_primer_apellido = $datosbas->s_primer_apellido;
            $dataxxxx['modeloxx']->s_segundo_apellido = $datosbas->s_segundo_apellido;
            $dataxxxx['modeloxx']->s_primer_nombre = $datosbas->s_primer_nombre;
            $dataxxxx['modeloxx']->s_segundo_nombre = $datosbas->s_segundo_nombre;
            $dataxxxx['modeloxx']->s_documento = $datosbas->nnaj_docu->s_documento;
            $dataxxxx['modeloxx']->prm_tipodocu_id = $datosbas->nnaj_docu->tipoDocumento->id;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $dataxxxx['modeloxx']->aniosxxx=$datosbas->nnaj_nacimi->Edad;
            $dataxxxx['modeloxx']->sis_pai_id = $datosbas->nnaj_docu->sis_municipio->sis_departamento->sis_pai_id;

            $this->opciones['departam'] = SisDepartamento::combo($dataxxxx['modeloxx']->sis_pai_id, false);
            $dataxxxx['modeloxx']->sis_departamento_id = $datosbas->nnaj_docu->sis_municipio->sis_departamento_id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_departamento_id, false);
            $this->opciones['entid_id'] = SisEntidadSalud::combo($dataxxxx['modeloxx']->prm_regimen_id, true, false);
            if ($dataxxxx['modeloxx']->sis_pai_id != 2) {
                $this->opciones['municipi'] = $this->opciones['departam'] = [1 => 'NO APLICA'];
            }
            $this->opciones['poblindi'] = Tema::combo(61, true, false);
            if ($this->opciones['modeloxx']->prm_grupo_etnico_id != 157) {
                $this->opciones['poblindi'] =  [1269 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->prm_regimen_id == 168) {
                $this->opciones['entid_id'] = [1 => 'NO APLICA'];
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
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
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
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        $dataxxxx['sis_nnajnnaj_id'] = $padrexxx->sis_nnaj_id;
        return redirect()
            ->route('csdcomfamiliar.editar', [$padrexxx->id, CsdComFamiliar::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CsdCompfamiCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Composicion familiar creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiCompfami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,CsdComFamiliar $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx->csd;
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
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdCompfamiEditarRequest $request, CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Composicion familiar actualizada con exito', $padrexxx);
    }

    public function inactivate(CsdSisNnaj $padrexxx, CsdComFamiliar $modeloxx)
    {
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


}
