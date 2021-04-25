<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Traits\Fi\FiTrait;
use App\Traits\Fi\Datobasi\DBControllerTrait;
use App\Traits\Fi\Datobasi\DBCrudTrait;
use App\Traits\Fi\FiDataTablesTrait;
use App\Traits\Fi\Datobasi\DBVistasTrait;
use App\Traits\Interfaz\ComposicionFamiliarTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;

class FiController extends Controller
{
    use FiTrait;
    use DBVistasTrait; // parametrización de las vistas de datos basicos
    use DBControllerTrait; // todos los metodos del controlador
    use FiDataTablesTrait;
    use DBCrudTrait; // realizar el guardado de datos basicos
    use InterfazFiTrait;
    use PuedeTrait;
    use ComposicionFamiliarTrait;

    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMware());
    }

}
