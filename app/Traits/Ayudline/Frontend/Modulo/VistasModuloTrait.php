<?php

namespace App\Traits\Ayudline\Frontend\Modulo;

use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasModuloTrait
{
    public function getUyudasModuloVMT($dataxxxx)
    {
        $this->opciones['tablasxx'] = [];
        $this->opciones['ruarchjs'] = [
        ];
    }
    public function indexVMT()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getOpcionesVMT($dataxxxx)
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
    public $opciones = [
        'parametr' => [],
        'routingx' => [],
        'vocalesx' => ['Á', 'É', 'Í', 'Ó', 'Ú'],
        'perfilxx' => 'sinperfi',

    ];
    public function getConfigVistas()
    {
        $dataxxxx = [
            'rutacarp' => 'Ayudline.Frontend.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'Ayudline.Acomponentes.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Modulo', // nombre de la carpeta
            'tituloxx' => 'AYUDA', // titulo que se mustra en la vista
            'titucont' => 'AYUDA', // texto complementarios en el boton de la tabla
            'infocont' => 'Ayuda', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' => 0, // pestaña que debe estar activa
            'permisox' => 'ayudline', // commplemento del permiso
            'routxxxx' => 'ayudline' // complemento del route
        ];
        $this->getOpcionesVMT($dataxxxx);
    }
    public function index()
    {

        $this->getUyudasModuloVMT([
            'vercrear' => false,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}S",
            'permisox'=>$this->opciones['permisox'].'-crearxxx',
        ]);
        return $this->indexVMT();
    }
}
