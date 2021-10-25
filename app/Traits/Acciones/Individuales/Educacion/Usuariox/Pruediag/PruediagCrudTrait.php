<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag;

use App\Models\Educacion\Usuariox\Pruediag\EduPresaber;
use App\Models\Educacion\Usuariox\Pruediag\EduPruediag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para prueba diagnóstica
 */
trait PruediagCrudTrait
{
    /**
     * grabar o actualizar registros
     *
     * @param array $dataxxxx
     * @return string
     */
    public function setEduPruediag($parametr=array())
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = EduPruediag::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);

        if (count($parametr)==0) {
            $parametr=[$this->opciones['modeloxx']->id];
        }
        return redirect()
            ->route($this->redirect, $parametr)
            ->with('info', $this->infoxxxx);
    }

    public function setEduPresaber($parametr=array())
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = EduPresaber::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);

        if (count($parametr)==0) {
            $parametr=[$this->opciones['modeloxx']->id];
        }
        return redirect()
            ->route($this->redirect, $parametr)
            ->with('info', $this->infoxxxx);
    }
}
