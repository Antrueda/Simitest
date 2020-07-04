<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Csd\CsdComFamiliarObservacionesImport;
use App\Imports\csd\CsdDinfamPadreImport;
use App\Imports\Csd\CsdImport;
use App\Imports\Csd\CsdJusticiaImport;
use App\Imports\Csd\CsdNnajEspecialImport;
use App\Imports\Csd\CsdResideambienteImport;
use App\Imports\Csd\CsdResidenciaImport;
use App\Imports\Csd\CsdViolenciaImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdJusticia;
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
        $dataxxxx = CsdViolencia::get();
        // {$registro->}
        foreach ($dataxxxx as $registro) {


            $seederxx = "CsdViolencia::create([";
            $seederxx .= "'id'=> {$registro->id},";
            $seederxx .= "'csd_id'=> {$registro->csd_id},";
            $seederxx .= "'prm_condicion_id'=> {$registro->prm_condicion_id},";
            $seederxx .= "'departamento_cond_id'=> {$registro->departamento_cond_id},";
            $seederxx .= "'municipio_cond_id'=> {$registro->municipio_cond_id},";
            $seederxx .= "'prm_certificado_id'=> {$registro->prm_certificado_id},";
            $seederxx .= "'departamento_cert_id'=> {$registro->departamento_cert_id},";
            $seederxx .= "'municipio_cert_id'=> {$registro->municipio_cert_id},";
            $seederxx .= "'prm_tipofuen_id'=> {$registro->prm_tipofuen_id},";
            $seederxx .= "
            'sis_esta_id'=> {$registro->sis_esta_id},
            'created_at'=> '{$registro->created_at}',
            'updated_at'=> '{$registro->updated_at}',
                'user_crea_id'=> {$registro->user_crea_id},
                'user_edita_id'=> {$registro->user_edita_id},
                ]); <br>";
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
        // Excel::import(new CsdNnajEspecialImport, $excelxxx); //ok
        // Excel::import(new CsdResidenciaImport, $excelxxx); //ok
        // Excel::import(new CsdResideambienteImport, $excelxxx); //ok
        Excel::import(new CsdViolenciaImport, $excelxxx);

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
