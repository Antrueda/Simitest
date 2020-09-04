<?php

namespace App\Helpers\Indicadores;

use App\Helpers\DatatableHelper;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InRespu;
use App\Models\Indicadores\InValoracion;
use App\Traits\DatatableTrait;

class IndicadorApi
{
    use DatatableTrait;
    public static function getIndicadores($request)
    {
        $paciente = InIndicador::select([
            'in_indicadors.id', 'in_indicadors.s_indicador', 'areas.nombre', 'sis_estas.s_estado',
            'in_indicadors.sis_esta_id', 'in_indicadors.area_id'
        ])
            ->join('sis_estas', 'in_indicadors.sis_esta_id', '=', 'sis_estas.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDt($paciente, $request);
    }

    public static function getAreas($request)
    {
        $paciente = Area::select(['areas.id', 'areas.nombre', 'sis_estas.s_estado', 'areas.sis_esta_id', 'sis_estas.s_estado'])
            ->join('sis_estas', 'areas.sis_esta_id', '=', 'sis_estas.id');
        return DatatableHelper::getDt($paciente, $request);
    }

    public static function getIndicadorLineasBase($request)
    {
        $paciente = InFuente::select([
            'in_fuentes.id', 'in_indicadors.area_id', 'in_fuentes.in_indicador_id', 'in_linea_bases.s_linea_base',
            'areas.nombre', 'sis_estas.s_estado',
            'in_fuentes.sis_esta_id',
        ])
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('sis_estas', 'in_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->where('in_indicadors.id', $request->padrexxx);
        return DatatableHelper::getDt($paciente, $request);
    }

    public static function getBaseDocuementos($request)
    {
        $paciente = InFuente::select([
            'in_fuentes.id',
            'in_linea_bases.s_linea_base',
            'in_fuentes.sis_esta_id',
            'in_indicadors.s_indicador',
            'sis_estas.s_estado',
            'in_indicadors.sis_esta_id',
            'in_indicadors.area_id'
        ])
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('sis_estas', 'in_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatable($paciente, $request);
    }


    public static function getDocumentos($request)
    {
        $paciente = InBaseFuente::select([
            'in_ligrus.id',  'sis_docfuens.nombre', 'in_linea_bases.s_linea_base', 'in_base_fuentes.sis_esta_id',
            'sis_estas.s_estado', 'in_indicadors.sis_esta_id', 'in_indicadors.area_id'
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')

            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('in_ligrus', 'in_base_fuentes.id', '=', 'in_ligrus.in_base_fuente_id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->join('sis_docfuens', 'in_base_fuentes.sis_docfuen_id', '=', 'sis_docfuens.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatable($paciente, $request);
    }






    public static function getBaseGrupos($request)
    {
        $paciente = InBaseFuente::select([
            'in_base_fuentes.id',
            'in_linea_bases.s_linea_base',
            'sis_docfuens.nombre',
            'in_base_fuentes.sis_esta_id',
            'sis_estas.s_estado',
            'in_indicadors.area_id',
            'in_fuentes.in_linea_base_id'
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('sis_docfuens', 'in_base_fuentes.sis_docfuen_id', '=', 'sis_docfuens.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatable($paciente, $request);
    }
    public static function getGrupos($request)
    {
        $paciente = InLigru::select([
            'in_ligrus.id',
            'in_linea_bases.s_linea_base',
            'in_ligrus.sis_esta_id',
            'in_indicadors.area_id',
            'in_fuentes.in_linea_base_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'in_ligrus.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_base_fuentes', 'in_ligrus.in_base_fuente_id', '=', 'in_base_fuentes.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->where('in_ligrus.in_base_fuente_id', $request->padrexxx);
        return DatatableHelper::getDt($paciente, $request);
    }

    public static function getDocPreguntas($request)
    {
        $dataxxxx = InDocPregunta::select([
            'in_doc_preguntas.id', 'in_preguntas.s_pregunta',
            'sis_tcampos.s_numero', 'in_doc_preguntas.in_ligru_id', 'in_indicadors.area_id',
            'sis_estas.s_estado', 'in_doc_preguntas.sis_esta_id', 'in_indicadors.s_indicador'
        ])

            ->join('sis_estas', 'in_doc_preguntas.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_tcampos', 'in_doc_preguntas.sis_tcampo_id', '=', 'sis_tcampos.id')
            ->join('in_preguntas', 'sis_tcampos.in_pregunta_id', '=', 'in_preguntas.id')
            ->join('in_ligrus', 'in_doc_preguntas.in_ligru_id', '=', 'in_ligrus.id')
            ->join('in_base_fuentes', 'in_ligrus.in_base_fuente_id', '=', 'in_base_fuentes.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->where('in_doc_preguntas.in_ligru_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }

    public static function getPregRespuestas($request)
    {
        $dataxxxx = InRespu::select([
            'in_respus.id', 'in_preguntas.s_pregunta',
            'sis_tcampos.s_numero',
            'sis_estas.s_estado', 'in_respus.sis_esta_id', 'parametros.nombre'
        ])
            ->join('parametros', 'in_respus.prm_respuesta_id', '=', 'parametros.id')
            ->join('sis_estas', 'in_respus.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_doc_preguntas', 'in_respus.in_doc_pregunta_id', '=', 'in_doc_preguntas.id')
            ->join('sis_tcampos', 'in_doc_preguntas.sis_tcampo_id', '=', 'sis_tcampos.id')
            ->join('in_preguntas', 'sis_tcampos.in_pregunta_id', '=', 'in_preguntas.id')
            ->where('in_respus.in_doc_pregunta_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }
    public static function getBaseFuentes($request)
    {
        $dataxxxx = InBaseFuente::select([
            'in_base_fuentes.id', 'sis_docfuens.nombre', 'in_base_fuentes.in_fuente_id',
            'sis_estas.s_estado', 'in_base_fuentes.sis_esta_id',
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_docfuens', 'in_base_fuentes.sis_docfuen_id', '=', 'sis_docfuens.id')
            ->where('in_base_fuentes.in_fuente_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }
    public static function getInLineabaseNnajs($request)
    {
        $dataxxxx = InLineabaseNnaj::select([
            'sis_nnajs.id',
            'sis_nnajs.sis_esta_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
        ])
            ->join('sis_nnajs', 'in_lineabase_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')

            // ->groupBy('sis_nnajs.id')
            // ->groupBy('fi_datos_basicos.s_primer_nombre')
            // ->groupBy('fi_datos_basicos.s_segundo_nombre')
            // ->groupBy('fi_datos_basicos.s_primer_apellido')
            // ->groupBy('fi_datos_basicos.s_segundo_apellido')
        ;
        return DatatableHelper::getDt($dataxxxx, $request);
    }

    public static function getValoracionIncial($request)
    {
        $dataxxxx = InLineabaseNnaj::select([
            'in_lineabase_nnajs.id',
            'in_lineabase_nnajs.sis_esta_id',
            'in_linea_bases.s_linea_base',
            'in_lineabase_nnajs.sis_nnaj_id',
        ])
            ->join('in_fuentes', 'in_lineabase_nnajs.in_fuente_id', '=', 'in_fuentes.id')
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->where('in_lineabase_nnajs.sis_nnaj_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }
    public static function getBaseActividades($request)
    {
        $dataxxxx = InAccionGestion::select([
            'in_accion_gestions.id',
            'in_accion_gestions.sis_esta_id',
            'sis_estas.s_estado',
            'sis_actividads.nombre',
        ])
            ->join('sis_estas', 'in_accion_gestions.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_lineabase_nnajs', 'in_accion_gestions.in_lineabase_nnaj_id', '=', 'in_lineabase_nnajs.id')
            ->join('sis_actividads', 'in_accion_gestions.sis_actividad_id', '=', 'sis_actividads.id')
            ->join('sis_docfuens', 'sis_actividads.sis_docfuen_id', '=', 'sis_docfuens.id')
            ->where('in_lineabase_nnajs.id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }

    public static function getAtividadFuentes($request)
    {
        $dataxxxx = InActsoporte::select([
            'in_actsoportes.id',
            'in_actsoportes.sis_esta_id',
            'sis_fsoportes.nombre',
            'in_lineabase_nnajs.sis_nnaj_id',
            'in_accion_gestions.in_lineabase_nnaj_id',
            'in_actsoportes.in_accion_gestion_id',
        ])
            ->join('in_accion_gestions', 'in_actsoportes.in_accion_gestion_id', '=', 'in_accion_gestions.id')
            ->join('in_lineabase_nnajs', 'in_accion_gestions.in_lineabase_nnaj_id', '=', 'in_lineabase_nnajs.id')
            ->join('sis_fsoportes', 'in_actsoportes.sis_fsoporte_id', '=', 'sis_fsoportes.id')
            ->where('in_actsoportes.in_accion_gestion_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }

    public static function getValoraciones($request)
    {
        $dataxxxx = InValoracion::select([
            'in_valoracions.id',
            'in_valoracions.sis_esta_id',
            'sis_estas.s_estado',
            'avancexx.nombre as avancexx',
            'nivelxxx.nombre as nivelxxx',
            'cactualx.nombre as cactualx',
            'in_valoracions.s_valoracion',
        ])
            ->join('parametros as avancexx', 'in_valoracions.i_prm_avance_id', '=', 'avancexx.id')
            ->join('parametros as nivelxxx', 'in_valoracions.i_prm_nivel_id', '=', 'nivelxxx.id')
            ->join('parametros as cactualx', 'in_valoracions.i_prm_cactual_id', '=', 'cactualx.id')
            ->join('sis_estas', 'in_valoracions.sis_esta_id', '=', 'sis_estas.id')
            ->where('in_valoracions.in_lineabase_nnaj_id', $request->padrexxx);
        return DatatableHelper::getDt($dataxxxx, $request);
    }
}
