<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdAsoComponente;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdComponente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AdmiLabrrdCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setLabrrdComponentes($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = LabrrdComponente::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAsocomponentes($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                try {
                    $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                    $dataxxxx['modeloxx'] = LabrrdAsoComponente::create([
                        'componente_id' => $dataxxxx['requestx']->componente_id,
                        'tipo_valoracion' => $dataxxxx['requestx']->tipo_valoracion,
                        'tipo_componente' => $dataxxxx['requestx']->tipo_componente,
                        'estusuarios_id' => $dataxxxx['requestx']->estusuarios_id,
                        'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                        'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                        'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
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
