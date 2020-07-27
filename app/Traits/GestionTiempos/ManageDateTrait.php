<?php

namespace App\Traits\GestionTiempos;

use DateInterval;
use DatePeriod;
use DateTime;

/**
 * realizar todos los cálculos que tiene que ver con fechas
 */
trait ManageDateTrait
{
    /**
     * permite conocer la fecha del primer o último día para fecha indicada
     *
     * @param array $dataxxxx contiene los datos que permite realizar las validaciones que ayudan a conocer
     * la fecha final del mes
     * @return date
     */
    public function getPrimerOFinalDiaMes($dataxxxx)
    {
        switch ($dataxxxx['optionxx']) {
            case 1:
                $dataxxxx['optionxx'] = 'first day of this month';
                break;
            case 2:
                $dataxxxx['optionxx'] = 'last day of this month';
                break;
        }
        $timestamp = strtotime($dataxxxx['datexxxx']);
        $month_end = strtotime($dataxxxx['optionxx'], $timestamp);
        return date($dataxxxx['formatxx'], $month_end);
    }
    /**
     * permite determinar si hoy es inicio o fin de mes
     *
     * @return $finmesxx
     */
    public function getInicioOFinMes($dataxxxx)
    {
        $finmesxx = ['finmesxx' => false, 'fechaxxx' => isset($dataxxxx['fechahoy']) ? $dataxxxx['fechahoy'] : date('Y-m-d', time())];
        if ($finmesxx['fechaxxx']  == $this->getPrimerOFinalDiaMes(['datexxxx' => $finmesxx['fechaxxx'], 'optionxx' => $dataxxxx['optionxx'], 'formatxx' => 'Y-m-d'])) {
            $finmesxx['finmesxx'] = true;
        }
        return $finmesxx;
    }

    /**
     * permite determinar si una fecha es sabado, domingo o festivo
     *
     * @param array $dataxxxx contiene los datos que permite realizar las validaciones que ayudan a conocer
     * si la fecha ingresada es sabado, domingo o festivo
     * @return void
     */
    public function getDiaHabil($dataxxxx)
    {
        $finseman = ['Sunday', 'Saturday'];
        $habilxxx = false;
        if (!in_array(date('l', strtotime($dataxxxx['fechaxxx'])), $finseman)) {
            $habilxxx = true;
        } else {
            echo $dataxxxx['fechaxxx'];
        }

        return $habilxxx;
    }


    public function getGabelaFinMes($dataxxxx)
    {
        $gabehabi = 2; // esto debe venir de la base de datos de los dia habiles de fin de semana
        $habilesx = 0;
        $gabelaxx = 0;
        $dataxxxx['fechahoy'] = isset($dataxxxx['fechahoy']) ? $dataxxxx['fechahoy'] : date('Y-m-d', time());
        $diasmesx = date('t', strtotime($dataxxxx['fechahoy']));
        for ($i = 1; $i <= $diasmesx; $i++) {
            if ($this->getDiaHabil(['fechaxxx' => substr($dataxxxx['fechahoy'], 0, 8) . $i])) {
                $habilesx += 1;
            }
            $gabelaxx += 1;
            if ($gabehabi == $habilesx) {
                break;
            }
        }
        $esgabela = false;
        // saber si se le suma la gabela al tiempo standar
        if ($gabelaxx >= date('j', strtotime($dataxxxx['fechahoy']))) {
            $esgabela = true;
        }
        return ['gabelaxx' => $gabelaxx, 'esgabela' => $esgabela];
    }
    public function getEvaluarPremisos()
    {
        $defetiem = 20; // tiempo asignado por defecto y biene de la base de datos
        $respuest = $this->getGabelaFinMes(['fechahoy' => '2020-07-25']);
        if ($respuest['esgabela']) {
            $defetiem += $respuest['esgabela'];
        }

    }
}
