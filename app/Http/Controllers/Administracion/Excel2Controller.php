<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Csd\CsdAlimentacionImport;
use App\Imports\Csd\CsdAlimentCompraImport;
use App\Imports\Csd\CsdAlimentFrecImport;
use App\Imports\Csd\CsdAlimentIngeImport;
use App\Imports\Csd\CsdAlimentPreparaImport;
use App\Imports\Csd\CsdComFamiliarImport;
use App\Imports\Csd\CsdComFamiliarObservacionesImport;
use App\Imports\Csd\CsdConclusionesImport;
use App\Imports\Csd\CsdDinfamAntecedenteImport;
use App\Imports\Csd\CsdDinFamiliarImport;
use App\Imports\Csd\CsdDinfamIncumpleImport;
use App\Imports\Csd\CsdDinfamMadreImport;
use App\Imports\csd\CsdDinfamPadreImport;
use App\Imports\Csd\CsdDinfamProblemaImport;
use App\Imports\Csd\CsdGeningAportarImport;
use App\Imports\Csd\CsdGenIngresoImport;
use App\Imports\Csd\CsdImport;
use App\Imports\Csd\CsdJusticiaImport;
use App\Imports\Csd\CsdNnajEspecialImport;
use App\Imports\Csd\CsdRedsocActualImport;
use App\Imports\Csd\CsdRedsocPasadoImport;
use App\Imports\Csd\CsdResideambienteImport;
use App\Imports\Csd\CsdResidenciaImport;
use App\Imports\Csd\CsdViolenciaImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComFamiliarObservaciones;
use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\CsdJusticia;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\CsdAlimentInge;
use App\Models\consulta\pivotes\CsdAlimentPrepara;
use App\Models\consulta\pivotes\CsdDinfamAntecedente;
use App\Models\consulta\pivotes\CsdDinfamIncumple;
use App\Models\consulta\pivotes\CsdDinfamProblema;
use App\Models\consulta\pivotes\CsdNnajEspecial;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiBienvenida;
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




    public function armarSeeder()
    {
        $dataxxxx = CsdComFamiliar::get();
        // {$registro->}


        foreach ($dataxxxx as $registro) {
            
            $seederxx = "CsdComFamiliar::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'primer_nombre'=>'$registro->primer_nombre', 
            'segundo_nombre'=>'$registro->segundo_nombre','primer_apellido'=>'$registro->primer_apellido', 'segundo_apellido'=>'$registro->segundo_apellido', 
            'identitario'=>'$registro->identitario','prm_documento_id'=>{$registro->prm_documento_id},'documento'=>{$registro->documento},'nacimiento'=>{$registro->nacimiento},
            'prm_sexo_id'=>{$registro->prm_sexual_id},'prm_estadoivil_id'=>{$registro->prm_estadoivil_id},'prm_genero_id'=>{$registro->prm_genero_id},
            'prm_sexual_id'=>{$registro->prm_sexual_id},'prm_grupo_etnico_id'=>{$registro->prm_grupo_etnico_id},'prm_documento_id'=>{$registro->prm_documento_id},
            'prm_grupo_etnico_id'=>{$registro->prm_grupo_etnico_id},'prm_ocupacion_id'=>{$registro->prm_ocupacion_id},'prm_parentezco_id'=>{$registro->prm_parentezco_id},
            'prm_convive_id'=>{$registro->prm_convive_id},'prm_visitado_id'=>{$registro->prm_visitado_id},'prm_vin_actual_id'=>{$registro->prm_vin_actual_id},
            'prm_vin_pasado_id'=>{$registro->prm_vin_pasado_id},'prm_regimen_id'=>{$registro->prm_regimen_id},'prm_cualeps_id'=>{$registro->prm_cualeps_id},
            'sisben'=>{$registro->sisben},'prm_sisben_id'=>{$registro->prm_sisben_id},'prm_discapacidad_id'=>{$registro->prm_discapacidad_id},
            'prm_cual_id'=>{$registro->prm_cual_id},'prm_peso_id'=>{$registro->prm_peso_id},'prm_peso_dos_id'=>{$registro->prm_peso_dos_id},'prm_leer_id'=>{$registro->prm_leer_id},
            'prm_escribir_id'=>{$registro->prm_escribir_id},'prm_operaciones_id'=>{$registro->prm_operaciones_id},'prm_aprobado_id'=>{$registro->prm_aprobado_id},'prm_educacion_id'=>{$registro->prm_educacion_id},
            'prm_estudia_id'=>{$registro->prm_estudia_id},'prm_cualGrupo_id'=>{$registro->prm_cualGrupo_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";
            
            /*
            $seederxx = "CsdRedsocPasado::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'nombre'=>'$registro->nombre',
            'servicios'=>'$registro->servicios','cantidad'=>{$registro->cantidad}, 'prm_unidad_id'=>{$registro->prm_unidad_id},'ano'=>{$registro->ano},'retiro'=>'$registro->retiro',
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";
            
            
            $seederxx = "CsdResidencia::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_tipo_id'=>{$registro->prm_tipo_id}, 
            'prm_es_id'=>{$registro->prm_es_id},'prm_dir_tipo_id'=>{$registro->prm_dir_tipo_id}, 'prm_dir_zona_id'=>{$registro->prm_dir_zona_id}, 
            'prm_dir_via_id'=>'$registro->prm_dir_via_id','dir_nombre'=>'$registro->dir_nombre','prm_dir_alfavp_id'=>{$registro->prm_dir_alfavp_id},
            'prm_dir_bis_id'=>{$registro->prm_dir_bis_id},'prm_dir_alfabis_id'=>{$registro->prm_dir_alfabis_id},'prm_dir_cuadrantevp_id'=>{$registro->prm_dir_cuadrantevp_id},
            'dir_generadora'=>{$registro->dir_generadora},'prm_dir_alfavg_id'=>{$registro->prm_dir_alfavg_id},'dir_placa'=>{$registro->dir_placa},
            'prm_dir_cuadrantevg_id'=>{$registro->prm_dir_cuadrantevg_id},'prm_estrato_id'=>{$registro->prm_estrato_id},'dir_complemento'=>'$registro->dir_complemento',
            'sis_localidad_id'=>{$registro->sis_localidad_id},'sis_upz_id'=>{$registro->sis_upz_id},'sis_barrio_id'=>{$registro->sis_barrio_id},
            'telefono_uno'=>{$registro->telefono_uno},'telefono_dos'=>{$registro->telefono_dos},'telefono_tres'=>{$registro->telefono_tres},
            'email'=>'$registro->email','prm_piso_id'=>{$registro->prm_piso_id},'prm_muro_id'=>{$registro->prm_muro_id},
            'prm_higiene_id'=>{$registro->prm_higiene_id},'prm_ventilacion_id'=>{$registro->prm_ventilacion_id},'prm_iluminacion_id'=>{$registro->prm_iluminacion_id},'prm_orden_id'=>{$registro->prm_orden_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";
                 
            /*
              
            $seederxx = "CsdGenIngreso::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'observacion'=>'$registro->observacion',
            'trabaja'=>'$registro->trabaja','prm_actividad_id'=>{$registro->prm_actividad_id}, 'prm_informal_id'=>{$registro->prm_informal_id},'prm_otra_id'=>{$registro->prm_otra_id},
            'prm_laboral_id'=>'{$registro->prm_laboral_id}','prm_frecuencia_id'=>'{$registro->prm_frecuencia_id}','intensidad'=>'{$registro->intensidad}',
            'prm_dificultad_id'=>'{$registro->prm_dificultad_id}','razon'=>'{$registro->razon}',
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}],'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";;
            
            $seederxx = "CsdGeningAporta::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_aporta_id'=>{$registro->prm_aporta_id},
            'mensual'=>{$registro->mensual},'aporte'=>{$registro->aporte}, 'jornada_entre'=>{$registro->jornada_entre},'prm_entre_id'=>{$registro->prm_entre_id},
            'jornada_a'=>'{$registro->jornada_a}','prm_a_id'=>'{$registro->prm_a_id}',
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}],'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";

$seederxx = "CsdDinfamPadre::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_convive_id'=>{$registro->prm_convive_id},
            'dia'=>{$registro->dia},'mes'=>{$registro->mes}, 'ano'=>{$registro->ano},'hijo'=>{$registro->hijo},'prm_separa_id'=>{$registro->prm_separa_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";

        
            $seederxx = "CsdViolencia::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_condicion_id'=>{$registro->prm_condicion_id},
            'departamento_cond_id'=>{$registro->departamento_cond_id},'municipio_cond_id'=>{$registro->municipio_cond_id}, 'prm_certificado_id'=>{$registro->prm_certificado_id},
            'departamento_cert_id'=>{$registro->departamento_cert_id},'municipio_cert_id'=>{$registro->municipio_cert_id}, 
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";

/*          
        $seederxx = "CsdAlimentacion::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id},'cant_personas'=>{$registro->cant_personas},'prm_horario_id'=>{$registro->prm_horario_id},
            'prm_apoyo_id'=>{$registro->prm_apoyo_id},'prm_entidad_id'=>{$registro->prm_entidad_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";

                $seederxx = "CsdResideambiente::create(['parametro_id'=>{$registro->parametro_id},'csd_residencia_id'=>{$registro->csd_residencia_id}, 
            'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";

             $seederxx = "CsdAlimentInge::create(['parametro_id'=>{$registro->parametro_id},'csd_alimentacion_id'=>{$registro->csd_alimentacion_id}, 
            'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";

             $seederxx = "CsdAlimentacion::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id},'cant_personas'=>{$registro->cant_personas},'prm_horario_id'=>{$registro->prm_horario_id},
            'prm_apoyo_id'=>{$registro->prm_apoyo_id},'prm_entidad_id'=>{$registro->prm_entidad_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";


  $seederxx = "CsdDinFamiliar::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id},'prm_familiar_id'=>{$registro->prm_familiar_id},
            'prm_hogar_id'=>{$registro->prm_hogar_id},'descripcion_0'=>'$registro->descripcion_0','prm_bogota_id'=>{$registro->prm_bogota_id},
            'prm_traslado_id'=>{$registro->prm_traslado_id},'descripcion_1'=>'$registro->descripcion_1','afronta'=>'$registro->afronta',
            'prm_norma_id'=>{$registro->prm_norma_id},'prm_conoce_id'=>{$registro->prm_conoce_id},'observacion'=>'$registro->observacion',
            'prm_actuan_id'=>{$registro->prm_actuan_id},'porque'=>'$registro->porque','prm_solucion_id'=>{$registro->prm_solucion_id},
            'prm_problema_id'=>{$registro->prm_problema_id},'prm_destaca_id'=>{$registro->prm_destaca_id},'prm_positivo_id'=>{$registro->prm_positivo_id},
            'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'prm_cuidador_id'=>{$registro->prm_cuidador_id},'relevantes'=>'$registro->relevantes',
            'prm_jefe1_id'=>{$registro->prm_jefe1_id},'descripcion'=>'$registro->descripcion','jefe1'=>'$registro->jefe1',
            'prm_jefe2_id'=>{$registro->prm_jefe2_id},'jefe2'=>'$registro->jefe2','descripcion_2'=>'$registro->descripcion_2',
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";
            
                $seederxx = "CsdComFamiliarObservaciones::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'observaciones'=>'$registro->observaciones',
                            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}],'prm_tipofuen_id'=>{$registro->prm_tipofuen_id}]);<br>";;

    $seederxx = "CsdDinFamiliar::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id},'prm_familiar_id'=>{$registro->prm_familiar_id},
            'prm_hogar_id'=>{$registro->prm_hogar_id},'descripcion_0'=>'$registro->descripcion_0','prm_bogota_id'=>{$registro->prm_bogota_id},
            'prm_traslado_id'=>{$registro->prm_traslado_id},'descripcion_1'=>'$registro->descripcion_1','afronta'=>'$registro->afronta',
            'prm_norma_id'=>{$registro->prm_norma_id},'prm_conoce_id'=>{$registro->prm_conoce_id},'observacion'=>'$registro->observacion',
            'prm_actuan_id'=>{$registro->prm_actuan_id},'porque'=>'$registro->porque','prm_solucion_id'=>{$registro->prm_solucion_id},
            'prm_problema_id'=>{$registro->prm_problema_id},'prm_destaca_id'=>{$registro->prm_destaca_id},'prm_positivo_id'=>{$registro->prm_positivo_id},
            'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'prm_cuidador_id'=>{$registro->prm_cuidador_id},'relevantes'=>'$registro->relevantes',
            'prm_jefe1_id'=>{$registro->prm_jefe1_id},'descripcion'=>'$registro->descripcion','jefe1'=>'$registro->jefe1',
            'prm_jefe2_id'=>{$registro->prm_jefe2_id},'jefe2'=>'$registro->jefe2','descripcion_2'=>'$registro->descripcion_2',
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";
            
            $seederxx = "CsdDinfamProblema::create(['parametro_id'=>{$registro->parametro_id},'csd_dinfamiliar_id'=>{$registro->csd_dinfamiliar_id}, 
            'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";
              

  $seederxx = "CsdDinfamIncumple::create(['parametro_id'=>{$registro->parametro_id},'csd_dinfamiliar_id'=>{$registro->csd_dinfamiliar_id}, 
                'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id}]);<br>";
                */
            
             
            

 



        echo $seederxx;
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

        //los excel comentados son los ya realizados
       // Excel::import(new CsdImport, $excelxxx); //ok
        // Excel::import(new CsdJusticiaImport, $excelxxx); // ok
         //Excel::import(new CsdNnajEspecialImport, $excelxxx); //ok
        // Excel::import(new CsdResidenciaImport, $excelxxx); //ok
        // Excel::import(new CsdResideambienteImport, $excelxxx); //ok
       //  Excel::import(new CsdResidenciaImport, $excelxxx); //ok
        //Excel::import(new CsdGeningAportarImport, $excelxxx);
//        Excel::import(new CsdGenIngresoImport, $excelxxx);
        // datos basicos

        // Excel::import(new CsdConclusionesImport, $excelxxx); // ok
        // Excel::import(new CsdAlimentacionImport, $excelxxx); // ok
         //Excel::import(new CsdAlimentFrecImport, $excelxxx); // ok
        //Excel::import(new CsdAlimentCompraImport, $excelxxx); // ok
       //  Excel::import(new CsdAlimentIngeImport, $excelxxx); // ok
        //  Excel::import(new CsdAlimentPreparaImport, $excelxxx); // ok
        //Excel::import(new CsdDinfamPadreImport, $excelxxx); // ok
        // Excel::import(new CsdDinfamPadreImport, $excelxxx); // ok
         //Excel::import(new CsdDinfamProblemaImport, $excelxxx); // ok
         //Excel::import(new CsdDinfamIncumpleImport, $excelxxx); //
        // Excel::import(new CsdComFamiliarObservacionesImport, $excelxxx);




        //Excel::import(new CsdGenIngresoImport, $excelxxx);
        Excel::import(new CsdComFamiliarImport, $excelxxx);


       return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}
