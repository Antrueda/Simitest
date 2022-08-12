<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\CuestionarioGustos;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Modulo\CgiVistasModuloTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Modulo\CgiParametrizarModuloTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesDataTablesTrait;


class CgiModuloController extends Controller
{

    use AdmiCuesListadosTrait; // trait que arma las consultas para las datatables
    use CgiParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiCuesDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use CgiVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use AdmiCuesPestaniasTrait;// trit que construye las pestañas que va a tener el modulo con respectiva logica
   public function __construct()
    {
        $this->opciones['permisox'] = 'cgimodu-modulo';
        $this->opciones['routxxxx'] = 'cgimodu-modulo';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
