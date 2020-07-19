<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;

use App\Imports\Vsi\VsiEstEmocionalImport;

use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiEstEmocional;


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
        $dataxxxx = VsiEstEmocional::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiEstEmocional::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_siente_id' => {$registro->prm_siente_id},
                'prm_contexto_id' => {$registro->prm_contexto_id},
                'descripcion_siente' => {$registro->descripcion_siente},
                'prm_reacciona_id' => {$registro->prm_reacciona_id},
                'descripcion_reacciona' => {$registro->descripcion_reacciona},
                'descripcion_adecuado' => {$registro->descripcion_adecuado},
                'descripcion_dificulta' => {$registro->descripcion_dificulta},
                'prm_estresante_id' => {$registro->prm_estresante_id},
                'descripcion_estresante' => {$registro->descripcion_estresante},
                'prm_morir_id' => {$registro->prm_morir_id},
                'dia_morir' => {$registro->dia_morir},
                'mes_morir' => {$registro->mes_morir},
                'ano_morir' => {$registro->ano_morir},
                'prm_pensamiento_id' => {$registro->prm_pensamiento_id},
                'prm_amenaza_id' => {$registro->prm_amenaza_id},
                'prm_intento_id' => {$registro->prm_intento_id},
                'ideacion' => {$registro->ideacion},
                'amenaza' => {$registro->amenaza},
                'intento' => {$registro->intento},
                'prm_riesgo_id' => {$registro->prm_riesgo_id},
                'dia_ultimo' => {$registro->dia_ultimo},
                'mes_ultimo' => {$registro->mes_ultimo},
                'ano_ultimo' => {$registro->ano_ultimo},
                'descripcion_motivo' => {$registro->descripcion_motivo},
                'prm_lesiva_id' => {$registro->prm_lesiva_id},
                'descripcion_lesiva' => {$registro->descripcion_lesiva},
                'prm_sueno_id' => {$registro->prm_sueno_id},
                'dia_sueno' => {$registro->dia_sueno},
                'mes_sueno' => {$registro->mes_sueno},
                'ano_sueno' => {$registro->ano_sueno},
                'descripcion_sueno' => {$registro->descripcion_sueno},
                'prm_alimenticio_id' => {$registro->prm_alimenticio_id},
                'dia_alimenticio' => {$registro->dia_alimenticio},
                'mes_alimenticio' => {$registro->mes_alimenticio},
                'ano_alimenticio' => {$registro->ano_alimenticio},
                'descripcion_alimenticio' => {$registro->descripcion_alimenticio},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => {$registro->created_at},
                'updated_at' => {$registro->updated_at},
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
        Excel::import(new VsiEstEmocionalImport(), $excelxxx);
        // return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}