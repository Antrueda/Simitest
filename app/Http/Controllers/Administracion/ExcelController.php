<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Vsi\VsiBienvenidaMotivoImport;
use App\Imports\Vsi\VsiDinFamiliarImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Imports\Vsi\VsiRedSocialImport;
use App\Imports\Vsi\VsiRelFamiliarsImport;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo as PivotesVsiBienvenidaMotivo;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiBienvenidaMotivo;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiDinFamiliar;

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


    public function armarSeederX()
    {
        $dataxxxx = VsiDatosVincula::get();
        foreach ($dataxxxx as $registro) {
            echo
                "VsiDatosVincula::create([ 
                    'vsi_id' => {$registro->vsi_id}, 
                    'prm_razon_id' => {$registro->prm_razon_id}, 
                    'prm_persona_id' => {$registro->prm_persona_id}, 
                    'dia' =>{$registro->dia}, 
                    'mes' => {$registro->mes}, 
                    'ano' => {$registro->ano}, 
                    'prm_fuendato_id'=>
                    'user_crea_id' => 1, 
                    'user_edita_id' =>1,
                    'created_at'=>'{$registro->created_at}',
                    'updated_at'=>'{$registro->updated_at}',
                    'sis_esta_id' => 1, 
                ]); <br>";
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



    public function armarSeederQ()
    {
        $dataxxxx = VsiBienvenida::get();
        foreach($dataxxxx as $registro){
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


    public function armarSeederX8()
    {
        $dataxxxx = PivotesVsiBienvenidaMotivo::get();
        foreach($dataxxxx as $registro){
            echo "VsiBienvenidaMotivo::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_bienvenida_id' => {$registro->vsi_bienvenida_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }        
    }    

    public function armarSeederX10()
    {
        $dataxxxx = VsiDinFamiliar::get();
        foreach($dataxxxx as $registro){
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


    public function armarSeederX11()
    {
        $dataxxxx = VsiRedSocial::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiRedSocial::create([    
                'vsi_id' => {$registro->vsi_id},
                'prm_presenta_id' => {$registro->prm_presenta_id},
                'prm_protector_id' => {$registro->prm_protector_id},
                'prm_dificultad_id' => {$registro->prm_dificultad_id},
                'prm_quien_id' => {$registro->prm_quien_id},
                'prm_ruptura_genero_id' => {$registro->prm_ruptura_genero_id},
                'prm_ruptura_sexual_id' => {$registro->prm_ruptura_sexual_id},
                'prm_acceso_id' => {$registro->prm_acceso_id},
                'prm_servicio_id' => {$registro->prm_servicio_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',
            ]); <br />";;
        }
    }


    public function armarSeederX12()
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


 
    /**
     * Store a newly created resource in storage.
     * toma los datos existentes en el archivo XLS y los importa a la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $excelxxx = $request->file('excelxxx');

        Excel::import(new VsiEducacionsImport(), $excelxxx);

        // Excel::import(new VsiDatosVinculaImport(), $excelxxx);
        // Excel::import(new VsiRelFamiliarsImport(), $excelxxx);
        // Excel::import(new VsiBienvenidaImport, $excelxxx);
        // Excel::import(new VsiBienvenidaMotivoImport(), $excelxxx);
        // Excel::import(new VsiDinFamiliarImport(), $excelxxx);
        // Excel::import(new VsiRedSocialImport(), $excelxxx);

        //return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}