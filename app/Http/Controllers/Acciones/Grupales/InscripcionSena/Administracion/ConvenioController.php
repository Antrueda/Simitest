<?php

namespace App\Http\Controllers\Acciones\Grupales\InscripcionSena\Administracion;


use App\Http\Controllers\Controller;

use App\Http\Requests\MatriculaAdmin\GrupoCrearRequest;
use App\Http\Requests\MatriculaAdmin\GrupoEditarRequest;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Traits\Acciones\Grupales\Sena\Administracion\Convenio\CrudTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Convenio\DataTablesTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Convenio\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Convenio\VistasTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ListadosTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class ConvenioController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'conveniox';
        $this->opciones['routxxxx'] = 'conveniox';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create()
    {
   
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR GRUPO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(GrupoCrearRequest $request)   
     {

        return $this->setGrupo([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Grupo creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(GrupoMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A GRUPO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR GRUPO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(GrupoMatricula $modeloxx)
    {
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A GRUPO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR GRUPO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]
        );
    }


    public function update(GrupoEditarRequest $request,  GrupoMatricula $modeloxx)
    {
        return $this->setGrupo([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Grupo editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(GrupoMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR GRUPO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, GrupoMatricula $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=GrupoAsignar::where('grupo_matricula_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Grupo inactivado correctamente');
    }

    public function activate(GrupoMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR GRUPO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, GrupoMatricula $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=GrupoAsignar::where('grupo_matricula_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Grupo activado correctamente');
    }
}
