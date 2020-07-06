<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\csd\CsdBienvenidaImport;
use App\Imports\Csd\CsdComFamiliarImport;
use App\Imports\Csd\CsdComFamiliarObservacionesImport;
use App\Imports\csd\CsdDinfamPadreImport;
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
use App\Models\consulta\CsdBienvenida;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\CsdJusticia;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
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

/*
            $seederxx = "CsdDatosBasico::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'primer_nombre'=>'$registro->primer_nombre', 
            'segundo_nombre'=>'$registro->segundo_nombre','primer_apellido'=>'$registro->primer_apellido', 'segundo_apellido'=>'$registro->segundo_apellido', 
            'identitario'=>'$registro->identitario','apodo'=>'$registro->apodo','prm_sexo_id'=>{$registro->prm_sexo_id},'prm_genero_id'=>{$registro->prm_genero_id},
            'prm_sexual_id'=>{$registro->prm_sexual_id},'nacimiento'=>{$registro->nacimiento},'pais_id'=>{$registro->pais_id},
            'departamento_id'=>{$registro->departamento_id},'municipio_id'=>{$registro->municipio_id},
            'prm_documento_id'=>{$registro->prm_documento_id},'prm_doc_fisico_id'=>{$registro->prm_doc_fisico_id},'prm_sin_fisico_id'=>{$registro->prm_sin_fisico_id},
            'documento'=>{$registro->documento},'pais_docum_id'=>{$registro->pais_docum_id},'departamento_docum_id'=>{$registro->departamento_docum_id},
            'municipio_docum_id'=>{$registro->municipio_docum_id},'prm_gruposang_id'=>{$registro->prm_gruposang_id},'prm_factorsang_id'=>{$registro->prm_factorsang_id},
            'prm_militar_id'=>{$registro->prm_militar_id},'prm_libreta_id'=>{$registro->prm_libreta_id},'prm_civil_id'=>{$registro->prm_civil_id},
            'prm_etnia_id'=>{$registro->prm_etnia_id},'prm_cual_id'=>{$registro->prm_cual_id},'prm_poblacion_id'=>{$registro->prm_poblacion_id},'prm_tipofuen_id'=>{$registro->prm_tipofuen_id},
            'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";

$seederxx = "CsdBienvenida::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_persona_id'=>{$registro->prm_persona_id},
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";
*/

$seederxx = "CsdComFamiliar::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'primer_nombre'=>'$registro->primer_nombre', 
'segundo_nombre'=>'$registro->segundo_nombre','primer_apellido'=>'$registro->primer_apellido', 'segundo_apellido'=>'$registro->segundo_apellido', 
'identitario'=>'$registro->identitario','prm_documento_id'=>'$registro->prm_documento_id','documento'=>{$registro->documento},'nacimiento'=>{$registro->nacimiento},
'prm_sexo_id'=>{$registro->prm_sexual_id},'prm_estadoivil_id'=>{$registro->prm_estadoivil_id},'prm_genero_id'=>{$registro->prm_genero_id},
'prm_sexual_id'=>{$registro->prm_sexual_id},'prm_grupo_etnico_id'=>{$registro->prm_grupo_etnico_id},'prm_documento_id'=>{$registro->prm_documento_id},
'prm_grupo_etnico_id'=>{$registro->prm_grupo_etnico_id},'prm_ocupacion_id'=>{$registro->prm_ocupacion_id},'prm_parentezco_id'=>{$registro->prm_parentezco_id},
'prm_convive_id'=>{$registro->prm_convive_id},'prm_visitado_id'=>{$registro->prm_visitado_id},'prm_vin_actual_id'=>{$registro->prm_vin_actual_id},
'prm_vin_pasado_id'=>{$registro->prm_vin_pasado_id},'prm_regimen_id'=>{$registro->prm_regimen_id},'prm_cualeps_id'=>{$registro->prm_cualeps_id},
'sisben'=>{$registro->sisben},'prm_sisben_id'=>{$registro->prm_sisben_id},'prm_discapacidad_id'=>{$registro->prm_discapacidad_id},
'prm_cual_id'=>{$registro->prm_cual_id},'prm_peso_id'=>{$registro->prm_peso_id},'prm_peso_dos_id'=>{$registro->prm_peso_dos_id},'prm_leer_id'=>{$registro->prm_leer_id},
'prm_escribir_id'=>{$registro->prm_escribir_id},'prm_operaciones_id'=>{$registro->prm_operaciones_id},'prm_aprobado_id'=>{$registro->prm_aprobado_id},'prm_educacion_id'=>{$registro->prm_educacion_id},
'prm_estudia_id'=>{$registro->prm_estudia_id},'prm_cualGrupo_id'=>{$registro->prm_cualGrupo_id},
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";
/*

$seederxx = "CsdRedsocPasado::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'nombre'=>'$registro->nombre',
'servicios'=>'$registro->servicios','cantidad'=>{$registro->cantidad}, 'prm_unidad_id'=>{$registro->prm_unidad_id},'ano'=>{$registro->ano},'retiro'=>'$registro->retiro',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";


$seederxx = "CsdRedsocActual::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_tipo_id'=>'$registro->prm_tipo_id',
'nombre'=>'$registro->nombre','servicios'=>'$registro->servicios', 'telefono'=>{$registro->telefono},'direccion'=>'$registro->direccion',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";

$seederxx = "CsdRedsocPasado::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'nombre'=>'$registro->nombre',
'servicios'=>'$registro->servicios','cantidad'=>{$registro->cantidad}, 'prm_unidad_id'=>{$registro->prm_unidad_id},'ano'=>{$registro->ano},'retiro'=>'$registro->retiro',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";

$seederxx = "CsdGenIngreso::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'observacion'=>'$registro->nombre',
'trabaja'=>'$registro->trabaja','prm_actividad_id'=>{$registro->prm_actividad_id}, 'prm_informal_id'=>{$registro->prm_informal_id},'prm_otra_id'=>{$registro->prm_otra_id},
'prm_laboral_id'=>'{$registro->prm_laboral_id}','prm_frecuencia_id'=>'{$registro->prm_frecuencia_id}','intensidad'=>'{$registro->intensidad}',
'prm_dificultad_id'=>'{$registro->prm_dificultad_id}','razon'=>'{$registro->razon}',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";

$seederxx = "CsdGeningAporta::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'prm_aporta_id'=>{$registro->prm_aporta_id},
'mensual'=>{$registro->mensual},'aporte'=>{$registro->aporte}, 'jornada_entre'=>{$registro->jornada_entre},'prm_entre_id'=>{$registro->prm_entre_id},
'jornada_a'=>'{$registro->jornada_a}','prm_a_id'=>'{$registro->prm_a_id}',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";

*/

            echo $seederxx;
        }
    }
/*
public function getArmarSeeder()
{
    
   
    $magicosx = "'user_crea_id'=>1,
    'user_edita_id'=>1,
     'sis_esta_id'=>1";
        foreach (CsdDatosBasico::get() as $key => $value) {
            echo "CsdDatosBasico::create(['id'=>{$value->id},'csd_id'=>{$value->csd_id}, 'primer_nombre'=>{$value->primer_nombre}, 
            'segundo_nombre'=>'{$value->segundo_nombre}','primer_apellido'=>{$value->primer_apellido}, 'segundo_apellido'=>{$value->segundo_apellido}, 
            'identitario'=>{$value->identitario},'apodo'=>{$value->apodo},'prm_sexo_id'=>{$value->prm_sexo_id},'prm_genero_id'=>{$value->prm_genero_id},
            'prm_sexual_id'=>{$value->prm_sexual_id},'nacimiento'=>{$value->nacimiento},'pais_id'=>{$value->pais_id},
            'departamento_id'=>{$value->departamento_id},'municipio_id'=>{$value->municipio_id},
            'prm_documento_id'=>{$value->prm_documento_id},'prm_doc_fisico_id'=>{$value->prm_doc_fisico_id},'prm_sin_fisico_id'=>{$value->prm_sin_fisico_id},
            'documento'=>{$value->documento},'pais_docum_id'=>{$value->pais_docum_id},'departamento_docum_id'=>{$value->departamento_docum_id},
            'municipio_docum_id'=>{$value->municipio_docum_id},'prm_gruposang_id'=>{$value->prm_gruposang_id},'prm_factorsang_id'=>{$value->prm_factorsang_id},
            'prm_militar_id'=>{$value->prm_militar_id},'prm_libreta_id'=>{$value->prm_libreta_id},'prm_civil_id'=>{$value->prm_civil_id},
            'prm_etnia_id'=>{$value->prm_etnia_id},'prm_cual_id'=>{$value->prm_cual_id},'prm_poblacion_id'=>{$value->prm_poblacion_id},'prm_tipofuen_id'=>{$value->prm_tipofuen_id},
            'user_crea_id'=>{$value->user_crea_id},'user_edita_id'=>{$value->user_edita_id},'sis_esta_id'=>{$value->sis_esta_id}]);<br>";


            'prm_militar_id'=> $row[23],
            'prm_libreta_id'=> $row[24],
            'prm_civil_id'=> $row[25],
            'prm_etnia_id'=> $row[26],
            'prm_cual_id'=> $row[27],
            'prm_poblacion_id'=> $row[28],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1



*/

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
        // Excel::import(new CsdNnajEspecialImport, $excelxxx); //ok
        // Excel::import(new CsdResidenciaImport, $excelxxx); //ok
        // Excel::import(new CsdResideambienteImport, $excelxxx); //ok
        //Excel::import(new CsdViolenciaImport, $excelxxx);
       // Excel::import(new CsdBienvenidaImport, $excelxxx);
       Excel::import(new CsdComFamiliarImport, $excelxxx);
       //Excel::import(new CsdRedsocPasadoImport, $excelxxx);
       //Excel::import(new CsdRedsocActualImport, $excelxxx);
       //Excel::import(new CsdGenIngresoImport, $excelxxx);
       //Excel::import(new CsdGeningAportarImport, $excelxxx);
       
        // Excel::import(new CsdComFamiliarObservacionesImport, $excelxxx);
        //Excel::import(new CsdAlimentacionImport, $excelxxx);

        //Excel::import(new CsdConclusionesImport, $excelxxx);
        //Excel::import(new CsdConclusionesImport, $excelxxx);
        //Excel::import(new CsdGenIngresoImport, $excelxxx);
        //Excel::import(new CsdComFamiliarImport, $excelxxx);
        //Excel::import(new CsdDinfamPadreImport, $excelxxx);
        //Excel::import(new CsdDinfamMadreImport, $excelxxx);
        //Excel::import(new CsdDinfamPadreImport, $excelxxx);

        return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}
