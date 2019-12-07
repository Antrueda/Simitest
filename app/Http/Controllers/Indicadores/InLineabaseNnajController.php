<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InAccionGestionCrearRequest;
use App\Http\Requests\Indicadores\InAccionGestionEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InAccionGestion;
use App\Models\sistema\SisActividad;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\Tema;
use Illuminate\Http\Request;

class InLineabaseNnajController extends Controller
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
        ];
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nnajxxxx)
    {

        $nombresx = FiDatosBasico::where('sis_nnaj_id', $nnajxxxx)->first();
        $this->opciones['padrexxx'] = [
            'NNAJ: ' . $nombresx->s_primer_nombre . ' ' .
                $nombresx->s_segundo_nombre . ' ' .
                $nombresx->s_primer_apellido . ' ' .
                $nombresx->s_segundo_apellido,
           
            'Listado de Lineas base'
        ];
        $this->opciones['dataxxxx'] = [['campoxxx' => 'nnajxxxx', 'dataxxxx' => $nnajxxxx]];
        $this->opciones['urlxxxxx'] = 'api/indicadores/basennajag';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_lineabase_nnajs.id'],
            ['data' => 's_linea_base', 'name' => 'in_lineabase_nnajs.s_linea_base'],
            ['data' => 'activo', 'name' => 'in_lineabase_nnajs.activo'],
        ];
        return view('Indicadores.Admin.Acciongestion.bases', ['todoxxxx' => $this->opciones]);
    }
    
}
