<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;

use App\Traits\Acciones\Grupales\Modulo\DataTablesModuloTrait;
use App\Traits\Acciones\Grupales\Modulo\ParametrizarModuloTrait;
use App\Traits\Acciones\Grupales\Modulo\VistasModuloTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
class ModuloController extends Controller
{
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'taccform';
        $this->opciones['permisox'] = 'taccform';
        $this->opciones['routxxxx'] = 'taccform';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


}
