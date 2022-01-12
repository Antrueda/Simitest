<?php

namespace App\Http\Controllers\AdmiActi;

use App\Http\Controllers\Controller;
use App\Traits\AdmiActi\AdmiActiDataTablesTrait;
use App\Traits\AdmiActi\AdmiActiPestaniasTrait;
use App\Traits\AdmiActi\AdmiActiListadosTrait;
use App\Traits\AdmiActi\Modulo\AdmiActiParametrizarModuloTrait;
use App\Traits\AdmiActi\Modulo\AdmiActiVistasModuloTrait;

class AAModuloController extends Controller
{
    use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiActiParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiActiVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'adacmodu';
        $this->opciones['permisox'] = 'adacmodu';
        $this->opciones['routxxxx'] = 'adacmodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
