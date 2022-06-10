<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\GestionTiempos\ManageTimeTrait;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctPestaniasTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional\VtcoCaracteriCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoCaracteri\VctCaracteriVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoCaracteri\VctCaracteriParametrizarTrait;


class VctoCaracteriController extends Controller
{
    use VctCaracteriParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VctCaracteriVistasTrait; // trait que arma la logica para lo metodos: crud
    use VctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VctCrudTrait; // trait donde se hace el crud de localidades
    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->opciones['permisox'] = 'vctocara';
        $this->opciones['routxxxx'] = 'vctocara';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(Vcto $padrexxx)
    {       
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }

    public function store(VtcoCaracteriCrearRequest $request,Vcto $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['vcto_id'=> $padrexxx->id]);
        return $this->setVctocaracterizacion([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'caracterización guardada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Vcto $modeloxx)
    {
        $this->getBotones(['leerxxxx', ['vctocupa', [$modeloxx->id]], 2, 'VOLVER A VALORACIÓN T.O', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx]);
    }

    public function edit(Vcto $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx]);
    }

    public function update(VtcoCaracteriCrearRequest $request,  Vcto $modeloxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['vcto_id'=> $modeloxx->id]);
        return $this->setVctocaracterizacion([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx,
            'infoxxxx' => 'caracterización guardada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }
}


