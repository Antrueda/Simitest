<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Vacunas;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Modulo\VacunaParametrizarModuloTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Modulo\VacunaVistasModuloTrait;

class VacunaModuloController extends Controller
{

    use AdmiVacunasListadosTrait; // trait que arma las consultas para las datatables
    use VacunaParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVacunasDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VacunaVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use AdmiVacunasPestaniasTrait;// trit que construye las pestañas que va a tener el modulo con respectiva logica
   public function __construct()
    {
        $this->opciones['permisox'] = 'vacunamodulo-modulo';
        $this->opciones['routxxxx'] = 'vacunamodulo-modulo';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
