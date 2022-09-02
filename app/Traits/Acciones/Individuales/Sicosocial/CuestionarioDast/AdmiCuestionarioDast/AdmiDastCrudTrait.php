<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastAccione;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AdmiDastCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setDastAcciones($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = DastAccione::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setDastPreguntas($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = DastPregunta::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setResultado($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                try {
                    $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                    $dataxxxx['modeloxx'] = DastPuntaje::create([
                        'minimo' => $dataxxxx['requestx']->minimo,
                        'superior' => $dataxxxx['requestx']->superior,
                        'grado_problema' => $dataxxxx['requestx']->grado_problema,
                        'accion_id' => $dataxxxx['requestx']->accion_id,
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
