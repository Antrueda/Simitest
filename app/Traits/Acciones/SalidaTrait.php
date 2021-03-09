<?php

namespace App\Traits\Acciones;

use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\Acciones\Individuales\Pivotes\EvasionParentesco;
use App\Models\Acciones\Individuales\Pivotes\EvasionVestuario;
use App\Models\consulta\CsdComFamiliar;
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
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait SalidaTrait
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
                        ['campoxxx' => '#prm_ultgrapr_id', 'valuexxx' => 235],
                        ['campoxxx' => '#prm_cerulniv_id', 'valuexxx' => 228],
                    ];
                    break;
                case 830:
                    $respuest = [
                        ['campoxxx' => '#prm_ultgrapr_id', 'valuexxx' => 2260],
                    ];
                    break;

                default:
                    $respuest = [
                        ['campoxxx' => '#prm_ultgrapr_id', 'valuexxx' => ''],
                        ['campoxxx' => '#prm_cerulniv_id', 'valuexxx' => ''],
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
        $dataxxxx =  CsdComFamiliar::select([
            'csd_com_familiars.id',
            'csd_com_familiars.s_primer_nombre',
            'csd_com_familiars.s_documento',
            'csd_com_familiars.s_segundo_nombre',
            'csd_com_familiars.s_primer_apellido',
            'csd_com_familiars.s_segundo_apellido',
            'csd_com_familiars.sis_esta_id',
            'csd_com_familiars.created_at',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'csd_com_familiars.sis_esta_id', '=', 'sis_estas.id')
            ->where('csd_com_familiars.csd_id', $request->padrexxx);
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
            'fi_compfamis.s_telefono',
            'sis_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'sis_nnajs.created_at',
            'sis_estas.s_estado',

        ])
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
            ->join('fi_compfamis', 'sis_nnajs.id', '=', 'fi_compfamis.sis_nnaj_id')
            ->where('fi_compfamis.prm_reprlega_id', 227)
            ->wherein('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id', $request->padrexxx)->get())->groupBy(
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_compfamis.s_telefono',
                'sis_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',);

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
            ->where('csd_redsoc_pasados.csd_id', $request->padrexxx);
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

    public function getSalidas($request)
    {
        $dataxxxx =  AiSalidaMenores::select([
            'ai_salida_menores.id',
            'ai_salida_menores.fecha',
            'upi.nombre as upi',
            'ai_salida_menores.tiempo',
            'ai_salida_menores.causa',
            'ai_salida_menores.sis_esta_id',
            'ai_salida_menores.sis_nnaj_id',
            'users.name as nombre',
            'ai_salida_menores.created_at',
        ])
            ->join('sis_depens as upi', 'ai_salida_menores.prm_upi_id', '=', 'upi.id')
            ->join('users', 'ai_salida_menores.user_doc1_id', '=', 'users.id')
            ->join('sis_estas', 'ai_salida_menores.sis_esta_id', '=', 'sis_estas.id')
            ->where('ai_salida_menores.sis_nnaj_id', $request->padrexxx);
        return $this->getDtSalidasIndividuales($dataxxxx, $request);
    }



    public function getEvasion($request)
    {
        $dataxxxx =  AiReporteEvasion::select([
            'ai_reporte_evasions.id',
            'ai_reporte_evasions.fecha_evasion',
            'upi.nombre as upi',
            'ai_reporte_evasions.hora_evasion',
            'ai_reporte_evasions.lugar_evasion',
            'ai_reporte_evasions.sis_esta_id',
            'ai_reporte_evasions.sis_nnaj_id',
            'ai_reporte_evasions.created_at',
        ])
            ->join('sis_depens as upi', 'ai_reporte_evasions.prm_upi_id', '=', 'upi.id')
            ->join('sis_estas', 'ai_reporte_evasions.sis_esta_id', '=', 'sis_estas.id')
            ->where('ai_reporte_evasions.sis_nnaj_id', $request->padrexxx)
            ->where('ai_reporte_evasions.sis_esta_id',1);
        return $this->getDtAcciones($dataxxxx, $request);
    }


    public function getRetorno($request)
    {
        $dataxxxx =  AiRetornoSalida::select([
            'ai_retosalis.id',
            'ai_retosalis.fecha',
            'upi.nombre as upi',
            'ai_retosalis.hora_retorno',
            'ai_retosalis.sis_esta_id',
            'ai_retosalis.sis_nnaj_id',
            'ai_retosalis.observaciones',
            'users.name',
            'ai_retosalis.created_at',
        ])
            ->join('sis_depens as upi', 'ai_retosalis.prm_upi_id', '=', 'upi.id')
            ->join('sis_estas', 'ai_retosalis.sis_esta_id', '=', 'sis_estas.id')
            ->join('users', 'ai_retosalis.user_doc1_id', '=', 'users.id')
            ->where('ai_retosalis.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getSalidasMayores($request)
    {
        $dataxxxx =  AiSalidaMayores::select([
            'ai_salida_mayores.id',
            'ai_salida_mayores.fecha',
            'upi.nombre as upi',
            'ai_salida_mayores.sis_esta_id',
            'ai_salida_mayores.sis_nnaj_id',
            'ai_salida_mayores.created_at',
        ])
            ->join('sis_depens as upi', 'ai_salida_mayores.prm_upi_id', '=', 'upi.id')
            ->join('sis_estas', 'ai_salida_mayores.sis_esta_id', '=', 'sis_estas.id')
            ->where('ai_salida_mayores.sis_nnaj_id', $request->padrexxx);
        return $this->getDtSalidas($dataxxxx, $request);
    }

    public function getSalidasMayoresGrupales($request)
    {
        $dataxxxx =  AiSalidaMayores::select([
            'ai_salida_mayores.id',
            'ai_salida_mayores.fecha',
            'upi.nombre as upi',
            'ai_salida_mayores.sis_esta_id',
            'ai_salida_mayores.sis_nnaj_id',
            'ai_salida_mayores.created_at',
        ])
            ->join('sis_depens as upi', 'ai_salida_mayores.prm_upi_id', '=', 'upi.id')
            ->join('sis_estas', 'ai_salida_mayores.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtSalidas($dataxxxx, $request);
    }

    public function getFosDiligenciado(request $request)
    {
        $dataxxxx = FosDatosBasico::select(
            'fos_datos_basicos.id',
            'areas.nombre as areas',
            'fos_tses.nombre as seguimiento',
            'fos_stses.nombre as subseguimiento',
            'upi.nombre as upi',
            'fos_datos_basicos.d_fecha_diligencia',
            'fos_datos_basicos.sis_esta_id',
            'fos_datos_basicos.created_at',
            'fos_datos_basicos.sis_nnaj_id',
        )
            ->join('sis_estas', 'fos_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_depens as upi', 'fos_datos_basicos.sis_depen_id', '=', 'upi.id')
            ->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
            ->join('fos_tses', 'fos_datos_basicos.fos_tse_id', '=', 'fos_tses.id')
            ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
            ->where('fos_datos_basicos.sis_nnaj_id', $request->padrexxx);
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


    public function getParentesco($request)
    {
        $dataxxxx =  EvasionParentesco::select([
            'evasion_parentescos.id',
            'parentesco.nombre as parentesco',
            'evasion_parentescos.primer_apellido',
            'evasion_parentescos.segundo_apellido',
            'evasion_parentescos.primer_nombre',
            'evasion_parentescos.segundo_nombre',
            'evasion_parentescos.direccion_familiar',
            'evasion_parentescos.s_telefono',
            'evasion_parentescos.sis_esta_id',
            'evasion_parentescos.created_at',
            'sis_estas.s_estado',
            ])
            ->join('parametros as parentesco', 'evasion_parentescos.prm_parentezco_id', '=', 'parentesco.id')
            ->join('sis_estas', 'evasion_parentescos.sis_esta_id', '=', 'sis_estas.id')
            ->where('evasion_parentescos.sis_esta_id', 1)
            ->where('evasion_parentescos.reporte_evasion_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getVestuario($request)
    {
        $dataxxxx =  EvasionVestuario::select([
            'evasion_vestuarios.id',
            'vestuario.nombre as vestuario',
            'evasion_vestuarios.material',
            'evasion_vestuarios.color',
            'evasion_vestuarios.created_at',
            'evasion_vestuarios.sis_esta_id',
            'sis_estas.s_estado',

        ])
            ->join('parametros as vestuario', 'evasion_vestuarios.prm_vestuario_id', '=', 'vestuario.id')
            ->join('sis_estas', 'evasion_vestuarios.sis_esta_id', '=', 'sis_estas.id')
            ->where('evasion_vestuarios.sis_esta_id', 1)
            ->where('evasion_vestuarios.reporte_evasion_id', $request->padrexxx);

        return $this->getDtAcciones($dataxxxx, $request);
    }


    /********************************  COMPOSICON FAMILIAR **************************************** */
    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],
                'parentes' => ['prm_parentezco_id', ''],
                'edadxxxx' => '',
                'paisxxxx' => ['sis_pai_id', ''],
                'departam' => ['sis_departam_id', [], ''],
                'municipi' => ['sis_municipio_id', [], ''],

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $expedici = $document->sis_municipio;
                $dataxxxx['tipodocu'][1] = $document->prm_tipodocu_id;
                $dataxxxx['paisxxxx'][1] = $expedici->sis_departam->sis_pai_id;
                $dataxxxx['departam'][1] = SisDepartam::combo($dataxxxx['paisxxxx'][1], true);
                $dataxxxx['departam'][2] = $expedici->sis_departam_id;
                $dataxxxx['municipi'][1] = SisMunicipio::combo($dataxxxx['departam'][2], true);
                $dataxxxx['municipi'][2] = $expedici->id;
                $dataxxxx['parentes'][1] = FiCompfami::where('sis_nnaj_id',$request->padrexxx)->first()->Parentesco;
            }

            return response()->json($dataxxxx);
        }
    }

    /******************************** FIN COMPOSICON FAMILIAR **************************************** */


    public function getResponsable(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['comboxxx' =>SisDepen::find($request->padrexxx)->ResponsableAjax,
                    'campoxxx' => '#responsable',
                    'selected' => 'selected'];
            return response()->json($respuest);
        }
    }

    public function getDireccion(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['comboxxx' =>SisDepen::find($request->padrexxx)->DireccionAjax,
                    'campoxxx' => '#direccion',
                    'selected' => 'selected'];
            return response()->json($respuest);
        }
    }
    public function getNnajsAc($request)
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
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id',
        ])
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->where('sis_nnajs.prm_escomfam_id', 227)
            ->whereIn('nnaj_upis.sis_depen_id', $this->getNotInt())->groupBy([
                'fi_datos_basicos.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.created_at',
                'sis_estas.s_estado',
                'fi_datos_basicos.user_crea_id',
            ]);
        return $this->getDtAccionesUpi($dataxxxx, $request);
    }



}
