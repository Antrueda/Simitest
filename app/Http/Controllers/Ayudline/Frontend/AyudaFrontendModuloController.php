<?php

namespace App\Http\Controllers\Ayudline\Frontend;

use App\Http\Controllers\Controller;
use App\Traits\Ayudline\DataTablesTrait;
use App\Traits\Ayudline\Frontend\Modulo\ParametrizarModuloTrait;
use App\Traits\Ayudline\Frontend\Modulo\VistasModuloTrait;
use App\Traits\Ayudline\ListadosTrait;

class AyudaFrontendModuloController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getMware($permmidd)
    {
        $permisos = [
            'permission:'
                . $permmidd . '-moduloxx'
        ];
        return  $permisos;
    }

    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMware('ayudline'));

    }
}
