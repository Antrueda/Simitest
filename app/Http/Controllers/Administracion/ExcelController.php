<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Vsi\VsiAbuSexualImport;
use App\Imports\Vsi\VsiConcepRedImport;
use App\Imports\Vsi\VsiConceptoImport;
use App\Imports\Vsi\VsiDinFamiliarImport;
use App\Imports\Vsi\VsiDinfamLibertadImport;
use App\Models\sistema\SisEsta;

use App\Imports\Vsi\VsiMetaImport;
use App\Imports\Vsi\VsiNnajAcademicaImport;
use App\Imports\Vsi\VsiNnajComportamentalImport;
use App\Imports\Vsi\VsiNnajEmocionalImport;
use App\Imports\Vsi\VsiNnajFamiliarImport;
use App\Imports\Vsi\VsiNnajSocialImport;
use App\Imports\Vsi\VsiRedSocMotivoImport;
use App\Imports\Vsi\VsiRelSolDificultaImport;
use App\Imports\Vsi\VsiRelSolFacilitaImport;
use App\Models\sicosocial\Pivotes\VsiConcepRed;
use App\Models\sicosocial\Pivotes\VsiDinFamiliar;
use App\Models\sicosocial\Pivotes\VsiDinfamLibertad;
use App\Models\sicosocial\Pivotes\VsiNnajAcademica;
use App\Models\sicosocial\Pivotes\VsiNnajComportamental;
use App\Models\sicosocial\Pivotes\VsiNnajEmocional;
use App\Models\sicosocial\Pivotes\VsiNnajFamiliar;
use App\Models\sicosocial\Pivotes\VsiNnajSocial;
use App\Models\sicosocial\Pivotes\VsiRedSocMotivo;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita;
use App\Models\sicosocial\VsiAbuSexual;
use App\Models\sicosocial\VsiConcepto;
use App\Models\sicosocial\VsiMeta;
use App\Models\sicosocial\VsiPotencialidad;
use App\Models\sicosocial\VsiSalud;
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


    /**
     * Store a newly created resource in storage.
     * toma los datos existentes en el archivo XLS y los importa a la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $excelxxx = $request->file('excelxxx');
        Excel::import(new VsiRedSocMotivoImport(), $excelxxx);
        // return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}
