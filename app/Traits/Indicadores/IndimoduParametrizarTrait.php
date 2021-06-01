<?php

namespace App\Traits\Indicadores;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndimoduParametrizarTrait
{

    public $opciones;
    /**
     * permisos del middleware del modulo
     *

     * @return $permisos
     */
    public function getMwareModulo()
    {
        $permisos = ['permission:'
            . $this->opciones['routxxxx'] . '-moduloxx'
        ];
        return  $permisos;
    }

    /**
     * permisos del middleware para el controlador completo
     *

     * @return $permisos
     */
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['routxxxx'] . '-leerxxxx|'
            . $this->opciones['routxxxx'] . '-crearxxx|'
            . $this->opciones['routxxxx'] . '-editarxx|'
            . $this->opciones['routxxxx'] . '-borrarxx|'
            . $this->opciones['routxxxx'] . '-activarx'
        ];
        return  $permisos;
    }

    /**
     * permisos del middleware para el controlador de áreas
     *

     * @return $permisos
     */
    public function getMwareAreas()
    {
        $permisos = ['permission:'
            . $this->opciones['routxxxx'] . '-leerxxxx|'
        ];
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
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][4]}DULO";
        $this->opciones['cardhead'] = "M{$this->opciones['vocalesx'][4]}DULO";
        $this->opciones['routxxxx'] = $this->opciones['routxxxx'];
        // $this->opciones['slotxxxx'] = $this->opciones['routxxxx'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Indicadores.Admin.Parametr.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = ucfirst($this->opciones['routxxxx']);
        $this->opciones['rutacomp'] = 'Indicadores.Acomponentes.';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
        $this->opciones['tituloxx'] = "MÓDULO";
    }

    public function getBotones($dataxxxx)
    {
        if (auth()->user()->can($this->opciones['routxxxx'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        } else {
            $this->opciones['botoform'][] = [];
        }
        return $this->opciones;
    }
}
