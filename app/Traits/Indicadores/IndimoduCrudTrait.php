<?php

namespace App\Traits\Indicadores;

use App\Models\Indicadores\Administ\InAreaindi;
use App\Models\Indicadores\Administ\InGrupregu;
use App\Models\Indicadores\Administ\InIndicado;
use App\Models\Indicadores\Administ\InIndiliba;
use App\Models\Indicadores\Administ\InLibagrup;
use App\Models\Indicadores\Administ\InPregresp;
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
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * grabar o actualizar registros para indicador lineas base
     *
     * @param array $dataxxxx
     * @return $usuariox
     */

    public function setInIndicado()
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = InIndicado::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);
        if (is_null($this->redirect)) {
            $this->redirect=$this->opciones['permisox'].'.editarxx';
        }
        return redirect()
            ->route($this->redirect, [$this->opciones['modeloxx']->id])
            ->with('info', $this->infoxxxx);
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
            ->route($dataxxxx['permisox'], [$respuest->in_indiliba_id])
            ->with('info', $dataxxxx['infoxxxx']);
    }


    public function setInGrupreguAjax()
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = InGrupregu::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);
    }

    public function setInGrupregu()
    {
        $this->setInGrupreguAjax();
        return redirect()
            ->route($this->redirect, [$this->opciones['modeloxx']->id])
            ->with('info', $this->infoxxxx);
    }

    public function setInPregrespAjax()
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = InPregresp::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);
    }

    public function setInPregresp()
    {
        $this->setInGrupreguAjax();
        return redirect()
            ->route($this->redirect, [$this->opciones['modeloxx']->id])
            ->with('info', $this->infoxxxx);
    }
}
