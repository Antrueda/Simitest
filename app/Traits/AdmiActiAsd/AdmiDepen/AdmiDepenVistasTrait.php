<?php

namespace App\Traits\AdmiActiAsd\AdmiDepen;

use App\Models\sistema\SisEsta;
use App\Models\sistema\SisDepen;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdTiactividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiDepenVistasTrait
{
    public function getVista($dataxxxx)
    {
        $modeloxx = null;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['activida'] = $this->getTemacomboCT([
            'temaxxxx' => 429,
        ])['comboxxx'];

        $this->opciones['lugarxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 428,
        ])['comboxxx'];

        $this->opciones['novedadx'] = $this->getTemacomboCT([
            'temaxxxx' => 431,
        ])['comboxxx'];

        $this->opciones['grupoxxx'] = ['' => 'Seleccione'];
       // $this->opciones['departam'] = ['' => 'Seleccione'];
        //$this->opciones['municipi'] = ['' => 'Seleccione'];
        //$this->opciones['localida'] = ['' => 'Seleccione'];
        //$this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        //$this->opciones['barrioxx'] = ['' => 'Seleccione'];
        $this->opciones['readonly'] = 'readonly';
        if ($dataxxxx['modeloxx'] != '') {
            $respuest = $this->setDependen([
                'dependen' => $dataxxxx['modeloxx']->sis_depen_id,
                'lugarxxx' => $dataxxxx['modeloxx']->prm_lugactiv_id,
                'selected' => [0],
                'ajaxxxxx' => false
            ]);
            // $respuest = $this->setPaginaGrupos(['ajaxxxxx' => false, 'progacti' => $dataxxxx['modeloxx']->prm_actividad_id]);
            // $this->opciones['grupoxxx'] = $respuest['combosxx'][0];
            // if (!$respuest['readonly']) {
            //     $this->opciones['readonly'] = '';
            // }
            // $dataxxxx['modeloxx']->fechdili = explode(' ', $dataxxxx['modeloxx']->fechdili)[0];
        }

        $this->opciones['dependen'] = $this->getUpiUsuarioCT([], $modeloxx);
        $this->opciones['rutarchi'] =  'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
    }
   
    public function view( $dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A DEPENDENCIAS RECREATIVAS', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $estadoid = 1;
        $upidxxxx = 0;

        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVO TIPO DE ACTIVIDAD DIARIA', 'btn btn-sm btn-primary']);
        }
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2718
        ])['comboxxx'];



        $this->opciones['servicio']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);





        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
