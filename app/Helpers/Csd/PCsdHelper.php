<?php

namespace App\Helpers\Csd;


class PCsdHelper
{
    /**
     * ruta para la pestaña de datos basicos
     *
     * @param [type] $request
     * @return void
     */
    public static function getRDb($dataxxxx)
    {
        $respuest = ['responde' => false, 'rutaxxxx' => ''];
        $sisnnajx = '';

        if (isset($dataxxxx['sisnnajx']->comfacsd->id)) {
            $respuest['responde'] = true;
            $sisnnajx = $dataxxxx['sisnnajx']->comfacsd->fi_comfami->sis_nnaj->fi_datos_basico->id;
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
