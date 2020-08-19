<?php

namespace App\Traits\GestionTiempos;

use App\Models\Sistema\SisDiaFestivo;
use Carbon\Carbon;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait ManageDateTrait
{
    /**
     * Encontrar diferencia en dias de dos fechas
     *
     * @param array $dataxxxx
     * @return $dataxxxx
     */
    public function getDiferenciaDias($dataxxxx)
    {
        $fechahoy = Carbon::createFromFormat('Y-m-d', $dataxxxx['fechahoy']);
        $fechregi = Carbon::createFromFormat('Y-m-d', $dataxxxx['fechregi']);

        $dataxxxx['difedias'] = $fechahoy->diffInDays($fechregi);
        return $dataxxxx;
    }
    /**
     * identificar si hoy es festivo
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getDiaFestivo(array $dataxxxx)
    {
        $habilxxx = false;
        $diafesti = SisDiaFestivo::where('diafesti', $dataxxxx['fechaxxx'])->first();
        if (isset($diafesti->id)) {
            $habilxxx = true;
        }
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
        } else {
            $habilxxx = $this->getDiaFestivo($dataxxxx);
        }


        return $habilxxx;
    }
    /**
     * encontrar los días a sumar hasta hoy
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
        $dataxxxx = $this->getDiferenciaDias($dataxxxx);
        $diasmesx = date('t', strtotime($dataxxxx['fechahoy'])); // saber los dia del mes
        if ($dataxxxx['usuariox']->itigafin > 0) {
            for ($i = 1; $i <= $diasmesx; $i++) {

                if ($this->getDiaHabil(['fechaxxx' => substr($dataxxxx['fechahoy'], 0, 8) . $i])) {
                    $conthabi += 1;
                }
                $dataxxxx['conthabi'] += 1;
                if ($dataxxxx['usuariox']->itigafin == $conthabi) {
                    break;
                }
            }
        }

        $dataxxxx['tiemcalc'] = $dataxxxx['usuariox']->itiegabe + $dataxxxx['usuariox']->itiestan;
        // saber si se le suma la gabela al tiempo standar
        if ($dataxxxx['conthabi'] >= date('j', strtotime($dataxxxx['fechahoy']))) {
            $dataxxxx['tiemcalc'] += $dataxxxx['conthabi'];
        }
        /**
         * indicar si el registro se puede actualizar o inactivar y se ha terminado el tiempo de gavela
         */
        $dataxxxx['tienperm'] = true;
        if ($dataxxxx['difedias'] > $dataxxxx['tiemcalc']) {
            $dataxxxx['tienperm'] = false;
            /**
             * se ha terminado el tiempo de gavela
             */
            if ($dataxxxx['usuariox']->itiegabe > 0) {
                $dataxxxx['usuariox']->update(['itiegabe' => 0]);
            }
        }
        return $dataxxxx;
    }
}
