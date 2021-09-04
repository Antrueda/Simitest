<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edagrado;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EdagradoParametrizarTrait
{

    /**
     * permisos del middleware
     *

     * @return $usuariox
     */
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar|'
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
        $this->opciones['tituhead'] = 'ADMINISTRACIÓN DE GRADOS';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Acciones.Individuales.Educacion.Administ.Pruediag.';
        $this->opciones['rutacomp'] = 'Acciones.Individuales.Educacion.Administ.Pruediag';
        $this->opciones['compesta'] = $this->opciones['rutacomp'] . '.Acomponentes.Acrud.pestanias';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = 'Edagrado';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . '.Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . '.Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "MOTIVO DE EGRESO PRIMARIO";
    }
}
