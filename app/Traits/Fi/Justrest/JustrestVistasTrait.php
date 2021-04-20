<?php

namespace app\Traits\FI\Justrest;

use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait JustrestVistasTrait
{
    public function getVistaJVT($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.' . $dataxxxx['accionxx'][2]]
        ];
    }
    public function getProcesoPardJVT($dataxxxx)
    {
        $pardxxxx = FiProcesoPard::where('fi_justrest_id', $dataxxxx['modeloxx']->id)->first();
        $dataxxxx['modeloxx']->i_prm_ha_estado_pard_id = $pardxxxx->i_prm_ha_estado_pard_id;
        $dataxxxx['modeloxx']->i_prm_actualmente_pard_id = $pardxxxx->i_prm_actualmente_pard_id;
        $dataxxxx['modeloxx']->i_prm_tipo_tiempo_pard_id = $pardxxxx->i_prm_tipo_tiempo_pard_id;
        $dataxxxx['modeloxx']->i_cuanto_pard = $pardxxxx->i_cuanto_pard;
        $dataxxxx['modeloxx']->i_prm_motivo_pard_id = $pardxxxx->i_prm_motivo_pard_id;
        $dataxxxx['modeloxx']->s_nombre_defensor = $pardxxxx->s_nombre_defensor;
        $dataxxxx['modeloxx']->s_telefono_defensor = $pardxxxx->s_telefono_defensor;
        $dataxxxx['modeloxx']->s_lugar_abierto_pard = $pardxxxx->s_lugar_abierto_pard;
        return $dataxxxx['modeloxx'];
    }

    public function getProcesoSrpaJVT($dataxxxx)
    {
        $dataxxxx['modeloxx'] = $this->getProcesoPardJVT($dataxxxx);
        $srpaxxxx = FiProcesoSrpa::where('fi_justrest_id', $dataxxxx['modeloxx']->id)->first();
        $dataxxxx['modeloxx']->i_prm_ha_estado_srpa_id = $srpaxxxx->i_prm_ha_estado_srpa_id;
        $dataxxxx['modeloxx']->i_prm_actualmente_srpa_id = $srpaxxxx->i_prm_actualmente_srpa_id;
        $dataxxxx['modeloxx']->i_prm_tipo_tiempo_srpa_id = $srpaxxxx->i_prm_tipo_tiempo_srpa_id;
        $dataxxxx['modeloxx']->i_cuanto_srpa = $srpaxxxx->i_cuanto_srpa;
        $dataxxxx['modeloxx']->i_prm_motivo_srpa_id = $srpaxxxx->i_prm_motivo_srpa_id;
        $dataxxxx['modeloxx']->i_prm_sancion_srpa_id = $srpaxxxx->i_prm_sancion_srpa_id;
        return $dataxxxx['modeloxx'];
    }
    public function getProcesoSpoaJVT($dataxxxx)
    {
        $dataxxxx['modeloxx'] = $this->getProcesoSrpaJVT($dataxxxx);
        $spoaxxxx = FiProcesoSpoa::where('fi_justrest_id', $dataxxxx['modeloxx']->id)->first();
        $dataxxxx['modeloxx']->i_prm_ha_estado_spoa_id = $spoaxxxx->i_prm_ha_estado_spoa_id;
        $dataxxxx['modeloxx']->i_prm_actualmente_spoa_id = $spoaxxxx->i_prm_actualmente_spoa_id;
        $dataxxxx['modeloxx']->i_prm_tipo_tiempo_spoa_id = $spoaxxxx->i_prm_tipo_tiempo_spoa_id;
        $dataxxxx['modeloxx']->i_cuanto_spoa = $spoaxxxx->i_cuanto_spoa;
        $dataxxxx['modeloxx']->i_prm_motivo_spoa_id = $spoaxxxx->i_prm_motivo_spoa_id;
        $dataxxxx['modeloxx']->i_prm_mod_cumple_pena_id = $spoaxxxx->i_prm_mod_cumple_pena_id;
        $dataxxxx['modeloxx']->i_prm_ha_estado_preso_id = $spoaxxxx->i_prm_ha_estado_preso_id;
        return $dataxxxx['modeloxx'];
    }
    public function getValidacionesJVT($dataxxxx)
    {
        $this->getDatacontrol([
            'optionxx' => 1,
            'valuexxx' => $dataxxxx['modeloxx']->i_prm_actualmente_pard_id,
            'valoruno' => $dataxxxx['modeloxx']->i_prm_ha_estado_pard_id,
        ]);
        $this->getDatacontrol([
            'optionxx' => 2,
            'valuexxx' => $dataxxxx['modeloxx']->i_prm_actualmente_srpa_id,
            'valoruno' => $dataxxxx['modeloxx']->i_prm_ha_estado_srpa_id,
        ]);
        $this->getDatacontrol([
            'optionxx' => 3,
            'valuexxx' => $dataxxxx['modeloxx']->i_prm_actualmente_spoa_id,
            'valoruno' => $dataxxxx['modeloxx']->i_prm_ha_estado_spoa_id,
        ]);

        $this->getDatacontrol([
            'optionxx' => 4,
            'valuexxx' => $dataxxxx['modeloxx']->i_prm_vinculado_violencia_id,
            'valoruno' => 0,
        ]);

        $this->getDatacontrol([
            'optionxx' => 5,
            'valuexxx' => $dataxxxx['modeloxx']->i_prm_riesgo_participar_id,
            'valoruno' => 0,
        ]);
    }
    private function getViewJVT($dataxxxx)
    {
        $this->getPestanias(['padrexxx'=>$dataxxxx['padrexxx']]);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->getVistaJVT($dataxxxx);
        $this->opciones['justicia'] = FiJustrest::justicia($dataxxxx['padrexxx']->sis_nnaj_id);
        // Si es CHC
        $this->getCHCJCT(['tipoblac' => $dataxxxx['padrexxx']->prm_tipoblaci_id]);
        // indica si se esta actualizando o viendo
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            $vercrear = true;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['puedexxx'] = '';
            $dataxxxx['modeloxx'] = $this->getProcesoSpoaJVT($dataxxxx);
            $this->getValidacionesJVT($dataxxxx);
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        }
        $this->getTablasVistaJDTT($dataxxxx, ['vercrear' => $vercrear]);

        // $this->opciones['cuanspoa']='';
        // if ($this->opciones['usuariox']->nnaj_nacimi->Edad < 18) {
        //     $this->opciones['cuanspoa']='readonly';
        //     $this->opciones['sancspoa'] =
        //     $this->opciones['actuspoa'] =
        //     $this->opciones['titispoa'] =
        //     $this->opciones['motispoa'] =
        //     $this->opciones['condspoa'] =
        //     $this->opciones['motispoa'] = Parametro::find(235)->Combo;
        // }

        //
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
