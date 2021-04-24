<?php

namespace App\Http\Controllers\Ayudline\Frontend;

use App\Http\Controllers\Controller;
use App\Traits\Ayudline\Frontend\Modulo\ParametrizarModuloTrait;
use App\Traits\Ayudline\Frontend\Modulo\VistasModuloTrait;
use App\Traits\Ayudline\ListadosTrait;

class AyudaFrontendModuloController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use ParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    use VistasModuloTrait; // trait que arma la logica para lo metodos: crud


    public function __construct()
    {
        $this->opciones['permisox'] = 'ayudline';
        $this->opciones['routxxxx'] = 'ayudline';
        $this->getOpciones();
        $this->middleware($this->getMwareModulo('ayudline'));

    }

    public function index()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
