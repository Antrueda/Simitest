<?php

namespace App\Traits\Ayudline\Frontend\Ayudaxxx;

use App\Models\Ayuda\Ayuda;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getConfigVistas()
    {
        $dataxxxx = [
            'rutacarp' => 'Ayudline.Frontend.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'Ayudline.Acomponentes.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Mosayuda', // nombre de la carpeta
            'tituloxx' => 'AYUDA', // titulo que se mustra en la vista
            'titucont' => 'AYUDA', // texto complementarios en el boton de la tabla
            'infocont' => 'Ayuda', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' => 0, // pestaña que debe estar activa
            'permisox' => 'ayuduser', // commplemento del permiso
            'routxxxx' => 'ayuduser' // complemento del route
        ];
        $this->getOpcionesOGT($dataxxxx);
    }
    public function index()
    {
        $this->getUyudasIndexADT([
            'vercrear' => false,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}S",
        ]);
        return $this->indexOGT();
    }
    public function show(Ayuda $modeloxx)
    {
        return $this->getVista(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }
}
