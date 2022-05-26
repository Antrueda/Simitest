<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Traductor;

use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\Educacion\GrupoDias;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Pivotes\AiSalidaMenoresObj;
use App\Models\Acciones\Individuales\Pivotes\JovenesMotivo;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Models\consulta\pivotes\CsdGeningDia;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiPersona;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\Sistema\SisTitulo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public static function getModulos($dataxxxx)
    {
        return UniComp::select(['modulos.s_modulo'])
            ->join('modulos', 'uni_comps.modulo_id', '=', 'modulos.id')
            ->join('valora_comps', 'uni_comps.valora_id', '=', 'valora_comps.id')
            ->where('uni_comps.valora_id', $dataxxxx['padrexxx'])->get();

    }
    public static function getUnidad($dataxxxx)
    {
        return UniComp::select(['denominas.s_denominas'])
            ->join('denominas', 'uni_comps.unidad_id', '=', 'denominas.id')
            ->join('valora_comps', 'uni_comps.valora_id', '=', 'valora_comps.id')
            ->where('uni_comps.valora_id', $dataxxxx['padrexxx'])->get();

    }

    public static function getJovenes($dataxxxx)
    {
        $contador = SalidaJovene::where('ai_salmay_id', $dataxxxx['padrexxx'])->count('id');

        return $contador;
    }

    public static function getNNAJTalleres($dataxxxx)
    {
        $contador = AgAsistente::where('ag_actividad_id', $dataxxxx['padrexxx'])->count('id');

        return $contador;
    }

    public static function getResponsableTalleres($dataxxxx)
    {
        $responsable=[];
        $responsablx = AgResponsable::select(
            'parametros.nombre as i_prm_responsable_id',
            'ag_responsables.sis_esta_id',
            'users.s_primer_nombre as nombre1',
            'users.s_segundo_nombre as nombre2',
            'users.s_primer_apellido as apellido1',
            'users.s_segundo_apellido as apellido2',
        )
            ->join('parametros', 'ag_responsables.i_prm_responsable_id', '=', 'parametros.id')
            ->join('users', 'ag_responsables.user_id', '=', 'users.id')
            ->where('ag_actividad_id', $dataxxxx['padrexxx'])->get();
        foreach ($responsablx as $value) {
            $responsable[] = $value->nombre1 . ' ' . $value->nombre2 . ' ' . $value->apellido1 . ' ' . $value->apellido2 . ' - ' . $value->i_prm_responsable_id;
        }

        return   $responsable;


   
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
            ->where('salida_jovenes.ai_salmay_id', $dataxxxx['padrexxx'])->groupBy('parametros.nombre', 'jovenes_motivos.parametro_id')->get();

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
        $upixxxxy = [];
        $upixxxxx = NnajUpi::select(['sis_depens.nombre', 'nnaj_upis.id', 'parametros.nombre as principal'])
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->join('parametros', 'nnaj_upis.prm_principa_id', '=', 'parametros.id')
            ->join('sis_nnajs', 'nnaj_upis.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where('nnaj_upis.sis_esta_id', 1)
            ->where('nnaj_upis.sis_nnaj_id', $dataxxxx['padrexxx'])->get();
        /**
         * upis que tiene el nnaj
         */
        foreach ($upixxxxx as $key => $value) {


            $servicio = NnajDese::select('sis_servicios.s_servicio')
                ->join('sis_servicios', 'nnaj_deses.sis_servicio_id', '=', 'sis_servicios.id')
                ->where('nnaj_deses.sis_esta_id', 1)
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
    /**
     *
     */
    public static function getPuedeCargar($dataxxxx)
    {
        $puedcarg = false;
        $dependen = User::select(['users.id', 'nnaj_upis.sis_depen_id'])->where('users.id', Auth::user()->id)
            ->join('sis_depen_user', 'users.id', '=', 'sis_depen_user.user_id')
            ->join('nnaj_upis', 'sis_depen_user.sis_depen_id', '=', 'nnaj_upis.sis_depen_id')
            ->where('nnaj_upis.sis_nnaj_id', $dataxxxx['nnajxxxx'])
            ->where('nnaj_upis.sis_esta_id', 1)
            ->where('sis_depen_user.sis_esta_id', 1)
            ->first();
        if (isset($dependen->id)) {
            $puedcarg = true;
        }
        return $puedcarg;
    }

    public static function getDiasGrupo($dataxxxx)
    {
        return GrupoDias::select(['parametros.nombre'])
            ->join('parametros', 'grupo_dias.prm_dia_id', '=', 'parametros.id')
            ->where('grupo_id', $dataxxxx['padrexxx'])->get();
    }

    // return VsiEmocionVincula::select(['parametros.nombre'])
    // ->join('parametros', 'vsi_emocion_vincula.parametro_id', '=', 'parametros.id')
    // ->where('vsi_datos_vincula_id', $dataxxxx['vsiidxxx'])->get();



    public static function active($dataxxxx)
    {
        return request()->is($dataxxxx['pathxxxx']) ? 'active' : '';
    }

    public static function getBeneficiarios($dataxxxx)
    {
        $contador = IMatriculaNnaj::where('imatricula_id', $dataxxxx['padrexxx'])->count('id');

        return $contador;
    }
}
