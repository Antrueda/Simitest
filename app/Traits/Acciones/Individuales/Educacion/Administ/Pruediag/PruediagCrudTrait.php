<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaAsignatu;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
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
    public function setEdaGrado()
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = EdaGrado::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);
        return redirect()
            ->route($this->redirect, [$this->opciones['modeloxx']->id])
            ->with('info', $this->infoxxxx);
    }

    public function setEdaAsignatu()
    {
        DB::transaction(function () {
            $this->requestx->request->add(['user_edita_id' => Auth::user()->id]);
            if (is_null($this->opciones['modeloxx'])) {
                $this->requestx->request->add(['user_crea_id' => Auth::user()->id]);
                $this->requestx->request->add(['sis_esta_id' => 1]);
                $this->opciones['modeloxx'] = EdaAsignatu::create($this->requestx->all());
            } else {
                $this->opciones['modeloxx']->update($this->requestx->all());
            }
        }, 5);
        return redirect()
            ->route($this->redirect, [$this->opciones['modeloxx']->id])
            ->with('info', $this->infoxxxx);
    }
}
