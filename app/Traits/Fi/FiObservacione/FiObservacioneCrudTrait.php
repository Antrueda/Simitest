<?php

namespace App\Traits\Fi\FiObservacione;

use App\Models\fichaIngreso\FiObservacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiObservacioneCrudTrait
{
    public function setFiObservacione($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiObservacione::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fiobserva.editar', [
                $padrexxx->id,
                $objetoxx->id
            ])
            ->with('info', $infoxxxx);
    }
}
