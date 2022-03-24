<?php

namespace App\Http\Controllers\AdmiActiAsd;


use App\Models\AdmiCgi\CgiCategoria;



use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\AdmiActiAsd\AdmiActiCrudTrait;
use App\Http\Requests\AdmiAsd\TiacCrearRequest;
use App\Http\Requests\AdmiAsd\TiacEditarRequest;
use App\Traits\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\AdmiActiAsd\AdmiTiac\AdmiTiacVistasTrait;
use App\Traits\AdmiActiAsd\AdmiTiac\AdmiTiacParametrizarTrait;

class AdmiCategoriaCgiController extends Controller
{

    use AdmiTiacVistasTrait;

    use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiTiacParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiActiCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aasdtiac';
        $this->opciones['routxxxx'] = 'aasdtiac';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        
    }


    public function create()
    {
      
    }
    public function store(TiacCrearRequest $request)
    {
       
    }


    public function show(CgiCategoria $modeloxx)
    {
    }


    public function edit(CgiCategoria $modeloxx)
    {
        
    }


    public function update(TiacEditarRequest $request,  CgiCategoria $modeloxx)
    {
        
    }

    public function inactivate(CgiCategoria $modeloxx)
    {
        
    }


    public function destroy(Request $request, CgiCategoria $modeloxx)
    {

   
    }

    public function activate(CgiCategoria $modeloxx)
    {
   

    }
    public function activar(Request $request, CgiCategoria $modeloxx)
    {
        
    }
}
