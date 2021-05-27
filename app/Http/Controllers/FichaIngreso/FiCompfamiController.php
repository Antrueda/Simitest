<?php

namespace App\Http\Controllers\FichaIngreso;
use App\Http\Controllers\Controller;
use App\Traits\Fi\Compfami\CFControllerTrait;
class FiCompfamiController extends Controller
{
    use CFControllerTrait; // contiene los métodos del controlador
    public function __construct()
    {
        $this->getConfigVistas();
        $this->getCombos();
        $this->middleware($this->getMware());
    }
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }

}
