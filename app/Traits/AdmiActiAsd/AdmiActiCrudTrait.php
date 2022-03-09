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
    public function setAsdActividad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
               // * obtener el consecutivo
                $consecut = AsdActividad::where ('tipo_actividad_id',$dataxxxx['tipo_actividad_id'])->get(['id'])->count();
                $dataxxxx['requestx']->request->add(['consectivo_item' => $dataxxxx['itemxxxx'] . ($consecut + 1)]);
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AsdActividad::create($dataxxxx['requestx']->all());
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
