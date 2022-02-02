<?php

namespace App\Traits\Fi\Datobasi;


use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDese;
use App\Models\Parametro;
use App\Models\Sistema\SisMunicipio;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        return $respuest;
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
