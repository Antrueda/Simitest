<?php

namespace App\Traits\Ayudline\Frontend\Ayudaxxx;

use App\Models\Ayuda\Ayuda;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public $opciones = [
        'parametr' => [],
        'routingx' => [],
        'vocalesx' => ['Á', 'É', 'Í', 'Ó', 'Ú'],
        'perfilxx' => 'sinperfi',

    ];
    public function getOpcionesVFT($dataxxxx)
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
    public function indexVFT()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getBotonesVFT($dataxxxx)
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
    public function getVistaPestaniasVFT($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        $this->getPestanias($this->opciones);
    }
    public function setModeloVFT($dataxxxx)
    {
        $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
    }
    public function getVistaVFT($dataxxxx)
    {
        $this->getBotonesVFT(['leerxxxx', [$this->opciones['routxxxx'], $this->opciones['parametr']], 2, "VOLVER A {$this->opciones['titucont']}S", 'btn btn-sm btn-primary']);
        $this->getVistaPestaniasVFT($dataxxxx);
        // indica si se esta actualizando o viendo
        $this->setModeloVFT($dataxxxx);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getConfigVistas()
    {
        $dataxxxx = [
            'rutacarp' => 'Ayudline.Frontend.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'Ayudline.Acomponentes.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Mosayuda', // nombre de la carpeta
            'tituloxx' => 'AYUDA', // titulo que se mustra en la vista
            'titucont' => 'AYUDA', // texto complementarios en el boton de la tabla
            'infocont' => 'Ayuda', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' => 1, // pestaña que debe estar activa
            'permisox' => 'ayuduser', // commplemento del permiso
            'routxxxx' => 'ayuduser' // complemento del route
        ];
        $this->getOpcionesVFT($dataxxxx);
    }
    public function index()
    {
        $this->getUyudasIndexADT([
            'vercrear' => false,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}S",
            'permisox' => $this->opciones['permisox'] . '-crearxxx',
        ]);
        return $this->indexVFT();
    }
    public function show(Ayuda $modeloxx)
    {
        // $this->getBotonesVFT(['leerxxxx', [$this->opciones['routxxxx'],[]], 2, "VOLVER {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVistaVFT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }
}
