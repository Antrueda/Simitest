<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Pruediag\PruediagParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Pruediag\PruediagVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagPestaniasTrait;

class EduPruediagnosController extends Controller
{
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use PruediagParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PruediagVistasTrait; // trait que arma la logica para lo metodos: crud
    use PruediagPestaniasTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'edaprudi';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
