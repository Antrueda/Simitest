<?php

namespace App\Traits\Csd;


/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait PCsdTrait
{

    public function getDbasico($dataxxxx)
    {
        $respuest = ['responde' => false, 'rutaxxxx' => ''];
        $sisnnajx = '';
        foreach ($dataxxxx['sisnnajx']->fi_compfamis as $key => $value) { //
            if ($value->sis_nnaj->fi_datos_basico->prm_respocsd_id == 227) {
                $respuest['responde'] = true;
                $sisnnajx = $value->sis_nnaj->fi_datos_basico->id;
            }
        }



        if (!$respuest['responde']) {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.nuevo', $dataxxxx['sisnnajx']->id);
        } else if ($respuest['responde'] && auth()->user()->can($dataxxxx['permisox']  . '-editar')) {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.editar', [$dataxxxx['sisnnajx']->id, $sisnnajx]);
        } else {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.ver', [$dataxxxx['sisnnajx']->id, $sisnnajx]);
        }
        return  $respuest;

       
    }
}
