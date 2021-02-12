<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgCarguedocRequest;
use App\Http\Requests\FichaIngreso\FiRazoneArchivoCrearRequest;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgCarguedoc;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Traits\Acciones\Grupales\Carguedocu\Fi\CrudTrait;
use App\Traits\Acciones\Grupales\Carguedocu\Fi\DataTablesTrait;
use App\Traits\Acciones\Grupales\Carguedocu\Fi\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Carguedocu\Fi\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgCargueDocController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'agcargdoc';
        $this->opciones['routxxxx'] = 'agcargdoc';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(AgActividad $padrexxx)
    {
        
        $this->pestanix[4]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['crear', [$padrexxx->id], 1, 'AGREGAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    public function store(AgCarguedocRequest $request,AgActividad $padrexxx)
    {
        $request->request->add(['ag_actividad_id' => $padrexxx->id, 'sis_esta_id' => 1]);
        return $this->setAgCargueDoc([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Documento agregado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(AgCarguedoc $modeloxx)
    {
        // $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        // $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'VOLVER A DOCUMENTOS', 'btn btn-sm btn-primary']);
        // $this->getBotones(['editar', [], 1, 'EIDTAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'CREAR NUEVO DOCUMENTO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj->id]
        );
    }


    public function edit(AgCarguedoc $modeloxx)
    {
        $padrexxx = $modeloxx->ag_actividad;
        $this->pestanix[4]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['crear', ['agcargdoc.nuevo',[$padrexxx->id]], 2, 'AGREGAR OTRO DOCUMENTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
         return $this->view($this->opciones,['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }


    public function update(AgCarguedocRequest $request,  AgCarguedoc $modeloxx)
    {
        return $this->setAgCargueDoc([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Documento editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(AgCarguedoc $modeloxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->ag_actividad_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$modeloxx->ag_actividad_id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->destroy($modeloxx);
    }


    public function destroy(AgCarguedoc $modeloxx)
    {

        $modeloxx->delete();
        return redirect()->back()
            ->with('info', 'Documento eliminado correctamente');
    }

    public function activate(AgCarguedoc $modeloxx)
    {
        $this->pestanix['cardocfi']=[true,$modeloxx->sis_nnaj];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR DOCUMENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }
    public function activar(Request $request, AgCarguedoc $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Documento activado correctamente');
    }
}
