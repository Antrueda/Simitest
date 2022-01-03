<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\Modulo\IndimoduVistasTrait;
use Illuminate\Http\Request;

class IndimoduController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndimoduVistasTrait; // trait que arma la logica para lo metodos: crud
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    private $opciones = [
        'permisox' => 'indimodu',
        'botoform' => [],
        'pestpadr' => 'indimodu',
    ];
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMwareModulo());
    }

    public function index(Request $requestx)
    {
        $this->opciones['rutacarp'] = 'Indicadores.Administ.';
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->opciones = $this->getModuloIndex($this->opciones);
        $this->opciones['mostabsx'] = false;
        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function inadmini(Request $requestx)
    {
        $this->opciones['cardhead'] = "ADMINISTRACI{$this->opciones['vocalesx'][3]}N";
        $this->opciones['pestpadr'] = 'inadmini';
        $this->opciones['rutacarp'] = 'Indicadores.Administ.';
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->opciones = $this->getModuloIndex($this->opciones);

        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function indiagno(Request $requestx)
    {
        $this->opciones['cardhead'] = "ADMINISTRACI{$this->opciones['vocalesx'][3]}N";
        $this->opciones['pestpadr'] = 'indiagno';
        $this->opciones['rutacarp'] = 'Indicadores.Administ.';
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->opciones = $this->getModuloIndex($this->opciones);

        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
