<?php

namespace App\Traits\Indicadores\Administ\Indiarea;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndiareaVistasTrait
{

    public function view( $dataxxxx)
    {
        $this->getBotones(['leer', [$this->opciones['permisox'], []], 2, 'VOLVER A TEMAS', 'btn btn-sm btn-primary']);
        $this->getVista();
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4]=true;
            $this->pestania[1][2]=$this->opciones['parametr'];
            $this->getBotones(['crear', [$this->opciones['permisox'].'.nuevo', []], 2, 'NUEVO TEMA', 'btn btn-sm btn-primary']);
        }
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
