<?php

namespace App\Http\Controllers\Acciones\Grupales\InscripcionSena\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\InscripcionFormacion\FormacionCrearRequest;
use App\Http\Requests\FichaObservacion\FosTseCrearRequest;
use App\Http\Requests\FichaObservacion\FosTseEditarRequest;
use App\Http\Requests\MotivoEgreso\MotivoEgresoCrearRequest;
use App\Http\Requests\MotivoEgreso\MotivoEgresoEditarRequest;
use App\Models\Acciones\Grupales\InscripcionConvenios\Modalidad;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Traits\Acciones\Grupales\Sena\Administracion\Modalidad\CrudTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Modalidad\DataTablesTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Modalidad\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\Modalidad\VistasTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ListadosTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class ModalidadController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'modalidad';
        $this->opciones['routxxxx'] = 'modalidad';
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
    public function store(FormacionCrearRequest $request)
    {
        
        return $this->setModalidad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Modalidad creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Modalidad $modeloxx)
    {
        
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A MODALIDAD', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', [$modeloxx->id]], 2, 'CREAR MODALIDAD', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(Modalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'VOLVER A MODALIDAD', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', [$modeloxx->sis_nnaj]], 2, 'CREAR MODALIDAD', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function update(FormacionCrearRequest $request,  Modalidad $modeloxx)
    {
        return $this->setModalidad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Modalidad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Modalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, Modalidad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=MotivoEgreu::where('motivoe_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Modalidad inactivado correctamente');
    }

    public function activate(Modalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }
    public function activar(Request $request, Modalidad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=MotivoEgreu::where('motivoe_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Modalidad activado correctamente');
    }
}
