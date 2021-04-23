<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadDataTablesTrait;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadVistasTrait;
use App\Traits\Administracion\Ubicacion\UbicacionCrudTrait;
use App\Traits\Administracion\Ubicacion\UbicacionListadosTrait;
use App\Traits\Administracion\Ubicacion\UbicacionPestaniasTrait;

class SisLocalidadController extends Controller
{
    use LocalidadParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use UbicacionPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UbicacionListadosTrait; // trait que arma las consultas para las datatables
    use UbicacionCrudTrait; // trait donde se hace el crud de localidades

    use LocalidadDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use LocalidadVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'localida';
        $this->opciones['routxxxx'] = 'localida';
        $this->pestania[3][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

}
