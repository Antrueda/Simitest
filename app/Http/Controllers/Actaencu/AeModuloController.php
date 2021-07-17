<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Modulo\ActaencuParametrizarModuloTrait;
use App\Traits\Actaencu\Modulo\ActaencuVistasModuloTrait;

class AeModuloController extends Controller
{
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ActaencuVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use ActaencuPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'actamodu';
        $this->opciones['permisox'] = 'actamodu';
        $this->opciones['routxxxx'] = 'actamodu';
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
