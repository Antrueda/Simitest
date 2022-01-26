<?php

namespace App\Traits\Fi\FiViolencia;

use App\Models\fichaIngreso\FiLesicome;
use App\Models\fichaIngreso\FiViolbasa;
use App\Models\fichaIngreso\FiViolencia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiViolenciaCrudTrait
{
    public function getDatosxxx($objetoxx)
    {
        $datosxxx = [
            'fi_violencia_id' => $objetoxx->id,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
        ];
        return $datosxxx;
    }

    public  function setFiLesicome($dataxxxx, $objetoxx)
    {
        if (isset($dataxxxx['prm_lesicome_id'])) {
            $datosxxx = $this->getDatosxxx($objetoxx);
            FiLesicome::where('fi_violencia_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['prm_lesicome_id'] as $diagener) {
                $datosxxx['prm_lesicome_id'] = $diagener;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiLesicome::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    public  function setFiViolbasa($dataxxxx, $objetoxx)
    {
        if (isset($dataxxxx['prm_violbasa_id'])) {
            $datosxxx = $this->getDatosxxx($objetoxx);
            FiViolbasa::where('fi_violencia_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['prm_violbasa_id'] as $diagener) {
                $datosxxx['prm_violbasa_id'] = $diagener;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiViolbasa::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    public function setFiViolencia($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiViolencia::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            $this->setFiLesicome($dataxxxx, $objetoxx);
            $this->setFiViolbasa($dataxxxx, $objetoxx);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fiviolencia.editar', [$padrexxx->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
