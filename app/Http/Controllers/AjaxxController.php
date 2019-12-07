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
use App\Models\sistema\SisActividad;
use App\Models\sistema\SisFsoporte;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisEntidad;
use App\Models\sistema\SisEntidadSalud;
use App\Models\sistema\SisInstitucionEdu;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisPai;
use App\Models\sistema\SisTabla;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisEp;
use App\Models\sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AjaxxController extends Controller
{
    public function departamentos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisDepartamento::combo($dataxxxx['sispaisx'], true));
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
        $fechaxxx = explode('-', $fechaxxx['fechaxxx']);
        return Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age;
    }

    function saberEdad(Request $request)
    {
        if ($request->ajax()) {
            $edadxxxx = $this->getEdad($request->all());
            $noaplica = [['valuexxx' => 1, 'optionxx' => 'NO APLICA']];
            $respuest = [[
                'edadxxxx' => $this->getEdad($request->all()),
                'generoxx' => ($edadxxxx < 15) ? $noaplica : Tema::combo(12, false, true),
                'orientac' => ($edadxxxx < 15) ? $noaplica : Tema::combo(13, false, true),
                'estacivi' => ($edadxxxx < 15) ? [['valuexxx' => 153, 'optionxx' => 'SOLTERO(A)']] : Tema::combo(19, false, true),
                'sexoxxxx' =>  Tema::combo(11, false, true),
                'condicio' => ($edadxxxx < 18) ? $noaplica : Tema::combo(23, false, true),
                'tiplibre' => ($edadxxxx < 18) ? $noaplica : Tema::combo(33, false, true),
            ]];

            return response()->json($respuest);
        }
    }
    function poblacionetnia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => 1, 'optionxx' => 'NO APLICA']];
            if ($dataxxxx['departam'] == 157) {
                $respuest = Tema::combo(61, false, true);
            }
            return response()->json($respuest);
        }
    }
    function ayuda(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => 1, 'optionxx' => 'NO APLICA']];
            if ($dataxxxx['padrexxx'] == 228) {
                $respuest = Tema::combo(286, false, true);
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
                        'jornadax' => Tema::combo(151, false, true),
                        'naturale' => Tema::combo(130, false, true),
                        'instituc' => SisInstitucionEdu::combo(false, true),
                        'dianoest' => true,
                        'mesnoest' => true,
                        'anonoest' => true,
                    ]];
                    break;
                case 228:
                    $respuest = [[
                        'jornadax' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'naturale' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'instituc' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'dianoest' => false,
                        'mesnoest' => false,
                        'anonoest' => false,
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
                        'famfisic' => Tema::combo(23, false, true),
                        'fampsico' => Tema::combo(23, false, true),
                        'famsexua' => Tema::combo(23, false, true),
                        'famecono' => Tema::combo(23, false, true),
                        'amifisic' => Tema::combo(23, false, true),
                        'amipsico' => Tema::combo(23, false, true),
                        'amisexua' => Tema::combo(23, false, true),
                        'amiecono' => Tema::combo(23, false, true),
                        'parfisic' => Tema::combo(23, false, true),
                        'parpsico' => Tema::combo(23, false, true),
                        'parsexua' => Tema::combo(23, false, true),
                        'parecono' => Tema::combo(23, false, true),
                        'comfisic' => Tema::combo(23, false, true),
                        'compsico' => Tema::combo(23, false, true),
                        'comsexua' => Tema::combo(23, false, true),
                        'comecono' => Tema::combo(23, false, true),
                    ]];
                    break;
                case 228:
                    $respuest = [[
                        'famfisic' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'fampsico' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'famsexua' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'famecono' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'amifisic' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'amipsico' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'amisexua' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'amiecono' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'parfisic' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'parpsico' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'parsexua' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'parecono' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'comfisic' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'compsico' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'comsexua' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'comecono' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
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
                'discapac' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(24, false, true),
                'certific' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(23, false, true),
                'independ' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(23, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function anticonceptivo(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'cuametod' => ($dataxxxx['padrexxx'] == 228 || $dataxxxx['padrexxx'] == 235) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(27, false, true),
                'usavolun' => ($dataxxxx['padrexxx'] == 228 || $dataxxxx['padrexxx'] == 235) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(25, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function regimensalud(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'entidadx' => $dataxxxx['padrexxx'] == 168 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : SisEntidadSalud::combo($dataxxxx['padrexxx'], false, true),
            ]];


            return response()->json($respuest);
        }
    }
    function comidasdiarias(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'nocomida' => $dataxxxx['padrexxx'] > 4 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(29, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function trabajogenera(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [['valuexxx' => ""]];

            switch ($dataxxxx['padrexxx']) {
                case 626:
                    $respuest = [[
                        'trabform' => false,
                        'trabinfo' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'otractiv' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'razonoge' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'tiporela' => Tema::combo(117, false, true),
                        'hacecuan' => true,
                    ]];
                    break;
                case 627:
                    $respuest = [[
                        'trabform' => true,
                        'trabinfo' => Tema::combo(115, false, true),
                        'otractiv' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'razonoge' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'tiporela' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'hacecuan' => true,
                    ]];
                    break;
                case 628:
                    $respuest = [[
                        'trabform' => true,
                        'trabinfo' =>  [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'otractiv' =>  Tema::combo(116, false, true),
                        'razonoge' =>  [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'tiporela' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'hacecuan' => true,
                    ]];
                    break;
                case 853:
                    $respuest = [[
                        'trabform' => true,
                        'trabinfo' =>  [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'otractiv' =>  [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'razonoge' =>  Tema::combo(122, false, true),
                        'tiporela' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'hacecuan' => false,
                    ]];
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
                'horainix' => ($dataxxxx['padrexxx'] == 467) ? false : true,
                'horafinx' => ($dataxxxx['padrexxx'] == 467) ? false : true,
            ];
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
                'paisxxxx' => $dataxxxx['padrexxx'] == 145 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : SisPai::combo(false, true),
                'departam' => $dataxxxx['padrexxx'] == 145 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : [],
                'municipi' => $dataxxxx['padrexxx'] == 145 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : []
            ]);
        }
    }
    function situacionmilitar(Request $request)
    {
        $noaplica = [['valuexxx' => 1, 'optionxx' => 'NO APLICA']];
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $edadxxxx = $this->getEdad($request->all());
            $respuest = [[
                'condicio' => ($dataxxxx['padrexxx'] == 21 || $edadxxxx < 18) ? $noaplica : Tema::combo(23, false, true),
                'tiplibre' => ($dataxxxx['padrexxx'] == 21 || $edadxxxx < 18) ? $noaplica : Tema::combo(33, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function claselibreta(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'claslibr' => ($dataxxxx['padrexxx'] == 228) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(33, false, true),
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
                'cuendocu' => ($dataxxxx['padrexxx'] == 145) ? $unosolox : Tema::combo(23, false, true),
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
                'prosalud' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(87, false, true),
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
                        'conopcio' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'infprote' => true,
                        'motprote' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                    ]];
                    break;
                case 814:
                    $respuest = [[
                        'concondi' => true,
                        'conopcio' => Tema::combo(147, false, true),
                        'infprote' => true,
                        'motprote' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                    ]];
                    break;
                case 815:
                    $respuest = [[
                        'concondi' => true,
                        'conopcio' =>  [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'infprote' => false,
                        'motprote' =>  Tema::combo(149, false, true),
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
                'dptcondi' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : SisDepartamento::combo(2, true),
                'muncondi' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : [['valuexxx' => '', 'optionxx' => 'Seleccion']],
                'tiecerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(23, true, true),
                'dptcerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : SisDepartamento::combo(2, true),
                'muncerti' => ($dataxxxx['padrexxx'] == 853 || $dataxxxx['padrexxx'] == 455) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : [['valuexxx' => '', 'optionxx' => 'Seleccion']],
            ]];
            return response()->json($respuest);
        }
    }

    function vinviolencia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'vinviole' => ($dataxxxx['padrexxx'] == 228) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(120, false, true),
            ]];
            return response()->json($respuest);
        }
    }

    function rieviolencia(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'rieviole' => ($dataxxxx['padrexxx'] == 228) ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(120, false, true),
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
                        'titipard' => Tema::combo(152, false, true),
                        'motipard' => Tema::combo(45, false, true),
                        'actupard' => Tema::combo(25, false, true),
                        'nomdefen' => false,
                        'teldefen' => false,
                        'lugapard' => false,
                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiempard' => true,
                        'titipard' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'motipard' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'actupard' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
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
                        'actusrpa' => Tema::combo(25, false, true),
                        'titisrpa' => Tema::combo(152, false, true),
                        'motisrpa' => Tema::combo(46, false, true),
                        'sancsrpa' => Tema::combo(47, false, true),

                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiemsrpa' => true,
                        'actusrpa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'titisrpa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'motisrpa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'sancsrpa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
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
                        'actuspoa' => Tema::combo(25, false, true),
                        'titispoa' => Tema::combo(152, false, true),
                        'motispoa' => Tema::combo(45, false, true),
                        'cumppena' => Tema::combo(45, false, true),
                        'estapres' => Tema::combo(45, false, true),
                    ]];
                    break;
                default:
                    $respuest = [[
                        'tiemspoa' => true,
                        'actuspoa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'titispoa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'motispoa' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'cumppena' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'estapres' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
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
                'pusisben' => $dataxxxx['padrexxx'] != '' ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(26, false, true),
            ]];
            return response()->json($respuest);
        }
    }

    function practicareligion(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'cualreli' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(78, false, true),
                'sacramen' => $dataxxxx['padrexxx'] == 228 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(79, false, true),
            ]];
            return response()->json($respuest);
        }
    }
    function cualsacramento(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [[
                'sacramen' => $dataxxxx['padrexxx'] != 494 ? [['valuexxx' => 1, 'optionxx' => 'NO APLICA']] : Tema::combo(79, false, true),
            ]];
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
                        'tipoviax' => Tema::combo(62, false, true),
                        'nomviapr' => false,
                        'alfviapr' => Tema::combo(39, false, true),
                        'tienebis' => Tema::combo(23, false, true),
                        'letrabis' => Tema::combo(39, false, true),
                        'cuadravp' => Tema::combo(38, false, true),
                        'numerovg' => false,
                        'alfabevg' => Tema::combo(39, false, true),
                        'placavgx' => false,
                        'cuadravg' => Tema::combo(38, false, true),
                    ]];
                    break;
                case 288:
                    $respuest = [[
                        'tipoviax' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'nomviapr' => true,
                        'alfviapr' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'tienebis' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'letrabis' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'cuadravp' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'numerovg' => true,
                        'alfabevg' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'placavgx' => true,
                        'cuadravg' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                    ]];
                    break;
                case 289:
                    $respuest = [[
                        'tipoviax' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'nomviapr' => true,
                        'alfviapr' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'tienebis' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'letrabis' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'cuadravp' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'numerovg' => true,
                        'alfabevg' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
                        'placavgx' => true,
                        'cuadravg' => [['valuexxx' => 1, 'optionxx' => 'NO APLICA']],
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

            $usuario = FiDatosBasico::orWhere('s_documento', 'LIKE', '%' . $dataxxxx['buscarxx'] . '%')
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
                    SisDependencia::where('id', $dataxxxx['sis_dependencia_id'])->first()->sis_servicios()->attach([$dataxxxx['sis_servicio_id']]);
                    break;
                case 5: // personal
                    SisDependencia::where('id', $dataxxxx['sis_dependencia_id'])->first()->users()->attach([$dataxxxx['user_id'] => ['i_prm_condicional_id' => $dataxxxx['responsable']]]);
                    break;
                case 6: // servicios
                    SisEp::where('id', $dataxxxx['sis_ep_id'])->first()->sis_servicios()->attach([$dataxxxx['sis_servicio_id']]);
                    break;
                case 7: // personal
                    SisEp::where('id', $dataxxxx['sis_ep_id'])->first()->users()->attach([$dataxxxx['user_id'] => ['i_prm_condicional_id' => $dataxxxx['responsable']]]);
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
            $responsa = SisDependencia::where('id', $dataxxxx['sis_dependencia_id'])->first()->sis_servicios;
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
            $responsa = SisDependencia::where('id', $dataxxxx['sis_dependencia_id'])->first()->users;
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
    function municipios(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = SisMunicipio::select(['id as valuexxx', 's_municipio as optionxx'])->where('sis_departamento_id', $request->all()['padrexxx'])->get();
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
                $dataxxxx[] = ['valuexxx' => 1, 'optionxx' => 'NO APLICA', 'selected' => 'selected'];
                $dataxxxx = [$dataxxxx, 'i_prm_depto_certifica_id', $dataxxxx, 'i_prm_municipio_certifica_id'];
            } else {
                $dataxxxx = SisDepartamento::select(['id as valuexxx', 's_departamento as optionxx'])->where('sis_pais_id', 2)->get();
                $dataxxxx = $this->getCombos($dataxxxx, true, $request->all()['pselecte']);
                $dataxxxx = [$dataxxxx, 'i_prm_depto_certifica_id', [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => '']], 'i_prm_municipio_certifica_id'];
            }
            return response()->json($dataxxxx);
        }
    }
}
