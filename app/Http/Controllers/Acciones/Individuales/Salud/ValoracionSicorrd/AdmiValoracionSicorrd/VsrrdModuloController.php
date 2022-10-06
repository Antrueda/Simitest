<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionSicorrd\AdmiValoracionSicorrd;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\Modulo\AdmiModuParametrizarTrait;

class VsrrdModuloController extends Controller
{
    use AdmiModuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVsrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVsrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'vsrrdmod';
        $this->opciones['permisox'] = 'vsrrdmod';
        $this->opciones['routxxxx'] = 'vsrrdmod';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . '' . $this->opciones['carpetax'] . '' . 'pestanias', ['todoxxxx' => $this->getTablasModulo($this->opciones)]);
    }
}
