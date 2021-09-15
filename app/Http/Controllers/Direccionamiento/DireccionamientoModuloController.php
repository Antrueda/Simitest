<?php

namespace App\Http\Controllers\Direccionamiento;

use App\Http\Controllers\Controller;
use App\Traits\Direccionamiento\DataTablesTrait;
use App\Traits\Direccionamiento\ListadosTrait;
use App\Traits\Direccionamiento\PestaniasTrait;
use App\Traits\Direccionamiento\Modulo\ParametrizarModuloTrait;
use App\Traits\Direccionamiento\Modulo\VistasModuloTrait;

class DireccionamientoModuloController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'direccionmodulo';
        $this->opciones['permisox'] = 'direccionmodulo';
        $this->opciones['routxxxx'] = 'direccionmodulo';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
       $this->getTablas($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' =>  $this->opciones]);
    }
}
