<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\CasoJuridico\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Sociolegal\SeguiCasoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\SeguiCasoEditarRequest;
use App\Http\Requests\SaludAdmin\RemisionCrearRequest;
use App\Http\Requests\SaludAdmin\RemisionEditarRequest;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\AsignaEnfermedad;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\Seguimiento\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\Seguimiento\DataTablesTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\Seguimiento\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\Seguimiento\VistasTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;

/**
 * FOS Tipo de seguimiento
 */
class SeguimientoCasoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'seguicaso';
        $this->opciones['routxxxx'] = 'seguicaso';
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
    public function store(SeguiCasoCrearRequest $request)
    {
        
        return $this->setSeguimiento([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Seguimiento Caso creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SeguimientoCaso $modeloxx)
    {
        
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A SEGUIMIENTO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR SEGUIMIENTO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(SeguimientoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A SEGUIMIENTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR SEGUIMIENTO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(SeguiCasoEditarRequest $request,  SeguimientoCaso $modeloxx)
    {
        return $this->setSeguimiento([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Seguimiento Caso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SeguimientoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, SeguimientoCaso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('cursos_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Seguimieneto caso inactivado correctamente');
    }

    public function activate(SeguimientoCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->id]
        );

    }
    public function activar(Request $request, SeguimientoCaso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=AsociarCaso::where('cursos_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Seguimiento Caso activado correctamente');
    }
}
