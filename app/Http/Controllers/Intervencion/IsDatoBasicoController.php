<?php

namespace App\Http\Controllers\Intervencion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Intervencion\IsDatosBasicoCrearRequest;
use App\Http\Requests\Intervencion\IsDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\intervencion\IsDatosBasico;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\User;
use App\Models\Tema;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDatoBasicoController extends Controller
{
    use PuedeTrait;
    private $bitacora;
    private $opciones;

    public function __construct()
    {
        $this->bitacora = new IsDatosBasico();

        $this->opciones = [
            'tituloxx' => 'INTERVENCIÓN',
            'rutaxxxx' => 'is.intervencion',
            'routxxxx' => 'is.intervencion',
            'routinde' => 'is',
            'routnuev' => 'is.intervencion',
            'accionxx' => '',
            'volverax' => 'Intervenciones',
            'readonly' => '',
            'carpetax' => 'intervencion',
            'modeloxx' => '',
            'vercrear' => '',
            'nuevoxxx' => 'o Registro',
            'urlxxxxx' => 'api/is/nnajs',
        ];
        $this->opciones['permisox'] = 'isintervencion';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['dispform'] = "none";
        $this->opciones['disptabx'] = "block";


        $this->opciones['areajust'] = Tema::combo(212, true, false);
        $this->opciones['arjustpr'] = Tema::combo(212, true, false); // Tema::findOrFail(97)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        
        $this->opciones['subemoci'] = Tema::combo(162, true, false);
        $this->opciones['subfamil'] = Tema::combo(167, true, false);
        $this->opciones['subsexua'] = Tema::combo(163, true, false);
        $this->opciones['subcompo'] = Tema::combo(164, true, false);
        $this->opciones['subsocia'] = Tema::combo(166, true, false);
        $this->opciones['subacade'] = Tema::combo(165, true, false);
        $this->opciones['nivavanc'] = Tema::combo(52, true, false);
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['proxxxxx'] = Carbon::today()->add(3, 'Month')->isoFormat('YYYY-MM-DD');

        $this->opciones[''] = Tema::combo(52, true, false);

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['is.intervencion.lista', []],
                'formhref' => 2, 'tituloxx' => "VOLVER A INTERVENCIÓN", 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Request $request)
    {

        $this->opciones['cabecera'] = [
            ['td' => 'Id'],
            ['td' => 'PRIMER NOMBRER'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'DOCUMENTO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 's_primer_nombre', 'name' => 's_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 's_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 's_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
            ['data' => 's_apodo', 'name' => 's_apodo'],
        ];
        $this->opciones['parametr'] = [];

        return view('intervencion.index', ['todoxxxx' => $this->opciones]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route('is.intervencion.editar', [$dataxxxx['sis_nnaj_id'], IsDatosBasico::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    public function store(IsDatosBasicoCrearRequest $request)
    {
              return $this->grabar($request->all(), '', 'Intervención sicosocial creada con éxito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function view($objetoxx, $nombobje, $accionxx)
    {
        /*
    $userxxxx=Auth::user();
    $areaxxxx=User::getAreasUser($userxxxx);
    ddd($areaxxxx);
    */
    $this->opciones['botoform'][0]['routingx'] [1][0]=   $this->opciones['nnajregi'];
    $this->opciones['usuariox'] = $this->opciones['nnajregi'];
        $fechaxxx = explode('-', date('Y-m-d'));
            // dd($fechaxxx);
        ;
        if ($fechaxxx[1] < 12) {
            $fechaxxx[1] = $fechaxxx[1] + 1;
        }
        $tienper = auth()->user()->hasAnyPermission(['intervención sicosocial especializada']);


        if ($tienper) {
            unset($this->opciones['tipatenc']['1066']);
        }
        $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];
        $this->opciones['usuarios'] = User::getUsuario(false, false);
        $this->opciones['usuarioz'] = User::userComboRol(['cabecera' =>true, 'ajaxxxxx' => false, 'notinxxx' =>0,'rolxxxxx'=>[2,3]]);
        $this->opciones['tipatenc'] = [];
        $tipatenc = 0;
        if (auth()->user()->can('intervención sicosocial especializada')) {
            $tipatenc = 365;
            }    
        if (auth()->user()->can('isintervencion-psicologo')) {
            $tipatenc = 213;
            }

        if (auth()->user()->can('isintervencion-social')) {
            $tipatenc = 356;
        }
        $this->opciones['tipatenc'] = Tema::combo($tipatenc, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = ['' => 'Seleccione'];
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['subareas']['subareax'] = ['' => 'Seleccione'];
        $this->opciones['problemat'] = Tema::findOrFail(102)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($nombobje != '') {
            $this->opciones['botoform'][0]['routingx'] [1][1]=   $objetoxx->id;
            if (!$tienper && $objetoxx->i_prm_tipo_atencion_id == 1066) {
                return redirect()
                    ->route('is.intervencion.lista', [$this->opciones['nnajregi']])
                    ->with('info', 'Superfil no está autorizado para ver intervenciones sicosociales especializadas');
            }
            if ($objetoxx->i_prm_area_ajuste_id != 1269) {
                $this->opciones['subareas'] = Parametro::find(235)->Combo;
            }
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['subareas'] = $this->casos($objetoxx->i_prm_area_ajuste_id, true, false);

        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['dependen'] = NnajUpi::getDependenciasNnajUsuario(true,false,$this->opciones['nnajregi']);
        $this->opciones['areajusx'] = IsDatosBasico::getAreajuste($objetoxx);

        $rutaxxxx = 'intervencion.' . strtolower($this->opciones['accionxx']);

        return view($rutaxxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create($nnajregi)
    {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        return $this->view('', '', 'crear');
    }

    public function lista($nnajregi)
    {

        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        return $this->view('', '', 'crear');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IsDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show($nnajregi, IsDatosBasico $intervencion)
    {
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IsDatosBasico $is
     * @return \Illuminate\Http\Response
     */
    public function edit($nnajregi, IsDatosBasico $intervencion)
    {
        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        $respuest=$this->getPuedeTPuede(['casoxxxx'=>1,
        'nnajxxxx'=>$intervencion->sis_nnaj_id,
        'permisox'=>$this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];

         }
        return $this->view($intervencion, 'modeloxx', 'Editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IsDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(IsDatosBasicoUpdateRequest $request, $db, $id)
    {

        return $this->grabar($request->all(), isDatosBasico::usarioNnaj($id), 'Intervención sicosocial actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IsDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function destroy(IsDatosBasico $db)
    {
        //
    }

    private function casos($areaxxxx, $cabecera, $ajaxxxxx)
    {
        $respuest = [];
        switch ($areaxxxx) {
            case 448: //Emoción
                $respuest = [
                    'subareax' => Tema::combo(162, $cabecera, $ajaxxxxx),
                ];
                break;
            case 282: //Familiar
                $respuest = [
                    'subareax' => Tema::combo(167, $cabecera, $ajaxxxxx),
                ];
                break;
            case 449: //Social
                $respuest = [
                    'subareax' => Tema::combo(166, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1058: //Comportamental
                $respuest = [
                    'subareax' => Tema::combo(164, $cabecera, $ajaxxxxx),
                ];
                break;
            case 525: //Sexual
                $respuest = [
                    'subareax' => Tema::combo(163, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1059: //Académica
                $respuest = [
                    'subareax' => Tema::combo(165, $cabecera, $ajaxxxxx),
                ];
                break;
            case 235: //Académica
                if ($ajaxxxxx) {
                    $respuest = [
                        'subareax' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                    ];
                } else {
                    $respuest = [
                        'subareax' => [235 => 'N/A']
                    ];
                }


                break;
        }
        return $respuest;
    }

    public function subareasajax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->casos($request->all()['areaxxxx'], true, true)); // eso es
        }
    }

    public function areasajax(\Illuminate\Http\Request $request)
    {

        if ($request->ajax()) {
            return response()->json($this->atencion($request->all()['areajust'], true, true)); // eso es
        }
    }

    private function atencion($areajust, $cabecera, $ajaxxxxx)
    {
        $respuest = [];
        switch ($areajust) {
            case 1060: //Social Familiar
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1061: //Social Familiar
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1062: //Social Familiar
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1063: //Social NNAJ
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1064: //PSICOSocial
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1065: //Comportamental
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1066: //Comportamental
                $respuest = [
                    'areajust' => Tema::combo(212, $cabecera, $ajaxxxxx),
                ];
                break;
            case 1067: //Académica
                if ($ajaxxxxx) {
                    $respuest = [
                        'areajust' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                    ];
                } else {
                    $respuest = [
                        'areajust' => [235 => 'N/A']
                    ];
                }

                break;
        }
        return $respuest;
    }

    public function intlista(Request $request, $nnajxxxx)
    {
        if ($request->ajax()) {
            $actualxx = IsDatosBasico::select([
                'is_datos_basicos.id', 'is_datos_basicos.sis_nnaj_id', 'is_datos_basicos.sis_nnaj_id', 'tipoaten.nombre as tipoxxxx',
                'is_datos_basicos.d_fecha_diligencia', 'sis_depens.nombre', 'users.name','segundo.name as segundo', 'is_datos_basicos.sis_esta_id'
            ])
                ->join('sis_depens', 'is_datos_basicos.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'is_datos_basicos.i_primer_responsable', '=', 'users.id')
                ->leftjoin('users as segundo', 'is_datos_basicos.i_segundo_responsable', '=', 'segundo.id')

                ->join('parametros as tipoaten', 'is_datos_basicos.i_prm_tipo_atencion_id', '=', 'tipoaten.id')
                ->where(function ($queryxxx) use ($nnajxxxx) {
                    $queryxxx->where('is_datos_basicos.sis_esta_id', 1)->where('is_datos_basicos.sis_nnaj_id', $nnajxxxx);
                });


            return datatables()
                ->eloquent($actualxx)
                ->addColumn('btns', 'intervencion/botones/botones')
                ->rawColumns(['btns'])
                ->toJson();
        }
    }

    function getResponsable(Request $request,IsDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $camposxx=['i_primer_responsable'=>'#i_segundo_responsable','i_segundo_responsable'=>'#i_primer_responsable'];
            $usuarios = User::userComboRol(['cabecera' =>true, 'ajaxxxxx' => true, 'notinxxx' =>[$request->usernotx],'rolxxxxx'=>[2,3]]);
            return response()->json(['dataxxxx'=>$usuarios,'comboxxx'=>$camposxx[$request->comboxxx]]);
        }
    }
}
