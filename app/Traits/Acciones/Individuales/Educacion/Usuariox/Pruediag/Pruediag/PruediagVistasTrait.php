<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PruediagVistasTrait
{
    public function getVista()
    {
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $upinnajx = $this->padrexxx->UpiPrincipal->sis_depen;
        $this->opciones['dependen'] = [$upinnajx->id => $upinnajx->nombre];
        $this->opciones['respoupi'] = $this->getUpiUsuarioRegistraCT(['cabecera' => false]);
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->getPrametros([$this->padrexxx->id]);
        $this->getPestanias([]);
        // * Campos históricos por defecto
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
        $this->opciones['usuariox'] = $this->padrexxx->fi_datos_basico;
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Js.js']
        ;
    }
    public function view()
    { 
        $this->getVista();
          $this->opciones['parametr'] = [$this->padrexxx->id];  
        // indica si se esta actualizando o viendo
        $gradoxxx =$this->matricul->iMatricula->grado->id;
        if (!is_null($this->opciones['modeloxx'])) {
            $gradoxxx=$this->opciones['modeloxx']->eda_grado_id;
            $this->opciones['modeloxx']->fechdili= explode(' ',$this->opciones['modeloxx']->fechdili)[0];
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            // * Campos históricos por defecto
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
            $botonxxx = [
                'accionxx' => 'crearxxx',
                'btnxxxxx' => 'a', 'tituloxx' => 'CREAR PRUEBA DIAGNÓSTICA',
                'routexxx' => $this->opciones['permisox'] . '.nuevoxxx', 'parametr'=>$this->opciones['modeloxx']->fiDatosBasico->id
            ];
            $this->getRespuesta($botonxxx);
        }

        $this->opciones['gradoxxx'] = $this->getGradoPruebaDiagnosticaCT(['gradoidx'=>$gradoxxx,'cabecera'=>false]);

        $this->getDtEdupresaIndex($this->vercrear);
       
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
