<?php

namespace App\Traits\Fi\FiSalud;

use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\FiVictataq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiSaludCrudTrait
{

    private  function setFiEventosMedico($evenmedic, $dataxxxx)
    {
        if (isset($dataxxxx['prm_evenmedi_id'])) {
            $datosxxx = [
                'fi_salud_id' => $evenmedic->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiEventosMedico::where('fi_salud_id', $evenmedic->id)->delete();
            foreach ($dataxxxx['prm_evenmedi_id'] as $evmedico) {
                $datosxxx['prm_evenmedi_id'] = $evmedico;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiEventosMedico::create($datosxxx),
                    'nnajidxx' => $evenmedic->sis_nnaj_id
                ]);
            }
        }
    }

    private function setFiDiscausa($evenmedic, $dataxxxx)
    {
        if (isset($dataxxxx['prm_discausa_id'])) {
            $datosxxx = [
                'fi_salud_id' => $evenmedic->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiDiscausa::where('fi_salud_id', $evenmedic->id)->delete();
            foreach ($dataxxxx['prm_discausa_id'] as $evmedico) {
                $datosxxx['prm_discausa_id'] = $evmedico;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiDiscausa::create($datosxxx),
                    'nnajidxx' => $evenmedic->sis_nnaj_id
                ]);
            }
        }
    }

    private function setFiVictataq($evenmedic, $dataxxxx)
    {
        if (isset($dataxxxx['prm_victataq_id'])) {
            $datosxxx = [
                'fi_salud_id' => $evenmedic->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiVictataq::where('fi_salud_id', $evenmedic->id)->delete();
            foreach ($dataxxxx['prm_victataq_id'] as $evmedico) {
                $datosxxx['prm_victataq_id'] = $evmedico;
                $this->getLinaBaseNnaj([
                    'modeloxx' => FiVictataq::create($datosxxx),
                    'nnajidxx' => $evenmedic->sis_nnaj_id
                ]);
            }
        }
    }

    public function setFiSalud($dataxxxx,  $objetoxx, $infoxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;

            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiSalud::create($dataxxxx);
            }
            $this->getLinaBaseNnaj([
                'modeloxx' => $objetoxx,
                'nnajidxx' => $objetoxx->sis_nnaj_id
            ]);
            $this->setFiEventosMedico($objetoxx, $dataxxxx);
            $this->setFiDiscausa($objetoxx, $dataxxxx);
            $this->setFiVictataq($objetoxx, $dataxxxx);

            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fisalud.editar', [$padrexxx->id, $objetoxx->id])
            ->with('info', $infoxxxx);
    }
}
