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

    public function __construct()
    {
        $this->opciones['routxxxx'] = 'indiarea';
        $this->pestania[0]['activexx']='active';
        $this->pestania[0]['pesthija'][0]['activexx']='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(Request $requestx)
    {
        $this->getPestanias(['requestx'=>$requestx->path()]);
        $this->opciones['vistaxxx']='indiadmi';


        // ddd($this->opciones['pestania']);
        $this->getAreasIndex();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
