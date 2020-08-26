<?php

namespace App\Http\Controllers\FichaObservacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sistema\SisNnaj;

class FosController extends Controller
{
    private $opciones;

    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Ficha de Observación y Seguimiento',
            'rutaxxxx' => 'datosbasico',
            'accionxx' => '',
            'permisox' => 'fosdatobasico',
            'routxxxx' => 'fos.datobasico',
            'routnuev' => 'fos.datobasico',
            'volverax' => 'Ficha de Observación y Seguimiento',
            'urlxxxxx' => 'api/fos/nnajs',
            'readonly' => ''
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
    }

    public function index(Request $request)
    {
        $this->opciones['cabecera'] = [
            ['td' => 'Id'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns',               'name' => 'btns'],
            ['data' => 's_primer_nombre',    'name' => 's_primer_nombre'],
            ['data' => 's_segundo_nombre',   'name' => 's_segundo_nombre'],
            ['data' => 's_primer_apellido',  'name' => 's_segundo_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
            ['data' => 's_apodo',            'name' => 's_apodo'],
        ];
        $this->opciones['parametr'] = [];
        return view('fichaobservacion.indexw', ['todoxxxx' => $this->opciones]);
    }

    public function show($id)
    {
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FosDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        return view('fichaobservacion.index', ['accion' => 'Editar'], compact('dato', 'nnaj'));
    }
}
