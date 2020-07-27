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
use App\Imports\Vsi\VsiEduDiftipoAImport;
use App\Imports\Vsi\VsiEduDiftipoBImport;
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
use App\Models\sicosocial\Pivotes\VsiEduDiftipoA;
use App\Models\sicosocial\Pivotes\VsiEduDiftipoB;
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
        $dataxxxx = VsiViolencia::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiViolencia::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_tip_vio_id' => {$registro->prm_tip_vio_id},
                'prm_fam_fis_id' => {$registro->prm_fam_fis_id},
                'prm_fam_psi_id' => {$registro->prm_fam_psi_id},
                'prm_fam_sex_id' => {$registro->prm_fam_sex_id},
                'prm_fam_eco_id' => {$registro->prm_fam_eco_id},
                'prm_amicol_fis_id' => {$registro->prm_amicol_fis_id},
                'prm_amicol_psi_id' => {$registro->prm_amicol_psi_id},
                'prm_amicol_sex_id' => {$registro->prm_amicol_sex_id},
                'prm_amicol_eco_id' => {$registro->prm_amicol_eco_id},
                'prm_par_fis_id' => {$registro->prm_par_fis_id},
                'prm_par_psi_id' => {$registro->prm_par_psi_id},
                'prm_par_sex_id' => {$registro->prm_par_sex_id},
                'prm_par_eco_id' => {$registro->prm_par_eco_id},
                'prm_compar_fis_id' => {$registro->prm_compar_fis_id},
                'prm_compar_psi_id' => {$registro->prm_compar_psi_id},
                'prm_compar_sex_id' => {$registro->prm_compar_sex_id},
                'prm_compar_eco_id' => {$registro->prm_compar_eco_id},
                'prm_ins_fis_id' => {$registro->prm_ins_fis_id},
                'prm_ins_psi_id' => {$registro->prm_ins_psi_id},
                'prm_ins_sex_id' => {$registro->prm_ins_sex_id},
                'prm_ins_eco_id' => {$registro->prm_ins_eco_id},
                'prm_lab_fis_id' => {$registro->prm_lab_fis_id},
                'prm_lab_psi_id' => {$registro->prm_lab_psi_id},
                'prm_lab_sex_id' => {$registro->prm_lab_sex_id},
                'prm_lab_eco_id' => {$registro->prm_lab_eco_id},
                'prm_dis_gen_id' => {$registro->prm_dis_gen_id},
                'prm_dis_ori_id' => {$registro->prm_dis_ori_id},
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
        Excel::import(new VsiViolenciaImport(), $excelxxx);
//        return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}