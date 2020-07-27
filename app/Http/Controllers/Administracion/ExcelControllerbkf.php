<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Csd\CsdResidenciaImport;
use App\Models\consulta\CsdResidencia;
use App\Models\sistema\SisEsta;

use App\Models\sistema\SisBarrio;
use App\Traits\GestionTiempos\ManageDateTrait;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelControllerbkf extends Controller
{
    private $opciones;
    use ManageDateTrait;
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
echo $this->getFirstOLastDayMonth(['datexxxx'=>'10-07-2020','optionxx'=>1,'formatxx'=>'Y-m-d']).'<br>';
echo $this->getFirstOLastDayMonth(['datexxxx'=>'10-07-2020','optionxx'=>2,'formatxx'=>'Y-m-d']);
        $this->opciones['padrexxx'] = '';
        // return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }
    public function armarSeeder()
    {
        foreach (CsdResidencia::orderBy('csd_id', 'asc')->get() as $key => $value) {
            echo "
            CsdResidencia::create([
                'id' =>$value->csd_id,
                'csd_id' =>$value->csd_id,
                'prm_tipo_id' =>$value->prm_tipo_id,
                'prm_es_id' =>$value->prm_es_id,
                'prm_dir_tipo_id' =>$value->prm_dir_tipo_id,
                'prm_dir_zona_id' =>$value->prm_dir_zona_id,
                'prm_dir_via_id' => '$value->prm_dir_via_id',
                'dir_nombre' =>'$value->dir_nombre',
                'prm_dir_alfavp_id' =>$value->prm_dir_alfavp_id,
                'prm_dir_bis_id' =>$value->prm_dir_bis_id,
                'prm_dir_alfabis_id' =>$value->prm_dir_alfabis_id,
                'prm_dir_cuadrantevp_id' =>$value->prm_dir_cuadrantevp_id,
                'dir_generadora' =>'$value->dir_generadora',
                'prm_dir_alfavg_id' =>$value->prm_dir_alfavg_id,
                'dir_placa' =>'$value->dir_placa',
                'prm_dir_cuadrantevg_id' =>$value->prm_dir_cuadrantevg_id,
                'prm_estrato_id' =>$value->prm_estrato_id,
                'dir_complemento' =>'$value->dir_complemento' ,
                'sis_upzbarri_id' =>$value->sis_upzbarri_id,
                'telefono_uno' =>'$value->telefono_uno',
                'telefono_dos' =>'$value->telefono_dos',
                'telefono_tres' =>'$value->telefono_tres',
                'email' =>'$value->email',
                'prm_piso_id' =>$value->prm_piso_id,
                'prm_muro_id' =>$value->prm_muro_id,
                'prm_higiene_id' =>$value->prm_higiene_id,
                'prm_ventilacion_id' =>$value->prm_ventilacion_id,
                'prm_iluminacion_id' =>$value->prm_iluminacion_id,
                'prm_orden_id' =>$value->prm_orden_id,
                'user_crea_id' =>$value->user_crea_id,
                'user_edita_id' =>$value->user_edita_id,
                'sis_esta_id' =>$value->sis_esta_id,
                'created_at' =>'$value->created_at',
                'updated_at' =>'$value->updated_at',

                'prm_tipofuen_id' =>$value->prm_tipofuen_id]);

            <br>";
        }
    }
    public function armarSeederbk()
    {
        $dataxxxx = [
            ['DANUBIO'],
            ['PRADO VEGA'],
            [' '],
            ['HOGARES SOACHA'],
            [' '],
            ['OLARTE'],
            ['EL RECREO'],
            ['EL RECREO'],
            ['LAURELES'],
            ['EL RECREO'],
            ['PARAISO'],
            ['JJ RENDON'],
            ['TRES REYES'],
            ['ENSUEÑOS '],
            ['ARBORIZADORA ALTA'],
            ['EL PARAISO'],
            [' '],
            ['HACIENDA LOS MOLINOS '],
            ['DIANA TURBAY ARRAYANES '],
            ['QUINDIO '],
            ['LOURDES'],
            ['RAMIREZ'],
            ['LAS CRUCES '],
            ['ROCIO BAJO'],
            ['PRADOS SANTA BARBARA'],
            ['TOCAIMITA'],
            ['TOCAIMITA'],
            ['SAN GERMAN '],
            ['EL REFUGIO'],
            ['RESTREPO'],
            ['RESTREPO'],
            ['VILLA HELENA'],
            ['2398317'],
            ['el CORzO'],
            ['BOSA PARQUE '],
            ['POTRERITOS'],
            ['RECUERDO'],
            ['VILLA ESPERANZA '],
            ['SUCRE'],
            ['EL AMPARO'],
            ['MARIA PAZ'],
            ['MARIA PAZ'],
            ['PROVINCIA ALTA'],
            ['DANUBIO AZUL'],
            ['DANUBIO AZUL'],
            ['DANUBIO AZUL'],
            ['SAN IGNACIO'],
            ['LA MARQUEZA '],
            ['PALERMO SUR '],
            ['SAN IGNACIO'],
            ['BERBENAL'],
            ['ARABIA'],
            ['BRITALIA'],
            ['BRITALIA'],
            ['GRAN BRITALIA'],
            ['BRASILIA'],
            ['CARACOLI'],
            ['SIERRA MORENA'],
            ['CODITO'],
            ['ARBOLIZADORA ALTA'],
            ['JERUSALEN'],
            ['SANTA BARBARA'],
            ['LA VICTORIA '],
            ['EL LISTON'],
            [' '],
            [' '],
            ['SAN BERNARDO'],
            ['LA BELLEZA'],
            ['LACHES'],
            ['SANTA ROSA DE LIMA'],
            ['NUTIBARA'],
            ['VILLA DEL DIAMANTE'],
            ['TESORO'],
            ['EL PARAISO'],
            ['COLINAS'],
            ['LA MERCED'],
            ['TOCAIMITA'],
            ['TOCAIMITA'],
            ['TOCAIMITA'],
            ['SOCAREMA'],
            ['CIUDAD GRANADA'],
            ['UNIR'],
            ['SANTAFE'],
            ['SANTAFE'],
            ['SAN LUIS VIA LA CALERA'],
            ['LACHES'],
            [' '],
            [' '],
            [' '],
            ['LA CAÑIZA 2'],
            ['ROMA '],
            ['VENECIA'],

        ];
        // $dataxxxx = SisUpz::orderBy('id','asc')->get();
        foreach ($dataxxxx as $registro) {
            $barrioxx = SisBarrio::select([
                'sis_upzs.sis_localidad_id', 'sis_localidads.s_localidad',
                'sis_barrios.sis_upz_id', 'sis_upzs.s_upz',
                'sis_barrios.id', 'sis_barrios.s_barrio'

            ])
                ->join('sis_upzs', 'sis_barrios.sis_upz_id', '=', 'sis_upzs.id')
                ->join('sis_localidads', 'sis_upzs.sis_localidad_id', '=', 'sis_localidads.id')

                ->where('s_barrio', "$registro[0]")->get();
            if (isset($barrioxx[0]->id)) {
                foreach ($barrioxx as $barrioxy) {
                    echo  $barrioxy->sis_localidad_id . '=>' . $barrioxy->s_localidad .
                        ' == ' . $barrioxy->sis_upz_id . '=>' . $barrioxy->s_upz .
                        ' == ' . $barrioxy->id . '=>' . $barrioxy->s_barrio . ' xxx ' . $registro[0] .
                        '<br>';
                }
            } else {
                //echo $registro[0].'=>no existe';
            }
            echo '<br>';
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

        Excel::import(new CsdResidenciaImport, $excelxxx);
        // return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}
