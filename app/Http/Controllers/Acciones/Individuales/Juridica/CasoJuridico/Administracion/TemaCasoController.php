<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\CasoJuridico\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Sociolegal\TemaCasoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\TemaCasoEditarRequest;
use App\Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TemaCaso\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TemaCaso\DataTablesTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TemaCaso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TemaCaso\VistasTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * FOS Tipo de seguimiento
 */
class TemaCasoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'temacaso';
        $this->opciones['routxxxx'] = 'temacaso';
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
    public function store(TemaCasoCrearRequest $request)   
     {

        return $this->setTemacaso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tema Caso creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(TemaCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A TEMA CASO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR TEMA CASO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(TemaCaso $modeloxx)
    {
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A TEMA CASO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR TEMA CASO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]
        );
    }


    public function update(TemaCasoEditarRequest $request,  TemaCaso $modeloxx)
    {
        return $this->setTemacaso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tema Caso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(TemaCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR TEMA CASO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, TemaCaso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('enfe_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
      return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Tema Caso inactivado correctamente');
    }

    public function activate(TemaCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR TEMA CASO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, TemaCaso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('enfe_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);

        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Tema Caso activado correctamente');
    }
}
