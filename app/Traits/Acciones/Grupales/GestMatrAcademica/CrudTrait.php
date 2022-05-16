<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Educacion\IEstadoMs;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait CrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setImatriculaEstado($dataxxxx)
    {
      
        if(!isset($dataxxxx['requestx']->prm_motivo_reti)){
            $dataxxxx['requestx']->request->add(['prm_motivo_reti' => null]);
        }
        if(!isset($dataxxxx['requestx']->prm_mot_aplazad)){
            $dataxxxx['requestx']->request->add(['prm_mot_aplazad' => null]);
        }
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());

                //cambiar estado a la i_matricula_nnaj 
        
                if ($dataxxxx['requestx']->prm_estado_matri == 2774 || $dataxxxx['requestx']->prm_estado_matri == 2775) {
                    $dataxxxx['padrexx']->update([
                        'sis_esta_id'=>2,
                    ]);
                }
                if ($dataxxxx['requestx']->prm_estado_matri == 2773) {
                    $dataxxxx['padrexx']->update([
                        'sis_esta_id'=>1,
                    ]);
                }
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = IEstadoMs::create($dataxxxx['requestx']->all());
                
                if ($dataxxxx['requestx']->prm_estado_matri == 2774 || $dataxxxx['requestx']->prm_estado_matri == 2775) {
                    $dataxxxx['padrexx']->update([
                        'sis_esta_id'=>2,
                    ]);
                }
               
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
