<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica;
use App\Models\User;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['usuarioz'] = User::getUsuario(false, false);
        $this->opciones['prm_estado_matris'] = $this->getTemacomboCT([
            'temaxxxx'=>432,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.jsp']
        ];
    }
    public function view( $dataxxxx)
    {

        $motivo = 0;
        $aplazado = 0;
        
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A GESTIÓN DE MATRÍCULA', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
       
        $this->opciones['parametr']= [$dataxxxx['padrexxx']];
        $this->opciones['datapadre'] = $this->getNnajMatricula($dataxxxx['padrexxx']);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $motivo=$dataxxxx['modeloxx']->prm_motivo_reti;
            $aplazado=$dataxxxx['modeloxx']->prm_mot_aplazad;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $dataxxxx['modeloxx']->fechdili = \Carbon\Carbon::parse($dataxxxx['modeloxx']->fechdili)->format('Y-m-d');

            // dd($dataxxxx['modeloxx']);
        }

        $this->opciones['motivoxx'] = $this->getTemacomboCT([
            'temaxxxx'=>433,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => $motivo
        ])['comboxxx'];
        $this->opciones['motaplaz'] = $this->getTemacomboCT([
            'temaxxxx'=>434,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => $motivo
        ])['comboxxx'];

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
