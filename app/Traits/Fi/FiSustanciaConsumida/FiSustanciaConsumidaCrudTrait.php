<?php

namespace App\Traits\Fi\FiSustanciaConsumida;

use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiSustanciaConsumidaCrudTrait
{
    public function setFiSustanciaConsumida($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_consumo_spa_id'] = FiConsumoSpa::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->first()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiSustanciaConsumida::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->fi_consumo_spa->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fisustanciaconsume.editar', [$padrexxx->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
