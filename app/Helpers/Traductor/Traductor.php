<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Traductor;

use App\Models\Acciones\Individuales\Pivotes\AiSalidaMayoresRazones;
use App\Models\Acciones\Individuales\Pivotes\AiSalidaMenoresObj;
use App\Models\Acciones\Individuales\Pivotes\JovenesMotivo;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Models\consulta\pivotes\CsdGeningDia;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiPersona;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisTitulo;


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

    public static function getDias($dataxxxx)
    {
        return CsdGeningDia::select(['parametros.nombre'])
        ->join('parametros','csd_gening_dias.parametro_id','=','parametros.id')
        ->where('csd_geningreso_id',$dataxxxx['padrexxx'])->get();
    }

    public static function getObjetivo($dataxxxx)
    {
        return AiSalidaMenoresObj::select(['parametros.nombre'])
        ->join('parametros','ai_salida_menores_obj.parametro_id','=','parametros.id')
        ->where('ai_salida_menores_id',$dataxxxx['padrexxx'])->get();
    }

    public static function getRazones($dataxxxx)
    {
        return JovenesMotivo::select(['parametros.nombre'])
        ->join('parametros','jovenes_motivos.parametro_id','=','parametros.id')
        ->where('salida_jovenes_id',$dataxxxx['padrexxx'])->get();
    }

    public static function getJovenes($dataxxxx)
    {
        $contador=SalidaJovene::where('ai_salmay_id',$dataxxxx['padrexxx'])->count('id');

        return $contador;
        
    }

    public static function getRepresenta($dataxxxx)
    {
        $responsx=null;
        if($dataxxxx){;
        $responsx=FiCompfami::find($dataxxxx)->sis_nnaj->fi_datos_basico->NombreCompleto;
        }
        return $responsx;
        
    }

    public static function getEdad($dataxxxx)
    {
        $edadxxxx=NnajNacimi::where('fi_datos_basico_id',$dataxxxx)->first()->Edad;

        return $edadxxxx;
        
    }

    public static function getTelefono($dataxxxx)
    {
        $telefono=FiResidencia::where('sis_nnaj_id',$dataxxxx)->get();
        $telefonos='';
        foreach($telefono as $value){
            $telefonos=$value->s_telefono_uno . ' - ' . $value->s_telefono_dos . ' - ' . $value->s_telefono_tres;
        }
        
        return   $telefonos;
        
    }

}

