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
use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiAbuSexual;


use App\Imports\Vsi\VsiRedsocAcesoImport;
use App\Imports\Vsi\VsiRedsocActualImport;
use App\Imports\Vsi\VsiRedsocPasadoImport;
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
use App\Models\sicosocial\Pivotes\VsiRedsocAceso;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita;
use App\Models\sicosocial\Pivotes\VsiVioContexto;
use App\Models\sicosocial\Pivotes\VsiVioTipo;
use App\Models\sicosocial\VsiRedsocActual;
use App\Models\sicosocial\VsiRedsocPasado;
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

    /**
     * Store a newly created resource in storage.
     * toma los datos existentes en el archivo XLS y los importa a la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $excelxxx = $request->file('excelxxx');
        Excel::import(new VsiRelSolDificultaImport(), $excelxxx);
//        return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}