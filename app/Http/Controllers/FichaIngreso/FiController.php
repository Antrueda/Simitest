<?php

namespace App\Http\Controllers\FichaIngreso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;

class FiController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->middleware(['permission:fidatobasico-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:fidatobasico-crear'], ['only' => ['index, show']]);
        $this->middleware(['permission:fidatobasico-editar'], ['only' => ['index, show']]);
        $this->middleware(['permission:fidatobasico-borrar'], ['only' => ['index, show']]);
        $this->opciones = [
            'tituloxx' => 'Fichas de ingreso',
            'rutaxxxx' => 'datosbasico',
            'accionxx' => '',
            'permisox' => 'fidatobasico',
            'routxxxx' => 'fi.datobasico',
            'routnuev' => 'fi.datobasico',
            'volverax' => 'Fichas de ingreso',
            'urlxxxxx' => 'api/fi/nnajs',
            'readonly' => ''
        ];
    }

    public function index(Request $request)
    {
        $this->opciones['cabecera'] = [
            ['td' => 'Id'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'DOCUMENTO'],
            ['td' => 'NNAJ'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_primer_nombre', 'name' => 's_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 's_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 's_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
            ['data' => 's_documento', 'name' => 's_documento'],
            ['data' => 'sis_nnaj_id', 'name' => 'sis_nnaj_id'],
            ['data' => 'activo', 'name' => 'activo'],
        ];
        $this->opciones['parametr'] = [];
        return view('FichaIngreso.index', ['todoxxxx' => $this->opciones]);
    }

    public function show($id)
    {
        $dato = SisNnaj::findOrFail($id);
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        return view('fichaIngreso.index', ['accion' => 'Editar'], compact('dato', 'nnaj'));
    }
}
