<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionConsecutivos\ConsecutivoTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdNnajActividades;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait DiariaCrudTrait
{
    use ConsecutivoTrait;
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAsdDiaria($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
  
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                if ($dataxxxx['requestx']->prm_grupo_id != 235) {
                    $dataxxxx['requestx']->request->add(['numepagi' => '']);
                }
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dividirFecha = explode('-', $dataxxxx['requestx']->fechdili); 
                $consecutivo = $this->getConsecutivo($dividirFecha[1],$dividirFecha[0],$dataxxxx['requestx']->sis_depen_id,$dataxxxx['requestx']->sis_servicio_id,'asistencia-diaria');
    
                $dataxxxx['requestx']->request->add(['consecut' => $consecutivo]);
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AsdDiaria::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAsdSisNnaj($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AsdSisNnaj::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAsdAcividadNnaj($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AsdNnajActividades::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setCreaeAsdSisNnaj($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
            $dataxxxx['modeloxx'] = AsdSisNnaj::create($dataxxxx['requestx']->all());
        }, 5);
        $respuest = response()->json('exito');
        return $respuest;
    }

}
