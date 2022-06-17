<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\Modulo\AdmiModuParametrizarTrait;

class VctModuloController extends Controller
{
    use AdmiModuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVctDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'avctmodu';
        $this->opciones['permisox'] = 'avctmodu';
        $this->opciones['routxxxx'] = 'avctmodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacarp'].''.$this->opciones['carpetax'].''. 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
