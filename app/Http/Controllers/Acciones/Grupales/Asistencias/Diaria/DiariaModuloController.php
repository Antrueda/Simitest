<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Http\Controllers\Controller;
use App\Traits\AsisDiar\AsisDiarDataTablesTrait;
use App\Traits\AsisDiar\AsisDiarListadosTrait;
use App\Traits\AsisDiar\AsisDiarPestaniasTrait;
use App\Traits\AsisDiar\Modulo\AsisDiarParametrizarModuloTrait;
use App\Traits\AsisDiar\Modulo\AsisDiarVistasModuloTrait;

class DiariaModuloController extends Controller
{
    use AsisDiarListadosTrait; // trait que arma las consultas para las datatables
    use AsisDiarParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use AsisDiarDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsisDiarVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use AsisDiarPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'diariaxx';
        $this->opciones['permisox'] = 'diariaxx';
        $this->opciones['routxxxx'] = 'diariaxx';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
