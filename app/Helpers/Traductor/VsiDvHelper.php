<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Traductor;

use App\Models\sicosocial\VsiDatosVincula;
use App\Models\Sistema\SisTitulo;
use Illuminate\Support\Facades\DB;
 
class VsiDvHelper
{
    /**
     * 1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?
     *
     * @return void
     */
    public static function getSituaciones($dataxxxx)
    {

        //return VsiDatosVincula::where('vsi_id',$dataxxxx['vsiidxxx'])->first()->situaciones;
        return [];
    }


     /**
     * 1.15 ¿Qué emociones le generan estas dificultades?
     *
     * @return void
     */
    public static function getEmociones($dataxxxx)
    {
      //  return VsiDatosVincula::where('vsi_id',$dataxxxx['vsiidxxx'])->first()->emociones;
      return [];
    }

    
}