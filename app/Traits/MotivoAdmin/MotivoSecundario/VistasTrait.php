<?php

namespace App\Traits\MotivoAdmin\MotivoSecundario;

use App\Models\fichaobservacion\FosTse;
use App\Models\Indicadores\Area;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista($opciones, $dataxxxx)
    {
        
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function view($opciones, $dataxxxx)
    {

        $opciones = $this->getVista($opciones, $dataxxxx);

        $selected=0;
        $estadoid = 0;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $estadoid=$dataxxxx['modeloxx']->sis_esta_id;
        }

        $opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid ,
            'formular' => 2483
        ]);
        $opciones['tiposegu'] =FosTse::combo($selected, true, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
