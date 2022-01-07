<?php

namespace App\Traits\Fosadmin\Fosasignar;

use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosStsesTest;
use App\Models\fichaobservacion\FosTse;
use App\Models\Indicadores\Administ\Area;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['fosareas'] = Area::orderBy('nombre')->where('sis_esta_id', '1')->pluck('nombre', 'id');
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
        $estadoid=1;
        $opciones['seguixxx'] = ['' => 'Seleccione'];
    
         $opciones['tipsegui'] = FosStse::comboasignar(['ajaxxxxx' => false,'cabecera' => true,
        ]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->area_id= $dataxxxx['modeloxx']->fos_tse->area->id;
            $opciones['seguixxx'] = FosTse::combo($dataxxxx['modeloxx']->area_id, true, false);
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $estadoid=$dataxxxx['modeloxx']->sis_esta_id;
        }
        $opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid ,
            'formular' => 2480
        ]);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
