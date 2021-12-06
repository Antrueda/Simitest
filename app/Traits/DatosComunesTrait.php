<?php

namespace App\Traits;

use App\Models\sistema\SisEsta;

/**
 * Este trait se encarga de armar los botones que se utilizan en las vistas
 */
trait DatosComunesTrait
{
    private $estadoid = 1;
    private $dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
    private $requestx = null;
    private $padrexxx = null;
    private $infoxxxx = null;
    private $redirect = null;

    private $opciones = [
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'indimodu',
        'rutacomp' => 'Acomponentes.',
        'fechcrea' =>  '',
        'fechedit' =>  '',
        'usercrea' => '',
        'useredit' =>  '',
        'parametr' => [],
        'routingx' => [],
        'vocalesx' => ['Á', 'É', 'Í', 'Ó', 'Ú'],
        'perfilxx' => 'sinperfi',
    ];
    

    public function getComplementoDCT()
    {
        
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['carpetax'] = ucfirst($this->opciones['permisox']);
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
    }
    
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
    public function getVista( )
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            // 'orederby' => 'ASC',
            // 'cabecera' => false,
            // 'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->opciones['rutarchi'] = 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
}
