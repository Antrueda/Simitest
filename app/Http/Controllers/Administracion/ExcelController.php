<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Users\UserImport;
use App\Models\Sistema\SisEsta;
use App\Models\Simianti\Ge\GeUpi;
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
        $dataxxxx = GeUpi::wherein('id_upi',[3,30,1,257])->get();
        //$dataxxxx = GeUpi::wherenotin('id_upi',[13,6,12,19,20,233,10,245,1,2,8,7,3,5,4,140,212,21,16,14,27,9,18,17,45])->get();
        foreach ($dataxxxx as $registro) {
            echo "SisDepen::create([
                'simianti_id' => '{$registro->id_upi}',
                'nombre' => '{$registro->nombre}',
                'i_prm_sexo_id' => 2324,
                's_direccion' => '{$registro->direccion}',
                's_telefono' => {$registro->telefonos},
                'i_prm_cvital_id' => 1679,
                'i_prm_tdependen_id' => 774,
                
                'user_edita_id' => 1,
                'user_crea_id' => 1,
                'sis_esta_id' => 1,
                'sis_departam_id' => 6,
                'sis_municipio_id' => 233,
                'sis_upzbarri_id' => 1510,
                'itiestan' => 0, 'itiegabe' => 0,
            ]); <br />";;
        }
    }

    /*
    'id_upi',
            'nombre',
            'sexo',
            'direccion',
            'id_localidad',
            'id_barrio',
            'telefonos',
            'correo_electronico',
            'fecha_insercion',
            'usuario_insercion',
            'fecha_modificacion',
            'usuario_modificacion',
            'id_area_padre',
            'tipo_area',
            'estado',
            'ciclo_vital',
            'codigo_municipio',
            'tiempo_actualizacion',
            'tipo_dependencia',
            'tipo_egreso',
            'centro_costo',
            'auxiliar',
            'capacidad_instalada',
            'observaciones',

            'id',
                'nombre',
                'i_prm_cvital_id',
                'i_prm_tdependen_id',

                'i_prm_sexo_id',
                's_direccion',
                'sis_departam_id',
                'sis_municipio_id',
                'estusuario_id',
                'simianti_id',
                'sis_upzbarri_id',
                's_telefono',
                's_correo',
                'itiestan',
                'itiegabe',
                'itigafin',
                'user_crea_id',
                'user_edita_id',
                'sis_esta_id',


    public function armarSeeder()
    {
         $dataxxxx = FiCondicionAmbiente::get();
        foreach ($dataxxxx as $registro) {
            echo "FiCondicionAmbiente::create([
                'id' => {$registro->id},
                'fi_residencia_id' => {$registro->fi_residencia_id},
                'i_prm_condicion_amb_id' => {$registro->i_prm_condicion_amb_id},
                'i_prm_tipo_tenencia_id' => {$registro->i_prm_tipo_tenencia_id},
                'i_prm_tipo_direccion_id' => {$registro->i_prm_tipo_direccion_id},
                'i_prm_zona_direccion_id' => {$registro->i_prm_zona_direccion_id},
                'i_prm_tipo_via_id' => {$registro->i_prm_tipo_via_id},
                's_nombre_via' => '{$registro->s_nombre_via}',
                'i_prm_alfabeto_via_id' => {$registro->i_prm_alfabeto_via_id},
                'i_prm_tiene_bis_id' => {$registro->i_prm_tiene_bis_id},
                'i_prm_bis_alfabeto_id' => {$registro->i_prm_bis_alfabeto_id},
                'i_prm_cuadrante_vp_id' => {$registro->i_prm_cuadrante_vp_id},
                'i_via_generadora' => {$registro->i_via_generadora},
                'i_prm_alfabetico_vg_id' => {$registro->i_prm_alfabetico_vg_id},
                'i_placa_vg' => {$registro->i_placa_vg},
                'i_prm_cuadrante_vg_id' => {$registro->i_prm_cuadrante_vg_id},
                'i_prm_estrato_id' => {$registro->i_prm_estrato_id},
                'i_prm_espacio_parcha_id' => {$registro->i_prm_espacio_parcha_id},
                's_nombre_espacio_parcha' => '{$registro->s_nombre_espacio_parcha}',
                'sis_upzbarri_id' => {$registro->sis_upzbarri_id},
                's_complemento' => '{$registro->s_complemento}',
                's_telefono_uno' => '{$registro->s_telefono_uno}',
                's_telefono_dos' => '{$registro->s_telefono_dos}',
                's_telefono_tres' => '{$registro->s_telefono_tres}',
                's_email_facebook' => '{$registro->s_email_facebook}',
                'sis_nnaj_id' => {$registro->sis_nnaj_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',

            ]); <br />";;


               $dataxxxx = FiMotivoVinculacion::get();
        foreach ($dataxxxx as $registro) {
            echo "FiFormacion::create([
                'id' => {$registro->id},
                'fi_formacion_id' => {$registro->fi_formacion_id},
                'i_prm_motivo_vinc_id' => {$registro->i_prm_motivo_vinc_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',

            ]); <br />";;
        }
    }


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
        Excel::import(new UserImport(), $excelxxx);
        //return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}

