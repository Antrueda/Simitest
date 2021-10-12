<?php

namespace App\Traits\Indicadores\Administ\Libagrup;

use App\Models\Indicadores\Administ\InLibagrup;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait LibagrupVistasTrait
{

    public function view()
    {
       $this->getVista();
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $inligrup = InLibagrup::get()->max('id');
        $maximoxx = ($inligrup == null) ? 1 : $inligrup + 1;
        $this->opciones['maximoxx'] = [$maximoxx => $maximoxx];
        $this->opciones['linebase'] = [$this->padrexxx->id => $this->padrexxx->inLineaBase->s_linea_base];
        $this->opciones['areaxxxx'] = [];

        // indica si se esta actualizando o viendo
        if ($this->opciones['modeloxx'] != '') {
            $this->opciones['parametr'][] = $this->opciones['modeloxx']->id;
            $this->getRespuesta([
                'btnxxxxx' => 'a',
                'tituloxx' => 'NUEVO',
                'parametr' => [$this->padrexxx->id],
                'accionxx' => 'crearxxx',
                'routexxx' => $this->opciones['permisox'].'.nuevoxxx',
                'testxxxx'=>'',
            ]);
            $this->getHistoricos();
        }
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRUPOS', 'parametr' => [$this->padrexxx->id]]);
        $this->getPestanias(['tipoxxxx' => 3]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
