<?php

namespace App\Traits\Indicadores;

use App\Models\Indicadores\Administ\InNnajliba;
use App\Models\sistema\SisTabla;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar el crud para los indicadores
 */
trait IndisplibaTrait
{
    /**
     * Encontrar campos de las tablas a las que le han parametrizado para ser disparadores de indicadores
     *
     * @return object
     */
    public function getCamposParametrizados($dataxxxx)
    {
        $tablaxxx = strtoupper($dataxxxx['modeloxx']->getTable());
        $tablaidx = SisTabla::where('s_tabla', $tablaxxx)->first(['id'])->id;
        $tablasxx = SisTabla::join('sis_tcampos', 'sis_tablas.id', '=', 'sis_tcampos.sis_tabla_id')
            ->join('in_pregtcams', 'sis_tcampos.id', '=', 'in_pregtcams.sis_tcampo_id')
            ->join('in_grupregus', 'in_pregtcams.id', '=', 'in_grupregus.in_pregtcam_id')
            ->join('in_pregresps', 'in_grupregus.id', '=', 'in_pregresps.in_grupregu_id')
            ->where('sis_tablas.id', $tablaidx)
            ->groupBy(['sis_tablas.s_tabla', 'sis_tcampos.id', 'sis_tcampos.s_campo', 'in_pregtcams.temacombo_id'])
            ->get(['sis_tcampos.id', 'sis_tcampos.s_campo', 'sis_tablas.s_tabla', 'in_pregtcams.temacombo_id']);
        return $tablasxx;
    }

    /**
     * Econtrar la respuesta a las preguntas parametrizadas
     *
     * @param object $tablaxxx
     * @param int$registro
     * @return object
     */
    public function getResputaParametrizada($tablaxxx, $registro)
    {
        $respuest = DB::table($tablaxxx->s_tabla)
            ->join('in_pregresps', $tablaxxx->s_tabla . '.' . $tablaxxx->s_campo, '=', 'in_pregresps.prm_respuest_id')
            ->join('in_grupregus', 'in_pregresps.in_grupregu_id', '=', 'in_grupregus.id')
            ->join('in_libagrups', 'in_grupregus.in_libagrup_id', '=', 'in_libagrups.id')
            ->join('in_indilibas', 'in_libagrups.in_indiliba_id', '=', 'in_indilibas.id')
            ->join('in_pregtcams', 'in_grupregus.in_pregtcam_id', '=', 'in_pregtcams.id')
            ->where($tablaxxx->s_tabla . '.id', $registro)
            ->where('in_pregtcams.temacombo_id', $tablaxxx->temacombo_id)
            ->first([
                "in_grupregu_id",
                "prm_respuest_id",
                "in_libagrup_id",
                "in_pregtcam_id",
                "prm_disparar_id",
                "in_indiliba_id",
                "in_areaindi_id",
                "in_linea_base_id",
                'in_pregresps.id',
            ]);
        return $respuest;
    }
    
    /**
     * Asignar la respuesta para armar la linea base del nnaj
     *
     * @param object $value
     * @param int $registro
     * @param array $dataxxxx
     * @return void
     */
    public function setLinaBaseNnaj($value, $registro, $dataxxxx)
    {
        $linebase = $this->getResputaParametrizada($value, $registro);
        if (!is_null($linebase)) {
            $counliba = InNnajliba::where('in_pregresp_id', $linebase->id)->where('sis_nnaj_id', $dataxxxx['nnajidxx'])->first(['id']);
            if (is_null($counliba)) {
                $datosxxx = [
                    'sis_nnaj_id' => $dataxxxx['nnajidxx'],
                    'in_areaindi_id' => $linebase->in_areaindi_id,
                    'in_indiliba_id' => $linebase->in_indiliba_id,
                    'in_libagrup_id' => $linebase->in_libagrup_id,
                    'in_grupregu_id' => $linebase->in_grupregu_id,
                    'in_pregresp_id' => $linebase->id,
                    'user_crea_id' => Auth::id(),
                    'user_edita_id' => Auth::id(),
                    'sis_esta_id' => 1,
                ];
                InNnajliba::create($datosxxx);
            }
        }
    }

    /**
     * Conocer los campos de la tabla que se le han parametrizado para generar linea base
     *
     * @return void
     */
    public function getCamposTabla($dataxxxx)
    {
        $respuest = $this->getCamposParametrizados($dataxxxx);
        if (!is_null($respuest)) {
            $requestx = $dataxxxx['modeloxx']->toArray();
            foreach ($respuest as $key => $value) {
                $this->setLinaBaseNnaj($value, $requestx['id'], $dataxxxx);
            }
        }
    }
    public function getLinaBaseNnaj($dataxxxx)
    {
        $this->getCamposTabla($dataxxxx);
    }
}
