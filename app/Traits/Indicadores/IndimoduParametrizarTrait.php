<?php

namespace App\Traits\Indicadores;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndimoduParametrizarTrait
{

    /**
     * permisos del middleware del modulo
     *

     * @return $permisos
     */
    public function getMwareModulo()
    {
        $permisos = [
            'permission:'
                . $this->opciones['permisox'] . '-moduloxx'
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
        $permisos = [
            'permission:'
                . $this->opciones['permisox'] . '-leerxxxx|'
                . $this->opciones['permisox'] . '-crearxxx|'
                . $this->opciones['permisox'] . '-editarxx|'
                . $this->opciones['permisox'] . '-borrarxx|'
                . $this->opciones['permisox'] . '-activarx'
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
        $permisos = [
            'permission:'
                . $this->opciones['permisox'] . '-leerxxxx|'
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
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][3]}DULO INDICADORES";
        $this->opciones['cardhead'] = "PARAMETRIZACI{$this->opciones['vocalesx'][3]}N";
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Indicadores.Administ.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = ucfirst($this->opciones['permisox']);
        $this->opciones['rutacomp'] = 'Indicadores.Acomponentes.';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
        $this->opciones['tituloxx'] = "MÓDULO";

        // * Campos históricos por defecto
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
    }

    public function getVista()
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->opciones['rutarchi'] = 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }

    /**
     * Armar los campos de auditoría de los registros para saber quien crear y edita, la hora que se crea y edita el registro
     *
     * @return void
     */
    public function getHistoricos()
    {
        $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
        $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
        $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
        $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
    }
}
