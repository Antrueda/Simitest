<?php

namespace App\Traits\Fi\FiJrFamiliar;

use App\Models\fichaIngreso\FiJrFamiliar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiJrFamiliarCrudTrait
{
    public function setFiJrFamiliar($dataxxxx,  $objetoxx,$infoxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiJrFamiliar::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->fi_justrest->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route($this->opciones['routxxxx'].'.editar', [$usuariox->id])
            ->with('info', $infoxxxx);
    }
}
