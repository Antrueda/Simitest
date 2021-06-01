<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\Modulo\IndimoduVistasTrait;
use Illuminate\Http\Request;

class IndimoduController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndimoduVistasTrait; // trait que arma la logica para lo metodos: crud
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {

        $this->opciones['routxxxx'] = 'indimodu';
        $this->getOpciones();
        $this->middleware($this->getMwareModulo());
    }

    public function index(Request $requestx)
    {
        $this->opciones['rutacarp'] = 'Indicadores.Admin.';
        $this->getPestanias(['requestx'=>$requestx->path()]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getModuloIndex($this->opciones)]);
    }
}
