<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionMedicina\Administracion;

use App\Http\Controllers\Controller;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\AsignaEnfermedad;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Enfermedad;
use App\Traits\Acciones\Individuales\Salud\Administracion\Enfermedad\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\Administracion\Enfermedad\DataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Administracion\Enfermedad\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Administracion\Enfermedad\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class EnfermedadController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'enfermedad';
        $this->opciones['routxxxx'] = 'enfermedad';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR MODULO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(ModuloCrearRequest $request)   
     {

        return $this->setEnfermedad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Modulo creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Enfermedad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A MODULO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR MODULO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(Enfermedad $modeloxx)
    {
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A MODULO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR MODULO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]
        );
    }


    public function update(ModuloEditarRequest $request,  Enfermedad $modeloxx)
    {
        return $this->setEnfermedad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Modulo editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Enfermedad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR MODULO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, Enfermedad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsignaEnfermedad::where('modulo_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
      return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Modulo inactivado correctamente');
    }

    public function activate(Enfermedad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR MODULO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, Enfermedad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsignaEnfermedad::where('modulo_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);

        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Modulo activado correctamente');
    }
}
