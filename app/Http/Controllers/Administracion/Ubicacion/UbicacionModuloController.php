<?php

namespace App\Http\Controllers\Administracion\Ubicaion;

use App\Http\Controllers\Controller;
use App\Traits\Administracion\Ubicaion\ListadosTrait;
use App\Traits\Administracion\Ubicaion\Modulo\DataTablesModuloTrait;
use App\Traits\Administracion\Ubicaion\Modulo\ParametrizarModuloTrait;
use App\Traits\Administracion\Ubicaion\Modulo\VistasModuloTrait;
use App\Traits\Administracion\Ubicaion\PestaniasTrait;

class UbicacionModuloController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'temamodu';
        $this->opciones['permisox'] = 'temamodu';
        $this->opciones['routxxxx'] = 'temamodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);

        // ddd($this->opciones['pestania']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
