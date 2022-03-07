<?php

namespace App\Traits\AdmiActiAsd;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\AdmiActiAsd\AsdTiactividad;

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
            //    $dataxxxx['modeloxx']->sis_depen_id()->detach();
          //      $this->addDependencias($dataxxxx);
            } else {
                
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
                $dataxxxx['requestx']->request->add(['sis_esta_id'   => 1]);
                $dataxxxx['modeloxx'] = AsdActividad::create($dataxxxx['requestx']->all());
              //  $this->addDependencias($dataxxxx);
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
                $dataxxxx['modeloxx'] = AsdTiactividad::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * Añade las dependencias a la actividad creada.
     * 
     * @param mixed $dataxxxx
     * @return void
     */
   

}
