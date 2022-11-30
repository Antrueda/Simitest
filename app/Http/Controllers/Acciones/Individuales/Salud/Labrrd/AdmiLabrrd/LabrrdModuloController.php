<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\Modulo\AdmiModuParametrizarTrait;

class LabrrdModuloController extends Controller
{
    use AdmiModuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiLabrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiLabrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'adastmod';
        $this->opciones['permisox'] = 'adastmod';
        $this->opciones['routxxxx'] = 'adastmod';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . '' . $this->opciones['carpetax'] . '' . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
