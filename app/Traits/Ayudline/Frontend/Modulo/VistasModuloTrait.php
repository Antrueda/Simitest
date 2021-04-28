<?php

namespace App\Traits\Ayudline\Frontend\Modulo;

use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasModuloTrait
{

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
        $this->getOpcionesOGT($dataxxxx);
    }
    public function index()
    {

        $this->getUyudasModuloDT([
            'vercrear' => false,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}S",
            'permisox'=>$this->opciones['permisox'].'-crearxxx',
        ]);
        return $this->indexOGT();
    }
}
