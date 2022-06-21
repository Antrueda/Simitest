<?php

namespace App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral;



use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;


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
    public function setMedicinaGeneral($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $saludxxx=$dataxxxx['padrexxx']->fi_saluds;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $saludxxx->update(['prm_regisalu_id' => $dataxxxx['requestx']->afili_id, 'sis_entidad_salud_id' => $dataxxxx['requestx']->entidad_id]);    
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Vsmedicina::create($dataxxxx['requestx']->all());
                $saludxxx->update(['prm_regisalu_id' => $dataxxxx['requestx']->afili_id, 'sis_entidad_salud_id' => $dataxxxx['requestx']->entidad_id]);    
                
            }
            
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
