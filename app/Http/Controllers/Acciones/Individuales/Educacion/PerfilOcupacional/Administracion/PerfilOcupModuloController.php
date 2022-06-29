<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional\Administracion;


use App\Http\Controllers\Controller;
use App\Traits\PerfilOcupacionalAdmin\PestaniasTrait;
use App\Traits\PerfilOcupacionalAdmin\Modulo\VistasModuloTrait;
use App\Traits\PerfilOcupacionalAdmin\Modulo\DataTablesModuloTrait;
use App\Traits\PerfilOcupacionalAdmin\Modulo\ParametrizarModuloTrait;

class PerfilOcupModuloController extends Controller
{
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesModuloTrait; // trait donde se arman las datatables que se van a utilizar
   // use VistasModuloTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'fosadmin';
        $this->opciones['permisox'] = 'fosadmin';
        $this->opciones['routxxxx'] = 'fosadmin';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
