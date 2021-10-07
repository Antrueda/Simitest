<?php

namespace App\Http\Controllers\Indicadores\Individuales;

use App\Http\Controllers\Controller;
use App\Traits\Indicadores\Individuales\ListadosTrait;
use App\Traits\Indicadores\Individuales\Modulo\DataTablesModuloTrait;
use App\Traits\Indicadores\Individuales\Modulo\ParametrizarModuloTrait;
use App\Traits\Indicadores\Individuales\Modulo\VistasModuloTrait;
use App\Traits\Indicadores\Individuales\PestaniasTrait;

class IndividualesModuloController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'indimodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
ddd(4);
        // ddd($this->opciones['pestania']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
