<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastDataTablesTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\Modulo\AdmiModuParametrizarTrait;

class DastModuloController extends Controller
{
    use AdmiModuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiDastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
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
