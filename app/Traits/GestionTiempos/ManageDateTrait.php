<?php

namespace App\Traits\GestionTiempos;

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
     * permite conocer los dia habilies entre dos fechas
     *
     * * @param array $dataxxxx contiene los datos que permite realizar las validaciones que ayudan a conocer
     * los dia habiles de un periodo
     * @return void
     */
    public function getDiasHbiles($dataxxxx)
    {
    }
}
