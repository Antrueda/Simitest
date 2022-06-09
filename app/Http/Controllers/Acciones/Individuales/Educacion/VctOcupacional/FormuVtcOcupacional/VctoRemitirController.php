<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;

use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctPestaniasTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional\VtcoRemitirCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoRemitir\VctRemiVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoRemitir\VctRemiParametrizarTrait;

class VctoRemitirController extends Controller
{
    use VctRemiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VctRemiVistasTrait; // trait que arma la logica para lo metodos: crud
    use VctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VctCrudTrait; // trait donde se hace el crud de localidades
    use  ManageTimeTrait;
    use CombosTrait;

    
    public function __construct()
    {
        $this->opciones['permisox'] = 'vctoremi';
        $this->opciones['routxxxx'] = 'vctoremi';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }


    public function create(Vcto $padrexxx)
    {       
        if ($padrexxx->vctocompetencias != null || $padrexxx->caracterizacion()->first() != null || $padrexxx->fortalecer->first() != null) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
        }else{
            return back()->with('info', 'Por favor complete 1.COMPETENCIAS OCUPACIONALES, 2. CARACTERIZACIÓN DEL DESEMPEÑO, 3. ÁREAS A FORTALECER para poder remitir.');

        }
}

    public function store(VtcoRemitirCrearRequest $request,Vcto $padrexxx)
    {
            return $this->setVctoRemitir([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Remitir a, guardado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Vcto $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function edit(Vcto $modeloxx)
    {
            $this->getBotones(['editarxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx]);
    }

    public function update(VtcoRemitirCrearRequest $request,  Vcto $modeloxx)
    {
        return $this->setVctoRemitir([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx,
            'infoxxxx' => 'Remitir a, guardado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

}


