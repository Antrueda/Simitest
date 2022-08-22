<?php

namespace App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems;

use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;
use App\Models\perfilOcupacional\FpoDesempenioCategoria;
use App\Models\perfilOcupacional\FpoDesempenioComponente;


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
        $selected = 0;
        $estadoid=0;

        $opciones['desempenios'] = FpoDesempenioComponente::combo(['ajaxxxxx' => false,'cabecera' => true,]);
        $opciones['categorias'] = FpoDesempenioCategoria::combo(['ajaxxxxx' => false,'cabecera' => true,]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $estadoid=$dataxxxx['modeloxx']->sis_esta_id;
        }
        $opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid ,
            'formular' => 2482
        ]);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
