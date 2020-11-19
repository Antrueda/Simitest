<?php

namespace App\Http\Controllers\Fosadmin;

use App\Http\Controllers\Controller;
use App\Traits\Fosadmin\Modulo\DataTablesModuloTrait;
use App\Traits\Fosadmin\Modulo\ParametrizarModuloTrait;
use App\Traits\Fosadmin\Modulo\VistasModuloTrait;
use App\Traits\Fosadmin\PestaniasTrait;

class ModuloController extends Controller
{
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'fosadmin';
        $this->opciones['permisox'] = 'fosadmin';
        $this->opciones['routxxxx'] = 'fosadmin';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
