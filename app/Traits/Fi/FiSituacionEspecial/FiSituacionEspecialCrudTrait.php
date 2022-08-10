<?php

namespace App\Traits\Fi\FiSituacionEspecial;

use App\Models\fichaIngreso\FiRazonContinua;
use App\Models\fichaIngreso\FiRazonIniciado;
use App\Models\fichaIngreso\FiRiesgoEscnna;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\FiSituVulnera;
use App\Models\fichaIngreso\FiVictimaEscnna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiSituacionEspecialCrudTrait
{
    public function setFiRiesgoVictimaEscnna($dataxxxx, $datosxxx,$objetoxx)
    {
        if (isset($dataxxxx['i_prm_victima_escnna_id'])) {
            foreach ($dataxxxx['i_prm_victima_escnna_id'] as $registro) {
                if ($dataxxxx['i_prm_tipo_id'] == 563) {
                    $datosxxx['i_prm_riesgo_escnna_id'] = $registro;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiRiesgoEscnna::create($datosxxx),
                        'nnajidxx' => $objetoxx->sis_nnaj_id
                    ]);
                } else {
                    $datosxxx['i_prm_victima_escnna_id'] = $registro;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiVictimaEscnna::create($datosxxx),
                        'nnajidxx' => $objetoxx->sis_nnaj_id
                    ]);
                }
            }
        }
    }

    public function setFiSituVulnera($dataxxxx, $datosxxx,$objetoxx)
    {
        foreach ($dataxxxx['prm_situacion_vulnera_id'] as $registro) {
            $datosxxx['prm_situacion_vulnera_id'] = $registro;
            $this->getLinaBaseNnaj([
                'modeloxx' => FiSituVulnera::create($datosxxx),
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
        }
    }

    public function setFiRazonIniciado($dataxxxx, $datosxxx,$objetoxx)
    {
        if (isset($dataxxxx['i_prm_iniciado_id'])) {
            foreach ($dataxxxx['i_prm_iniciado_id'] as $registro) {
                $datosxxx['i_prm_iniciado_id'] = $registro;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiRazonIniciado::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    public function setFiRazonContinua($dataxxxx, $datosxxx,$objetoxx)
    {
        if (isset($dataxxxx['i_prm_iniciado_id'])) {
            foreach ($dataxxxx['i_prm_continua_id'] as $registro) {
                $datosxxx['i_prm_continua_id'] = $registro;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiRazonContinua::create($datosxxx),
                    'nnajidxx' => $objetoxx->sis_nnaj_id
                ]);
            }
        }
    }

    private  function grabarOpciones($situacio, $dataxxxx)
    {
        FiVictimaEscnna::where('fi_situacion_especial_id', $situacio->id)->delete();
        FiSituVulnera::where('fi_situacion_especial_id', $situacio->id)->delete();
        FiRiesgoEscnna::where('fi_situacion_especial_id', $situacio->id)->delete();
        FiRazonContinua::where('fi_situacion_especial_id', $situacio->id)->delete();
        FiRazonIniciado::where('fi_situacion_especial_id', $situacio->id)->delete();
        $datosxxx = [
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
            'fi_situacion_especial_id' => $situacio->id
        ];
        $this->setFiRiesgoVictimaEscnna($dataxxxx, $datosxxx,$situacio);
        $this->setFiSituVulnera($dataxxxx, $datosxxx,$situacio);
        $this->setFiRazonIniciado($dataxxxx, $datosxxx,$situacio);
        $this->setFiRazonContinua($dataxxxx, $datosxxx,$situacio);
    }

    public function setFiSituacionEspecial($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiSituacionEspecial::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            FiSituacionEspecial::grabarOpciones($objetoxx, $dataxxxx);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fisituacion.editar', [$padrexxx->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
