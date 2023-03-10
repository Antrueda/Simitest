<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\AISalidaMenorRequest;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\consulta\Csd;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\Sistema\SisDepen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Acciones\SalidaTrait;
use App\Traits\Combos\CombosTrait;

class AISalidaMenoresController extends Controller
{
    use SalidaTrait;
    use CombosTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aisalidamenores';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL';
        $this->opciones['routxxxx'] = 'aisalidamenores';
        $this->opciones['slotxxxx'] = 'aisalidamenores';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['carpetax'] = 'Individuales.SalidaMenores';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['condicio'] = Tema::comboAsc(23, true, false);
        $this->opciones['condicix'] = Tema::comboAsc(25, true, false);
        $this->opciones['ampmxxxx'] = Tema::comboAsc(5, true, false);
        $this->opciones['objetivo'] = Tema::comboAsc(307, false, false);
        $this->opciones['tipodocu'] = Tema::comboAsc(361,true, false);
        $this->opciones['parentez'] = Tema::comboAsc(66,true, false);
        $this->opciones['condixxx'] = Tema::comboAsc(308, false, false);





        $this->opciones['estrateg'] = ['' => 'Seleccione'];

        $this->opciones['tituloxx'] = "SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A SALIDAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'REGISTRAR NUEVA SALIDA',
                'titulist' => 'LISTA DE SALIDAS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' =>  (isset($this->opciones['usuariox']) && $this->opciones['usuariox']->nnaj_nacimi->edad <= 18
                ||$this->opciones['usuariox']->nnaj_nacimi->edad <=19&&$this->opciones['usuariox']->fi_situacion_especials->i_prm_tipo_id==976) ? true : false,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FECHA DE SALIDA', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'OBJETIVO DE LA SALIDA', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO(DÍAS)', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'OBSERVACIÓN', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'FUNCIONARIO(A) / CONTRATISTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                                     ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'ai_salida_menores.id'],
                    ['data' => 'fecha', 'name' => 'ai_salida_menores.fecha'],
                    ['data' => 'upi', 'name' => 'upi.nombre as upi'],
                    ['data' => 'razonesx', 'name' => 'razonesx'],
                    ['data' => 'tiempo', 'name' => 'ai_salida_menores.tiempo'],
                    ['data' => 'causa', 'name' => 'ai_salida_menores.causa'],
                    ['data' => 'nombre', 'name' => 'users.name as nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$padrexxx->id],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListado(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {

            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->razonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.razonesx';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getSalidas($request);
        }
    }
    public function getNnajVisitados(Request $request, Csd $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getVisitados($request);
        }
    }

    private function grabar($dataxxxx)
    {
        $usuariox = AiSalidaMenores::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id, $usuariox->id])
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
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablatodos']
            ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $dataxxxx['padrexxx']->s_primer_nombre;
        $upinnajx=$dataxxxx['padrexxx']->sis_nnaj->UpiPrincipal->sis_depen;
        $this->opciones['dependen'] = [$upinnajx->id=>$upinnajx->nombre];
        $this->opciones['dependez'] = SisDepen::combo(true, false);
        $this->opciones['usuarioz'] = $this->getUpiUsuarios([]); 
        $this->opciones['vercrear'] = false;
        $usersele = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha=explode(' ',$dataxxxx['modeloxx']->fecha)[0];
            $dataxxxx['modeloxx']-> hora_salida= explode(' ',$dataxxxx['modeloxx']-> hora_salida)[1];
            $this->opciones['vercrear'] = true;
            $usersele =$dataxxxx['modeloxx']->responsable;
            $this->opciones['pestpadr'] = 3;

            $dataxxxx['modeloxx']->prm_condicion_id =  $dataxxxx['modeloxx']->condiciones->prm_condicion_id;
            $dataxxxx['modeloxx']->prm_orientado_id =  $dataxxxx['modeloxx']->condiciones->prm_orientado_id;
            $dataxxxx['modeloxx']->prm_enfermerd_id =  $dataxxxx['modeloxx']->condiciones->prm_enfermerd_id;
            $dataxxxx['modeloxx']->prm_brotes_id =  $dataxxxx['modeloxx']->condiciones->prm_brotes_id;
            $dataxxxx['modeloxx']->prm_laceracio_id =  $dataxxxx['modeloxx']->condiciones->prm_laceracio_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $dataxxxx['padrexxx']->sis_nnaj_id],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

            $this->opciones['respoupi']= $this->getResponsableUpiCT(
                [
                    'usersele'=>$usersele,
                    'cargosxx' => [23],
                    'whereinx'=>[$upinnajx->id],
                    'cabecera'=>false,
                ]
            );
           
         
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
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getListodo(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getTodoComFami($request);
        }
    }

    public function create(SisNnaj $padrexxx)
    {
    
        $compofami = FiCompfami::select('sis_nnajnnaj_id')->where('sis_nnajnnaj_id', $padrexxx->id)->where('prm_reprlega_id',227)->first();
        if ($compofami==null) {
            return redirect()
                ->route('ficomposicion', [$padrexxx->fi_datos_basico->id])
                ->with('info', 'No hay un componente familiar mayor de edad, por favor créelo');
        }
        $this->opciones['rutaxxxx'] = route('aisalidamenores.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }
    public function store(AISalidaMenorRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Salida creada con éxito', 'modeloxx' => '', 'padrexxx' => $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(SisNnaj $padrexxx, AiSalidaMenores $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(SisNnaj $padrexxx, AiSalidaMenores $modeloxx)
    {
        if(Auth::user()->id==$modeloxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id, $modeloxx->id]],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
                }
            }else{
                $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
            }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $padrexxx
     * @return \Illuminate\Http\Response
     */
    public function update(AISalidaMenorRequest $request, SisNnaj $padrexxx,  AiSalidaMenores $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Salida actualizada con éxito', 'modeloxx' => $modeloxx, 'padrexxx' => $padrexxx]);
    }

    public function inactivate(SisNnaj $padrexxx,AiSalidaMenores $modeloxx)
    {
        
             if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'], 'padrexxx'=>$padrexxx->fi_datos_basico]);
    }


    public function destroy(SisNnaj $padrexxx, AiSalidaMenores $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
        ->route('aisalidamenores', [$padrexxx->id])
        ->with('info', 'Salida inactivada correctamente');
    }

    public function cargos(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = ['comboxxx' => [], 'campoxxx' => '', 'cargoxxx' => '', 'campcarg' => ''];
            switch ($dataxxxx['campoxxx']) {
                case 'userr_id':
                    $respuest['campcarg'] = '#s_cargo_responsable';
                    $respuest['campoxxx'] = '#sis_depend_id';
                    $dependen=SisDepen::find($dataxxxx['valuexxx']);
                    $usuarioz =$dependen->NnajUpi;
                    $respuest['comboxxx'] = $usuarioz[0];
                    $respuest['cargoxxx'] = $usuarioz[1];
                    break;
            }

            return response()->json($respuest);
        }
    }
}
