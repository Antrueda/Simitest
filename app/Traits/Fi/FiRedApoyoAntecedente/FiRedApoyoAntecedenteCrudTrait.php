<?php

namespace App\Traits\Fi\FiRedApoyoAntecedente;

use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiRedApoyoAntecedenteCrudTrait
{

    public function setFiRedApoyoAntecedente($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiRedApoyoAntecedente::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id,  $objetoxx->id])
            ->with('info', $infoxxxx);
    }
   
}
