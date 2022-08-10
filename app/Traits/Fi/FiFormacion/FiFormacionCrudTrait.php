<?php

namespace App\Traits\Fi\FiFormacion;

use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\FiMotivoVinculacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiFormacionCrudTrait
{
    public function setFiMotivoVinculacion($objetoxx, $dataxxxx)
    {
        if (isset($dataxxxx['prm_motivinc_id'])) {
            DB::transaction(function () use ($dataxxxx, $objetoxx) {
                $datosxxx = [
                    'fi_formacion_id' => $objetoxx->id,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                FiMotivoVinculacion::where('fi_formacion_id', $objetoxx->id)->delete();
                foreach ($dataxxxx['prm_motivinc_id'] as $diagener) {
                    $datosxxx['prm_motivinc_id'] = $diagener;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiMotivoVinculacion::create($datosxxx),
                        'nnajidxx' => $objetoxx->sis_nnaj_id
                    ]);
                }
                return $objetoxx;
            }, 5);
        }
    }

    public  function setFiFormacion($dataxxxx,  $objetoxx,$infoxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiFormacion::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            $this->setFiMotivoVinculacion($objetoxx, $dataxxxx);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fi.formacion.editar', [$usuariox->sis_nnaj->fi_datos_basico->id, $usuariox->id])
            ->with('info', $infoxxxx);
    }
}
