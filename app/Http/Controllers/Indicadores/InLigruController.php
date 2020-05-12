<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Area;

class InLigruController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'indicador', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'inligru', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Inligru', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'inligru';
        $this->opciones['routnuev'] = 'inligru';
        $this->opciones['routxxxx'] = 'inligru';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A DOCUMENTOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Area $padrexxx)
    {
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'Area: ' . $padrexxx->nombre;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'INDICADOR-LÍNEA BASE',
                'titulist' => 'LISTA DE LÍNEAS BASES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesbase'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                ],
                'accitabl' => true,
                'vercrear' => false,
                'urlxxxxx' => 'api/indicadores/basegrupos',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'LÍNEA BASE'],
                    ['td' => 'DOCUMENTO FUENTE'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_base_fuentes.id'],
                    ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                    ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'inligru',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
