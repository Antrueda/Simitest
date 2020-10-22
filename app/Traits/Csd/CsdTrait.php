<?php

namespace App\Traits\Csd;

use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\pivotes\CsdRescomparte;
use App\Models\consulta\pivotes\CsdReshogar;
use App\Models\consulta\pivotes\CsdResservi;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait CsdTrait
{
    use DatatableTrait;
    public function getCombo($dataxxxx)
    {
        $respuest = ['selectxx' => $dataxxxx['selectxx'], 'comboxxx' => [['valuexxx' => $dataxxxx['valuexxx'], 'optionxx' => $dataxxxx['optionxx'], 'selected' => 'selected']], 'nigunaxx' => true];
        if ($dataxxxx['padrexxx'] == 0) {
            $dataxxxx['padrexxx'] = [];
        }
        foreach ($dataxxxx['padrexxx']  as $key => $value) {
            if ($value == $dataxxxx['valuexxx']) {
                $respuest['nigunaxx'] = false;
            }
        }
        if ($respuest['nigunaxx']) {
            $respuest['comboxxx'] = Tema::combo($dataxxxx['temaxxxx'], false, true);
            foreach ($respuest['comboxxx'] as $key => $value) {
                $respuest['comboxxx'][$key]['selected'] = in_array($value['valuexxx'], $dataxxxx['padrexxx']) ? 'selected' : '';
            }
        }
        return $respuest;
    }



    public function getUltimoNivel(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            switch ($request->padrexxx) {
                case 829:
                    $respuest = [
                        ['campoxxx' => '#i_prm_ultimo_grado_aprobado_id', 'valuexxx' => 1269],
                        ['campoxxx' => '#i_prm_certificado_ultimo_nivel_id', 'valuexxx' => 228],
                    ];
                    break;
                case 830:
                    $respuest = [
                        ['campoxxx' => '#i_prm_ultimo_grado_aprobado_id', 'valuexxx' => 2260],
                    ];
                    break;

                default:
                    $respuest = [
                        ['campoxxx' => '#i_prm_ultimo_grado_aprobado_id', 'valuexxx' => ''],
                        ['campoxxx' => '#i_prm_certificado_ultimo_nivel_id', 'valuexxx' => ''],
                    ];
                    break;
            }
            return $respuest;
        }
    }
    public function getCaminando(Request $request)
    {

        if ($request->ajax()) {
            $respuest = [];
            switch ($request->opcionxx) {
                case 1:
                    $dataxxxx = ['selectxx' => 'prm_victataq_id', 'valuexxx' => 853, 'optionxx' => 'NINGUNA', 'padrexxx' => $request->padrexxx, 'temaxxxx' => 342];
                    $respuest = $this->getCombo($dataxxxx);
                    break;
                case 2:
                    $dataxxxx = ['selectxx' => 'prm_discausa_id', 'valuexxx' => 27, 'optionxx' => 'NS/NR', 'padrexxx' => $request->padrexxx, 'temaxxxx' => 341];
                    $respuest = $this->getCombo($dataxxxx);
                    break;
                case 3:
                    $dataxxxx = ['selectxx' => 'i_prm_condicion_amb_id', 'valuexxx' => 168, 'optionxx' => 'NINGUNO', 'padrexxx' => $request->padrexxx, 'temaxxxx' => 42];
                    $respuest = $this->getCombo($dataxxxx);
                    break;
            }
            return response()->json($respuest);
        }
    }
    public function getNnajsFi($request)
    {
        $dataxxxx =  FiDatosBasico::select([
            'fi_datos_basicos.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado'
        ])
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getNotInt()
    {
        $userxxxx = Auth::user();
        $userxxxx = SisDepeUsua::select('sis_depen_id')->where(function ($queryxxx) use ($userxxxx) {
            $queryxxx->where('user_id', $userxxxx->id);
            $queryxxx->where('sis_esta_id', 1);
        })->get();

        return $userxxxx;
    }



    public function getNnajsFi2user($request)
    {
        $userxxxx['user_id'] = Auth::user()->id;
        $dataxxxx =  FiDatosBasico::select([
            'fi_datos_basicos.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id'

        ])
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('users', 'fi_datos_basicos.user_crea_id', '=', 'users.id')
            ->where('fi_datos_basicos.user_crea_id', '=', $userxxxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }


    public function getCompoFami($request)
    {
        $dataxxxx =  FiCompfami::select([
            'fi_compfamis.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_compfamis.sis_esta_id',
            'fi_compfamis.created_at',
            'sis_estas.s_estado'
        ])
            ->join('sis_nnajs', 'fi_compfamis.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_compfamis.sis_esta_id', '=', 'sis_estas.id')
            ->where('fi_compfamis.sis_nnajnnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getTodoComFami($request)
    {
        $dataxxxx =  SisNnaj::select([
            'sis_nnajs.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'sis_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'sis_nnajs.created_at',
            'sis_estas.s_estado'
        ])
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
            ->whereNotIn('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id', $request->padrexxx)->get());
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getAntecedentesTrait($request)
    {
        $dataxxxx =  CsdRedsocPasado::select(
            'csd_redsoc_pasados.id',
            'csd_redsoc_pasados.nombre',
            'csd_redsoc_pasados.servicios',
            'csd_redsoc_pasados.cantidad',
            'tiempo.nombre as tipotiem',
            'csd_redsoc_pasados.ano',
            'csd_redsoc_pasados.csd_id',
            'csd_redsoc_pasados.sis_esta_id',
            'csd_redsoc_pasados.created_at',
            'sis_estas.s_estado'
        )
            ->join('sis_estas', 'csd_redsoc_pasados.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as tiempo', 'csd_redsoc_pasados.prm_unidad_id', '=', 'tiempo.id')
            ->where(
                'csd_redsoc_pasados.csd_id',
                $request->padrexxx
            );
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getActualesTrait($request)
    {
        $dataxxxx =  CsdRedsocActual::select(
            'csd_redsoc_actuals.id',
            'csd_redsoc_actuals.csd_id',
            'red.nombre as redxxxxx',
            'csd_redsoc_actuals.nombre',
            'csd_redsoc_actuals.servicios',
            'csd_redsoc_actuals.telefono',
            'csd_redsoc_actuals.direccion',
            'csd_redsoc_actuals.sis_esta_id',
            'csd_redsoc_actuals.created_at',
            'sis_estas.s_estado'
        )
            ->join('sis_estas', 'csd_redsoc_actuals.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as red', 'csd_redsoc_actuals.prm_tipo_id', '=', 'red.id')
            ->where(function ($queryxxx) use ($request) {
                $queryxxx
                    ->where('csd_redsoc_actuals.csd_id', $request->padrexxx);
            });
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getJusticiaTrait($request)
    {
        $dataxxxx = FiJustrest::select(
            'fi_jr_familiars.id',
            'fi_justrests.sis_nnaj_id',
            'fi_jr_familiars.sis_esta_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_jr_familiars.s_proceso',
            'vigente.nombre as vigente',
            'fi_jr_familiars.i_veces',
            'fi_jr_familiars.s_proceso',
            'fi_jr_familiars.i_tiempo',
            'tiempo.nombre as tiempo',
            'fi_justrests.created_at',
            'sis_estas.s_estado'
        )

            ->join('fi_jr_familiars', 'fi_justrests.id', '=', 'fi_jr_familiars.fi_justrest_id')
            ->join('sis_estas', 'fi_jr_familiars.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as vigente', 'fi_jr_familiars.i_prm_vigente_id', '=', 'vigente.id')
            ->join('parametros as tiempo', 'fi_jr_familiars.i_prm_tiempo_id', '=', 'tiempo.id')
            ->join('fi_compfamis', 'fi_jr_familiars.fi_compfami_id', '=', 'fi_compfamis.id')
            ->join('fi_datos_basicos', 'fi_compfamis.sis_nnaj_id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->where('fi_justrests.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getConsumoTrait($request)
    {
        $dataxxxx =  FiConsumoSpa::select(
            'fi_sustancia_consumidas.id',
            'fi_sustancia_consumidas.sis_esta_id',
            'sustancia.nombre as sustancia',
            'fi_sustancia_consumidas.i_edad_uso',
            'consume.nombre as consume',
            'fi_sustancia_consumidas.created_at',
            'sis_estas.s_estado'
        )
            ->join('fi_sustancia_consumidas', 'fi_consumo_spas.id', '=', 'fi_sustancia_consumidas.fi_consumo_spa_id')
            ->join('sis_estas', 'fi_sustancia_consumidas.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as sustancia', 'fi_sustancia_consumidas.i_prm_sustancia_id', '=', 'sustancia.id')
            ->join('parametros as consume', 'fi_sustancia_consumidas.i_prm_consume_id', '=', 'consume.id')
            ->where('fi_consumo_spas.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getArchivosTrait($request)
    {
        $dataxxxx =  FiRazone::select([
            'fi_documentos_anexas.id',
            'fi_razones.sis_nnaj_id',
            'fi_documentos_anexas.fi_razone_id',
            'fi_documentos_anexas.s_ruta',
            'fi_documentos_anexas.sis_esta_id',
            'parametros.nombre',
            'fi_documentos_anexas.created_at',
            'sis_estas.s_estado'
        ])
            ->join('fi_documentos_anexas', 'fi_razones.id', '=', 'fi_documentos_anexas.fi_razone_id')
            ->join('sis_estas', 'fi_documentos_anexas.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros', 'fi_documentos_anexas.i_prm_documento_id', '=', 'parametros.id')
            ->where('fi_razones.id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getPadres($request)
    {
        $dataxxxx =  CsdDinfamPadre::select([
            'csd_dinfam_padres.id',
            'convive.nombre as convive',
            'csd_dinfam_padres.dia',
            'csd_dinfam_padres.mes',
            'csd_dinfam_padres.ano',
            'csd_dinfam_padres.hijo',
            'csd_dinfam_padres.created_at',
            'separado.nombre as separado',
            'csd_dinfam_padres.sis_esta_id',
            'sis_estas.s_estado',

        ])
            ->join('parametros as convive', 'csd_dinfam_padres.prm_convive_id', '=', 'convive.id')
            ->leftJoin('parametros as separado', 'csd_dinfam_padres.prm_separa_id', '=', 'separado.id')
            ->join('sis_estas', 'csd_dinfam_padres.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_dinfam_padres.csd_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getAportantes($request)
    {
        $dataxxxx =  CsdGeningAporta::select([
            'csd_gening_aportas.id',
            'aporta.nombre as aporta',
            'csd_gening_aportas.mensual',
            'csd_gening_aportas.aporte',
            'csd_gening_aportas.jornada_entre',
            'entre.nombre as entre',
            'csd_gening_aportas.jornada_a',
            'jornada.nombre as jornada',
            'csd_gening_aportas.created_at',
            'csd_gening_aportas.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as aporta', 'csd_gening_aportas.prm_aporta_id', '=', 'aporta.id')
            ->join('parametros as entre', 'csd_gening_aportas.prm_entre_id', '=', 'entre.id')
            ->join('parametros as jornada', 'csd_gening_aportas.prm_a_id', '=', 'jornada.id')
            ->join('sis_estas', 'csd_gening_aportas.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_gening_aportas.csd_id', $request->padrexxx);

        return $this->getDtAportantes($dataxxxx, $request);
    }


    public function getMadres($request)
    {
        $dataxxxx =  CsdDinfamMadre::select([
            'csd_dinfam_madres.id',
            'convive.nombre as convive',
            'csd_dinfam_madres.dia',
            'csd_dinfam_madres.mes',
            'csd_dinfam_madres.ano',
            'csd_dinfam_madres.created_at',
            'csd_dinfam_madres.hijo',
            'separado.nombre as separado',
            'csd_dinfam_madres.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as convive', 'csd_dinfam_madres.prm_convive_id', '=', 'convive.id')
            ->leftJoin('parametros as separado', 'csd_dinfam_madres.prm_separa_id', '=', 'separado.id')
            ->join('sis_estas', 'csd_dinfam_madres.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_dinfam_madres.csd_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    /**
     * consultas sociales del nnaj
     *
     * @param [type] $request
     * @return void
     */
    public function getCsdNnaj($request)
    {
        $dataxxxx =  CsdSisNnaj::select([
            'csds.id',
            'csds.proposito',
            'csds.fecha',
            'csds.sis_esta_id',
            'sis_estas.s_estado',
            'csds.created_at',
        ])
            ->join('csds', 'csd_sis_nnaj.csd_id', '=', 'csds.id')
            ->join('sis_estas', 'csds.sis_esta_id', '=', 'sis_estas.id')

            ->where('csd_sis_nnaj.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    /**
     * lista de nnaj visitados en la csd
     *
     * @param [type] $request
     * @return void
     */
    public function getVisitados($request)
    {
        $dataxxxx =  CsdSisNnaj::select([
            'csd_sis_nnaj.id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_docus.s_documento',
            'sis_depens.nombre',
            'csd_sis_nnaj.sis_esta_id',
            'csd_sis_nnaj.created_at',
            'sis_estas.s_estado'
        ])
            ->join('csds', 'csd_sis_nnaj.csd_id', '=', 'csds.id')
            ->join('nnaj_upis', 'csds.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->join('fi_datos_basicos', 'csd_sis_nnaj.sis_nnaj_id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'csd_sis_nnaj.sis_esta_id', '=', 'sis_estas.id')
            ->where('nnaj_upis.prm_principa_id', 227)
            ->where('csd_sis_nnaj.csd_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getServicio($request)
    {
        $dataxxxx =  CsdResservi::select([
            'csd_resservis.id',
            'servicio.nombre as servicio',
            'legal.nombre as legal',
            'csd_resservis.created_at',
            'csd_resservis.sis_esta_id',
            'sis_estas.s_estado',

        ])
            ->join('parametros as servicio', 'csd_resservis.prm_servicio_id', '=', 'servicio.id')
            ->leftJoin('parametros as legal', 'csd_resservis.prm_legalxxx_id', '=', 'legal.id')
            ->join('sis_estas', 'csd_resservis.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_resservis.csd_residencia_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getEspacio($request)
    {
        $dataxxxx =  CsdReshogar::select([
            'csd_reshogars.id',
            'espacio.nombre as espacio',
            'csd_reshogars.espaciocant',
            'csd_reshogars.created_at',
            'csd_reshogars.sis_esta_id',
            'sis_estas.s_estado',

        ])
            ->join('parametros as espacio', 'csd_reshogars.prm_espacio_id', '=', 'espacio.id')
            ->join('sis_estas', 'csd_reshogars.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_reshogars.csd_residencia_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getComparte($request)
    {
        $dataxxxx =  CsdRescomparte::select([
            'csd_rescomparte.id',
            'espacio.nombre as espacio',
            'comparte.nombre as comparte',
            'csd_rescomparte.created_at',
            'csd_rescomparte.sis_esta_id',
            'sis_estas.s_estado',

        ])
            ->join('parametros as espacio', 'csd_rescomparte.prm_espacio_id', '=', 'espacio.id')
            ->leftJoin('parametros as comparte', 'csd_rescomparte.prm_otrafamilia_id', '=', 'comparte.id')
            ->join('sis_estas', 'csd_rescomparte.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_rescomparte.csd_residencia_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }


    public function getNnajs($request)
    {
        $notinxxx = CsdSisNnaj::select(['sis_nnaj_id'])->where('csd_id', $request->padrexxx)->get();
        $dataxxxx =  FiDatosBasico::select([
            'sis_nnajs.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id',
        ])
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->whereNotIn('fi_datos_basicos.sis_nnaj_id', $notinxxx)
            ->where('sis_nnajs.prm_escomfam_id', 227);

        return $this->getDtAcciones($dataxxxx, $request);
    }

    /**
     * encontrar el nnaj visitado
     */

    public function getVisitado(Request $request)
    {

        if ($request->ajax()) {
            return response()->json([
                'dataxxxx' => FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->NombreCedulaAjax,
                'campoxxx' => 'sis_nnaj_id',
            ]);
        }
    }
}
