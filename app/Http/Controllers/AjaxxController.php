<?php

namespace App\Http\Controllers;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocIndi;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLineaBase;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InRespuesta;
use App\Models\Indicadores\InValidacion;
use App\Models\Parametro;
use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisFsoporte;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Sistema\SisInstitucionEdu;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEp;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use App\Traits\Ajax\VsiAjaxTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AjaxxController extends Controller
{
    use VsiAjaxTrait;
    public function departamentos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisDepartam::combo($dataxxxx['sispaisx'], true));
        }
    }
    public function upzs(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisUpz::combo($dataxxxx['sispaisx'], true));
        }
    }
    public function barrios(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisBarrio::combo($dataxxxx['departam'], true));
        }
    }

    private function getEdad($fechaxxx)
    {
        $edadxxxx = 0;
        if ($fechaxxx['opcionxx'] == 2) {
            $edadxxxx = FiDatosBasico::where('sis_nnaj_id', $fechaxxx['padrexxx'])->first()->nnaj_nacimi->Edad;
        } else {
            $fechaxxe = explode('-', $fechaxxx['fechaxxx']);
            if ($fechaxxx['fechaxxx'] != NULL) {
                $edadxxxx = Carbon::createFromDate($fechaxxe[0], $fechaxxe[1], $fechaxxe[2])->age;
            }
        }
        return $edadxxxx;
    }

    function saberEdad(Request $request)
    {
        if ($request->ajax()) {
            $edadxxxx = $this->getEdad($request->all());
            $noaplica = Parametro::find(235)->ComboAjaxUno;
            $respuest = [[
                'edadxxxx' => $this->getEdad($request->all()),
                'generoxx' => ($edadxxxx < 15) ? $noaplica : Tema::comboAsc(12, false, true),
                'orientac' => ($edadxxxx < 15) ? $noaplica : Tema::comboAsc(13, false, true),
                'estacivi' => ($edadxxxx < 15) ? Parametro::find(153)->ComboAjaxUno : Tema::comboAsc(19, false, true),
                'sexoxxxx' =>  Tema::comboAscAsc(11, false, true),
                'condicio' => ($edadxxxx < 18) ? $noaplica : Tema::comboAsc(23, false, true),
                'tiplibre' => ($edadxxxx < 18) ? $noaplica : Tema::comboAsc(33, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function poblacionetnia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = Parametro::find(235)->ComboAjaxUno;
            if ($dataxxxx['departam'] == 157) {
                $respuest = Tema::comboAsc(61, true, true);
            }
            return response()->json($respuest);
        }
    }
    function ayuda(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = Parametro::find(235)->ComboAjaxUno;
            if ($dataxxxx['padrexxx'] == 228) {
                $respuest = Tema::comboAsc(286, true, true);
            }
            return response()->json($respuest);
        }
    }
    function estudiando(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 227:
                    $respuest = [[
                        'jornadax' => Tema::comboAsc(151, true, true),
                        'naturale' => Tema::comboAsc(130, true, true),
                        'instituc' => SisInstitucionEdu::combo(false, true),
                        'dianoest' => true,
                        'mesnoest' => true,
                        'anonoest' => true,
                        'institut' => false,
                    ]];
                    break;
                case 228:
                    $respuest = [[
                        'jornadax' => Parametro::find(235)->ComboAjaxUno,
                        'naturale' => Parametro::find(235)->ComboAjaxUno,
                        'instituc' => Parametro::find(235)->ComboAjaxUno,
                        'dianoest' => false,
                        'mesnoest' => false,
                        'anonoest' => false,
                        'institut' => true,
                    ]];
                    break;
            }
            return response()->json($respuest);
        }
    }
    function ocultambitos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];
            switch ($dataxxxx['padrexxx']) {
                case 227:
                    $respuest = [[
                        'famfisic' => Tema::comboAsc(23, false, true),
                        'fampsico' => Tema::comboAsc(23, false, true),
                        'famsexua' => Tema::comboAsc(23, false, true),
                        'famecono' => Tema::comboAsc(23, false, true),
                        'amifisic' => Tema::comboAsc(23, false, true),
                        'amipsico' => Tema::comboAsc(23, false, true),
                        'amisexua' => Tema::comboAsc(23, false, true),
                        'amiecono' => Tema::comboAsc(23, false, true),
                        'parfisic' => Tema::comboAsc(23, false, true),
                        'parpsico' => Tema::comboAsc(23, false, true),
                        'parsexua' => Tema::comboAsc(23, false, true),
                        'parecono' => Tema::comboAsc(23, false, true),
                        'comfisic' => Tema::comboAsc(23, false, true),
                        'compsico' => Tema::comboAsc(23, false, true),
                        'comsexua' => Tema::comboAsc(23, false, true),
                        'comecono' => Tema::comboAsc(23, false, true),
                    ]];
                    break;
                case 228:
                    $respuest = [[
                        'famfisic' => Parametro::find(235)->ComboAjaxUno,
                        'fampsico' => Parametro::find(235)->ComboAjaxUno,
                        'famsexua' => Parametro::find(235)->ComboAjaxUno,
                        'famecono' => Parametro::find(235)->ComboAjaxUno,
                        'amifisic' => Parametro::find(235)->ComboAjaxUno,
                        'amipsico' => Parametro::find(235)->ComboAjaxUno,
                        'amisexua' => Parametro::find(235)->ComboAjaxUno,
                        'amiecono' => Parametro::find(235)->ComboAjaxUno,
                        'parfisic' => Parametro::find(235)->ComboAjaxUno,
                        'parpsico' => Parametro::find(235)->ComboAjaxUno,
                        'parsexua' => Parametro::find(235)->ComboAjaxUno,
                        'parecono' => Parametro::find(235)->ComboAjaxUno,
                        'comfisic' => Parametro::find(235)->ComboAjaxUno,
                        'compsico' => Parametro::find(235)->ComboAjaxUno,
                        'comsexua' => Parametro::find(235)->ComboAjaxUno,
                        'comecono' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
            }
            return response()->json($respuest);
        }
    }
    function discapacitado(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'discapac' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(24, true, true),
                'certific' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(23, true, true),
                'independ' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(23, true, true),
                'discausa' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(341, true, true),
                'victataq' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(342, true, true),

            ]];
            return response()->json($respuest);
        }
    }
    function anticonceptivo(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'usameant' => ($dataxxxx['padrexxx'] == 228 || $dataxxxx['padrexxx'] == 235) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(25, true, true),
                'cuametod' => ($dataxxxx['padrexxx'] == 228 || $dataxxxx['padrexxx'] == 235) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(27, true, true),
                'usavolun' => ($dataxxxx['padrexxx'] == 228 || $dataxxxx['padrexxx'] == 235) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(25, true, true),
            ]];

            return response()->json($respuest);
        }
    }
    function regimensalud(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'entidadx' => $dataxxxx['padrexxx'] == 168 ? SisEntidadSalud::find(103)->ComboAjaxUno : SisEntidadSalud::combo($dataxxxx['padrexxx'], true, true),
            ]];


            return response()->json($respuest);
        }
    }
    function comidasdiarias(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'nocomida' => $dataxxxx['padrexxx'] > 4 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(29, true, true),
            ]];
            return response()->json($respuest);
        }
    }
    public function FunctionName(Type $var = null)
    {
        # code...
    }
    function trabajogenera(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'readonly' => [
                    ['nombrexx' => '#s_hora_inicial', 'propieda' => 'readonly', 'valorxxx' => false],
                    ['nombrexx' => '#s_hora_final', 'propieda' => 'readonly', 'valorxxx' => false],
                    ['nombrexx' => '#totinmen', 'propieda' => 'readonly', 'valorxxx' => false],
                    ['nombrexx' => '#s_trabajo_formal', 'propieda' => 'readonly', 'valorxxx' => true],
                ],
                'combosxx' => [
                    ['comboxxx' => Parametro::find(235)->ComboAjaxUno, 'nombrexx' => '#prm_trabinfo_id', 'selected' => ''],
                    ['comboxxx' => Parametro::find(235)->ComboAjaxUno, 'nombrexx' => '#prm_otractiv_id', 'selected' => ''],
                    ['comboxxx' => Parametro::find(235)->ComboAjaxUno, 'nombrexx' => '#prm_razgeing_id', 'selected' => ''],
                    ['comboxxx' => Parametro::find(235)->ComboAjaxUno, 'nombrexx' => '#prm_tiprelab_id', 'selected' => ''],
                    ['comboxxx' => Tema::comboAsc(123, true, true), 'nombrexx' => '#prm_jorgeing_id', 'selected' => ''],
                    ['comboxxx' => Tema::comboAsc(124, false, true), 'nombrexx' => '#prm_diagener_id', 'selected' => ''],
                    ['comboxxx' => Tema::comboAsc(125, true, true), 'nombrexx' => '#prm_frecingr_id', 'selected' => ''],

                ],
            ];

            switch ($dataxxxx['padrexxx']) {
                case 626:
                    $respuest['combosxx'][3]['comboxxx'] = Tema::comboAsc(117, true, true);
                    $respuest['readonly'][3]['valorxxx'] = false;
                    break;
                case 627:
                    $respuest['combosxx'][0]['comboxxx'] = Tema::comboAsc(115, true, true);
                    break;
                case 628:
                    $respuest['combosxx'][1]['comboxxx'] = Tema::comboAsc(116, true, true);
                    break;
                case 853:
                    $respuest['readonly'] = [
                        ['nombrexx' => '#s_hora_inicial', 'propieda' => 'readonly', 'valorxxx' => true],
                        ['nombrexx' => '#s_hora_final', 'propieda' => 'readonly', 'valorxxx' => true],
                        ['nombrexx' => '#totinmen', 'propieda' => 'readonly', 'valorxxx' => true],
                    ];
                    $respuest['combosxx'][2]['comboxxx'] = Tema::comboAsc(122, true, true);
                    $respuest['combosxx'][6]['comboxxx'] =
                        $respuest['combosxx'][5]['comboxxx'] =
                        $respuest['combosxx'][4]['comboxxx'] = Parametro::find(235)->ComboAjaxUno;
                    $respuest['combosxx'][5]['selected'] = 'selected';
                    break;
            }

            return response()->json($respuest);
        }
    }




    function jornadagenera(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'horainix' => ($dataxxxx['padrexxx'] != 1) ? false : true,
                'horafinx' => ($dataxxxx['padrexxx'] != 1) ? false : true,
            ];
            return response()->json($respuest);
        }
    }
    function limpiardias(Request $request)
    {

        if ($request->ajax()) {
            $respuest = [[
                'diaseman' => Tema::comboAsc(124, false, true),
            ]];
            return response()->json($respuest);
        }
    }

    function consecutivoceduala(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $fechaxxx = str_replace(" ", "", date('Y-m-d H:m:s'));
            $fechaxxx = str_replace("-", "", $fechaxxx);
            $fechaxxx = str_replace(":", "", $fechaxxx);
            return response()->json([
                'consecut' => $dataxxxx['padrexxx'] == 145 ? $fechaxxx : '',
                'paisxxxx' => $dataxxxx['padrexxx'] == 145 ? Parametro::find(235)->ComboAjaxUno : SisPai::combo(true, true),
                'departam' => $dataxxxx['padrexxx'] == 145 ? Parametro::find(235)->ComboAjaxUno : [],
                'municipi' => $dataxxxx['padrexxx'] == 145 ? Parametro::find(235)->ComboAjaxUno : []
            ]);
        }
    }
    function situacionmilitar(Request $request)
    {
        $noaplica = Parametro::find(235)->ComboAjaxUno;
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $edadxxxx = $this->getEdad($request->all());
            $respuest = [[
                'condicio' => ($dataxxxx['padrexxx'] == 21 || $edadxxxx < 18) ? $noaplica : Tema::comboAsc(23, true, true),
                'tiplibre' => ($dataxxxx['padrexxx'] == 21 || $edadxxxx < 18) ? $noaplica : Tema::comboAsc(33, true, true),
            ]];
            return response()->json($respuest);
        }
    }
    function claselibreta(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'claslibr' => ($dataxxxx['padrexxx'] == 228) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(33, true, true),
            ]];
            return response()->json($respuest);
        }
    }
    function cuentadocumento(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $unosolox = [];
            foreach (Parametro::where('id', 228)->get() as $registro) {
                $unosolox[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            }
            $respuest = [[
                'unosolox' => ($dataxxxx['padrexxx'] == 145) ? 1 : 2,
                'cuendocu' => ($dataxxxx['padrexxx'] == 145) ? $unosolox : Tema::comboAsc(23, true, true),
            ]];
            return response()->json($respuest);
        }
    }
    function estagestando(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'numseman' => ($dataxxxx['padrexxx'] == 227) ? false : true,
            ];
            return response()->json($respuest);
        }
    }
    function estalactando(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'nummeses' => ($dataxxxx['padrexxx'] == 227) ? false : true,
            ];
            return response()->json($respuest);
        }
    }
    function tienehijos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'numhijos' => ($dataxxxx['padrexxx'] == 227) ? false : true,
            ];
            return response()->json($respuest);
        }
    }
    function tieneprobsalud(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'prosalud' => $dataxxxx['padrexxx'] == 228 ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(301, true, true),
            ];
            return response()->json($respuest);
        }
    }
    function consumedicamen(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'consmedi' => ($dataxxxx['padrexxx'] == 227) ? false : true,
            ];
            return response()->json($respuest);
        }
    }

    function tipocontacto(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 813:
                    $respuest = [[
                        'concondi' => false,
                        'conopcio' => Parametro::find(235)->ComboAjaxUno,
                        'infprote' => true,
                        'motprote' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
                case 814:
                    $respuest = [[
                        'concondi' => true,
                        'conopcio' => Tema::comboAsc(147, true, true),
                        'infprote' => true,
                        'motprote' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
                case 815:
                    $respuest = [[
                        'concondi' => true,
                        'conopcio' =>  Parametro::find(235)->ComboAjaxUno,
                        'infprote' => false,
                        'motprote' =>  Tema::comboAsc(149, true, true),
                    ]];
                    break;
            }

            return response()->json($respuest);
        }
    }

    function condespecial(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'dptcondi' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? SisDepartam::find(1)->ComboAjaxUno : SisDepartam::combo(2, true),
                'muncondi' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? SisMunicipio::find(1)->ComboAjaxUno : [['valuexxx' => '', 'optionxx' => 'Seleccione']],
                'tiecerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(23, true, true),
                'dptcerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? SisDepartam::find(1)->ComboAjaxUno : SisDepartam::combo(2, true),
                'muncerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? SisMunicipio::find(1)->ComboAjaxUno : [['valuexxx' => '', 'optionxx' => 'Seleccione']],
            ]];
            return response()->json($respuest);
        }
    }

    function vinviolencia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'vinviole' => ($dataxxxx['padrexxx'] == 228) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(120, true, true),
            ]];
            return response()->json($respuest);
        }
    }

    function rieviolencia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'rieviole' => ($dataxxxx['padrexxx'] == 228) ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(120, true, true),
            ]];
            return response()->json($respuest);
        }
    }

    function ocultapard(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 227:
                    $respuest = [[
                        'tiempard' => false,
                        'titipard' => Tema::comboAsc(152, true, true),
                        'motipard' => Tema::comboAsc(45, true, true),
                        'actupard' => Tema::comboAsc(25, true, true),
                        'nomdefen' => false,
                        'teldefen' => false,
                        'lugapard' => false,
                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiempard' => true,
                        'titipard' => Parametro::find(235)->ComboAjaxUno,
                        'motipard' => Parametro::find(235)->ComboAjaxUno,
                        'actupard' => Parametro::find(235)->ComboAjaxUno,
                        'nomdefen' => true,
                        'teldefen' => true,
                        'lugapard' => true,
                    ]];
                    break;
            }
            return response()->json($respuest);
        }
    }
    function ocultasrpa(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 227:
                    $respuest = [[
                        'tiemsrpa' => false,
                        'actusrpa' => Tema::comboAsc(25, true, true),
                        'titisrpa' => Tema::comboAsc(152, true, true),
                        'motisrpa' => Tema::comboAsc(46, true, true),
                        'sancsrpa' => Tema::comboAsc(47, true, true),

                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiemsrpa' => true,
                        'actusrpa' => Parametro::find(235)->ComboAjaxUno,
                        'titisrpa' => Parametro::find(235)->ComboAjaxUno,
                        'motisrpa' => Parametro::find(235)->ComboAjaxUno,
                        'sancsrpa' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
            }
            return response()->json($respuest);
        }
    }
    function ocultaspoa(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 227:
                    $respuest = [[
                        'tiemspoa' => false,
                        'actuspoa' => Tema::comboAsc(25, true, true),
                        'titispoa' => Tema::comboAsc(152, true, true),
                        'motispoa' => Tema::comboAsc(357, true, true),
                        'cumppena' => Tema::comboAsc(49, true, true),
                        'estapres' => Tema::comboAsc(25, true, true),
                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiemspoa' => true,
                        'actuspoa' => Parametro::find(235)->ComboAjaxUno,
                        'titispoa' => Parametro::find(235)->ComboAjaxUno,
                        'motispoa' => Parametro::find(235)->ComboAjaxUno,
                        'cumppena' => Parametro::find(235)->ComboAjaxUno,
                        'estapres' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
            }
            return response()->json($respuest);
        }
    }
    function servicios(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'servicio' => SisEntidad::comboservicios($dataxxxx['padrexxx'], false, true),
            ];
            return response()->json($respuest);
        }
    }
    function puntajesisben(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'pusisben' => $dataxxxx['padrexxx'] != '' ? Parametro::find(235)->ComboAjaxUno : Tema::comboAsc(26, false, true),
            ]];
            return response()->json($respuest);
        }
    }

    function practicareligion(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();

            $respuest = [
                'combosxx' => [
                    [
                        'comboxxx' => $dataxxxx['padrexxx'] == 227 ? Tema::comboAsc(78, true, true)  : Parametro::find(235)->ComboAjaxUno,
                        'nombrexx' => '#i_prm_religion_practica_id', 'selected' => $dataxxxx['padrexxx'] == 227 ? '' : 'selected'
                    ],
                    [
                        'comboxxx' => $dataxxxx['padrexxx'] == 227 ? []  : Parametro::find(235)->ComboAjaxUno,
                        'nombrexx' => '#prm_sacrhec_id', 'selected' => $dataxxxx['padrexxx'] == 227 ? '' : 'selected'
                    ]
                ]

            ];
            return response()->json($respuest);
        }
    }
    function cualsacramento(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'comboxxx' => $dataxxxx['padrexxx'] == 494 ? Tema::comboAsc(79, false, true)  : Parametro::find(235)->ComboAjaxUno,
                'nombrexx' => 'prm_sacrhec_id', 'selected' => $dataxxxx['padrexxx'] == 494 ? '' : 'selected'
            ];
            return response()->json($respuest);
        }
    }

    function escondesitipodir(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 287:
                    $respuest = [[
                        'tipoviax' => Tema::comboAsc(62, true, true),
                        'nomviapr' => false,
                        'alfviapr' => Tema::comboAsc(39, true, true),
                        'tienebis' => Tema::comboAsc(23, true, true),
                        'letrabis' => Tema::comboAsc(39, true, true),
                        'cuadravp' => Tema::comboAsc(38, true, true),
                        'numerovg' => false,
                        'alfabevg' => Tema::comboAsc(39, true, true),
                        'placavgx' => false,
                        'cuadravg' => Tema::comboAsc(38, true, true),
                    ]];
                    break;
                case 288:
                    $respuest = [[
                        'tipoviax' => Parametro::find(235)->ComboAjaxUno,
                        'nomviapr' => true,
                        'alfviapr' => Parametro::find(235)->ComboAjaxUno,
                        'tienebis' => Parametro::find(235)->ComboAjaxUno,
                        'letrabis' => Parametro::find(235)->ComboAjaxUno,
                        'cuadravp' => Parametro::find(235)->ComboAjaxUno,
                        'numerovg' => true,
                        'alfabevg' => Parametro::find(235)->ComboAjaxUno,
                        'placavgx' => true,
                        'cuadravg' => Parametro::find(235)->ComboAjaxUno,
                    ]];
                    break;
                case 289:
                    $respuest = [[
                        'tipoviax' => Parametro::find(235)->ComboAjaxUno,
                        'nomviapr' => true,
                        'alfviapr' => Parametro::find(235)->ComboAjaxUno,
                        'tienebis' => Parametro::find(235)->ComboAjaxUno,
                        'letrabis' => Parametro::find(235)->ComboAjaxUno,
                        'cuadravp' => Parametro::find(235)->ComboAjaxUno,
                        'numerovg' => true,
                        'alfabevg' => Parametro::find(235)->ComboAjaxUno,
                        'placavgx' => true,
                        'cuadravg' => Parametro::find(235)->ComboAjaxUno,

                    ]];
                    break;
            }

            return response()->json($respuest);
        }
    }

    function indicadores(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            switch ($request->optionxx) {
                case 1:
                    $respuest = ['indicado' => InIndicador::combo($request->padrexxx, false, true)];
                    break;
                case 2:
                    $respuest = ['indicado' => InLineaBase::combo($request->padrexxx, false, true)];
                    break;
                case 3:
                    $respuest = ['indicado' => InPregunta::combo($request->padrexxx, false, true)];
                    break;
                case 4:
                    $respuest = ['indicado' => SisActividad::combo($request->padrexxx, false, true)];
                    break;
                case 5:
                    $respuest = ['indicado' => SisTabla::combo($request->padrexxx, false, true)];
                    break;
                case 6:
                    $respuest = ['indicado' => InValidacion::combo($request->padrexxx, false, true)];
                    break;
                case 7:
                    $respuest = ['indicado' => InDocIndi::combo($request->padrexxx, false, true)];
                    break;
                case 8:
                    $respuest = ['indicado' => InFuente::combo($request->padrexxx, false, true)];
                    break;
            }
            return response()->json($respuest);
        }
    }



    function campostabla(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [
                'camposxx' => SisTabla::combo($dataxxxx['padrexxx'], false, true),
            ];
            return response()->json($respuest);
        }
    }
    function preguntas(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [InBaseFuente::combobuscar($dataxxxx)];
            return response()->json($respuest);
        }
    }
    function signapregunta(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $dataxxxx['activo'] = 1;
            $respuest =  InDocPregunta::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }


    function respuestas(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();

            $respuest = [Parametro::combobuscar($dataxxxx)];
            return response()->json($respuest);
        }
    }
    function asignarespuesta(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest =  InRespuesta::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    function lineasbase(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();

            $respuest = [InIndicador::combobuscar($dataxxxx)];
            return response()->json($respuest);
        }
    }
    function asignarlineabase(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();

            $respuest =  InFuente::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    function responsable(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $notinxxx = [];
            $responsa = AgResponsable::where('ag_actividad_id', $dataxxxx['ag_actividad_id'])->get();
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->user_id;
            }

            $usuario = User::orWhere('s_documento', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_primer_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_primer_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_segundo_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_segundo_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->get();
            $comboxxx = [];
            foreach ($usuario as $registro) {
                $comboxxx[] = [
                    'id' => $registro->id,
                    'label' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido,
                    'value' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido
                ];
            }
            return response()->json($comboxxx);
        }
    }

    function asistente(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $notinxxx = [];
            $responsa = AgAsistente::where('ag_actividad_id', $dataxxxx['ag_actividad_id'])->get();
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->fi_dato_basico_id;
            }

            $usuario = FiDatosBasico::orWhere('nnaj_docus.s_documento', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('fi_datos_basicos.id', $notinxxx)
                ->orWhere('s_primer_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('fi_datos_basicos.id', $notinxxx)
                ->orWhere('s_primer_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('fi_datos_basicos.id', $notinxxx)
                ->orWhere('s_segundo_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('fi_datos_basicos.id', $notinxxx)
                ->orWhere('s_segundo_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('fi_datos_basicos.id', $notinxxx)
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->get();
            $comboxxx = [];
            foreach ($usuario as $registro) {
                $comboxxx[] = [
                    'id' => $registro->id,
                    'label' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido,
                    'value' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido
                ];
            }
            return response()->json($comboxxx);
        }
    }

    function relacion(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $notinxxx = [];
            $responsa = AgRelacion::where('ag_actividad_id', $dataxxxx['ag_actividad_id'])->get();
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->ag_recurso_id;
            }

            $usuario = AgRecurso::orWhere('s_recurso', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->get();
            $comboxxx = [];
            foreach ($usuario as $registro) {
                $comboxxx[] = [
                    'id' => $registro->id,
                    'label' => $registro->s_recurso,
                    'value' => $registro->s_recurso
                ];
            }
            return response()->json($comboxxx);
        }
    }
    function asigregistro(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [];
            switch ($dataxxxx['tipoxxxx']) {
                case 1: // reponsable
                    AgResponsable::transaccion($dataxxxx, '');
                    break;
                case 2: // asistencai
                    AgAsistente::transaccion($dataxxxx, '');
                    break;
                case 3: // recurso
                    AgRelacion::transaccion($dataxxxx, '');
                    break;
                case 4: // servicios
                    SisDepen::where('id', $dataxxxx['sis_depen_id'])->first()->sis_servicios()->attach([$dataxxxx['sis_servicio_id']]);
                    break;
                case 5: // personal
                    SisDepen::where('id', $dataxxxx['sis_depen_id'])->first()->users()->attach([$dataxxxx['user_id'] => [
                        'i_prm_responsable_id' => $dataxxxx['responsable'],
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id,
                        'sis_esta_id' => 1,
                    ]]);
                    break;
                case 6: // servicios
                    SisEp::where('id', $dataxxxx['sis_ep_id'])->first()->sis_servicios()->attach([$dataxxxx['sis_servicio_id']]);
                    break;
                case 7: // personal
                    SisEp::where('id', $dataxxxx['sis_ep_id'])->first()->users()->attach([$dataxxxx['user_id'] => ['i_prm_responsable_id' => $dataxxxx['responsable']]]);
                    break;
            }
            return response()->json($respuest);
        }
    }
    function acciongestion(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [];
            switch ($dataxxxx['optionxx']) {
                case 1: // reponsable
                    $respuest = SisActividad::combo($dataxxxx['padrexxx'], true, true);
                    break;
                case 2: // asistencai
                    $respuest = SisFsoporte::combo($dataxxxx['padrexxx'], true, true);
                    break;
            }
            return response()->json($respuest);
        }
    }


    function sisservicio(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $notinxxx = [];
            $responsa = SisDepen::where('id', $dataxxxx['sis_depen_id'])->first()->sis_servicios;
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->id;
            }
            $usuario = SisServicio::orWhere('s_servicio', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->get();
            $comboxxx = [];
            foreach ($usuario as $registro) {
                $comboxxx[] = [
                    'id' => $registro->id,
                    'label' => $registro->s_servicio,
                    'value' => $registro->s_servicio
                ];
            }
            return response()->json($comboxxx);
        }
    }

    function personal(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $notinxxx = [];
            $responsa = SisDepen::where('id', $dataxxxx['sis_depen_id'])->first()->users;
            foreach ($responsa as $responsx) {
                $notinxxx[] = $responsx->id;
            }

            $usuario = User::orWhere('s_documento', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_primer_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_primer_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_segundo_nombre', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->orWhere('s_segundo_apellido', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
                ->whereNotIn('id', $notinxxx)
                ->get();
            $comboxxx = [];
            foreach ($usuario as $registro) {
                $comboxxx[] = [
                    'id' => $registro->id,
                    'label' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido,
                    'value' => $registro->s_documento . ' | ' .
                        $registro->s_primer_nombre . ' ' .
                        $registro->s_segundo_nombre . ' ' .
                        $registro->s_primer_apellido . ' ' .
                        $registro->s_segundo_apellido
                ];
            }
            return response()->json($comboxxx);
        }
    }
    private function getCombos($dataxxxx, $ajaxxxxx, $pselecte)
    {
        if ($ajaxxxxx == false)
            $comboxxx = ['' => 'Seleclcione'];
        else
            $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => ''];

        foreach ($dataxxxx as $registro) {
            $selected = '';
            if ($pselecte == $registro->valuexxx) {
                $selected = 'selected';
            }
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx, 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
    public function municipios(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = SisMunicipio::select(['id as valuexxx', 's_municipio as optionxx'])->where('sis_departam_id', $request->all()['padrexxx'])->get();
            return response()->json([
                $this->getCombos($dataxxxx, true, $request->all()['pselecte']),
                $request->all()['campoxxx']
            ]);
        }
    }

    public function getMunicipios(Request $request)
    {
        if ($request->ajax()) {

            // solucioando
            $dataxxxx = SisMunicipio::select(['id as valuexxx', 's_municipio as optionxx'])->where('sis_departam_id', $request->all()['padrexxx'])->get();
            return response()->json([
                $this->getCombos($dataxxxx, true, $request->all()['pselecte']),
                $request->all()['campoxxx']
            ]);
        }
    }


    public function getDepartamentos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = [];
            if ($request->all()['padrexxx'] == 228) {
                $dataxxxx[] = ['valuexxx' => 1, 'optionxx' => 'N/A', 'selected' => 'selected'];
                $dataxxxx = [$dataxxxx, 'i_prm_depto_certifica_id', $dataxxxx, 'i_prm_municipio_certifica_id'];
            } else {
                $dataxxxx = SisDepartam::select(['id as valuexxx', 's_departamento as optionxx'])->where('sis_pai_id', 2)->get();
                $dataxxxx = $this->getCombos($dataxxxx, true, $request->all()['pselecte']);
                $dataxxxx = [$dataxxxx, 'i_prm_depto_certifica_id', [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => '']], 'i_prm_municipio_certifica_id'];
            }
            return response()->json($dataxxxx);
        }
    }
    public function getDepartamentosMunicipios(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [];
            switch ($dataxxxx['tipoxxxx']) {
                case 'sis_departam_id':
                    $respuest = ['comboxxx' => SisMunicipio::combo($dataxxxx['padrexxx'], true), 'campoxxx' => 'sis_municipio_id', 'limpiarx' => '#sis_municipio_id'];
                    break;
                case 'sis_pai_id':
                    $respuest = ['comboxxx' => SisDepartam::combo($dataxxxx['padrexxx'], true), 'campoxxx' => 'sis_departam_id', 'limpiarx' => '#sis_departam_id,#sis_municipio_id'];
                    break;
            }
            return response()->json($respuest);
        }
    }
    /**
     * Justificaciones de los registros
     *
     * @param Request $request
     * @return void
     */
    public function getJustificaciones(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => $request->formular
                ])
            );
        }
    }
}
