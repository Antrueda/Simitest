<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi;

use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\sistema\SisEsta;
use App\Models\AdmiActiAsd\AsdTiactividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajasdiVistasTrait
{
    public function getVista($dataxxxx)
    {
        $modeloxx = null;
        // $this->opciones['tipoacti'] = AsdTiactividad::combo();
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

       // $this->opciones['asistencia_diaria'] = $this->getListaxxx($dataxxxx['padrexxx']->id);
         $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A LISTA NNAJ','parametr'=>[$dataxxxx['padrexxx']]]);
        $this->getVista($dataxxxx);
        $actividad= AsdDiaria:: find($dataxxxx['padrexxx']);
        $this->opciones['parametr']=$this->pestania[1][2] = [$dataxxxx['padrexxx']];
        $this->opciones['parametr'][1]=$this->opciones['nnajxxxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['consecut'] = $dataxxxx['modeloxx']->consecut;


            $tipoacti = (isset($dataxxxx['modeloxx']->actividade->tipos_actividad_id) ? $dataxxxx['modeloxx']->actividade->tipos_actividad_id:"");
            $dataxxxx['modeloxx']['tipoacti_id']=(isset($dataxxxx['modeloxx']->actividade->tipos_actividad_id) ? $dataxxxx['modeloxx']->actividade->tipos_actividad_id:"");
            $activida = $dataxxxx['modeloxx']->actividade_id;
        
        }



        $this->opciones['activida'] = $this->getActividadAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'tipoacti' => $tipoacti,
            'selected' => $activida
        ]);;



        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

}



