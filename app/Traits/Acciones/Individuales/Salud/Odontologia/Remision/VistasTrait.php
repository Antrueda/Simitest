<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Remision;


use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\Indicadores\Administ\Area;
use App\Models\sistema\SisEntidadSalud;

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
        
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
 
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
  

    public function view($opciones, $dataxxxx)
    {
        //1256, 1818

        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['usuarioc'] = '';
        $opciones['usuarioe'] = '';
        $opciones['condicio'] = Tema::comboNotIn(479, true, false,[2503]);        
        $opciones['estadoxx'] = Tema::comboAsc(479,true, false);
        $opciones['diagnost'] = Diagnostico::combo(true,false);
        $opciones['areaxxxx'] = Area::comboIn(true, false,[5]);
        $opciones['remision'] = Remision::comboIn(true, false,[2,6]);
        $opciones['intersti'] = Tema::comboAsc(475,true, false);
        $usuarioz=null;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $usuarioz=$dataxxxx['modeloxx']->user_id;
            $opciones['usuarioc'] = $dataxxxx['modeloxx']->creador->name;
            $opciones['usuarioe'] = $dataxxxx['modeloxx']->modifico->name;
        }
        $opciones['usuarioz'] = User::getUsuario(false, false, $usuarioz);
        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}


