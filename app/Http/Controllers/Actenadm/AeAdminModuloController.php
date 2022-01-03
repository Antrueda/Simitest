<?php

namespace App\Http\Controllers\Actenadm;

use App\Http\Controllers\Controller;
use App\Traits\Actenadm\ActenadmDataTablesTrait;
use App\Traits\Actenadm\ActenadmListadosTrait;
use App\Traits\Actenadm\ActenadmPestaniasTrait;
use App\Traits\Actenadm\Modulo\ActenadmParametrizarModuloTrait;
use App\Traits\Actenadm\Modulo\ActenadmVistasModuloTrait;

class AeAdminModuloController extends Controller
{
    use ActenadmListadosTrait; // trait que arma las consultas para las datatables
    use ActenadmParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use ActenadmDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ActenadmVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use ActenadmPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'actenadm';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
