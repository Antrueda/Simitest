<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\Parametro;
use App\Models\sistema\SisCargo;
use App\Models\Sistema\SisMunicipio;
use app\Models\sistema\SisNnaj;
use App\Models\sistema\SisServicio;
use App\Models\Tema;
use App\Models\Temacombo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DBVistasTrait
{
    use DBVistaAuxTrait;
    public function getConfigVistas()
    {
        $dataxxxx = [
            'rutacarp' => 'FichaIngreso.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'FichaIngreso.Aavistas.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Dabasico', // nombre de la carpeta
            'tituloxx' => 'NNAJ', // titulo que se mustra en la vista
            'titucont' => 'NNAJ', // texto complementarios en el boton de la tabla
            'infocont' => 'Nnaj', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' => 0, // pestaña que debe estar activa
            'permisox' => 'fidatbas', // commplemento del permiso
            'routxxxx' => 'fidatbas', // complemento del route
        ];
        $this->getOpcionesOGT($dataxxxx);
        $this->opciones['pestpadr'] = 0;
        $this->opciones['tituhead'] = "FICHA DE INGRESO";
    }

    /**
     * buscar nnajs que no han quedado como componente familiar
     *
     * @return void
     */
    public function getNnajSinCompfami()
    {
        $compfami = FiCompfami::join('sis_nnajs', 'fi_compfamis.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where('prm_escomfam_id', 227)
            ->where('fi_compfamis.sis_nnaj_id', '<', 395)
            ->orderBy('fi_compfamis.sis_nnaj_id', 'ASC')
            ->get(['fi_compfamis.sis_nnaj_id']);
        $nnajsxxx = SisNnaj::where('prm_escomfam_id', 227)
            ->where('id', '<', 395)
            ->whereNotIn('id', $compfami)
            ->get();
        foreach ($nnajsxxx as $key => $value) {
            $datobasi = $value->fi_datos_basico;
            $fechregi = Carbon::parse($datobasi->nnaj_nacimi->d_nacimiento);
            $datobasi = [
                's_nombre_identitario' => $datobasi->nnaj_sexo->s_nombre_identitario,
                's_telefono' => '00000000000',
                'd_nacimiento' => $datobasi->nnaj_nacimi->d_nacimiento,
                'i_prm_parentesco_id' => 805,
                'prm_reprlega_id' => $fechregi->age > 17 ? 227 : 228,
                'i_prm_ocupacion_id' => 235,
                'i_prm_vinculado_idipron_id' => 227,
                'i_prm_convive_nnaj_id' => 227,
                'sis_nnajnnaj_id' => $value->id,
                'sis_nnaj_id' => $value->id,
                'user_crea_id' => $value->user_crea_id,
                'user_edita_id' => $value->user_edita_id,
                'sis_esta_id' => $value->sis_esta_id,
                'created_at' => $value->created_at->toDateString(),
                'updated_at' => $value->updated_at->toDateString(),
            ];
            $compfami = FiCompfami::create($datobasi);
        }
    }

    public function getScript($value, $modeloxx, $i)
    {
        // $value->sis_departam_id=$value->sisMunicipio->sis_departam_id;
        // $value->sis_pai_id=$value->sisMunicipio->sis_departam->sis_pai_id;

        $noxxxxxx = ['id', 'deleted_at', 'rn', 'sis_municipio', 'sis_tcampo_id'];
        $scriptxx =  $modeloxx . '::create([';
        foreach ($value->toArray() as $key => $values) {

            if (!in_array($key, $noxxxxxx))
                $scriptxx .= "'$key'=>'$values',";
        }
        $scriptxx .= "]); // " . $i . '<br>';
        echo $scriptxx;
    }

    public function index()
    {

        $this->getDatosBasicosFDT([
            'vercrear' => true,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        $respuest = $this->indexOGT();

        
        if (Auth::user()->s_documento == "111111111111") {
            $ficha = [
                1486, 1499, 1500, 1616, 1650, 1760, 1761, 1865, 1871, 1872, 1873, 1874, 1876, 1889, 1890, 1891, 1892, 1947, 2035, 2036, 2037, 2105, 2106, 2119, 2370, 2504,
                2566, 2567, 2568, 2569, 2570, 2593, 2594, 2595, 2596, 2599, 2689, 2690, 2691, 2692, 2775, 2935, 3115, 3202, 3204, 3240, 3241, 3242, 3244, 3254, 3262, 3289,
                3304, 3305, 3311, 3312, 3313, 3314, 3315, 3316, 3317, 3318, 3320, 3321, 3344, 3409, 3410, 3411, 3413, 3501, 3502, 3531, 3537, 3538, 3547, 3548, 3549, 3552,
                3554, 3573, 3574, 3575, 3583, 3637, 3644, 3645, 3646, 3651, 3652, 3656, 3660, 3661, 3675, 3685, 3686, 3693, 3694, 3732, 3790, 3792, 3793, 3812, 3813, 3815,
                3816, 3817, 3818, 3819, 3820, 3984, 3985, 3986, 4056, 4204, 4255, 4257, 4282, 4287, 4288, 4290, 4306, 4323, 4324, 4325, 4356, 4357, 4358, 4359, 4360, 4363,
                4364, 4365, 4403, 4405, 4457, 4458, 4489, 4513, 4514, 4558, 4742, 4743, 4861, 4862, 4864, 4866, 4958, 5149, 5174, 5175, 5177, 5178, 5179, 5192, 5310, 5311,
                5312, 5313, 5365, 5366, 5369, 5402, 5403, 5404, 5405, 5406, 5668, 5669, 5670, 5692, 5693, 5937, 5938, 5939, 5940, 5941, 5942, 5957, 5958, 5959, 5960, 6080,
                6081, 6082, 6083, 6240, 6725, 6937, 7006, 7007, 7177, 7247, 7266, 7362, 7394, 7395, 7450, 7457, 7481, 7483, 7503, 7512, 7563, 7565, 7594, 7596, 7597, 7598,
                7613, 7614, 7615, 7616, 7703, 7704, 7784, 8181, 8182, 8183, 8184, 8228, 8229, 8230, 8231, 8296, 8297, 8299, 8300, 8601, 8602, 8603, 8654, 8655, 8748, 8752,
                8755, 8831, 8866, 8872, 8913, 8920, 9253, 9403, 9693, 9694, 9695, 9724, 9725, 9726, 9727, 9954, 9955, 9956, 9957, 9958, 9959, 10133, 10134, 10135, 10136,
                10205, 10211, 10212, 10213, 10215, 10216, 10217, 10219, 10220, 10221, 10222, 10223, 10248, 10253, 10254, 10255, 10256, 10257, 10260, 10261, 10326, 10354,
                10425, 10426, 10427, 10451, 10493, 10494, 10495, 10497, 10511, 10513, 10574, 10635, 10636, 10637, 10638, 10639, 10640, 10641, 10642, 10643, 10644, 10834,
                10835, 10855, 10879, 10967, 11006, 11092, 11106, 11120, 11121, 11180, 11181, 11182, 11401, 11569, 11570, 11714, 11716, 11876, 11878, 11879, 11921, 11929,
                12003, 12004, 12005, 12112, 12189, 12190, 12191, 12192, 12193, 12194, 12195, 12196, 12197, 12198, 12199, 12200, 12201, 12202, 12203, 12227, 12242, 12276,
                12280, 12303, 12318, 12319, 12333, 12532, 12849,
            ];

            $maximoxx = 9000;
            $minimoxx = $maximoxx - 1000;
            $respuest = NnajFiCsd::orderBy('id', 'ASC')
                ->whereBetween('id', [$minimoxx + 1, $maximoxx])
                ->get();
            $modeloxx = "NnajFiCsd";
            $posterio = 0;
            $fidatosx=5960;
            foreach ($respuest as $key => $value) {
                $anterior = $posterio = $value->id;
                if ($key > 0) {
                    $anterior = $respuest[$key - 1]->id;
                }
                $diferenc = $posterio - $anterior;
                $original = $value->fi_datos_basico_id;
                if ($diferenc > 1) {
                    echo '// NO EXISTE EN PRODUCCION <br>';
                    // $notinxxx=[$value->sis_servicio_id];
                    for ($j = $anterior + 1; $j < $posterio; $j++) {
                        foreach ($ficha as $key => $value1) {
                            if ($value1<$fidatosx) {
                                array_shift($ficha);
                            }else {
                                $fidatosx=$value1;
                                break;
                            }
                        }
                       
                       $value->fi_datos_basico_id=$fidatosx;
                  
                        $this->getScript($value, $modeloxx, $j);
                        array_shift($ficha);
                        $fidatosx = $ficha[array_key_first($ficha)];
                    }
                    echo '// FIN NO EXISTE EN PRODUCCION <br>';
                }
                $value->fi_datos_basico_id = $original;
                $this->getScript($value, $modeloxx, $value->id);
            }
            echo  "// $fidatosx";
        } else {
            return $respuest;
        }
    }
    public function getListado(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->upiservicio = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.upiservicio';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getNnajsFi2depen($request); //Por UPI
        }
    }
    public function municipioajax(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['departam'], true));
        }
    }

    public function getEstrategia(Request $request)
    {
        if ($request->ajax()) {

            $respuest = ['selected' => 'prm_estrateg_id', 'comboxxx' => [['valuexxx' => '', 'optionxx' => 'Seleccione']]];
            switch ($request->padrexxx) {
                case 650:
                    $respuest['comboxxx'] = Tema::combo(355, false, true);
                    break;
                case 651:
                    $respuest['comboxxx'] = Tema::combo(354, true, true);
                    break;
                case 445:
                    $respuest['comboxxx'] = Parametro::find(445)->ComboAjaxUno;
                    break;
            }

            return response()->json($respuest);
        }
    }

    public function getServicio(Request $request)
    {
        if ($request->ajax()) {

            return response()->json(NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => true, 'padrexxx' => $request->padrexxx]));
        }
    }

    public function getFechaNacimiento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['fechaxxx' => '', 'edadxxxx' => ''];
            if (is_numeric($request->padrexxx) && $request->padrexxx >= 6) {
                $fechaxxx = explode('-', date('Y-m-d'));
                $respuest = ['fechaxxx' => ($fechaxxx[0] - $request->padrexxx) . '-' . $fechaxxx[1] . '-' . $fechaxxx[2], 'edadxxxx' => $request->padrexxx];
            }
            return response()->json($respuest);
        }
    }
}
