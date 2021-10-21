<?php

namespace App\Traits\Indicadores\Administ\Indicador;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndicadorVistasTrait
{
    public function view()
    {
        $this->opciones['areaxxxx']=[$this->padrexxx->id=>$this->padrexxx->nombre];
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
        }
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A INDICADORES', 'parametr' => [$this->padrexxx->id]]);
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        // Se arma el titulo de acuerdo al array opciones
        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
