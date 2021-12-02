<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\AIEvasionesRequest;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\Pivotes\EvasionParentesco;
use App\Models\consulta\Csd;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Acciones\SalidaTrait;

class AIEvasionController extends Controller
{
    use SalidaTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aievasion';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'REPORTE DE EVASIÓN';
        $this->opciones['routxxxx'] = 'aievasion';
        $this->opciones['slotxxxx'] = 'aievasion';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['carpetax'] = 'Individuales.Evasion';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['condicio'] = Tema::comboAsc(23, true, false);
        $this->opciones['contextu'] = Tema::comboAsc(273, true, false);
        $this->opciones['rostroxx'] = Tema::comboAsc(274, true, false);
        $this->opciones['pielxxxx'] = Tema::comboAsc(275, true, false);
        $this->opciones['cabellox'] = Tema::comboAsc(276,true, false);
        $this->opciones['cabelloz'] = Tema::comboAsc(277,true, false);
        $this->opciones['cabelloy'] = Tema::comboAsc(278,true, false);
        $this->opciones['ojosxxxx'] = Tema::comboAsc(279,true, false);
        $this->opciones['narizxxx'] = Tema::comboAsc(280,true, false);
        $this->opciones['tamanoxx'] = Tema::comboAsc(281,true, false);
        $this->opciones['prendaxx'] = Tema::comboAsc(304,true, false);
        $this->opciones['parentez'] = Tema::comboAsc(66,true, false);
        $this->opciones['atencion'] = Tema::comboAsc(306, true, false);


        $this->opciones['estrateg'] = ['' => 'Seleccione'];

        $this->opciones['tituloxx'] = "REPORTE DE EVASIÓN";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A EVASIONES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'REGISTRAR NUEVO REPORTE DE EVASIÓN',
                'titulist' => 'LISTA DE EVASIONES',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE EVASIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'HORA DE EVASIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'LUGAR DE EVASIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],

                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'ai_reporte_evasions.id'],
                    ['data' => 'fecha_evasion', 'name' => 'ai_reporte_evasions.fecha_evasion'],
                    ['data' => 'hora_evasion', 'name' => 'ai_reporte_evasions.hora_evasion'],
                    ['data' => 'lugar_evasion', 'name' => 'ai_reporte_evasions.lugar_evasion'],
                    ['data' => 'upi', 'name' => 'upi.nombre as upi'],
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
            return $this->getEvasion($request);
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
        $usuariox = AiReporteEvasion::transaccion($dataxxxx);
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
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
            ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['usuarios'] = User::getUsuario(false, false);

        $departam=0;

        $upinnajx=$dataxxxx['padrexxx']->sis_nnaj->UpiPrincipal->sis_depen;
        
        $this->opciones['dependen'] = [$upinnajx->id=>$upinnajx->nombre];
        
        $this->opciones['respoupi'] = $dataxxxx['padrexxx']->sis_nnaj->Responsable[0];
        $this->opciones['depended'] = $upinnajx->id=$upinnajx->s_direccion;
        $this->opciones['dependet'] = $upinnajx->id=$upinnajx->s_telefono ;
        $this->opciones['dependex']= SisDepen::orderBy('nombre')->get();

        $this->opciones['usuarioz'] = User::comboCargo(true, false);


        $this->opciones['vercrear'] = false;
        $this->opciones['archivox']='';
        $parametr = 0;
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha_diligenciamiento=explode(' ',$dataxxxx['modeloxx']->fecha_diligenciamiento)[0];
            $dataxxxx['modeloxx']->fecha_evasion=explode(' ',$dataxxxx['modeloxx']->fecha_evasion)[0];
            $dataxxxx['modeloxx']-> hora_evasion= explode(' ',$dataxxxx['modeloxx']-> hora_evasion)[1];
            if($dataxxxx['modeloxx']-> hora_denuncia!=''){
                $dataxxxx['modeloxx']-> hora_denuncia= explode(' ',$dataxxxx['modeloxx']-> hora_denuncia)[1];
                $dataxxxx['modeloxx']->fecha_denuncia=explode(' ',$dataxxxx['modeloxx']->fecha_denuncia)[0];
            }

            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $this->opciones['archivox'] = $value;
            }
            $this->opciones['vercrear'] = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;

            $departam=$dataxxxx['modeloxx']->municipio->sis_departam_id;

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
            $parametr = $dataxxxx['modeloxx']->id;
            $vercrear = true;
        }
        $familiar = EvasionParentesco::where('reporte_evasion_id',$parametr)->get();
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'AGREGAR VESTUARIO',
                'titulist' => 'LISTA DE VESTUARIO',
                'pregunta' => 'Vestuario: (Detallar ampliamente el vestuario (prendas y colores, accesorios) que lleva el Niño, Niña o Adolescente en el momento de la evasión)',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.residenciacsd',
                'vercrear' => $vercrear,
                'urlxxxxx' => route('evasionves.otracosa', [$parametr]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRENDA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MATERIAL', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'COLOR', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'evasion_vestuarios.id'],
                    ['data' => 'vestuario', 'name' => 'vestuario.nombre as vestuario '],
                    ['data' => 'material', 'name' => 'evasion_vestuarios.material '],
                    ['data' => 'color', 'name' => 'evasion_vestuarios.color'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableves',
                'permisox' => 'evasionves',
                'routxxxx' => 'evasionves',
                'parametr' => [$parametr],
            ],
            [

                'titunuev' => 'AGREGAR FAMILIAR',
                'titulist' => 'LISTA DE FAMILIARES',
                'pregunta' => 'DATOS FAMILIARES (De acuerdo a ficha de ingreso)',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.residenciacsd',
                'vercrear' => ($vercrear && count($familiar) <= 1 )? true : false,
                'urlxxxxx' => route('evasionpar.listaxxx', [$parametr]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PARENTESCO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DIRECCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TELÉFONO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'evasion_parentescos.id'],
                    ['data' => 'parentesco', 'name' => 'parentesco.nombre as parentesco '],
                    ['data' => 'primer_nombre', 'name' => 'evasion_parentescos.primer_nombre '],
                    ['data' => 'segundo_nombre', 'name' => 'evasion_parentescos.segundo_nombre'],
                    ['data' => 'primer_apellido', 'name' => 'evasion_parentescos.primer_apellido'],
                    ['data' => 'segundo_apellido', 'name' => 'evasion_parentescos.segundo_apellido'],
                    ['data' => 'direccion_familiar', 'name' => 'evasion_parentescos.direccion_familiar'],
                    ['data' => 's_telefono', 'name' => 'evasion_parentescos.s_telefono'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'evasionpar',
                'routxxxx' => 'evasionpar',
                'parametr' => [$parametr],
            ],
        ];
        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartam::combo(2, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {
        $this->opciones['rutaxxxx'] = route('aievasion.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }
    public function store(AIEvasionesRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Evasión creada con éxito', 'modeloxx' => '', 'padrexxx' => $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(SisNnaj $padrexxx, AiReporteEvasion $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(SisNnaj $padrexxx, AiReporteEvasion $modeloxx)
    {
        //ddd( $modeloxx);
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
    public function update(AIEvasionesRequest $request, SisNnaj $padrexxx,  AiReporteEvasion $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Evasión actualizada con éxito', 'modeloxx' => $modeloxx, 'padrexxx' => $padrexxx]);
    }

    public function inactivate(SisNnaj $padrexxx,AiReporteEvasion $modeloxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'], 'padrexxx'=>$padrexxx->fi_datos_basico]);
    }


    public function destroy(SisNnaj $padrexxx, AiReporteEvasion $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
        ->route('aievasion', [$padrexxx->id])
        ->with('info', 'Evasión inactivada correctamente');
    }


}
