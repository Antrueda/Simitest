<?php

namespace App\Traits\Fi\FiEnfermedadesFamilia;

use App\Models\fichaIngreso\FiEnfermedadesFamilia;
use App\Models\fichaIngreso\FiSalud;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiEnfermedadesFamiliaCrudTrait
{
    public function setFiEnfermedadesFamilia($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_salud_id']=FiSalud::where('sis_nnaj_id',$dataxxxx['sis_nnaj_id'])->first()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiEnfermedadesFamilia::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->fiSalud->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fisalenf.editar', [$padrexxx->id,  $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
