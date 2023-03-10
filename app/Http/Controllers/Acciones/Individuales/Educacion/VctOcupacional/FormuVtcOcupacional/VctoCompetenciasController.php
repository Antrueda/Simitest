<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\GestionTiempos\ManageTimeTrait;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctPestaniasTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional\VtcoCompetensCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoCompetencias\VctCompeteVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoCompetencias\VctCompeteParametrizarTrait;

class VctoCompetenciasController extends Controller
{
    use VctCompeteParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VctCompeteVistasTrait; // trait que arma la logica para lo metodos: crud
    use VctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VctCrudTrait; // trait donde se hace el crud de localidades
    use VctListadosTrait; // trait que arma las consultas para las datatables

    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->opciones['permisox'] = 'vctocomp';
        $this->opciones['routxxxx'] = 'vctocomp';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(Vcto $padrexxx)
    {       
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }

    public function store(VtcoCompetensCrearRequest $request,Vcto $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['vcto_id'=> $padrexxx->id]);
        return $this->setVctocompetens([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'competencias ocupacionales guardado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Vcto $modeloxx)
    {
        $this->getBotones(['leerxxxx', ['vctocupa', [$modeloxx->id]], 2, 'VOLVER A VALORACIÓN T.O', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx->vctocompetencias, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx]);
    }

    public function edit(Vcto $modeloxx)
    {
            $this->getBotones(['editarxx', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => $modeloxx->vctocompetencias, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx]);
    }

    public function update(VtcoCompetensCrearRequest $request,  Vcto $modeloxx)
    {
        return $this->setVctocompetens([
            'requestx' => $request,
            'modeloxx' => $modeloxx->vctocompetencias,
            'infoxxxx' => 'competencias ocupacionales guardado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }
}


