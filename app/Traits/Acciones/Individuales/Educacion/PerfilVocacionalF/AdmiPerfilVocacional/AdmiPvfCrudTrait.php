<?php

namespace App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AdmiPvfCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setPvfActividad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = PvfActividade::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setArea($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                try {
                    $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                    $dataxxxx['modeloxx'] = PvfArea::create([
                        'nombre'=>$dataxxxx['requestx']->nombre,
                        'descripcion'=>$dataxxxx['requestx']->descripcion,
                        'estusuario_id'=>$dataxxxx['requestx']->estusuario_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                    ]);
                } catch (\Exception $e) {
                    dd($e->getMessage());
                    // algo salió mal
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

}
