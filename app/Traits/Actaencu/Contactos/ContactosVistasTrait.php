<?php

namespace App\Traits\Actaencu\Contactos;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ContactosVistasTrait
{
   
    public function view( )
    {
        $this->getVista();
        // indica si se esta actualizando o viendo
        $this->pestania[1][2]=$this->padrexxx->id;

        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
            $this->getRespuesta([
                'btnxxxxx' => 'a',
                'tituloxx' => 'NUEVO',
                'parametr' => [$this->padrexxx->id],
                'accionxx' => 'crearxxx',
                'routexxx' => $this->opciones['permisox'] . '.nuevoxxx',
                'testxxxx' => '',
            ]);
        }
        $this->getRespuesta(['btnxxxxx' => 'a', 
        'tituloxx' => 'VOLVER A ACTA DE ENCUENTRO', 
        'parametr' => [$this->padrexxx->id],
        'routexxx'=> 'actaencu.editarxx'
    ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
