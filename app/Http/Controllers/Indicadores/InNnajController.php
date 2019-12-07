<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InNnajController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:inacciongestion-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:inacciongestion-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
         
            'permisox' => 'inacciongestion',
            'parametr' => [],
            // 'urlxxxxx' => 'api/indicadores/acciongestion',
            'urlxxxxx' => 'api/indicadores/acciongestion',
        ];
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
            ['data' => 'activo', 'name' => 'sis_nnajs.activo'],
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
