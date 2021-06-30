<?php

namespace App\Http\Controllers\FichaObservacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosDatosBasicoCrearRequest;
use App\Http\Requests\FichaObservacion\FosDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosTse;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisNnaj;
use App\Traits\Fos\FosTrait;
use Carbon\Carbon;

class FosController extends Controller
{
    use FosTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'fosfichaobservacion';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'FICHA DE OBSERVACIÓN Y/O SEGUIMIENTO';
        $this->opciones['routxxxx'] = 'fosfichaobservacion';
        $this->opciones['slotxxxx'] = 'fosfichaobservacion';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Fos.';
        $this->opciones['carpetax'] = 'Fos';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';


        $this->opciones['estrateg'] = ['' => 'Seleccione'];

        $this->opciones['tituloxx'] = "FICHA DE OBSERVACIÓN Y/O SEGUIMIENTO";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.indexfos', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A FOS NNAJ', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    /**
     * vista de los nnajs que tienen o se le va crear FOS
     *
     * @return void
     */
    public function index()
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO NNAJ',
                'titulist' => 'LISTA DE NNAJ',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', []),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEXO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE NACIMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI/DEPENDENCIA-SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'tipodocumento', 'name' => 'tipodocumento.nombre as tipodocumento'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 'sexoss', 'name' => 'sexos.nombre as sexoss'],
                    ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
                    ['data' => 'upiservicio', 'name' => 'upiservicio'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * listado de nnajs para la FOS
     *
     * @param Request $request
     * @return void
     */
    public function getListado(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->upiservicio = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.upiservicio';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getNnajs($request);
        }
    }

    /**
     * vista de las fos que tiene el nnaj
     *
     * @return void
     */


    public function indexFos(FiDatosBasico $padrexxx)
    {
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['slotxxxx'] = 'fosxxxxx';
        $this->opciones['usuariox'] = $padrexxx;

        $this->opciones['parametr'] = [$padrexxx->sis_nnaj_id];
        $this->opciones['pestpara'][0] = [$padrexxx->sis_nnaj_id];
        $this->opciones['pestpadr'] = 2;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA FICHA DE OBSERVACIÓN',
                'titulist' => 'LISTA DE FICHA DE OBSERVACIÓN',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listafos',  $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI / Dependencia:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Área / Contexto Pedagógico:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Tipo de Seguimiento:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Sub-Tipo de Seguimiento:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Observación y/o Seguimiento:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Fecha Diligenciamiento:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Funcionario (a)/ Contratista que Realiza el Seguimiento', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fos_datos_basicos.id'],
                    ['data' => 'upi', 'name' => 'upi.nombre as upi'],
                    ['data' => 'areas', 'name' => 'fos_datos_basicos.area_id'],
                    ['data' => 'seguimiento', 'name' => 'seguimiento.nombre as seguimiento'],
                    ['data' => 'subseguimiento', 'name' => 'subseguimiento.nombre as subseguimiento'],
                    ['data' => 's_observacion', 'name' => 'fos_datos_basicos.s_observacion'],
                    ['data' => 'd_fecha_diligencia', 'name' => 'fos_datos_basicos.d_fecha_diligencia'],
                    ['data' => 'name', 'name' => 'users.name'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['parametr'],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['parametr'] = [$padrexxx->id];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListaFos(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesfos';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getFosDiligenciado($request);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['slotxxxx'] = 'fosxxxxx';
        $this->opciones['pestpadr'] = 2;
        $this->opciones['entidadx'] = SisEntidad::combo(true, false);
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
            ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['seguixxx'] = ['' => 'Seleccione'];
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['tipsegui'] = ['' => 'Seleccione'];
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id',$dataxxxx['padrexxx']->id)->first();
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";
        $this->opciones['usuarios'] = User::getUsuario(false, false);
        $dataxxxx['padrexxx']->fi_datos_basico->nnaj_nacimi->Edad;

        $this->opciones['compfami'] = FiCompfami::getResponsableFos($dataxxxx['padrexxx']->fi_datos_basico, true, false);
        $this->opciones['botoform'][0]['routingx'][1] = $this->opciones['parametr'];
        //$upinnajx=$dataxxxx['padrexxx']->UpiPrincipal;
      //  $this->opciones['dependen'] = [$upinnajx->id=>$upinnajx->nombre];

        $this->opciones['dependen'] = NnajUpi::getDependenciasNnajUsuario(true,false,$dataxxxx['padrexxx']->id);
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['areacont'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->d_fecha_diligencia=explode(' ',$dataxxxx['modeloxx']->d_fecha_diligencia)[0];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->opciones['seguixxx'] = FosTse::combo($dataxxxx['modeloxx']->area_id, true, false);
            $this->opciones['tipsegui'] = FosSeguimiento::combo([
                'ajaxxxxx' => false,
                'cabecera' => true,
                'seguimie' => $dataxxxx['modeloxx']->fos_tse_id
            ]);;


        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]);
    }

    public function store(FosDatosBasicoCrearRequest $request,SisNnaj $padrexxx)
    {

        $dataxxxx = $request->all();
        $dataxxxx['sis_esta_id']=1;
       return $this->grabar($dataxxxx, '', 'FOS creada con éxito', $padrexxx);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx,$padrexxx)
    {
        $dataxxxx['sis_docfuen_id'] = 2;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->id;
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [ FosDatosBasico::transaccion($dataxxxx, $objetoxx)->id])
         ->with('info', $infoxxxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FosDatosBasico $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->SisNnaj]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FosDatosBasico $modeloxx)
    {

        if(Auth::user()->id==$modeloxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
                }
            }else{
                $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
            }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $modeloxx->SisNnaj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FosDatosBasicoUpdateRequest $request,  FosDatosBasico $modeloxx)
    {

        return $this->grabar($request->all(), $modeloxx, 'FOS actualizada con éxito', $modeloxx->SisNnaj);
    }

    public function inactivate( FosDatosBasico $modeloxx)
    {

        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->SisNnaj]);
    }


    public function destroy(request $request, FosDatosBasico $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'].'.indexfos', [$modeloxx->sis_nnaj_id])
            ->with('info', 'Ficha de observación inactivada correctamente');
    }

    public function municipioajax(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['departam'], true));
        }
    }

    public function getEstrategia(Request $request)
    {
        if ($request->ajax()) {

            $respuest = ['selected' => 'prm_estrateg_id', 'comboxxx' => [['valuexxx' => '', 'optionxx' => 'Seleccione']]];
            switch ($request->padrexxx) {
                case 650:
                    $respuest['comboxxx'] = Tema::combo(355, false, true);
                    break;
                case 651:
                    $respuest['comboxxx'] = Tema::combo(354, true, true);
                    break;
            }

            return response()->json($respuest);
        }
    }

    public function getServicio(Request $request)
    {
        if ($request->ajax()) {

            return response()->json(NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => true, 'padrexxx' => $request->padrexxx]));
        }
    }

    public function getFechaNacimiento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['fechaxxx' => '', 'edadxxxx' => ''];
            if (is_numeric($request->padrexxx) && $request->padrexxx >= 6) {
                $fechaxxx = explode('-', date('Y-m-d'));
                $respuest = ['fechaxxx' => ($fechaxxx[0] - $request->padrexxx) . '-' . $fechaxxx[1] . '-' . $fechaxxx[2], 'edadxxxx' => $request->padrexxx];
            }
            return response()->json($respuest);
        }
    }

    public function obtenerTipoSeguimientos(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            switch ($request->tipoxxxx) {
                case 1:
                    $respuest = [
                        'comboxxx' => FosTse::combo(
                            $request->all()['valuexxx'],
                            true,
                            true
                        ),
                        'campoxxx' => '#fos_tse_id'
                    ];
                    break;
                case 2:
                    $respuest = [
                        'comboxxx' => FosSeguimiento::combo([
                            'ajaxxxxx' => true,
                            'cabecera' => true,
                            'areaxxxx' => $request->all()['valuexx1'],
                            'seguimie' => $request->all()['valuexxx']
                        ]),
                        'campoxxx' => '#fos_stse_id'
                    ];
                    break;
            }
            return response()->json($respuest);
        }
    }
}
