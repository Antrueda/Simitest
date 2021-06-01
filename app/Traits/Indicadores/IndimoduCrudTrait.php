<?php

namespace App\Traits\Indicadores;

use App\Models\Indicadores\Admin\InAreaindi;
use App\Models\Indicadores\Admin\InIndiliba;
use App\Models\Indicadores\Admin\InLibagrup;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar el crud para los indicadores
 */
trait IndimoduCrudTrait
{
    /**
     * grabar o actualizar registros para area indicadores
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setInAreaindiAjax($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = InAreaindi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $respuest;
    }

    public function setInAreaindi($dataxxxx)
    {
        $respuest = $this->setInAreaindiAjax($dataxxxx);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * grabar o actualizar registros para indicador lineas base
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setInIndilibaAjax($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = InIndiliba::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $respuest;
    }

    public function setInIndiliba($dataxxxx)
    {
        $respuest = $this->setInIndilibaAjax($dataxxxx);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * grabar o actualizar registros para indicador lineas base
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setInLibagrupAjax($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = InLibagrup::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $respuest;
    }

    public function setInLibagrup($dataxxxx)
    {
        $respuest = $this->setInLibagrupAjax($dataxxxx);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->in_indiliba_id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
