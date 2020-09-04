<?php

namespace App\Helpers\Vsi;
use App\Models\sicosocial\VsiDatosVincula;

/**
 * permite cargar el contenido para las preguntas 1.14 y 1.15 de valoracion sicosocial
 */
class VsiDves
{
    /**
     * 1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?
     *
     * @return void
     */
    public static function getSituaciones($dataxxxx)
    {

        return VsiDatosVincula::where('vsi_id',$dataxxxx['vsiidxxx'])->first()->situaciones;
    }


     /**
     * 1.15 ¿Qué emociones le generan estas dificultades?
     *
     * @return void
     */
    public static function getEmociones($dataxxxx)
    {
        return VsiDatosVincula::where('vsi_id',$dataxxxx['vsiidxxx'])->first()->emociones;
    }

    
}
