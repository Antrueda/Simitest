<?php

namespace App\Http\Controllers\FichaObservacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosDatosBasicoCrearRequest;
use App\Http\Requests\FichaObservacion\FosDatosBasicoUpdateRequest;
use Illuminate\Http\Request;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaobservacion\Area;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Models\Sistema\AreaUser;
use App\Models\Sistema\SisDepen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FosDatoBasicoController extends Controller
{

    private $opciones;

    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Ficha de Observación y Seguimiento',
            'rutaxxxx' => 'fos.fichaobservacion',
            'routxxxx' => 'fos.fichaobservacion',
            'routinde' => 'fos',
            'routnuev' => 'fos.fichaobservacion',
            'accionxx' => '',
            'volverax' => 'Fichas de Observación',
            'readonly' => '',
            'carpetax' => 'FichaObservacion',
            'rutacarp' => 'FichaObservacion.',
            'modeloxx' => '',
            'vercrear' => '',
            'nuevoxxx' => 'o Registro',
            'urlxxxxx' => 'api/fos/nnajs',
        ];

        $this->opciones['permisox'] = 'fosfichaobservacion';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['dispform'] = "none";
        $this->opciones['disptabx'] = "block";

        $this->opciones['areacont'] = ['' => 'Seleccione'];




        $this->opciones['usuarios'] = User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
    }
    public function index(Request $request)
    {

        $this->opciones['cabecera'] = [
            ['td' => 'Id'],
            ['td' => 'PRIMER NOMBRE'],
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
        $this->opciones['permisox'] = 'fosfichaobservacion';
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('fos.fichaobservacion.editar', [$dataxxxx['sis_nnaj_id'], FosDatosBasico::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    public function store(FosDatosBasicoCrearRequest $request)
    {

        return $this->grabar($request->all(), '', 'Ficha de Observación creada con exito');
    }

    private function view($objetoxx, $nombobje, $accionxx)
    {
        $this->opciones['dependen'] = User::getDependenciasUser(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['areacont'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
        $fechaxxx = explode('-', date('Y-m-d'));
        if ($fechaxxx[1] < 12) {
            $fechaxxx[1] = $fechaxxx[1] + 1;
        }
        $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];
        $this->opciones['tipsegui'] = ['' => 'Seleccione'];
        $this->opciones['seguixxx'] = ['' => 'Seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";
        $this->opciones['aniosxxx'] = '';
        if ($nombobje != '') {
            $this->opciones['seguixxx'] = FosTse::combo($objetoxx->area_id, true, false);

            $this->opciones['tipsegui'] = FosStse::combo([
                'ajaxxxxx' => false,
                'cabecera' => true,
                'seguimie' => $objetoxx->fos_tse_id
            ]);

            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];

        $rutaxxxx = 'FichaObservacion.' . strtolower($this->opciones['accionxx']);
        return view($rutaxxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create($nnajregi)
    {
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

    public function show($nnajregi, FosDatosBasico $db)
    {
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
    }

    public function edit($nnajregi,  FosDatosBasico $fichaobservacion)
    {
        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();

        return $this->view($fichaobservacion, 'modeloxx', 'Editar');
    }

    public function update(FosDatosBasicoUpdateRequest $request,  $db, FosDatosBasico $fichaobservacion)
    {
        return $this->grabar($request->all(), $fichaobservacion, 'Ficha de observación actualizada con exito');
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
                        'comboxxx' => FosStse::combo([
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
