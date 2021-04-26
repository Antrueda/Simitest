<?php

namespace App\Traits\ConfigController;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait OpcionesGeneralesTrait
{
    use ControllerTrait;

    public function getOpcionesOGT($dataxxxx)
    {
        $this->opciones['permisox'] = $dataxxxx['permisox'];
        $this->pestania[$dataxxxx['activexx']][5] = 'active';
        $this->opciones['routxxxx'] = $dataxxxx['routxxxx'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['infocont'] = $dataxxxx['infocont'];
        $this->opciones['titucont'] = $dataxxxx['titucont'];
        $this->opciones['carpetax'] = $dataxxxx['carpetax'];
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][4]}DULO MANUAL DE USUARIOS ONLINE";
        $this->opciones['rutacarp'] = $dataxxxx['rutacarp'];
        $this->opciones['rutacomp'] = $dataxxxx['rutacomp'];
        $this->opciones['tituloxx'] = $dataxxxx['tituloxx'];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacomp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
    }

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
    public function getMwareN()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leerxxxx|'
            . $this->opciones['permisox'] . '-crearxxx|'
            . $this->opciones['permisox'] . '-editarxx|'
            . $this->opciones['permisox'] . '-borrarxx|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }

    public function getMwareModulo($permmidd)
    {
        $permisos = [
            'permission:'
                . $permmidd . '-moduloxx'
        ];
        return  $permisos;
    }

    public function getTablasOGT($dataxxxx)
    {
        $tablasx =
            [
                'titunuev' => $dataxxxx['titunuev'],
                'titulist' => $dataxxxx['titulist'],
                'archdttb' => $this->opciones['rutacomp'] . 'Adatatable.index',
                'vercrear' => $dataxxxx['vercrear'],
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', $dataxxxx['pararout']),
                'permtabl' => $dataxxxx['permtabl'],
                'cabecera' => $dataxxxx['cabecera'],
                'columnsx' => $dataxxxx['columnsx'],
                'tablaxxx' => $dataxxxx['tablaxxx'],
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $dataxxxx['parametr'],
            ];
        return $tablasx;
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
        } else {
            $this->opciones['botoform'][] = [];
        }
    }
    public function getVistaPestanias($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        $this->getPestanias($this->opciones);
    }
    public function setModelo($dataxxxx)
    {
        $this->opciones['parametr'][$dataxxxx['posicion']] = $dataxxxx['modeloxx']->id;
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
    }
    public function getVista($dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], $this->opciones['parametr']], 2, "VOLVER A {$this->opciones['titucont']}S", 'btn btn-sm btn-primary']);
        $this->getVistaPestanias($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->setModelo($dataxxxx);
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, "NUEVO {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        } else {
            $this->getBotones(['crearxxx', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
