<?php

namespace App\Traits\Acciones\Grupales\Responsable;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Sistema\SisObse;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{

    use CombosTrait;
    public function getResponsables($dataxxxx)
    {
        $dataxxxx['notinxxx'] = AgResponsable::select(['user_id'])
            ->where('ag_actividad_id', $dataxxxx['padrexxx']->id)
            ->whereNotIn('user_id', [$dataxxxx['selected']])
            ->get();
        return User::userCombo($dataxxxx);
    }


    public function getVista($opciones, $dataxxxx)
    {
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function view($opciones, $dataxxxx)
    {
        $opciones['observac'] = SisObse::combo(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['condicio'] = Tema::combo(338, true, false);

        $opciones['parametr'][] = $dataxxxx['padrexxx']->id;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $dataxxxx['selected'] = 0;
        $opciones['padrexxx'] = [];
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['selected'] = $dataxxxx['modeloxx']->user_id;
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        }
        $dataxxxx['cabecera'] = true;
        $dataxxxx['ajaxxxxx'] = false;
        $dataxxxx['depeorig']=$dataxxxx['padrexxx']->sis_deporigen_id;
        $opciones['responsa'] = $this->getResponsables($dataxxxx);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
