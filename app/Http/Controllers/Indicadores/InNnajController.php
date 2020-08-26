<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InNnajController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones = [

            'permisox' => 'inacciongestion',
            'parametr' => [],
            // 'urlxxxxx' => 'api/indicadores/acciongestion',
            'urlxxxxx' => 'api/indicadores/acciongestion',
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['dataxxxx'] = [];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'ESTADO'],
        ];

        $this->opciones['columnsx'] = [

            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'sis_nnajs.id'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            ['data' => 'sis_esta_id', 'name' => 'sis_nnajs.sis_esta_id'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->opciones['padrexxx'] = [
            'Listado de NNAJ con Indicadores'
        ];
        return view('Indicadores.Admin.Acciongestion.index', ['todoxxxx' => $this->opciones]);
    }


}
