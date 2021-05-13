<?php

namespace App\Traits\Interfaz\Antisimi;

use App\Models\Simianti\Tr\TrSeguiConsumoSpa;
use App\Models\Simianti\Tr\TrVespa;
use App\Models\Temacombo;


/**
 * realiza la migracion del consummo spa al antiguo simi
 */
trait ConsumoSpaTrait
{
    /**
     * grabar el vespa
     *
     * @param array $dataxxxx
     * @return $vespaxxx
     */
    public function setTrVespaCST($dataxxxx)
    {
        $nnajxxxx = $dataxxxx['consumox'];
        $vespaxxx = TrVespa::where('id_nnaj', $nnajxxxx->sis_nnaj->simianti_id)
            ->first();
        if ($vespaxxx == null) {
            $vespaxxx = new TrVespa();
            $vespaxxx->id_vespa = TrVespa::select(['id_vespa'])->orderBy('id_vespa', 'DESC')->first()->id_vespa + 1;
            $vespaxxx->fecha_insercion = $nnajxxxx->created_at;
            $vespaxxx->usuario_insercion = $nnajxxxx->user_crea->s_documento;
            $vespaxxx->fecha_modificacion = $nnajxxxx->updated_at;
            $vespaxxx->usuario_modificacion = $nnajxxxx->user_edita->s_documento;
            $vespaxxx->origen = 'FI';
            $vespaxxx->fecha_consulta = explode(' ', $nnajxxxx->created_at)[0];
            $vespaxxx->id_ocupac_oficio = 0;
            $vespaxxx->id_nnaj = $nnajxxxx->sis_nnaj->simianti_id;
            // $vespaxxx->save();
        }
        return  $vespaxxx;
    }
    /**
     * homologa el parametro con el tipo de droga en el antiguo simi
     *
     * @param [type] $dataxxxx
     * @return void
     */
    public function getSimianti($dataxxxx)
    {
        $parametr = Temacombo::find($dataxxxx['temaxxxx'])
            ->parametros
            ->find($dataxxxx['parametr'])->pivot->simianti_id;
        return $parametr;
    }
    public function setTrSeguiConsumoSpaCST($dataxxxx)
    {
        $vespaxxx = $this->setTrVespaCST($dataxxxx);
        $nnajxxxx = $dataxxxx['consumox']->fi_sustancia_consumidas;
        $vespaxxy = $vespaxxx->tr_segui_consumo_spa->toArray();
        if (
            count($nnajxxxx->toArray()) > 0 && count($vespaxxy)==0) {
            foreach ($nnajxxxx as $key => $value) {
                $trsecons = new TrSeguiConsumoSpa();
                $trsecons->id_vespa = $vespaxxx->id_vespa;
                $trsecons->tipo_droga = $this->getSimianti(['temaxxxx' => 53, 'parametr' => $value->i_prm_sustancia_id]);
                $trsecons->fecha_insercion = $value->created_at;
                $trsecons->usuario_insercion = $value->user_crea->s_documento;
                $trsecons->fecha_modificacion = $value->updated_at;
                $trsecons->usuario_modificacion = $value->user_edita->s_documento;
                $trsecons->id_nnaj = $vespaxxx->id_nnaj;
                $trsecons->id_segui_consumo_spa = TrSeguiConsumoSpa::select(['id_segui_consumo_spa'])->orderBy('id_segui_consumo_spa', 'DESC')->first()->id_segui_consumo_spa + 1;
                // ddd($trsecons);
                $trsecons->save();
            }
        }
    }

    public function setConsumoCST($dataxxxx)
    {
        $this->setTrSeguiConsumoSpaCST($dataxxxx);
    }
}
