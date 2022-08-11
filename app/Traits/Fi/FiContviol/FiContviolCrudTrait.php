<?php

namespace App\Traits\Fi\FiContviol;

use App\Models\fichaIngreso\FiContviol;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiContviolCrudTrait
{

    public function setFiContviol($dataxxxx)
      {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
          $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
          if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
          } else {
            $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
            $dataxxxx[''] = Auth::user()->id;
            $dataxxxx['modeloxx'] = FiContviol::create($dataxxxx['requestx']->all());
          }
          $this->getLinaBaseNnaj([
            'modeloxx' => $dataxxxx['modeloxx'],
            'nnajidxx' => $dataxxxx['modeloxx']->fi_violencia->sis_nnaj_id
        ]);
          return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($this->opciones['routxxxx'].'.editar', [ $objetoxx->id])
            ->with('info', $dataxxxx['infoxxxx']);
      }
}
