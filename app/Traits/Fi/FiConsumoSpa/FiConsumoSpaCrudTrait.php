<?php

namespace App\Traits\Fi\FiConsumoSpa;

use App\Models\fichaIngreso\FiConsumoSpa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiConsumoSpaCrudTrait
{
    public  function setFiConsumoSpa($dataxxxx,  $objetoxx,$infoxxxx,$padrexxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiConsumoSpa::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $dataxxxx['sis_nnaj_id']
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('ficonsumo.editar', [$padrexxx->id, $usuariox->id])
            ->with('info', $infoxxxx);
    }
}
