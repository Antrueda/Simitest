<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Traductor;

use App\Models\sistema\SisTitulo;
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
}