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
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiPersona;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisTitulo;


class Traductor
{
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public static function getOpciones($textoxxx, $tletraid)
    {
        switch ($tletraid) {
            case 1760:
                $tituloxx = strtoupper($textoxxx);
                break;
            case 1761:
                $tituloxx = strtolower($textoxxx);
                break;
            case 1763:
                $tituloxx = ucwords($textoxxx);
                break;
        }
    }
    public static function getTitulo($tituloid, $opcionxx)
    {

        $encontra = SisTitulo::where('id', $tituloid)->first();
        $tituloxx = '';
        switch ($opcionxx) {
            case 1:
                $tituloxx = strtoupper($encontra->s_titulo);
                break;
            case 2:
                $tituloxx = strtolower($encontra->s_tooltip);
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
            ->join('parametros', 'vsi_situacion_vincula.parametro_id', '=', 'parametros.id')
            ->where('vsi_datos_vincula_id', $dataxxxx['vsiidxxx'])->get();
    }

    public static function getPersonas($dataxxxx)
    {

        return VsiPersona::select(['parametros.nombre'])
            ->join('parametros', 'vsi_personas.parametro_id', '=', 'parametros.id')
            ->where('vsi_datos_vincula_id', $dataxxxx['vsiidxxx'])->get();
    }

    /**
     * 1.15 ¿Qué emociones le generan estas dificultades?
     *
     * @return void
     */
    public static function getEmociones($dataxxxx)
    {
        return VsiEmocionVincula::select(['parametros.nombre'])
            ->join('parametros', 'vsi_emocion_vincula.parametro_id', '=', 'parametros.id')
            ->where('vsi_datos_vincula_id', $dataxxxx['vsiidxxx'])->get();
    }

    public static function getDias($dataxxxx)
    {
        return CsdGeningDia::select(['parametros.nombre'])
            ->join('parametros', 'csd_gening_dias.parametro_id', '=', 'parametros.id')
            ->where('csd_geningreso_id', $dataxxxx['padrexxx'])->get();
    }

    public static function getObjetivo($dataxxxx)
    {
        return AiSalidaMenoresObj::select(['parametros.nombre'])
            ->join('parametros', 'ai_salida_menores_obj.parametro_id', '=', 'parametros.id')
            ->where('ai_salida_menores_id', $dataxxxx['padrexxx'])->get();
    }

    public static function getRazones($dataxxxx)
    {
        return JovenesMotivo::select(['parametros.nombre'])
            ->join('parametros', 'jovenes_motivos.parametro_id', '=', 'parametros.id')
            ->where('salida_jovenes_id', $dataxxxx['padrexxx'])->get();
    }

    public static function getJovenes($dataxxxx)
    {
        $contador = SalidaJovene::where('ai_salmay_id', $dataxxxx['padrexxx'])->count('id');

        return $contador;
    }

    public static function getRepresenta($dataxxxx)
    {
        $responsx = null;
        if ($dataxxxx) {;
            $responsx = FiCompfami::find($dataxxxx)->sis_nnaj->fi_datos_basico->NombreCompleto;
        }
        return $responsx;
    }

    public static function getEdad($dataxxxx)
    {
        $edadxxxx = NnajNacimi::where('fi_datos_basico_id', $dataxxxx)->first()->Edad;

        return $edadxxxx;
    }

    public static function getTelefono($dataxxxx)
    {
        $telefono = FiResidencia::where('sis_nnaj_id', $dataxxxx)->get();
        $telefonos = '';
        foreach ($telefono as $value) {
            $telefonos = $value->s_telefono_uno . ' - ' . $value->s_telefono_dos . ' - ' . $value->s_telefono_tres;
        }

        return   $telefonos;
    }

    public static function getRazonesGrupales($dataxxxx)
    {

        // motivos
        $motivosy = [];

        $motivosx = JovenesMotivo::select(['parametros.nombre', 'jovenes_motivos.parametro_id'])
            ->join('parametros', 'jovenes_motivos.parametro_id', '=', 'parametros.id')
            ->join('salida_jovenes', 'jovenes_motivos.salida_jovenes_id', '=', 'salida_jovenes.id')
            ->where('salida_jovenes.ai_salmay_id', $dataxxxx['padrexxx'])->groupBy('parametros.nombre')->get();

        foreach ($motivosx as $key => $value) {
            $contador = JovenesMotivo::join('salida_jovenes', 'jovenes_motivos.salida_jovenes_id', '=', 'salida_jovenes.id')
                ->where('salida_jovenes.ai_salmay_id', $dataxxxx['padrexxx'])->where('jovenes_motivos.parametro_id', $value->parametro_id)
                ->count('jovenes_motivos.salida_jovenes_id');
            $motivosy[] = [$value->nombre, $contador];
        }



        return $motivosy;
    }

    public static function getUpi($dataxxxx)
    {
        $upixxxxy=[];
        $upixxxxx = NnajUpi::select(['sis_depens.nombre', 'nnaj_upis.id','parametros.nombre as principal'])
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->join('parametros', 'nnaj_upis.prm_principa_id', '=', 'parametros.id')
            ->join('sis_nnajs', 'nnaj_upis.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where('nnaj_upis.sis_nnaj_id', $dataxxxx['padrexxx'])->get();
        /**
         * upis que tiene el nnaj
         */
        foreach ($upixxxxx as $key => $value) {


            $servicio = NnajDese::select('sis_servicios.s_servicio')
                ->join('sis_servicios', 'nnaj_deses.sis_servicio_id', '=', 'sis_servicios.id')
                ->where('nnaj_deses.nnaj_upi_id', $value->id)->get();
            /**
             * servicios que tiene la upi
             */
            $serviciy = [];
            foreach ($servicio as $key => $servicix) {
                $serviciy[] = $servicix;
            }
            $upixxxxy[] = ['upixxxxx' => $value, 'servicio' => $serviciy];
        }
        return $upixxxxy; // done lo llama
    }
}
