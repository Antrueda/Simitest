<?php

namespace App\Traits\Indicadores\Administ\Pregresp;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PregrespVistasTrait
{

    public function view()
    {
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $this->opciones['tipopreg'] = $this->getTemacomboCT(['temaxxxx'=>410]);
        $this->opciones['padrexxx'] = $this->padrexxx;
        $this->opciones['areaxxxx'] = [];
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            // $this->opciones['pregunta'] = [$this->opciones['modeloxx']->prm_disparar_id => $this->opciones['modeloxx']->prmDisparar->nombre];
            $this->opciones['parametr'][] = $this->opciones['modeloxx']->id;
            $this->getHistoricos();
        }
        $this->getRespuesta([
            'btnxxxxx' => 'a',
            'tituloxx' => 'VOLVER A PREGUNTAS',
            'parametr' => [$this->padrexxx->id]
        ]);
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
