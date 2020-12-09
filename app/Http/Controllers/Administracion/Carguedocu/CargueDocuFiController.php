<?php

namespace App\Http\Controllers\Administracion\Carguedocu;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneArchivoCrearRequest;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\Sistema\SisNnaj;
use App\Traits\Administracion\Carguedocu\Fi\CrudTrait;
use App\Traits\Administracion\Carguedocu\Fi\DataTablesTrait;
use App\Traits\Administracion\Carguedocu\Fi\ParametrizarTrait;
use App\Traits\Administracion\Carguedocu\Fi\VistasTrait;
use App\Traits\Administracion\Carguedocu\ListadosTrait;
use App\Traits\Administracion\Carguedocu\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargueDocuFiController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'cardocfi';
        $this->opciones['routxxxx'] = 'cardocfi';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->pestanix['cardocfi']=[true,$padrexxx];
        $this->opciones['ppadrexx']=$padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $this->pestanix['cardocfi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [$padrexxx], 1, 'GUARDAR DOCUMENTO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]
        );
    }
    public function store(FiRazoneArchivoCrearRequest $request,SisNnaj $padrexxx)
    {
        $request->request->add(['sis_nnaj_id'=>$padrexxx->id]);
        return $this->setFiDocumentosAnexa([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Documento creado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(FiDocumentosAnexa $modeloxx)
    {
        // $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        // $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'VOLVER A DOCUMENTOS', 'btn btn-sm btn-primary']);
        // $this->getBotones(['editar', [], 1, 'EIDTAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'CREAR NUEVO DOCUMENTO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj->id]
        );
    }


    public function edit(FiDocumentosAnexa $modeloxx)
    {
        $this->pestanix['cardocfi']=[true,$modeloxx->sis_nnaj];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'VOLVER A DOCUMENTOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'CREAR NUEVO DOCUMENTO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function update(FiRazoneArchivoCrearRequest $request,  FiDocumentosAnexa $modeloxx)
    {
        return $this->setFiDocumentosAnexa([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Documento editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(FiDocumentosAnexa $modeloxx)
    {
        $this->pestanix['cardocfi']=[true,$modeloxx->sis_nnaj];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR DOCUMENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, FiDocumentosAnexa $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Documento inactivado correctamente');
    }

    public function activate(FiDocumentosAnexa $modeloxx)
    {
        $this->pestanix['cardocfi']=[true,$modeloxx->sis_nnaj];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR DOCUMENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }
    public function activar(Request $request, FiDocumentosAnexa $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Documento activado correctamente');
    }
}
