<?php

namespace App\Traits\Ayudline\Frontend\Modulo;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ParametrizarModuloTrait
{

    /**
     * inicializar las opciones con las que se arman las vistas
     *
     * @return $opciones
     */
    public function getOpciones()
    {
        $this->getOpcionesLT(['rutacarp'=>'Ayudline','rutacomp'=>'Ayudline','carpetax'=>'Modulo','tituloxx'=>'MÓDULO',]);
        $this->opciones['routxxxx'] = $this->opciones['routxxxx'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
    }


    public function getTablas($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [

        ];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }
}
