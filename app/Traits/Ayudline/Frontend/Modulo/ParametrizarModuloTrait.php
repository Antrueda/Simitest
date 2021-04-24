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

    public function getBotones($dataxxxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        }else{
            $this->opciones['botoform'][]=[];
        }
        return $this->opciones;
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
