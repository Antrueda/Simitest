<?php

namespace App\Traits\Acciones\Grupales\Matricula;

use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['grupoxxx'] =Tema::comboAsc(407, true, false);
        $opciones['gradoxxx'] = Tema::comboAsc(406, true, false);
        $opciones['periodox'] =Tema::comboAsc(408, true, false);
        $opciones['estrateg'] = Tema::comboAsc(409, true, false);
         

        $opciones['dependen'] = User::getUpiUsuario(true, false);
        
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
   

    public function view($opciones, $dataxxxx)
    {
        $upidxxxx = 0;
        
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['educacio'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false,'notinxxx' => 0, 'rolxxxxx' => [14,81]]);
        $opciones['entidadx'] = SisEntidad::combo(true, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['usuariox'] = User::Combo(false, false,[1]);
        
        $opciones = $this->getVista($opciones, $dataxxxx);

        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['usuariox'] = User::getRes(false, false,$dataxxxx['modeloxx']->user_doc2_id);

            if ($dataxxxx['modeloxx']->sis_depdestino_id == 1) {
                $opciones['lugarxxx'] = Tema::combo(336, true, false);
            }

        }
       $opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        
        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);






        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
