<?php

namespace App\Traits\Fi\FiRedApoyoActual;

use App\Models\fichaIngreso\FiRedApoyoActual;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiRedApoyoActualCrudTrait
{
    public function setFiRedApoyoActual($dataxxxx,  $objetoxx,$infoxxxx,$padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['s_nombre_persona'] = strtoupper($dataxxxx['s_nombre_persona']);
            $dataxxxx['s_servicio'] = strtoupper($dataxxxx['s_servicio']);
            $dataxxxx['s_direccion'] = strtoupper($dataxxxx['s_direccion']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiRedApoyoActual::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return redirect()
        ->route($this->opciones['routxxxx'].'.editar', [$padrexxx->id, $objetoxx->id])
        ->with('info', $infoxxxx);
    }

    

}
