<?php

namespace App\Traits\Fi\Compfami;


use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFAjaxTrait
{
    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_tipodocu_id', ''],
                'edadxxxx' => '',
                'paisxxxx' => ['sis_pai_id', ''],
                'departam' => ['sis_departam_id', [], ''],
                'municipi' => ['sis_municipio_id', [], ''],
            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $expedici = $document->sis_municipio;
                $dataxxxx['tipodocu'][1] = $document->prm_tipodocu_id;
                $dataxxxx['paisxxxx'][1] = $expedici->sis_departam->sis_pai_id;
                $dataxxxx['departam'][1] = SisDepartam::combo($dataxxxx['paisxxxx'][1], true);
                $dataxxxx['departam'][2] = $expedici->sis_departam_id;
                $dataxxxx['municipi'][1] = SisMunicipio::combo($dataxxxx['departam'][2], true);
                $dataxxxx['municipi'][2] = $expedici->id;
            }

            return response()->json($dataxxxx);
        }
    }

    public function getDepaMuni(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [];
            switch ($dataxxxx['tipoxxxx']) {
                case 'sis_departam_id':
                    $comboxxx = SisMunicipio::combo($dataxxxx['padrexxx'], true);
                    if ($dataxxxx['padrexxx'] == 1) {
                        $comboxxx = [['valuexxx' => 1, 'optionxx' => 'N/A']];
                    }
                    $respuest = ['comboxxx' => $comboxxx, 'campoxxx' => 'sis_municipio_id', 'limpiarx' => '#sis_municipio_id'];
                    break;
                case 'sis_pai_id':
                    $comboxxx = [['valuexxx' => 1, 'optionxx' => 'N/A']];
                    if ($dataxxxx['padrexxx'] == 2) {
                        $comboxxx = SisDepartam::combo($dataxxxx['padrexxx'], true);
                    }
                    $respuest = ['comboxxx' => $comboxxx, 'campoxxx' => 'sis_departam_id', 'limpiarx' => '#sis_departam_id'];
                    break;
            }
            return response()->json($respuest);
        }
    }
    public function getFechaNacimiento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['fechaxxx' => '', 'edadxxxx' => ''];
            if (is_numeric($request->padrexxx)) {
                $fechaxxx = explode('-', date('Y-m-d'));
                $respuest = ['fechaxxx' => ($fechaxxx[0] - $request->padrexxx) . '-' . $fechaxxx[1] . '-' . $fechaxxx[2], 'edadxxxx' => $request->padrexxx];
            }
            return response()->json($respuest);
        }
    }
    public function getNADocumento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'campoxxx' => 'prm_tipodocu_id',
                'comboxxx' => Tema::combo(3, true, true),
                'cedulaxx' => '',
                'readonly' => false,
                'document' => 's_documento',
                'tipoxxxx' => $request->tipoxxxx == 1 ? true : false,
                'paisxxxx' => ['sis_pai_id', SisPai::combo(true, true)],
                'departam' => ['sis_departam_id', [['valuexxx' => '', 'optionxx' => 'Seleccione']]],
                'municipi' => ['sis_municipio_id', [['valuexxx' => '', 'optionxx' => 'Seleccione']]],
            ];
            if ($request->padrexxx == 800 || $request->padrexxx == 1594 || $request->padrexxx == 145) {
                $fechaxxx = str_replace([" ", '-', ':'], "", date('Y-m-d H:m:s'));
                $respuest['comboxxx'] = [['valuexxx' => 145, 'optionxx' => 'SIN IDENTIFICACION']];
                $respuest['readonly'] = true;
                $respuest['paisxxxx'][1] = [['valuexxx' => 1, 'optionxx' => 'N/A']];
                $respuest['departam'][1] = $respuest['paisxxxx'][1];
                $respuest['municipi'][1] = $respuest['paisxxxx'][1];
                $respuest['cedulaxx'] = $fechaxxx;
            }
            return response()->json($respuest);
        }
    }
}
