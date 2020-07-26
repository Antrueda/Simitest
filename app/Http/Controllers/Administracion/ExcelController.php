<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Csd\CsdAlimentCompraImport;
use App\Imports\Csd\CsdAlimentFrecImport;
use App\Imports\Csd\CsdAlimentIngeImport;
use App\Imports\Csd\CsdAlimentPreparaImport;
use App\Imports\Csd\CsdDinfamAntecedenteImport;
use App\Imports\Csd\CsdDinFamiliarImport;
use App\Imports\Csd\CsdDinfamIncumpleImport;
use App\Imports\Csd\CsdDinfamProblemaImport;
use App\Imports\Csd\CsdViolenciaImport;
use App\Imports\Vsi\VsiAbuSexualImport;
use App\Imports\Vsi\VsiConcepRedImport;
use App\Imports\Vsi\VsiConceptoImport;
use App\Imports\Vsi\VsiConsumoExpectativaImport;
use App\Imports\Vsi\VsiConsumoImport;
use App\Imports\Vsi\VsiConsumoQuienImport;
use App\Imports\Vsi\VsiEstEmocionalImport;
use App\Imports\Vsi\VsiFacProtectorImport;
use App\Imports\Vsi\VsiFacRiesgoImport;
use App\Imports\Vsi\VsiGenIngresoImport;
use App\Imports\Vsi\VsiMetaImport;
use App\Imports\Vsi\VsiPotencialidadImport;
use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiAbuSexual;


use App\Imports\Vsi\VsiRedsocAcesoImport;
use App\Imports\Vsi\VsiRedsocActualImport;
use App\Imports\Vsi\VsiRedSocialImport;
use App\Imports\Vsi\VsiRedsocPasadoImport;
use App\Imports\Vsi\VsiRelFamiliarImport;
use App\Imports\Vsi\VsiRelfamMotivoImport;
use App\Imports\Vsi\VsiRelSocialesImport;
use App\Imports\Vsi\VsiRelSolDificultaImport;
use App\Imports\Vsi\VsiRelSolFacilitaImport;
use App\Imports\Vsi\VsiVioContextoImport;
use App\Imports\Vsi\VsiViolenciaImport;
use App\Imports\Vsi\VsiVioTipoImport;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\CsdAlimentInge;
use App\Models\consulta\pivotes\CsdAlimentPrepara;
use App\Models\consulta\pivotes\CsdDinfamAntecedente;
use App\Models\consulta\pivotes\CsdDinfamIncumple;
use App\Models\consulta\pivotes\CsdDinfamProblema;
use App\Models\sicosocial\Pivotes\VsiConcepRed;
use App\Models\sicosocial\Pivotes\VsiConsumoExpectativa;
use App\Models\sicosocial\Pivotes\VsiConsumoQuien;
use App\Models\sicosocial\Pivotes\VsiRedsocAceso;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita;
use App\Models\sicosocial\Pivotes\VsiVioContexto;
use App\Models\sicosocial\Pivotes\VsiVioTipo;
use App\Models\sicosocial\VsiConcepto;
use App\Models\sicosocial\VsiConsumo;
use App\Models\sicosocial\VsiEstEmocional;
use App\Models\sicosocial\VsiFacProtector;
use App\Models\sicosocial\VsiFacRiesgo;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiMeta;
use App\Models\sicosocial\VsiPotencialidad;
use App\Models\sicosocial\VsiRedsocActual;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRedsocPasado;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sicosocial\VsiRelSociales;
use App\Models\sicosocial\VsiViolencia;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'excel',
            'routinde' => 'excel',
            'parametr' => [],
            'volverax' => '',
            'rutacarp' => 'Administracion.Excel.',
            'tituloxx' => 'Subir: excel',
            'slotxxxx' => 'excel',
            'carpetax' => 'Excel',
            'indecrea' => false,
            'esindexx' => false
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'excel';
        $this->opciones['routnuev'] = 'excel';
        $this->opciones['routxxxx'] = 'excel';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->opciones['tablasxx'][] =
            [

                'titunuev' => 'NUEVA EPS',
                'titulist' => 'LISTA DE EPS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/administracion/eps',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'EPS'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eps.id'],
                    ['data' => 'nombre', 'name' => 'eps.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'tablaeps',
                'permisox' => $this->opciones['permisox'],
                'parametr' => [],
                'routxxxx' => $this->opciones['routxxxx'],
            ];


        $this->opciones['padrexxx'] = '';

        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->opciones['padrexxx'] = '';
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }


    public function armarSeeder()
    {
        $dataxxxx = VsiGenIngreso::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiGenIngreso::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_actividad_id' => {$registro->prm_actividad_id},
                'trabaja' => '{$registro->trabaja}',
                'prm_informal_id' => {$registro->prm_informal_id},
                'prm_otra_id' => {$registro->prm_otra_id},
                'prm_no_id' => {$registro->prm_no_id},
                'cuanto' => {$registro->cuanto},
                'prm_periodo_id' => {$registro->prm_periodo_id},
                'jornada_entre' => {$registro->jornada_entre},
                'prm_jor_entre_id' => {$registro->prm_jor_entre_id},
                'jornada_a' => {$registro->jornada_a},
                'prm_jor_a_id' => {$registro->prm_jor_a_id},
                'prm_frecuencia_id' => {$registro->prm_frecuencia_id},
                'aporte' => {$registro->aporte},
                'prm_laboral_id' => {$registro->prm_laboral_id},
                'prm_aporta_id' => {$registro->prm_aporta_id},
                'porque' => '{$registro->porque}',
                'cuanto_aporta' => {$registro->cuanto_aporta},
                'expectativa' => '{$registro->expectativa}',
                'descripcion' => '{$registro->descripcion}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }


    /**
     * Store a newly created resource in storage.
     * toma los datos existentes en el archivo XLS y los importa a la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $excelxxx = $request->file('excelxxx');
        Excel::import(new VsiGenIngresoImport(), $excelxxx);
//        return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}