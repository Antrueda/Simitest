<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Vsi\VsiAntecedenteImport;
use App\Models\sistema\SisEsta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\Vsi\VsiBienvenidaImport;
use App\Imports\Vsi\VsiDinFamiliarImport;
use App\Imports\Vsi\VsiEducacionImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Imports\Vsi\VsiGenIngresoImport;
use App\Imports\Vsi\VsiRedSocialImport;
use App\Imports\Vsi\VsiRelFamiliarImport;
use App\Imports\Vsi\VsiRelSocialesImport;
use App\Models\sicosocial\VsiAntecedente;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sicosocial\VsiRelSociales;


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

    // ------------------------------------------------------------------------------------------------------

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
        Excel::import(new VsiEducacionImport(), $excelxxx);
        //return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}