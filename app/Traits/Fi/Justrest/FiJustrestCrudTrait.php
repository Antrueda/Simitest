<?php

namespace app\Traits\Fi\Justrest;

use App\Models\fichaIngreso\FiJrCausasmo;
use App\Models\fichaIngreso\FiJrCausassi;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiJustrestCrudTrait
{
    public  function setFiJrCausasmo($dataxxxx, $objetoxx)
    {
        if (isset($dataxxxx['prm_riesgo_id'])) {
            $datosxxx = [
                'fi_justrest_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiJrCausasmo::where('fi_justrest_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['prm_riesgo_id'] as $diagener) {
                $datosxxx['prm_riesgo_id'] = $diagener;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiJrCausasmo::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    public function setFiJrCausassi($dataxxxx, $objetoxx)
    {
        if (isset($dataxxxx['prm_situacion_id'])) {
            $datosxxx = [
                'fi_justrest_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiJrCausassi::where('fi_justrest_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['prm_situacion_id'] as $diagener) {
                $datosxxx['prm_situacion_id'] = $diagener;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiJrCausassi::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    public function setFiProcesoPard($dataxxxx, $objetoxx, $justicia)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx, $justicia) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != null) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_justrest_id'] = $justicia->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiProcesoPard::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $justicia->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function setFiProcesoSpoa($dataxxxx,  $objetoxx, $justicia)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx, $justicia) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != null) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_justrest_id'] = $justicia->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiProcesoSpoa::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $justicia->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function setFiProcesoSrpa($dataxxxx,  $objetoxx, $justicia)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx, $justicia) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != null) {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_justrest_id'] = $justicia->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiProcesoSrpa::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $justicia->sis_nnaj_id
            ]);
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function setFiJustrest($dataxxxx,  $objetoxx, $infoxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiJustrest::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            $this->setFiJrCausasmo($dataxxxx, $objetoxx);
            $this->setFiJrCausassi($dataxxxx, $objetoxx);
            $this->setFiProcesoPard($dataxxxx, FiProcesoPard::where('fi_justrest_id', $objetoxx->id)->first(), $objetoxx);
            $this->setFiProcesoSpoa($dataxxxx, FiProcesoSpoa::where('fi_justrest_id', $objetoxx->id)->first(), $objetoxx);
            $this->setFiProcesoSrpa($dataxxxx, FiProcesoSrpa::where('fi_justrest_id', $objetoxx->id)->first(), $objetoxx);
            return $objetoxx;
        }, 5);
        //ddd($objetoxx);
        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [$objetoxx->sis_nnaj->fi_datos_basico, $objetoxx->id])
        ->with('info', $infoxxxx);
    }
}
