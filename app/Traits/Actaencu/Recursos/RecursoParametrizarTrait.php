<?php

namespace App\Traits\Actaencu\Recursos;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait RecursoParametrizarTrait
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
        $this->opciones['tituhead'] = 'RECURSOS - ACTA DE ACTA DE ENCUENTRO';
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Actaencu.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = 'Recursos';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "RECURSOS - ACTA DE ACTA DE ENCUENTRO";
    }

    public function getBotones($dataxxxx)
    {
        $mostboto=false;
        if (auth()->user()->can($dataxxxx[0])) {
            $mostboto=true;
        }
        $this->opciones['botoform'][] = [
            'mostboto'=>$mostboto,
            'routingx' => $dataxxxx[1],
            'formhref' => $dataxxxx[2],
            'tituloxx' => $dataxxxx[3],
            'clasexxx' => $dataxxxx[4],
            'atribute' => ['class'=>$dataxxxx[4]],

        ];
        return $this->opciones;
    }
}
