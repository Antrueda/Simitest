<?php

namespace App\Traits\Fi\FiAutorizacion;

use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiModalidad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiAutorizacionCrudTrait
{
    public function setModalidad($objetoxx, $dataxxxx)
    {
        if (isset($dataxxxx['i_prm_modalidad_id'])) {
            DB::transaction(function () use ($dataxxxx, $objetoxx) {
                $datosxxx = [
                    'fi_autorizacion_id' => $objetoxx->id,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                FiModalidad::where('fi_autorizacion_id', $objetoxx->id)->delete();
                foreach ($dataxxxx['i_prm_modalidad_id'] as $diagener) {
                    $datosxxx['i_prm_modalidad_id'] = $diagener;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiModalidad::create($datosxxx),
                        'nnajidxx' => $dataxxxx['sis_nnaj_id']
                    ]);
                }
                return $objetoxx;
            }, 5);
        }
    }

    public function setFiAutorizacion($dataxxxx,  $objetoxx,$infoxxxx, $padrexxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::id();
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::id();
                $objetoxx = FiAutorizacion::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $dataxxxx['sis_nnaj_id']
            ]);
            $this->setModalidad($objetoxx, $dataxxxx);
            return $objetoxx;
        }, 5);
        return redirect()
        ->route('fiautorizacion.editar', [$padrexxx->id, $usuariox->id])
        ->with('info', $infoxxxx);
    }
}
