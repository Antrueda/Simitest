<?php

namespace App\Traits\Fi\FiGeneracionIngreso;

use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiGeneracionIngresoCrudTrait
{
    private function setFiDiasGeneraIngreso($digenera, $dataxxxx)
    {
        FiDiasGeneraIngreso::where('fi_generacion_ingreso_id', $digenera->id)->delete();
        if (isset($dataxxxx['prm_diagener_id'])) {
            $datosxxx = [
                'fi_generacion_ingreso_id' => $digenera->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            foreach ($dataxxxx['prm_diagener_id'] as $diagener) {
                $datosxxx['prm_diagener_id'] = $diagener;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiDiasGeneraIngreso::create($datosxxx),
                    'nnajidxx' => $digenera->sis_nnaj_id
                ]); ;
            }
        }
    }

    public  function setFiGeneracionIngreso($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiGeneracionIngreso::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            $this->setFiDiasGeneraIngreso($objetoxx, $dataxxxx);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fiingresos.editar', [$padrexxx->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
