<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Traits\Acciones\Grupales\Asistente\CrudTrait;
use App\Traits\Acciones\Grupales\Asistente\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Asistente\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgAsistenteController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'agasiste';
        $this->opciones['routxxxx'] = 'agasiste';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(AgActividad $padrexxx)
    {
        $this->opciones['padrexxx'] =$padrexxx;
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $responsa = AgResponsable::where('ag_actividad_id',$padrexxx->id)->get();
        if(  count($responsa)<=2){
        $this->getBotones(['crear', ['agrespon.nuevo', [$padrexxx->id]], 2, 'AGREGAR RESPONSABLE', 'btn btn-sm btn-primary']);
        }
        $this->getBotones(['editar', ['agactividad.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }

    public function inactivate(AgAsistente $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        //return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],$this->getBotones(['borrar', [], 1, 'INACTIVAR ASISTENTE', 'btn btn-sm btn-primary']),
        return $this->destroy($modeloxx);
            }


    public function destroy(AgAsistente $modeloxx)
    {
        $modeloxx->delete();
        return redirect()->back()
            ->with('info', 'Asistente eliminado correctamente');
    }

    public function activate(AgAsistente $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        $this->getBotones(['editar', ['agactividad.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR RESPOSABLE', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );
    }

    public function activar(Request $request, AgAsistente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('agactividad.editar', [$modeloxx->ag_actividad_id])
            ->with('info', 'Asistente activado correctamente');
    }
}
