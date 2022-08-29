<?php

namespace app\Http\Controllers\AdmiActiAsd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdTiactividad;


use App\Traits\AdmiActiAsd\AdmiActiCrudTrait;
use App\Http\Requests\AdmiAsd\TiacCrearRequest;
use App\Http\Requests\AdmiAsd\TiacEditarRequest;
use App\Traits\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\AdmiActiAsd\AdmiTiac\AdmiTiacVistasTrait;
use App\Traits\AdmiActiAsd\AdmiTiac\AdmiTiacParametrizarTrait;

class CgiModuloController extends Controller
{

    // use AdmiCuesListadosTrait; // trait que arma las consultas para las datatables
    // use CgiParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    // use AdmiCuesDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    // use CgiVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    // use AdmiCuesPestaniasTrait;// trit que construye las pestañas que va a tener el modulo con respectiva logica
   public function __construct()
    {
        $this->opciones['permisox'] = 'cgimodu-modulo';
        $this->opciones['routxxxx'] = 'cgimodu-modulo';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
