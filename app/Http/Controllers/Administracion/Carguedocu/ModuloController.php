<?php

namespace App\Http\Controllers\Administracion\Carguedocu;

use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use App\Traits\Administracion\Carguedocu\ListadosTrait;
use App\Traits\Administracion\Carguedocu\Modulo\DataTablesModuloTrait;
use App\Traits\Administracion\Carguedocu\Modulo\ParametrizarModuloTrait;
use App\Traits\Administracion\Carguedocu\Modulo\VistasModuloTrait;
use App\Traits\Administracion\Carguedocu\PestaniasTrait;

class ModuloController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'cargdocu';
        $this->opciones['permisox'] = 'cargdocu';
        $this->opciones['routxxxx'] = 'cargdocu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    { 
//       

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
