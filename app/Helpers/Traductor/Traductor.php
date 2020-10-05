<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Traductor;

use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiPersona;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\Sistema\SisTitulo;
use Illuminate\Support\Facades\DB;

class Traductor {
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public static function getOpciones($textoxxx,$tletraid){
        switch($tletraid){
            case 1760:
                $tituloxx=strtoupper (  $textoxxx );
            break;
            case 1761:
                $tituloxx=strtolower (  $textoxxx );
            break;
            case 1763:
                $tituloxx=ucwords (  $textoxxx );
            break;
        }
    }
    public static function getTitulo($tituloid,$opcionxx) {

        $encontra=SisTitulo::where('id',$tituloid)->first();
        $tituloxx='';
        switch($opcionxx){
            case 1:
                $tituloxx=strtoupper (  $encontra->s_titulo );
            break;
            case 2:
                $tituloxx=strtolower (  $encontra->s_tooltip );
            break;

        }

        return $tituloxx;
    }

    /**
     * 1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?
     *
     * @return void
     */
    public static function getSituaciones($dataxxxx)
    {

        return VsiSituacionVincula::select(['parametros.nombre'])
        ->join('parametros','vsi_situacion_vincula.parametro_id','=','parametros.id')
        ->where('vsi_datos_vincula_id',$dataxxxx['vsiidxxx'])->get();
    }

    public static function getPersonas($dataxxxx)
    {

        return VsiPersona::select(['parametros.nombre'])
        ->join('parametros','vsi_personas.parametro_id','=','parametros.id')
        ->where('vsi_datos_vincula_id',$dataxxxx['vsiidxxx'])->get();
    }

     /**
     * 1.15 ¿Qué emociones le generan estas dificultades?
     *
     * @return void
     */
    public static function getEmociones($dataxxxx)
    {
        return VsiEmocionVincula::select(['parametros.nombre'])
        ->join('parametros','vsi_emocion_vincula.parametro_id','=','parametros.id')
        ->where('vsi_datos_vincula_id',$dataxxxx['vsiidxxx'])->get();
    }
}

