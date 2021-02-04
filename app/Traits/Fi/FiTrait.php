<?php

namespace App\Traits\Fi;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiSalud;
use App\Models\Parametro;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait FiTrait
{
    use DatatableTrait;
    public function getCombo($dataxxxx)
    {
        $opciones = [
            'personas' => [235, 66],
            'prm_discausa_id' => [235, 341],
            'prm_victataq_id' => [853, 342],
            'i_prm_condicion_amb_id' => [168, 42],
        ];


        $parametr = Parametro::find($opciones[$dataxxxx['selectxx']][0])->ComboAjaxUno;
        $parametr[0]['selected'] = 'selected';
        $respuest = ['selectxx' => $dataxxxx['selectxx'], 'comboxxx' => $parametr, 'nigunaxx' => true];
        if ($dataxxxx['padrexxx'] == 0) {
            $dataxxxx['padrexxx'] = [];
        }
        foreach ($dataxxxx['padrexxx']  as $key => $value) {
            if ($value == $opciones[$dataxxxx['selectxx']][0]) {
                $respuest['nigunaxx'] = false;
            }
        }
        if ($respuest['nigunaxx']) {
            $respuest['comboxxx'] = Tema::combo($opciones[$dataxxxx['selectxx']][1], true, true);
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
                    if ($request->discapac == 228) {
                        $parametr = Parametro::find(235)->ComboAjaxUno;
                        $parametr[0]['selected'] = 'selected';
                        $respuest = ['selectxx' => 'prm_discausa_id', 'comboxxx' => $parametr, 'nigunaxx' => true];
                    } else {
                        $dataxxxx = ['selectxx' => 'prm_discausa_id', 'valuexxx' => 27, 'optionxx' => 'NS/NR', 'padrexxx' => $request->padrexxx, 'temaxxxx' => 341];
                        $respuest = $this->getCombo($dataxxxx);
                    }
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

    /**
     * encontrar las dependencias asisgnadas al usuario conectado
     *
     * @return void
     */
    public function getNotInt()
    {
        $userxxxx = Auth::user();
        $userxxxx = SisDepeUsua::select('sis_depen_id')->where(function ($queryxxx) use ($userxxxx) {
            $queryxxx->where('user_id', $userxxxx->id);
            $queryxxx->where('sis_esta_id', 1);
        })->get();

        return $userxxxx;
    }
    public function getNnajsFi2depen($request)
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
            // ->whereIn('nnaj_upis.sis_depen_id', $this->getNotInt())
            ->groupBy([
                'fi_datos_basicos.sis_nnaj_id', 'fi_datos_basicos.id', 'fi_datos_basicos.s_primer_nombre',
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
    public function getDiagnostico($request)
    {
        $dataxxxx =  FiSalud::select(
            'fi_enfermedades_familias.id',
            'fi_enfermedades_familias.created_at',
            'fi_saluds.sis_nnaj_id',
            'fi_enfermedades_familias.sis_esta_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_enfermedades_familias.s_tipo_enfermedad',
            'medicina.nombre as medicina',
            'sis_estas.s_estado',
            'fi_enfermedades_familias.s_medicamento',
            'tratamiento.nombre as tratamiento'
        )
            ->join('fi_enfermedades_familias', 'fi_saluds.id', '=', 'fi_enfermedades_familias.fi_salud_id')
            ->join('parametros as medicina', 'fi_enfermedades_familias.prm_recimedi_id', '=', 'medicina.id')
            ->join('parametros as tratamiento', 'fi_enfermedades_familias.prm_rectrata_id', '=', 'tratamiento.id')
            ->join('fi_compfamis', 'fi_enfermedades_familias.fi_compfami_id', '=', 'fi_compfamis.id')
            ->join('fi_datos_basicos', 'fi_compfamis.sis_nnaj_id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('sis_estas', 'fi_enfermedades_familias.sis_esta_id', '=', 'sis_estas.id')
            ->where('fi_saluds.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getAntecedentesTrait($request)
    {
        $dataxxxx =  FiRedApoyoAntecedente::select(
            'fi_red_apoyo_antecedentes.id',
            'sis_entidads.nombre',
            'fi_red_apoyo_antecedentes.s_servicio',
            'fi_red_apoyo_antecedentes.i_tiempo',
            'tiempo.nombre as tipotiem',
            'anio.nombre as anioxxxx',
            'fi_red_apoyo_antecedentes.sis_nnaj_id',
            'fi_red_apoyo_antecedentes.sis_esta_id',
            'fi_red_apoyo_antecedentes.created_at',
            'sis_estas.s_estado'
        )
            ->join('sis_estas', 'fi_red_apoyo_antecedentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_entidads', 'fi_red_apoyo_antecedentes.sis_entidad_id', '=', 'sis_entidads.id')
            ->join('parametros as tiempo', 'fi_red_apoyo_antecedentes.i_prm_tiempo_id', '=', 'tiempo.id')
            ->join('parametros as anio', 'fi_red_apoyo_antecedentes.i_prm_anio_prestacion_id', '=', 'anio.id')
            ->where(
                'fi_red_apoyo_antecedentes.sis_nnaj_id',
                $request->padrexxx
            );
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getActualesTrait($request)
    {
        $dataxxxx =  FiRedApoyoActual::select(
            'fi_red_apoyo_actuals.id',
            'fi_red_apoyo_actuals.sis_nnaj_id',
            'red.nombre as redxxxxx',
            'fi_red_apoyo_actuals.s_nombre_persona',
            'fi_red_apoyo_actuals.s_servicio',
            'fi_red_apoyo_actuals.s_telefono',
            'fi_red_apoyo_actuals.s_direccion',
            'fi_red_apoyo_actuals.sis_esta_id',
            'fi_red_apoyo_actuals.created_at',
            'sis_estas.s_estado'
        )
            ->join('sis_estas', 'fi_red_apoyo_actuals.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as red', 'fi_red_apoyo_actuals.i_prm_tipo_red_id', '=', 'red.id')
            ->where(function ($queryxxx) use ($request) {
                $queryxxx
                    ->where('fi_red_apoyo_actuals.sis_nnaj_id', $request->padrexxx);
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
    public function getNoMas(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = [
                'selectxx' => $request->selectxx,
                'valuexxx' => $request->valuexxx,
                'padrexxx' => $request->padrexxx,
                'temaxxxx' => $request->temaxxxx
            ];
            $respuest = $this->getCombo($dataxxxx);
            return response()->json($respuest);
        }
    }

    public function getGeneraIngreso(Request $request)
    {
        if ($request->ajax()) {
            $readonly = $request->padrexxx == 711 ? false : true;
            $respuest = [
                ['campoxxx' => '#diabuemp', 'valorxxx' => $readonly, 'propieda' => 'readonly'],
                ['campoxxx' => '#mesbuemp', 'valorxxx' => $readonly, 'propieda' => 'readonly'],
                ['campoxxx' => '#anobuemp', 'valorxxx' => $readonly, 'propieda' => 'readonly'],

            ];
            return response()->json($respuest);
        }
    }
}
