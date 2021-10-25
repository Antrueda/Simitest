<?php

namespace App\Traits\Acciones\Grupales\Matricula;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use CombosTrait;

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['grupoxxx'] = ['' => 'Seleccione'];
        $opciones['gradoxxx'] = ['' => 'Seleccione'];
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
        $servicio = 0;

        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['educacio'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false,'notinxxx' => 0, 'rolxxxxx' => [14,81,82]]);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['apoyoxxx'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false,'notinxxx' => 0, 'rolxxxxx' => [14,81]]);
        $opciones['usuariox'] = ['' => 'Seleccione la UPI/Dependencia para cargar el responsable'];

        $opciones = $this->getVista($opciones, $dataxxxx);

        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['gradoxxx']= EdaGrado::combo(true,false);
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];

            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $upidxxxx=$dataxxxx['modeloxx']->prm_upi_id;
            $servicio=$dataxxxx['modeloxx']->prm_serv_id;
            $opciones['usuariox'] = User::getRes(false, false,$dataxxxx['modeloxx']->responsable_id);

            if ($dataxxxx['modeloxx']->sis_depdestino_id == 1) {
                $opciones['lugarxxx'] = Tema::combo(336, true, false);
            }

        }
       $opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $opciones['grupoxxx'] =$this->getGrupoAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => 'selected',
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
        ]);

        $opciones['gradoxxx'] =$this->getGradoAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => 'selected',
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
        ]);


        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);






        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}

