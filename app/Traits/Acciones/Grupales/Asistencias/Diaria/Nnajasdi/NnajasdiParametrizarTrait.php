<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajasdiParametrizarTrait
{

    public $opciones;
    /**
     * permisos del middleware
     *

     * @return $usuariox
     */
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leerxxxx|'
            . $this->opciones['permisox'] . '-crearxxx|'
            . $this->opciones['permisox'] . '-editarxx|'
            . $this->opciones['permisox'] . '-borrarxx|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }
    /**
     * inicializar las opciones con las que se arman las vistas
     *
     * @return $opciones
     */
    public function getOpciones()
    {
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'ASISTENCIA DIARIA';
        // $this->opciones['routxxxx'] = $this->opciones['permisox'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Acciones.Grupales.Asistencias.Diaria.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] =ucfirst($this->opciones['permisox']);;
        /** botones que se presentan en los formularios */
        //$this->opciones['botonesx'] = 'Acomponentes.Botones.botonesx';
        $this->opciones['botonesx'] = 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "ASISTENCIA DIARIA";
    }

    public function getBotones($dataxxxx)
    {
        $mostboto=false;
        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $mostboto=true;
        }
        $this->opciones['botoform'][] = [
            'mostboto'=>$mostboto,
            'routingx' => $dataxxxx[1],
            'formhref' => $dataxxxx[2],
            'tituloxx' => $dataxxxx[3],
            'clasexxx' => $dataxxxx[4],
        ];
        return $this->opciones;
    }

  
}
