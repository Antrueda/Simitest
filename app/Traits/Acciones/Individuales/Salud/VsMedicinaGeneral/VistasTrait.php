<?php

namespace App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral;


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
        
        $opciones['cursosxx'] = Diagnostico::combo(true,false);
        $opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        
        $opciones['estafili'] = Tema::comboAsc(21, true, false);
        $opciones['entid_id'] = SisEntidadSalud::combo($opciones['padrexxx']->fi_saluds->prm_regisalu_id, true, false);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['poblacio'] = Tema::comboAsc(440,true, false);
        $opciones['primerax'] = $opciones['padrexxx']->VMedicinaPrimera;
     
   
         if(count($opciones['padrexxx']->VMedicinaG)<1){
            $opciones['consulta'] = Tema::comboNotIn(439,true, false,[2809,2804]);
     
         }else{
            $opciones['consulta'] = Tema::comboNotIn(439,true, false,[1155,2809,2804]);
         }
      
        $opciones['modalxxx'] = Tema::comboNotIn(439,true, false,[1155,1156]);
        $opciones['tiporemi'] = Tema::combo(438, true, false);
        $opciones['remiinte'] = Tema::combo(442, true, false);
        $opciones['remision'] = Remision::combo(true, false);
        $opciones['remiespe'] = Remiespecial::combo( true, false);
        $opciones['condicio'] = Tema::comboAsc(345, true, false);
        //$opciones['usuarioz'] = User::getUsuario(false, false);

        $usuarioz=null;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['entid_id'] = SisEntidadSalud::combo($dataxxxx['modeloxx']->afili_id, true, false);
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            if($dataxxxx['modeloxx']->consul_id==1155){
                $opciones['consulta'] = Tema::comboNotIn(439,true, false,[2809,2804]);
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


