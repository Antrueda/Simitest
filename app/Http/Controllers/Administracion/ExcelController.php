<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;

use App\Imports\Users\UserImport;
use App\Models\fichaIngreso\FiAccione;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiActividadTiempoLibre;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiContacto;
use App\Models\Sistema\SisEsta;

use App\Models\sicosocial\VsiAbuSexual;


use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\FiJrCausasmo;
use App\Models\fichaIngreso\FiJrCausassi;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiLesicome;
use App\Models\fichaIngreso\FiModalidad;
use App\Models\fichaIngreso\FiMotivoVinculacion;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\fichaIngreso\FiRazonContinua;
use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\FiRazonIniciado;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\FiRiesgoEscnna;
use App\Models\fichaIngreso\FiSacramento;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\FiSituacionVulneracion;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\fichaIngreso\FiVictataq;
use App\Models\fichaIngreso\FiVictimaEscnna;
use App\Models\fichaIngreso\FiViolbasa;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
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
        $dataxxxx = FiDocumentosAnexa::get();
        foreach ($dataxxxx as $registro) {
            echo "FiDocumentosAnexa::create([
                'id' => {$registro->id},
                's_ruta' => '{$registro->s_ruta}',
                'fi_razone_id' => {$registro->fi_razone_id},
                'i_prm_documento_id' => {$registro->i_prm_documento_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => '{$registro->created_at}',
                'updated_at' => '{$registro->updated_at}',

            ]); <br />";;
        }
    }

    /*

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

