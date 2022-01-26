<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Traits\Indicadores\Administ\Indiarea\IndiareaVistasTrait;
use App\Traits\Indicadores\IndimoduCrudTrait;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use Illuminate\Http\Request;

class IndiareaController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndiareaVistasTrait; // trait que arma la logica para lo metodos: crud
    private $opciones = [
        'permisox' => 'indiarea',
        'modeloxx' => null,
        'botoform' => [],
        'pestpadr' => 'inadmini',
    ];

    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['pestpadr']='indimodu';
    }

    public function index(Request $requestx)
    {
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        $this->getAreasIndex();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
