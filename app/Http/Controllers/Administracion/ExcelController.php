<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Imports\Vsi\VsiAntecedenteImport;
use App\Imports\Vsi\VsiBienvenidaImport;
use App\Imports\Vsi\VsiBienvenidaMotivoImport;
use App\Imports\Vsi\VsiDatosVinculaImport;
use App\Imports\Vsi\VsiDinfamAusenciaImport;
use App\Imports\Vsi\VsiDinfamCuidadorImport;
use App\Imports\Vsi\VsiDinFamiliarImport;
use App\Imports\Vsi\VsiDinfamMadreImport;
=======
use App\Imports\Csd\CsdAlimentacionImport;
use App\Imports\Csd\CsdAlimentCompraImport;
use App\Imports\Csd\CsdAlimentFrecImport;
use App\Imports\Csd\CsdAlimentIngeImport;
use App\Imports\Csd\CsdAlimentPreparaImport;
use App\Imports\Csd\CsdComFamiliarObservacionesImport;
use App\Imports\Csd\CsdConclusionesImport;
use App\Imports\Csd\CsdDatosBasicosImport;
use App\Imports\Csd\CsdDinFamiliarImport;
use App\Imports\Csd\CsdDinfamIncumpleImport;
use App\Imports\Csd\CsdDinfamMadreImport;
use App\Imports\csd\CsdDinfamPadreImport;
use App\Imports\Csd\CsdImport;
use App\Imports\Csd\CsdJusticiaImport;
use App\Imports\Csd\CsdNnajEspecialImport;
use App\Imports\Csd\CsdResideambienteImport;
use App\Imports\Csd\CsdResidenciaImport;
use App\Imports\Csd\CsdViolenciaImport;
>>>>>>> 7b66a3b452ded66510f03b422a7ca2a09a004d7e
use App\Imports\Vsi\VsiEducacionsImport;
use App\Imports\Vsi\VsiRedsocAcesoImport;
use App\Imports\Vsi\VsiRedSocialImport;
use App\Imports\Vsi\VsiRedSocMotivoImport;
use App\Imports\Vsi\VsiRelfamAccionesImport;
use App\Imports\Vsi\VsiRelfamDificultadImport;
use App\Imports\Vsi\VsiRelFamiliarImport;
use App\Imports\Vsi\VsiRelFamiliarsImport;
use App\Imports\Vsi\VsiRelfamMotivoImport;
use App\Imports\Vsi\VsiRelSocialesImport;
use App\Imports\Vsi\VsiRelSolDificultaImport;
use App\Imports\Vsi\VsiRelSolFacilitaImport;
use App\Imports\Vsi\VsisImport;
use App\Imports\Vsi\VsiVioContextoImport;
use App\Imports\Vsi\VsiViolenciaImport;
use App\Imports\Vsi\VsiVioTipoImport;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo as PivotesVsiBienvenidaMotivo;
use App\Models\sicosocial\Pivotes\VsiDinfamAusencia;
use App\Models\sicosocial\Pivotes\VsiDinfamCuidador;
use App\Models\sicosocial\Pivotes\VsiRedsocAceso;
use App\Models\sicosocial\Pivotes\VsiRedSocMotivo;
use App\Models\sicosocial\Pivotes\VsiRelfamAcciones;
use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita as PivotesVsiRelSolFacilita;
use App\Models\sicosocial\Pivotes\VsiVioContexto;
use App\Models\sicosocial\Pivotes\VsiVioTipo;
use App\Models\sicosocial\VsiAntecedente;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiBienvenidaMotivo;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiDinfamMadre;
use App\Models\sicosocial\VsiRelSociales;
use App\Models\sicosocial\VsiViolencia;
use App\Models\sistema\SisDependencia;
use App\VsiRelSolFacilita;
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

    public function armarSeederX13()
    {
        $dataxxxx = VsiEducacion::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiEducacion::create([ 
                'vsi_id' => {$registro->vsi_id},
                'prm_estudia_id' => {$registro->prm_estudia_id},
                'dia' => {$registro->dia},
                'mes' => {$registro->mes},
                'ano' => {$registro->ano},
                'prm_motivo_id' => {$registro->prm_motivo_id},
                'prm_rendimiento_id' => {$registro->prm_rendimiento_id},
                'prm_dificultad_id' => {$registro->prm_dificultad_id},
                'prm_leer_id' => {$registro->prm_leer_id},
                'prm_escribir_id' => {$registro->prm_escribir_id},
                'descripcion' => '{$registro->descripcion}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br>";;
        }
    }

    public function armarSeederX7()
    {
        $dataxxxx = VsiGenIngreso::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiGenIngreso::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_actividad_id' => {$registro->prm_actividad_id},
                'trabaja' => {$registro->trabaja},
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
                'porque' => {$registro->porque},
                'cuanto_aporta' => {$registro->cuanto_aporta},
                'expectativa' => {$registro->expectativa},
                'descripcion' => {$registro->descripcion},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
            ]); <br />";;
        }
    }

    public function armarSeederx2()
    {
        $dataxxxx = PivotesVsiBienvenidaMotivo::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiBienvenidaMotivo::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_bienvenida_id' => {$registro->vsi_bienvenida_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX4()
    {
        $dataxxxx = VsiRelfamMotivo::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelfamMotivo::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_relfamiliar_id' => {$registro->vsi_relfamiliar_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX6()
    {
        $dataxxxx = VsiRelfamAcciones::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelfamAcciones::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_relfamiliar_id' => {$registro->vsi_relfamiliar_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX8()
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

    public function armarSeederX14()
    {
        $dataxxxx = VsiVioContexto::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiVioContexto::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_violencia_id' => {$registro->vsi_violencia_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX15()
    {
        $dataxxxx = VsiVioTipo::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiVioTipo::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_violencia_id' => {$registro->vsi_violencia_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX26()
    {
        $dataxxxx = VsiBienvenida::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiBienvenida::create([
                'vsi_id' => {$registro->vsi_id},
                'descripcion' => '{$registro->descripcion}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }

    public function armarSeederX27()
    {
        $dataxxxx = VsiRelFamiliar::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelFamiliar::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_representativa_id' => {$registro->prm_representativa_id},
                'representativa' => '{$registro->representativa}',
                'prm_mala_id' => {$registro->prm_mala_id},
                'prm_relacion_id' => {$registro->prm_relacion_id},
                'prm_gusto_id' => {$registro->prm_gusto_id},
                'porque' => '{$registro->porque}',
                'prm_familia_id' => {$registro->prm_familia_id},
                'prm_denuncia_id' => {$registro->prm_denuncia_id},
                'descripcion' => '{$registro->descripcion}',
                'prm_pareja_id' => {$registro->prm_pareja_id},
                'prm_dificultad_id' => {$registro->prm_dificultad_id},
                'dia' => {$registro->dia},
                'mes' => {$registro->mes},
                'ano' => {$registro->ano},
                'prm_responde_id' => {$registro->prm_responde_id},
                'descripcion1' => '{$registro->descripcion1}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
            ]); <br />";;
        }
    }

<<<<<<< HEAD
    public function armarSeederX28()
    {
        $dataxxxx = VsiDinFamiliar::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiDinFamiliar::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_familiar_id' => {$registro->prm_familiar_id},
                'prm_hogar_id' => {$registro->prm_hogar_id},
                'lugar' => '{$registro->lugar}',
                'descripcion' => '{$registro->descripcion}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }

    public function armarSeederX29()
    {
        $dataxxxx = VsiDinfamMadre::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiDinfamMadre::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_convive_id' => {$registro->prm_convive_id},
                'dia' => {$registro->dia},
                'mes' => {$registro->mes},
                'ano' => {$registro->ano},
                'hijo' => {$registro->hijo},
                'prm_separa_id' => {$registro->prm_separa_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }
=======
        //los excel comentados son los ya realizados
      //  Excel::import(new CsdImport, $excelxxx); //ok
        // Excel::import(new CsdJusticiaImport, $excelxxx); // ok
        // Excel::import(new CsdNnajEspecialImport, $excelxxx); //ok
        // Excel::import(new CsdResidenciaImport, $excelxxx); //ok
        // Excel::import(new CsdResideambienteImport, $excelxxx); //ok
        // Excel::import(new CsdViolenciaImport, $excelxxx); //ok
        // datos basicos
        Excel::import(new CsdDatosBasicosImport, $excelxxx); //ok
        // Excel::import(new CsdConclusionesImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentacionImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentFrecImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentCompraImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentIngeImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentPreparaImport, $excelxxx); // ok
        // Excel::import(new CsdDinfamMadreImport, $excelxxx); // ok
        // Excel::import(new CsdDinfamPadreImport, $excelxxx); // ok
        // Excel::import(new CsdDinFamiliarImport, $excelxxx); // ok
>>>>>>> 7b66a3b452ded66510f03b422a7ca2a09a004d7e

    public function armarSeederX10()
    {
        $dataxxxx = VsiDinfamCuidador::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiDinfamCuidador::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_dinfamiliar_id' => {$registro->vsi_dinfamiliar_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX30()
    {
        $dataxxxx = VsiDinfamAusencia::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiDinfamAusencia::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_dinfamiliar_id' => {$registro->vsi_dinfamiliar_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX22()
    {
        $dataxxxx = VsiRedSocMotivo::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRedSocMotivo::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_redsocial_id' => {$registro->vsi_redsocial_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX24()
    {
        $dataxxxx = VsiRelfamDificultad::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelfamDificultad::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_relfamiliar_id' => {$registro->vsi_relfamiliar_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX34()
    {
        $dataxxxx = VsiRelSociales::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelSociales::create([
                'vsi_id' => {$registro->vsi_id},
                'descripcion' => '{$registro->descripcion}',
                'prm_dificultad_id' => {$registro->prm_dificultad_id},
                'completa' => '{$registro->completa}',
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'i_prm_linea_base_id' => {$registro->i_prm_linea_base_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }

    public function armarSeederX32()
    {
        $dataxxxx = VsiRelSolDificulta::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelSolDificulta::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_relsocial_id' => {$registro->vsi_relsocial_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX33()
    {
        $dataxxxx = PivotesVsiRelSolFacilita::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRelSolFacilita::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_relsocial_id' => {$registro->vsi_relsocial_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }

    public function armarSeederX31()
    {
        $dataxxxx = VsiRedsocAceso::get();
        foreach($dataxxxx as $registro){
            echo "VsiRedsocAceso::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_redsocial_id' => {$registro->vsi_redsocial_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }        
    }

    public function armarSeederX35()
    {
        $dataxxxx = SisDependencia::get();
        foreach ($dataxxxx as $registro) {
            echo
                "SisDependencia::create([
                    'id'=>{$registro->id},
                    'nombre' => '{$registro->nombre}',
                'i_prm_cvital_id' => {$registro->i_prm_cvital_id},
                'i_prm_tdependen_id' => {$registro->i_prm_tdependen_id},
                'sis_dependencia_id' => {$registro->sis_dependencia_id},
                'i_prm_sexo_id' => {$registro->i_prm_sexo_id},
                's_direccion' => '{$registro->s_direccion}',
                'sis_departamento_id' => {$registro->sis_departamento_id},
                'sis_municipio_id' => {$registro->sis_municipio_id},
                'sis_localidad_id' => {$registro->sis_localidad_id},
                'sis_barrio_id' => {$registro->sis_barrio_id},
                's_telefono' => '{$registro->s_telefono}',
                's_correo' => '{$registro->s_correo}',
                'i_tiempo' => {$registro->i_tiempo},
                'sis_esta_id'=>{$registro->sis_esta_id},
                's_observacion'=>'{$registro->s_observacion}']); <br>";
        }      
    }



    /// preguntar     
    public function armarSeederDuda()
    {
        $dataxxxx = SisDependencia::get();
        foreach ($dataxxxx as $registro) {
            echo
                "SisDependencia::create([
                    'id'=>{$registro->id},
                    'nombre' => '{$registro->id}',
                'i_prm_cvital_id' => {$registro->nombre},
                'i_prm_tdependen_id' => {$registro->i_prm_tdependen_id},
                'sis_dependencia_id' => {$registro->sis_dependencia_id},
                'i_prm_sexo_id' => {$registro->i_prm_sexo_id},
                's_direccion' => '{$registro->s_direccion}',
                'sis_departamento_id' => {$registro->sis_departamento_id},
                'sis_municipio_id' => {$registro->sis_municipio_id},
                'sis_localidad_id' => {$registro->sis_localidad_id},
                'sis_barrio_id' => {$registro->sis_barrio_id},
                's_telefono' => '{$registro->s_telefono}',
                's_correo' => '{$registro->s_correo}',
                'i_tiempo' => {$registro->i_tiempo},
                'sis_esta_id'=>{$registro->sis_esta_id},
                's_observacion'=>'{$registro->s_observacion}']); <br>";
        }

        echo '<br><br><br><br><br><br><br>';
        foreach ($dataxxxx as $registro) {
            echo "Vsi::create([
            'id'=>{$registro->id},
            'sis_nnaj_id'=>{$registro->sis_nnaj_id},
            'dependencia_id'=>{$registro->dependencia_id},
            'fecha'=>'{$registro->fecha}',
            'user_crea_id'=>{$registro->user_crea_id},
            'user_edita_id'=>{$registro->user_edita_id},
            'sis_esta_id'=>{$registro->sis_esta_id},
            'created_at'=>'{$registro->created_at}',
            'updated_at'=>'{$registro->updated_at}',
            ]); <br>";
        }
    }

    public function armarSeeder()
    {
        $dataxxxx = VsiDatosVincula::get();
        foreach($dataxxxx as $registro){
            echo "VsiDatosVincula::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_razon_id' => {$registro->prm_razon_id},
                'prm_persona_id' => {$registro->prm_persona_id},
                'dia' => {$registro->dia},
                'mes' => {$registro->mes},
                'ano' => {$registro->ano},
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
        Excel::import(new VsiDatosVinculaImport(), $excelxxx);

       
        //return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}