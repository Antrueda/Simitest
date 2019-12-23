<?php

namespace App\Http\Controllers\FichaObservacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosDatosBasicoCrearRequest;
use App\Http\Requests\FichaObservacion\FosDatosBasicoUpdateRequest;
use Illuminate\Http\Request;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisFosArea;
use App\Models\sistema\SisFosSubTipoSeguimiento;
use App\Models\sistema\SisFosTipoSeguimiento;
use App\Models\User;

class FosDatoBasicoController extends Controller{
    private $bitacora;
    private $opciones;

    public function __construct(){
        $this->bitacora = new FosDatosBasico();
        $this->middleware(['permission:fosfichaobservacion-leer'], ['only' => ['show']]);
        $this->middleware(['permission:fosfichaobservacion-crear'], ['only' => ['show, create, store']]);
        $this->middleware(['permission:fosfichaobservacion-editar'], ['only' => ['show, edit, update']]);
        $this->middleware(['permission:fosfichaobservacion-borrar'], ['only' => ['show, destroy']]);
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

        $this->opciones['dispform'] = "none";
        $this->opciones['disptabx'] = "block";
        $this->opciones['permisox'] = 'fosfichaobservacion';
        $this->opciones['areacont'] = ['' => 'Seleccione'];
        foreach (SisFosArea::orderBy('nombre')->where('activo',1)->pluck('nombre', 'id') as $k => $d) {
            $this->opciones['areacont'][$k] = $d;
        }
        $this->opciones['seguixxx'] = ['' => 'Seleccione'];
        $this->opciones['tipsegui'] = ['' => 'Seleccione'];
        $this->opciones['dependen'] = SisDependencia::orderBy('nombre')->pluck('nombre', 'id');
        $this->opciones['usuarios'] = User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id');
    }
    public function index(Request $request){
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

    private function grabar($dataxxxx, $objectx, $infoxxxx){
        
        return redirect()
            ->route('fos.fichaobservacion.editar', [$dataxxxx['sis_nnaj_id'], FosDatosBasico::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    public function store(FosDatosBasicoCrearRequest $request){

        return $this->grabar($request->all(), '', 'Ficha de Observación creada con exito');
    }

    private function view($objetoxx, $nombobje, $accionxx){
        $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
        $fechaxxx = explode('-', date('Y-m-d'));
        if ($fechaxxx[1] < 12) {
            $fechaxxx[1] = $fechaxxx[1] + 1;
        }
        $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";
        $this->opciones['aniosxxx'] = '';
        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];

        $rutaxxxx = 'FichaObservacion.' . strtolower($this->opciones['accionxx']);
        return view($rutaxxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create($nnajregi){
        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        return $this->view('', '', 'crear');
    }

    public function lista($nnajregi){
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
        return $this->view('', '', 'crear');
    }

    public function show($nnajregi, FosDatosBasico $db){
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();
    }

    public function edit($nnajregi,  FosDatosBasico $fichaobservacion){

        $this->opciones['disptabx'] = "none";
        $this->opciones['dispform'] = "block";
        $this->opciones['nnajregi'] = $nnajregi;
        $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id', $nnajregi)->first();

        return $this->view($fichaobservacion, 'modeloxx', 'Editar');
    }

    public function update(FosDatosBasicoUpdateRequest $request,  $db, $id){
        return $this->grabar($request->all(), fosDatosBasico::usarioNnaj($db), 'Ficha de observación actualizada con exito');
    }

    public function obtenerTipoSeguimientos(Request $request, $id, $id0){

        if($request->ajax()){
            $tipoSeguimiento = SisFosTipoSeguimiento::tipoSeguimientos($id0);
            return response()->json($tipoSeguimiento);
        }
    }

    public function obtenerSubTipoSeguimientos(Request $request, $id, $id0, $id1){
    
        if($request->ajax()){
            $subTipoSeguimiento = SisFosSubTipoSeguimiento::subTipoSeguimientos($id0, $id1);
            return response()->json($subTipoSeguimiento);
        }
    }
}
