<?php

namespace App\Traits\MatriculaAdmin\GrupoAsignar;

use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use App\Traits\Combos\CombosTrait;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use CombosTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['grupoxxx'] = GrupoMatricula::combo(true,false);


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
        $upidxxxx=1;
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
            'formular' => 2480
        ]);
        $opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $opciones['sis_depens'] =User::getUpiUsuario(true,false);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
