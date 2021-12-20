<?php

namespace App\Traits\Indicadores\Administ\Indicado;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndicadoVistasTrait
{
    public function view()
    {
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVO','routexxx'=>$this->opciones['permisox'].'.crearxxx']);
        }
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A INDICADODRES']);
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        // Se arma el titulo de acuerdo al array opciones
        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
