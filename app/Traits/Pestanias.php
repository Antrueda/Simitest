<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

/**
 * trait que arma la estructuar para la funcionalidad de las pestañas de la administracion de indicadores
 */
trait Pestanias
{
    /**
     * array estructural de las pestañas
     */
    private $slotarea = [
        /**
         * array para las pestañas de dignóstico
         */
        'areaxxxx' => [ // PESTAñA DIAGNOSTICO
            'disabled', // habilita o deshabilida el link
            false,
            '',
            '',
            '',
            false
        ],
        'indicado' => ['disabled', false, '', '', '', false],
        'basefuen' => ['disabled', false, '', '', '', false],
        'basedocu' => ['disabled', false, '', '', '', false],
        'linegrup' => ['disabled', false, '', '', '', false],
        'pregunta' => ['disabled', false, '', '', '', false],
        'respuest' => ['disabled', false, '', '', '', false],
        'nnajxxxx' => ['disabled', false, '', '', '', false], // VALORACION INICIAL
        'linebase' => ['disabled', false, '', '', '', false],
        'valoinic' => ['disabled', false, '', '', '', false],
        'accigest' => ['disabled', false, '', '', '', false], // ACCIONES GESTION
        'activida' => ['disabled', false, '', '', '', false],
        'actifuen' => ['disabled', false, '', '', '', false],
        'valosegu' => ['disabled', false, '', '', '', false], // VALORACION SEGUIMIENTO
        'valoraci' => ['disabled', false, '', '', '', false],
    ];
    public function getSD($dataxxxx)
    {
        return isset(DB::table($dataxxxx['tablaxxx'])->first()->id) ? 'success' : 'danger';
    }

    public function getHay()
    {
        $this->slotarea['areaxxxx'][4] = $this->getSD(['tablaxxx' => 'areas']);
        $this->slotarea['indicado'][4] = $this->getSD(['tablaxxx' => 'in_indicadors']);
        $this->slotarea['basefuen'][4] = $this->getSD(['tablaxxx' => 'in_fuentes']);
        $this->slotarea['basedocu'][4] = $this->getSD(['tablaxxx' => 'in_base_fuentes']);
        $this->slotarea['linegrup'][4] = $this->getSD(['tablaxxx' => 'in_ligrus']);
        $this->slotarea['pregunta'][4] = $this->getSD(['tablaxxx' => 'in_preguntas']);
        $this->slotarea['respuest'][4] = $this->getSD(['tablaxxx' => 'in_respus']);
    }
    /**
     * se crea lo lógica de la funcionalidad de las pestañas
     */
    public function getAreas($dataxxxx)
    {
        $this->slotarea['areaxxxx'][0] = '';
        $this->slotarea['areaxxxx'][2] = route('area');
        $this->slotarea['nnajxxxx'][0] = '';
        $this->slotarea['nnajxxxx'][2] = route('valoinic');
        $this->slotarea[$dataxxxx['tablaxxx']][3] = 'active';
        $this->slotarea[$dataxxxx['tablaxxx']][0] = '';
        switch ($dataxxxx['tablaxxx']) {
            case 'areaxxxx':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['areaxxxx'][3] = 'active';
                break;
            case 'indicado':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']]), 'active', ''];
                break;
            case 'basefuen':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['indicado'] = ['', true, route('in.indicador', [$dataxxxx['padrexxx']->area_id]), '', ''];
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id]), 'active', ''];
                break;
                /**
                 * asignar los documentos fuentes a línea base
                 */
            case 'basedocu':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['indicado'] = ['', true, route('in.indicador', [$dataxxxx['padrexxx']->in_indicador->area_id]), ''];
                $this->slotarea['basefuen'] = ['', true, route('lbf.basefuente', [$dataxxxx['padrexxx']->in_indicador_id]), ''];
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id]), 'active'];
                break;
                /**
                 * crear grupos para la linea base
                 */
            case 'linegrup':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['indicado'] = ['', true, route('in.indicador', [$dataxxxx['padrexxx']->in_fuente->in_indicador->area_id]), ''];
                $this->slotarea['basefuen'] = ['', true, route('lbf.basefuente', [$dataxxxx['padrexxx']->in_fuente->in_indicador_id]), ''];
                $this->slotarea['basedocu'] = ['', true, route('bd.basedocumen', [$dataxxxx['padrexxx']->in_fuente_id]), ''];
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id]), 'active'];
                break;
            case 'pregunta':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['indicado'] = ['', true, route('in.indicador', [$dataxxxx['padrexxx']->in_base_fuente->in_fuente->in_indicador->area_id]), ''];
                $this->slotarea['basefuen'] = ['', true, route('lbf.basefuente', [$dataxxxx['padrexxx']->in_base_fuente->in_fuente->in_indicador_id]), ''];
                $this->slotarea['basedocu'] = ['', true, route('bd.basedocumen', [$dataxxxx['padrexxx']->in_base_fuente->in_fuente_id]), ''];
                $this->slotarea['linegrup'] = ['', true, route('inligru', [$dataxxxx['padrexxx']->in_base_fuente_id]), ''];
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id]), 'active'];
                break;
            case 'respuest':
                $this->slotarea['areaxxxx'][5] = true;
                $this->slotarea['indicado'] = ['', true, route('in.indicador', [$dataxxxx['padrexxx']->in_ligru->in_base_fuente->in_fuente->in_indicador->area_id]), ''];
                $this->slotarea['basefuen'] = ['', true, route('lbf.basefuente', [$dataxxxx['padrexxx']->in_ligru->in_base_fuente->in_fuente->in_indicador_id]), ''];
                $this->slotarea['basedocu'] = ['', true, route('bd.basedocumen', [$dataxxxx['padrexxx']->in_ligru->in_base_fuente->in_fuente_id]), ''];
                $this->slotarea['linegrup'] = ['', true, route('inligru', [$dataxxxx['padrexxx']->in_ligru->in_base_fuente_id]), ''];
                $this->slotarea['pregunta'] = ['', true, route('grupregu', [$dataxxxx['padrexxx']->in_libagrup_id]), ''];
                $this->slotarea[$dataxxxx['tablaxxx']] = ['', true, route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id]), 'active'];
                break;
            case 'nnajxxxx':
                $this->slotarea[$dataxxxx['tablaxxx']][5] = true;
                break;
            case 'linebase':
                $this->slotarea['nnajxxxx'][5] = true;
                break;
            case 'valoinic':
                $this->slotarea['nnajxxxx'][5] = true;
                $this->slotarea['linebase'][3] = '';
                $this->slotarea['linebase'][2] =  route('valoinic');
                $this->slotarea['linebase'][0] = '';
                break;
            case 'activida':
                $this->slotarea['accigest'][2] = route('accigest', [$dataxxxx['padrexxx']->id]);
                $this->slotarea[$dataxxxx['tablaxxx']][2] =  $this->slotarea['accigest'][2];
                $this->slotarea['accigest'][3] = 'active';
                $this->slotarea['accigest'][5] = true;
                $this->slotarea['accigest'][0] = '';
                /**
                 * VALORACION SEGUIMIENTO
                 */
                $this->slotarea['valosegu'][0] = '';
                $this->slotarea['valosegu'][2] = route('valoraci', [$dataxxxx['padrexxx']->id]);
                break;
            case 'actifuen':
                $this->slotarea['accigest'][2] = route('accigest', [$dataxxxx['padrexxx']->in_lineabase_nnaj_id]);

                $this->slotarea['activida'][2] = $this->slotarea['accigest'][2];
                $this->slotarea['accigest'][0] = '';
                $this->slotarea['accigest'][5] = true;
                $this->slotarea['accigest'][3] = 'active';
                $this->slotarea['activida'][0] = '';
                $this->slotarea[$dataxxxx['tablaxxx']][2] =  route('actifuen', [$dataxxxx['padrexxx']->in_lineabase_nnaj_id]);
                /**
                 * VALORACION SEGUIMIENTO
                 */
                $this->slotarea['valosegu'][0] = '';
                $this->slotarea['valosegu'][2] = route('valoraci', [$dataxxxx['padrexxx']->id]);;
                break;
            case 'valoraci':
                $this->slotarea[$dataxxxx['tablaxxx']][2] =  route('valoraci', [$dataxxxx['padrexxx']->id]);
                /**
                 * ACCIONES GESTIÓN
                */
                $this->slotarea['accigest'][0] = '';
                $this->slotarea['accigest'][2] = route('accigest', [$dataxxxx['padrexxx']->id]);
                /**
                 * VALORACION SEGUIMIENTO
                 */
                $this->slotarea['valosegu'][5] = true;
                $this->slotarea['valosegu'][3] = 'active';
                $this->slotarea['valosegu'][0] = '';
                $this->slotarea['valosegu'][2] = $this->slotarea[$dataxxxx['tablaxxx']][2];
                break;
        }

        $this->getHay();
        return  $this->slotarea;
    }
}
