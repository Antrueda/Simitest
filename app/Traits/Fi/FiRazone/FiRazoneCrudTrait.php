<?php

namespace App\Traits\Fi\FiRazone;

use App\Models\fichaIngreso\FiRazone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiRazoneCrudTrait
{
    public function setFiRazoneInterfaz($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiRazone::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }

    public function setFiRazone($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx=$this->setFiRazoneInterfaz($dataxxxx, $objetoxx);
        return redirect()
            ->route('firazones.editar', [
                $padrexxx->id,
                $objetoxx->id
            ])
            ->with('info', $infoxxxx);
    }

}
