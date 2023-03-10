<?php

namespace App\Http\Controllers\Intervencion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Intervencion\IsDatosBasicoCrearRequest;
use App\Http\Requests\Intervencion\IsDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\intervencion\IsDatosBasico;
use App\Models\Parametro;
use App\Models\User;
use App\Models\Tema;
use App\Traits\Combos\CombosTrait;
use App\Traits\Is\InteSicoTrait;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDatoBasicoController extends Controller
{
    use CombosTrait;
    use PuedeTrait;
    use InteSicoTrait;
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
        $this->opciones['slotxxxx'] = 'is.intervencion';
        $this->opciones['tituhead'] = 'INTERVENCIONES';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['dispform'] = "none";
        $this->opciones['disptabx'] = "block";


        // $this->opciones['areajust'] =  $this->getTemacomboCT(['temaxxxx' => 212])['comboxxx'];

        $this->opciones['arjustpr'] =  $this->getTemacomboCT(['temaxxxx' => 212])['comboxxx'];

        $this->opciones['subemoci'] = $this->getTemacomboCT(['temaxxxx' => 162])['comboxxx'];
        $this->opciones['subfamil'] = $this->getTemacomboCT(['temaxxxx' => 167])['comboxxx'];
        $this->opciones['subsexua'] = $this->getTemacomboCT(['temaxxxx' => 163])['comboxxx'];
        $this->opciones['subcompo'] = $this->getTemacomboCT(['temaxxxx' => 164])['comboxxx'];
        $this->opciones['subsocia'] = $this->getTemacomboCT(['temaxxxx' => 166])['comboxxx'];
        $this->opciones['subacade'] = $this->getTemacomboCT(['temaxxxx' => 165])['comboxxx'];
        $this->opciones['nivavanc'] = $this->getTemacomboCT(['temaxxxx' => 52])['comboxxx'];
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


        $this->opciones['botoform'][0]['routingx'][1][0] =   $this->opciones['nnajregi'];
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

        $this->opciones['usuarioz'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false, 'notinxxx' => 0, 'rolxxxxx' => [4, 3, 7]]);
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
         // $this->atencion($request->all()['areajust'], true, true);

        $this->opciones['areajust']=[''=>'Seleccione'];
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = ['' => 'Seleccione'];
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['subareas']['subareax'] = ['' => 'Seleccione'];
        $this->opciones['problemat'] = Tema::combo(102, true, false);
        $usurioxx = null;
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($nombobje != '') {
              $this->opciones['areajust']=$this->atencion($objetoxx->i_prm_tipo_atencion_id, true, false);


            $this->opciones['botoform'][0]['routingx'][1][1] =   $objetoxx->id;
            if (!$tienper && $objetoxx->i_prm_tipo_atencion_id == 1066) {
                return redirect()
                    ->route('is.intervencion.lista', [$this->opciones['nnajregi']])
                    ->with('info', 'Superfil no está autorizado para ver intervenciones sicosociales especializadas');
            }
            $objetoxx->d_fecha_diligencia = explode(' ', $objetoxx->d_fecha_diligencia)[0];
            $objetoxx->d_fecha_proxima = explode(' ', $objetoxx->d_fecha_proxima)[0];

            if ($objetoxx->i_prm_area_ajuste_id != 1269) {
                $this->opciones['subareas'] = Parametro::find(235)->Combo;
            }
            $usurioxx = $objetoxx->i_primer_responsable;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['subareas'] = $this->casos($objetoxx->i_prm_area_ajuste_id, true, false);
        }
        $this->opciones['usuarios'] = User::getUsuario(false, false, $usurioxx);
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['dependen'] = NnajUpi::getDependenciasNnajUsuario(true, false, $this->opciones['nnajregi']);
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
        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        return $this->view($intervencion, 'modeloxx', 'ver');
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
        $userx = Auth::user()->id;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        $respuest = $this->getPuedeTPuede([
            'casoxxxx' => 1,
            'nnajxxxx' => $intervencion->sis_nnaj_id,
            'permisox' => $this->opciones['permisox'] . '-editar',
        ]);
        $mostrars = false;
        if ($respuest) {
            if ($userx == $intervencion->i_primer_responsable || $userx == $intervencion->i_segundo_responsable || User::userAdmin()) {
                $mostrars = true;
            }
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => $mostrars, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
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

    public function inactivate(isDatosBasico $modeloxx)
    {
        $this->opciones['datobasi'] = $modeloxx->SisNnaj->fi_datos_basico;
        $this->opciones['nnajregi'] = $modeloxx->sis_nnaj_id;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'INACTIVAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['mensajex'] = 'Inactivar Intervención';
        return $this->view($modeloxx, 'modeloxx', 'Destroy');
    }

    public function destroy(Request $request, isDatosBasico $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('is.intervencion.lista', [$modeloxx->sis_nnaj_id])
            ->with('info',  'Intervención inactivada correctamente');
    }

    public function activate(isDatosBasico $modeloxx)
    {
        $this->opciones['datobasi'] = $modeloxx->SisNnaj->fi_datos_basico;
        $this->opciones['nnajregi'] = $modeloxx->sis_nnaj_id;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'ACTIVAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.activarx', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['mensajex'] = 'Activar Intervención';
        return $this->view($modeloxx, 'modeloxx', 'Activarx');
    }

    public function activar(Request $request, isDatosBasico $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('is.intervencion.lista', [$modeloxx->sis_nnaj_id])
            ->with('info',  'Intervención activada correctamente');
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
            case 2636: //Social Familiar
                $respuest = [
                    'subareax' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                ];
                break;
             case 2797:
                    $respuest = [
                    'subareax' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                ];
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

            case 2636: //Social Familiar
                $respuest = [
                    'areajust' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                ];
                break;
            case 2797:
                $respuest = [
                    'areajust' => [['valuexxx' => 235, 'optionxx' => 'N/A']],
                ];
                break;
        }
        return $respuest;
    }



    function getResponsable(Request $request, IsDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $camposxx = ['i_primer_responsable' => '#i_segundo_responsable', 'i_segundo_responsable' => '#i_primer_responsable'];
            $usuarios = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => true, 'notinxxx' => [$request->usernotx], 'rolxxxxx' => [4, 3, 7]]);
            return response()->json(['dataxxxx' => $usuarios, 'comboxxx' => $camposxx[$request->comboxxx]]);
        }
    }
}
