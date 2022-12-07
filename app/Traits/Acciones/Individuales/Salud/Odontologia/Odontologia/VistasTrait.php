<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia;


use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;

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
        
        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['dependen'] = $this->getUpiUsuarioCT(['nnajidxx' => $opciones['padrexxx']->id, 'dependid' => $dependid]);
        $upinnajx=$opciones['padrexxx']->UpiPrincipal->sis_depen;
        $opciones['depenori'] = [$upinnajx->id=>$upinnajx->nombre];
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['consulta'] = Tema::comboNotIn(480,true, false,[1689,2974,2804,1332]);
   
       
      
        $opciones['modalxxx'] = Tema::comboNotIn(480,true, false,[2973,1385]);
        

        $usuarioz=null;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            if($dataxxxx['modeloxx']->consul_id==1689){
                $opciones['consulta'] = Tema::comboNotIn(480,true, false,[2973,1385,1689]);
            }
          
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $usuarioz=$dataxxxx['modeloxx']->user_id;
            
         }
         $opciones['usuarioz'] = User::getUsuario(false, false, $usuarioz);



       

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}


