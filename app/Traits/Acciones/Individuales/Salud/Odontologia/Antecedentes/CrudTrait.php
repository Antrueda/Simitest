<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes;

use App\Models\Acciones\Individuales\Salud\Odontologia\VOdonantece;
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
    public function setOdoAntecedente($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VOdonantece::create($dataxxxx['requestx']->all());
            }
            
            $dataxxxx['modeloxx']->medicamento()->detach();
            
            if($dataxxxx['requestx']->medicamento){
                foreach ($dataxxxx['requestx']->medicamento as $d) {
                    $dataxxxx['modeloxx']->medicamento()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'antece_id'=>$dataxxxx['modeloxx']->id]);
             
                }
            }
            $dataxxxx['modeloxx']->diagnostico()->detach();
            if($dataxxxx['requestx']->diagnostico){
                foreach ($dataxxxx['requestx']->diagnostico as $d) {
                    $dataxxxx['modeloxx']->diagnostico()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'antece_id'=>$dataxxxx['modeloxx']->id]);
             
                }
            }
            
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
