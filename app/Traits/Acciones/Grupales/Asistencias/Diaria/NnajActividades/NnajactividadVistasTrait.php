<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria\NnajActividades;

use App\Models\sistema\SisEsta;
use App\Models\AdmiActiAsd\AsdTiactividad;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajactividadVistasTrait
{
    public function getVista($dataxxxx)
    {
        $modeloxx = null;
        $this->opciones['novedadx'] = $this->getTemacomboCT([
            'temaxxxx' => 431,
        ])['comboxxx'];
        $asisenciannaj = AsdSisNnaj::select('asd_diarias.id','asd_diarias.prm_lugactiv_id')->join('asd_diarias', 'asd_sis_nnajs.asd_diaria_id', '=', 'asd_diarias.id')
        ->find($dataxxxx['padrexxx']);
       /// $this->opciones['tipoacti'] = AsdTiactividad::combo($asisenciannaj->prm_lugactiv_id);
        $this->pestania[1][2] =[$asisenciannaj->id];

        $this->opciones['dependen'] = $this->getUpiUsuarioCT([], $modeloxx);
        $this->opciones['rutarchi'] =  'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
  
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
    }
    public function view($dataxxxx)
    {
        $tipoacti = 0;
        $activida = 0;
        $upidxxxx = 0;
        
      //  $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ACTIVIDADES','parametr'=>[$dataxxxx['padrexxx']]]);
        $this->getVista($dataxxxx);
        $this->opciones['parametr']=$this->pestania[2][2] = [$dataxxxx['padrexxx']];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
             $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['consecut'] = $dataxxxx['modeloxx']->consecut;
     
        //    $tipoacti =$this->opciones['modeloxx']->tipos_actividad_id = $dataxxxx['modeloxx']->asdActividad->tipos_actividad_id;
        
        }

        $this->opciones['tipoacti'] = $this->getTipoActividadPDCT([]);
        $this->opciones['activida'] = $this->getActividadPDCT(['tipoacti' => $tipoacti]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }



    public function viewver($dataxxxx)
    {

        $tipoacti = 0;
        $activida = 0;
        $upidxxxx = 0;
        
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ACTIVIDADES','parametr'=>[$dataxxxx['padrexxx']]]);
        $this->getVista($dataxxxx);
        $this->opciones['parametr']=$this->pestania[2][2] = [$dataxxxx['padrexxx']];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
             $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['consecut'] = $dataxxxx['modeloxx']->consecut;
            // dd($this->opciones['modeloxx']);
            $this->opciones['modeloxx']->tipos_actividad_id = $dataxxxx['modeloxx']->actividad->tiposActividad->id;    
            $tipoacti =$dataxxxx['modeloxx']->actividad->tiposActividad->id;  
            $this->opciones['modeloxx']->asd_actividad_id =$dataxxxx['modeloxx']->asd_actividads_id;
            
            // dd($this->opciones['modeloxx']);
        }

        $this->opciones['tipoacti'] = $this->getTipoActividadPDCT([]);
        $this->opciones['activida'] = $this->getActividadPDCT(['tipoacti' => $tipoacti]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }




   
}



