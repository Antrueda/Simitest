<?php

namespace App\Http\Controllers\Acciones\Grupales\Mayores;

use App\Http\Controllers\Controller;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Traits\Acciones\Grupales\SalidaJoven\CrudTrait;
use App\Traits\Acciones\Grupales\SalidaJoven\ParametrizarTrait;
use App\Traits\Acciones\Grupales\SalidaJoven\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalidaJovenController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'salidajovenes';
        $this->opciones['routxxxx'] = 'salidajovenes';
        $this->getOpciones();
        $this->middleware($this->getMware());
        
    }

    public function create(AiSalidaMayores $padrexxx)
    {
        $this->opciones['padrexxx'] =$padrexxx;
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['aisalidamayores.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A SALIDA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }

    public function inactivate(SalidaJovene $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->ai_salmay;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['aisalidamayores.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A SALIDA', 'btn btn-sm btn-primary']);
        //return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],$this->getBotones(['borrar', [], 1, 'INACTIVAR ASISTENTE', 'btn btn-sm btn-primary']),
        return $this->destroy($modeloxx);
            }


    public function destroy(SalidaJovene $modeloxx)
    {
        $modeloxx->delete();
        return redirect()->back()
            ->with('info', 'Joven eliminado correctamente');
    }

    public function activate(SalidaJovene $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->ai_salmay;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['aisalidamayores.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A SALIDA', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR RESPOSABLE', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );
    }

    public function activar(Request $request, SalidaJovene $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('aisalidamayores.editar', [$modeloxx->ai_salmay_id])
            ->with('info', 'Asistente activado correctamente');
    }
}
