<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\DenominaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\DenominaEditarRequest;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Denomina;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\ModuloUnidad;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\Administracion\Denomina\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\Administracion\Denomina\DataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\Administracion\Denomina\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\Administracion\Denomina\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class DenominaController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'denomina';
        $this->opciones['routxxxx'] = 'denomina';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(DenominaCrearRequest $request)
    {
        
        return $this->setUnidad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Unidad creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Denomina $modeloxx)
    {
        
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER UNIDAD', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR UNIDAD', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(Denomina $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A Unidad', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR UNIDAD', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(DenominaEditarRequest $request,  Denomina $modeloxx)
    {
        return $this->setUnidad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Unidad editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Denomina $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR UNIDAD', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, Denomina $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=ModuloUnidad::where('denomina_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Unidad inactivado correctamente');
    }

    public function activate(Denomina $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR UNIDAD', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->id]
        );

    }
    public function activar(Request $request, Denomina $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=ModuloUnidad::where('denomina_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Unidad activado correctamente');
    }
}
