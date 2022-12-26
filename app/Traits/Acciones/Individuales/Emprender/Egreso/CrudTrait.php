<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso;

use App\Models\Acciones\Individuales\Emprender\Egreso\SEgreso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setEgreso($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $formacion=$dataxxxx['padrexxx']->fi_formacions;
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $formacion->update([
                    'prm_ultgrapr_id' => $dataxxxx['requestx']->cursado, 
              
                ]);

                
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = SEgreso::create($dataxxxx['requestx']->all());
                $formacion->update([
                    'prm_ultgrapr_id' => $dataxxxx['requestx']->cursado, 
                ]);
            }
            
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
