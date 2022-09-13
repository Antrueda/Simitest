<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;


use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;

use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Modulo\ParametrizarModuloTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Modulo\VistasModuloTrait;

class MedicamentoModuloController extends Controller
{

    
    use AdmiCrudTrait;
    use AdmiDataTablesTrait;
    use AdmiListadosTrait;
    use AdmiPestaniasTrait;
    use ParametrizarModuloTrait;
    use VistasModuloTrait;


    public function __construct()
    {
        $this->opciones['permisox'] = 'medicina-modulo';
        $this->opciones['routxxxx'] = 'medicina-modulo';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
