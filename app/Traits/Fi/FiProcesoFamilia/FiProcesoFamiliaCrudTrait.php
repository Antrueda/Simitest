<?php

namespace App\Traits\Fi\FiProcesoFamilia;

use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiProcesoFamilia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiProcesoFamiliaCrudTrait
{
    public  function setFiProcesoFamilia($dataxxxx,  $objetoxx,$infoxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_justrest_id']=FiJustrest::where('sis_nnaj_id',$dataxxxx['sis_nnaj_id'])->first()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiProcesoFamilia::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->fiJustrest->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
        ->route('fi.procesojudicial.editar', [$objetoxx->fiJustrest->sis_nnaj_id, $objetoxx->id])
        ->with('info', $infoxxxx);
    }
}
