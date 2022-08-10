<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\CasoJuridico\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Sociolegal\TipoCasoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\TipoCasoEditarRequest;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\AsignaEnfermedad;


use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TipoCaso\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TipoCaso\DataTablesTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TipoCaso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\TipoCaso\VistasTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use Models\Acciones\Individuales\SocialLegal\TipoCaso;

/**
 * FOS Tipo de seguimiento
 */
class TipoCasoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'tipocaso';
        $this->opciones['routxxxx'] = 'tipocaso';
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
    public function store(TipoCasoCrearRequest $request)
    {
        
        return $this->setTipoCaso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tipo de caso creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(TipoCaso $modeloxx)
    {
        
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A TIPO DE CASO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR TIPO DE CASO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(TipoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A TIPO DE CASO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR TIPO DE CASO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(TipoCasoEditarRequest $request,  TipoCaso $modeloxx)
    {
        return $this->setTipoCaso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tipo de caso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(TipoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR TIPO DE CASO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, TipoCaso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('diag_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Tipo de caso inactivado correctamente');
    }

    public function activate(TipoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO DE CASO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->id]
        );

    }
    public function activar(Request $request, TipoCaso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('cursos_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Tipo de caso activado correctamente');
    }
}
