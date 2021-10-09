<?php

namespace App\Traits\Indicadores\Administ\Grupregu;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait GrupreguVistasTrait
{
    public function getVista()
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        // * Campos históricos por defecto
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view()
    {
        $this->opciones['parametr'] = [$this->padrexxx->id];
        // $this->opciones['grupoxxx'] = [$this->padrexxx->id => 'Grupo '.$this->padrexxx->id ];

        $this->opciones['padrexxx'] = $this->padrexxx;
        $this->opciones['areaxxxx']=[];
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PREGUNTAS','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['tituloxx']='EDITAR PREGUNTA';
            $this->opciones['pregunta'] = [$this->opciones['modeloxx']->prm_disparar_id => $this->opciones['modeloxx']->prmDisparar->nombre ];
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
            //$this->getBotones(['crearxxx', [$this->opciones['permisox'].'.nuevoxxx', $this->opciones['parametr']], 2, 'NUEVO GRUPO', 'btn btn-sm btn-primary']);
        }else {
            //$this->getBotones(['crearxxx', [], 1, 'GUARDAR GRUPO', 'btn btn-sm btn-primary']);
        }
        $this->getPestanias(['tipoxxxx'=>5]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
