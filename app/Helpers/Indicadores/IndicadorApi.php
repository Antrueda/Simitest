<?php

namespace App\Helpers\Indicadores;

use App\Helpers\DatatableHelper;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLigru;

class IndicadorApi
{
    public static function getIndicadores($request)
    {
        $paciente = InIndicador::select([
            'in_indicadors.id', 'in_indicadors.s_indicador', 'areas.nombre', 'sis_estas.s_estado',
            'in_indicadors.sis_esta_id', 'in_indicadors.area_id'
        ])
            ->join('sis_estas', 'in_indicadors.sis_esta_id', '=', 'sis_estas.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatable($paciente, $request);
    }

    public static function getAreas($request)
    {
        $paciente = Area::select(['areas.id', 'areas.nombre', 'sis_estas.s_estado', 'areas.sis_esta_id', 'sis_estas.s_estado'])
            ->join('sis_estas', 'areas.sis_esta_id', '=', 'sis_estas.id');
        return DatatableHelper::getDatatable($paciente, $request);
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
            ->where('in_indicadors.area_id', $request->padrexxx)
            ->where('in_indicadors.id', $request->indicado);
        return DatatableHelper::getDatatable($paciente, $request);
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
            'in_ligrus.id',  'sis_documento_fuentes.nombre', 'in_linea_bases.s_linea_base', 'in_base_fuentes.sis_esta_id',
            'sis_estas.s_estado', 'in_indicadors.sis_esta_id', 'in_indicadors.area_id'
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')

            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('in_ligrus', 'in_base_fuentes.id', '=', 'in_ligrus.in_base_fuente_id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
            ->join('sis_documento_fuentes', 'in_base_fuentes.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatable($paciente, $request);
    }






    public static function getBaseGrupos($request)
    {
        $paciente = InBaseFuente::select([
            'in_base_fuentes.id',
            'in_linea_bases.s_linea_base',
            'sis_documento_fuentes.nombre',
            'in_base_fuentes.sis_esta_id',
            'sis_estas.s_estado',
            'in_indicadors.area_id',
            'in_fuentes.in_linea_base_id'
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
            ->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
            ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
            ->join('sis_documento_fuentes', 'in_base_fuentes.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
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
            ->where('in_indicadors.area_id', $request->padrexxx)
            ->where('in_ligrus.in_base_fuente_id', $request->inbafuid);
        return DatatableHelper::getDatatable($paciente, $request);
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
            ->where('in_doc_preguntas.sis_esta_id', 1)
            ->where('in_doc_preguntas.in_ligru_id', $request->grupoxxx);
        return DatatableHelper::getDatatableN($dataxxxx, $request);
    }

    public static function getPregRespuestas($request)
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
            ->where('in_doc_preguntas.sis_esta_id', 1)
            ->where('in_indicadors.area_id', $request->padrexxx);
        return DatatableHelper::getDatatableN($dataxxxx, $request);
    }
    public static function getBaseFuentes($request)
    {
        $dataxxxx = InBaseFuente::select([
            'in_base_fuentes.id', 'sis_documento_fuentes.nombre', 'in_base_fuentes.in_fuente_id',
            'sis_estas.s_estado', 'in_base_fuentes.sis_esta_id',
        ])
            ->join('sis_estas', 'in_base_fuentes.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_documento_fuentes', 'in_base_fuentes.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
            ->where('in_base_fuentes.in_fuente_id', $request->padrexxx);
        return DatatableHelper::getDatatableN($dataxxxx, $request);
    }
}
