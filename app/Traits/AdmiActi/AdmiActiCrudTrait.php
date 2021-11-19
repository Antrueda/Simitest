<?php

namespace App\Traits\AdmiActi;

use App\Models\AdmiActi\Actividade;
use App\Models\AdmiActi\AeEncuentro;
use App\Models\AdmiActi\TiposActividad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AdmiActiCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setActividade($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
                $dataxxxx['requestx']->request->add(['sis_esta_id'   => 1]);
                $dataxxxx['modeloxx'] = Actividade::create($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->sis_depen_id()->attach([$dataxxxx['requestx']->sis_depen_id => [
                    'sis_esta_id'   => $dataxxxx['requestx']->sis_esta_id,
                    'user_crea_id'  => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id
                ]]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setTiposActividad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = TiposActividad::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
