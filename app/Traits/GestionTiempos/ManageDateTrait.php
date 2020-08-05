<?php

namespace App\Traits\GestionTiempos;

use DateInterval;
use DatePeriod;
use DateTime;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait ManageDateTrait
{
    /**
     * identificar si hoy es festivo
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getDiaFestivo(array $dataxxxx)
    {
        $habilxxx = false;
        return $habilxxx;
    }
    /**
     * permite determinar si una fecha es sabado, domingo o festivo
     *
     * @param array $dataxxxx contiene los datos que permite realizar las validaciones que ayudan a conocer
     * si la fecha ingresada es sabado, domingo o festivo
     * @return void
     */
    public function getDiaHabil(array $dataxxxx)
    {
        $finseman = ['Sunday', 'Saturday'];
        $habilxxx = false;
        if (!in_array(date('l', strtotime($dataxxxx['fechaxxx'])), $finseman)) {
            $habilxxx = true;
        }else{
            $habilxxx = $this->getDiaFestivo($dataxxxx);
        }


        return $habilxxx;
    }
    /**
     * entrar los días a sumar hasta hoy
     *
     * @param array $dataxxxx
     * @return $dataxxxx['conthabi']
     */
    public function getDiasSumados($dataxxxx)
    {
        $diaxxxxx = explode('-', $dataxxxx['fechahoy']);
        for ($i = 1; $i <= $dataxxxx['conthabi']; $i++) {
            if ((int)$diaxxxxx[2] == $i) {
                $dataxxxx['conthabi'] = $i;
            }
        }
        return $dataxxxx['conthabi'];
    }
    /**
     * Encontrar los días de gabela cuando se esta iniciando mes para el mes anterior
     *
     * @param array $dataxxxx
     * @return $dataxxxx
     */
    public function getGabelaFinMes($dataxxxx)
    {
        $conthabi = 0; // contador días hábiles
        $dataxxxx['conthabi'] = 0; // contador días gablea
        $dataxxxx['fechahoy'] = isset($dataxxxx['fechahoy']) ? $dataxxxx['fechahoy'] : date('Y-m-d', time());
        $diasmesx = date('t', strtotime($dataxxxx['fechahoy']));
        for ($i = 1; $i <= $diasmesx; $i++) {
            if ($this->getDiaHabil(['fechaxxx' => substr($dataxxxx['fechahoy'], 0, 8) . $i])) {
                $conthabi += 1;
            }
            $dataxxxx['conthabi'] += 1;
            if ($dataxxxx['usuariox']->itigafin == $conthabi) {
                break;
            }
        }

        // saber si se le suma la gabela al tiempo standar
        if ($dataxxxx['conthabi'] >= date('j', strtotime($dataxxxx['fechahoy']))) {
            $dataxxxx['conthabi'] = $dataxxxx['usuariox']->itiestan + $this->getDiasSumados($dataxxxx);
        }
        return $dataxxxx;
    }
}
