<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\CuestionarioGustos;

use App\Http\Controllers\Controller;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Modulo\ActaencuParametrizarModuloTrait;
use App\Traits\Actaencu\Modulo\ActaencuVistasModuloTrait;

class CgModuloController extends Controller
{
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ActaencuVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use ActaencuPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'cgimodu';
        $this->opciones['permisox'] = 'cgimodu';
        $this->opciones['routxxxx'] = 'cgimodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
