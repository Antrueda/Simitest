<?php

namespace App\Traits\Fi\FiVestuarioNnaj;

use App\Models\fichaIngreso\FiVestuarioNnaj;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiVestuarioNnajCrudTrait
{
    public  function setFiVestuarioNnaj($dataxxxx,  $objetoxx, $infoxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiVestuarioNnaj::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->fi_consumo_spa->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fi.vestuario.editar', [$objetoxx->sis_nnaj->fi_datos_basico->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
