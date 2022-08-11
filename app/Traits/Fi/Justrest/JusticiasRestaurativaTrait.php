<?php

namespace App\Traits\Fi\Justrest;

use App\Models\Parametro;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait JusticiasRestaurativaTrait
{
    public function getCambiarJRT($dataxxxx, $cambioxx)
    {
        $raadonlx = '';
        if ($dataxxxx['ajaxxxxx']) {
            if ($cambioxx) {
                $raadonlx = true;
            } else {
                $raadonlx = false;
            }
        } else {
            if ($cambioxx) {
                $raadonlx = 'readonly';
            }
        }
        return $raadonlx;
    }
    public function getMostrarJRT($dataxxxx, $raadonly, $dataread)
    {
        $campoxxx = $dataread[3];
        if ($dataxxxx['ajaxxxxx']) {
            $campoxxx = '#' . $dataread[2];
        }
        $raadonly[$dataread[0]][$dataread[1]][0] = $campoxxx;
        $raadonly[$dataread[0]][$dataread[1]][1] = $this->getCambiarJRT($dataxxxx, false);
        return $raadonly;
    }
    public function getReadonly($dataxxxx)
    {
        $raadonly = [];
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [1, 0, 'i_cuanto_pard', 'readpard']);
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [1, 1, 's_nombre_defensor', 'readnomd']);
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [1, 2, 's_telefono_defensor', 'readteld']);
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [1, 3, 's_lugar_abierto_pard', 'readluga']);
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [2, 0, 'i_cuanto_srpa', 'readsrpa']);
        $raadonly = $this->getMostrarJRT($dataxxxx, $raadonly, [3, 0, 'i_cuanto_spoa', 'readspoa']);
        $raadonly[4] = [];
        $raadonly[5] = [];

        return $raadonly[$dataxxxx['optionxx']];
    }
    public function getExiste($dataxxxx, $campoxxx)
    {
        $respuest = [];
        if (isset($dataxxxx['selected'][$campoxxx])) {
            if (is_array($dataxxxx['selected'][$campoxxx])) {
                $respuest = $dataxxxx['selected'][$campoxxx];
            } else {
                $respuest = [$dataxxxx['selected'][$campoxxx]];
            }
        }
        return $respuest;
    }
    /**
     * consultar el temacombo que se desea
     *
     * @param array $dataxxxx
     * @param array $datacomb
     * @return $comboxxx
     */
    public function getTemacomboJRT($dataxxxx, $datacomb)
    {
        /**
         * solo se devulte si la petición que se hace es por ajax
         */
        $comboxxx[0] = $datacomb[5];
        if ($dataxxxx['ajaxxxxx']) {
            $comboxxx[0] = $datacomb[0];
        }
        $comboxxx[1] = $this->getTemacomboCT(
            [
                'temaxxxx' => $datacomb[1],
                'cabecera' => $datacomb[2],
                'ajaxxxxx' => $dataxxxx['ajaxxxxx'],
                'orederby' => $datacomb[3],
                'campoxxx' => 'nombre',
                'selected' => $this->getExiste($dataxxxx, $datacomb[4])
            ]
        )['comboxxx'];
        return $comboxxx;
    }
    /**
     * armar los combos que utilizan en la vista de acuerdo a las validaciones que se realicen
     *
     * @param array $dataxxxx
     * @return $combosxx
     */
    public function getCombos($dataxxxx)
    {
        $combosxx = [
            1 => [
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_tipo_tiempo_pard_id', 152, true, 'ASC', 'tipotiem', 'titipard']),
                //10.1A Motivo del PARD
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_motivo_pard_id', 46, true, 'ASC', 'motipard', 'motipard']),
            ],
            2 => [
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_tipo_tiempo_srpa_id', 152, true, 'ASC', 'tipotiem', 'titisrpa']),
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_motivo_srpa_id', 46, true, 'ASC', 'motisrpa', 'motisrpa']),
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_sancion_srpa_id', 47, true, 'ASC', 'sancsrpa', 'sancsrpa']),
            ],
            3 => [
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_tipo_tiempo_spoa_id', 152, true, 'ASC', 'tipotiem', 'titispoa']),
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_motivo_spoa_id', 357, true, 'ASC', 'motispoa', 'motispoa']),
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_mod_cumple_pena_id', 49, true, 'ASC', 'modalida', 'sancspoa']),
                $this->getTemacomboJRT($dataxxxx, ['#i_prm_ha_estado_preso_id', 25, true, 'ASC', 'privadox', 'condspoa']),
            ],
            4 => [
                $this->getTemacomboJRT($dataxxxx, ['#prm_situacion_id', 120, true, 'ASC', 'selected', 'vincviol']),
            ],
            5 => [
                $this->getTemacomboJRT($dataxxxx, ['#prm_riesgo_id', 120, true, 'ASC', 'selected', 'riesviol']),
            ],
        ];
        $combosxx = $combosxx[$dataxxxx['optionxx']];
        return $combosxx;
    }
    /**
     * armar el limpiado de los combos utilizados cada que se haga un cambio de opción
     *
     * @param array $dataxxxx
     * @return $emptyxxx
     */
    public function getEmpty($dataxxxx)
    {
        $emptyxxx = [
            1 => ['#i_prm_tipo_tiempo_pard_id', '#i_prm_motivo_pard_id'],
            2 => ['#i_prm_tipo_tiempo_srpa_id', '#i_prm_motivo_srpa_id', '#i_prm_sancion_srpa_id'],
            3 => ['#i_prm_tipo_tiempo_spoa_id', '#i_prm_motivo_spoa_id', '#i_prm_mod_cumple_pena_id', '#i_prm_ha_estado_preso_id'],
            4 => ['#prm_situacion_id'],
            5 => ['#prm_riesgo_id'],
        ];
        $emptyxxx = $emptyxxx[$dataxxxx['optionxx']];
        return  $emptyxxx;
    }
    /**
     * se arma la respuesa dependiendo de si necesita para ajax o por el controllador
     *
     * @param array $raadonly
     * @param array $combosxx
     * @param array $dataxxxx
     * @param string $messagex
     * @return $respuest
     */
    public function getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex)
    {
        $respuest['readonly'] =  $raadonly;
        $respuest['combosxx'] =  $combosxx;
        if ($dataxxxx['ajaxxxxx']) {
            $respuest['emptyxxx'] = $this->getEmpty($dataxxxx);
            $respuest['messagex'] =  $messagex;
        }
        return $respuest;
    }
    /**
     * respuesta única de parámetro dependiendo de si se necesita para ajax o para el controlador
     *
     * @param array $dataxxxx
     * @param int $parametr
     * @return $parametr
     */
    public function getParametroJRT($dataxxxx, $parametr)
    {
        $parametr = Parametro::find($parametr);
        if ($dataxxxx['ajaxxxxx']) {
            $parametr = $parametr->ComboAjaxUno;
        } else {
            $parametr = $parametr->Combo;
        }
        return $parametr;
    }
    /**
     * realizar las validaciones para PARD
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    function getPardJRT($dataxxxx)
    {
        $messagex = [true, '#i_prm_ha_estado_pard_id', 'Seleccione: ¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?'];
        $combosxx = [];
        $raadonly = [];
        // identificar que se haya seleccionado
        if (isset($dataxxxx['valoruno'])) {
            $messagex = [true, '#i_prm_actualmente_pard_id', 'Seleccione: ¿Actualmente se encuentra en el PARD?'];
            // identificar que se haya seleccionado
            if (isset($dataxxxx['valuexxx'])) {
                $messagex[0] = false;
                $raadonly = $this->getReadonly($dataxxxx);
                $combosxx = $this->getCombos($dataxxxx);
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 227 || $dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $raadonly[0][1] = $this->getCambiarJRT($dataxxxx, true);
                    $raadonly[1][1] = $this->getCambiarJRT($dataxxxx, true);
                    $raadonly[2][1] = $this->getCambiarJRT($dataxxxx, true);
                    $raadonly[3][1] = $this->getCambiarJRT($dataxxxx, true);
                }
                if ($dataxxxx['valuexxx'] == 228 && $dataxxxx['valoruno'] == 227) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                }
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[1][1] = $this->getParametroJRT($dataxxxx, 235);
                }
            }
        }
        $respuest = $this->getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex);
        return $respuest;
    }

    /**
     * realizar las validaciones para SRPA
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    function getSrpaJRT($dataxxxx)
    {
        $messagex = [true, '#i_prm_ha_estado_srpa_id', 'Seleccione: 10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?'];
        $combosxx = [];
        $raadonly = [];
        // identificar que se haya seleccionado
        if (isset($dataxxxx['valoruno'])) {
            $messagex = [true, '#i_prm_actualmente_srpa_id', 'Seleccione: ¿Actualmente se encuentra vinculado al SRPA?'];
            // identificar que se haya seleccionado
            if (isset($dataxxxx['valuexxx'])) {
                $messagex[0] = false;
                $raadonly = $this->getReadonly($dataxxxx);
                $combosxx = $this->getCombos($dataxxxx);
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 227 || $dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $raadonly[0][1] = $this->getCambiarJRT($dataxxxx, true);
                }
                if ($dataxxxx['valuexxx'] == 228 && $dataxxxx['valoruno'] == 227) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[2][1] = $this->getParametroJRT($dataxxxx, 235);
                }
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[1][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[2][1] = $this->getParametroJRT($dataxxxx, 235);
                }
            }
        }
        $respuest = $this->getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex);
        return $respuest;
    }
    /**
     * realizar las validaciones para SPOA
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    function getSpoaJRT($dataxxxx)
    {
        $messagex = [true, '#i_prm_ha_estado_spoa_id', 'Seleccione: 10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?'];
        $combosxx = [];
        $raadonly = [];
        // identificar que se haya seleccionado
        if (isset($dataxxxx['valoruno'])) {
            $messagex = [true, '#i_prm_actualmente_spoa_id', 'Seleccione: ¿Actualmente se encuentra en conflicto con la ley - SPOA?'];
            // identificar que se haya seleccionado
            if (isset($dataxxxx['valuexxx'])) {
                $messagex[0] = false;
                $raadonly = $this->getReadonly($dataxxxx);
                $combosxx = $this->getCombos($dataxxxx);
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 227 || $dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $raadonly[0][1] = $this->getCambiarJRT($dataxxxx, true);
                }
                if ($dataxxxx['valuexxx'] == 228 && $dataxxxx['valoruno'] == 227) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[2][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[3][1] = $this->getParametroJRT($dataxxxx, 235);
                }
                if ($dataxxxx['valuexxx'] != 227 && $dataxxxx['valoruno'] == 228) {
                    $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[1][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[2][1] = $this->getParametroJRT($dataxxxx, 235);
                    $combosxx[3][1] = $this->getParametroJRT($dataxxxx, 235);
                }
            }
        }
        $respuest = $this->getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex);
        return $respuest;
    }
    /**
     * realizar las validaciones para VINCULACION VIOLENCIA
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    function getVinViolenciaJRT($dataxxxx)
    {
        $combosxx = [];
        $raadonly = [];
        // identificar que se haya seleccionado
        $messagex = [true, '#i_prm_vinculado_violencia_id', 'Seleccione: 10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?'];
        // identificar que se haya seleccionado
        if (isset($dataxxxx['valuexxx'])) {
            $messagex[0] = false;
            $combosxx = $this->getCombos($dataxxxx);
            if ($dataxxxx['valuexxx'] == 228) {
                $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
            }
        }
        $respuest = $this->getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex);
        return $respuest;
    }
    /**
     * realizar las validaciones para RIESGO VIOLENCIA
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    function getRieViolenciaJRT($dataxxxx)
    {
        $combosxx = [];
        $raadonly = [];
        // identificar que se haya seleccionado
        $messagex = [true, '#i_prm_vinculado_violencia_id', 'Seleccione: 10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?'];
        // identificar que se haya seleccionado
        if (isset($dataxxxx['valuexxx'])) {
            $messagex[0] = false;
            $combosxx = $this->getCombos($dataxxxx);
            if ($dataxxxx['valuexxx'] == 228) {
                $combosxx[0][1] = $this->getParametroJRT($dataxxxx, 235);
            }
        }
        $respuest = $this->getRespuestaJRT($raadonly, $combosxx, $dataxxxx, $messagex);
        return $respuest;
    }
    /**
     * armar las respustas dependiendo de las opciones selecionadas o que se hayan guardado en la base de datos
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getCasosJRT($dataxxxx)
    {
        $respuest = [];
        switch ($dataxxxx['optionxx']) {
                //estrategia en riesgo de habitar la calle
            case 1:
                $respuest = $this->getPardJRT($dataxxxx);
                break;
            case 2:
                $respuest = $this->getSrpaJRT($dataxxxx);
                break;
            case 3:
                $respuest = $this->getSpoaJRT($dataxxxx);
                break;
            case 4:
                $respuest = $this->getVinViolenciaJRT($dataxxxx);
                break;
            case 5:
                $respuest = $this->getRieViolenciaJRT($dataxxxx);
                break;
                //fin estrategia en riesgo de habitar la calle
        }
        return $respuest;
    }
    /**
     * respustas a la peticiones ajax
     *
     * @param Request $request
     * @return $respuest
     */
    public function getJustrestJRT(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $dataxxxx['ajaxxxxx'] = true;
            $respuest = response()->json($this->getCasosJRT($dataxxxx));
            return $respuest;
        }
    }

    public function getDatacontrol($dataxxxx)
    {
        $casosjrt = $this->getCasosJRT([
            'optionxx' => $dataxxxx['optionxx'],
            'valuexxx' => $dataxxxx['valuexxx'],
            'valoruno' => $dataxxxx['valoruno'],
            'ajaxxxxx' => false
        ]);
        foreach ($casosjrt['readonly'] as $key => $value) {
            $this->opciones[$value[0]]=$value[1];
        }
        foreach ($casosjrt['combosxx'] as $key => $value) {
            $this->opciones[$value[0]]=$value[1];
        }
    }
}
