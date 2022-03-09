<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Traits\BotonesTrait;
use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi\NnajasdiParametrizarTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi\NnajasdiVistasTrait;

class AsdNnajActividadesController extends Controller
{
    use NnajasdiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DiariaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DiariaListadosTrait; // trait que arma las consultas para las datatables
    use DiariaCrudTrait; // trait donde se hace el crud de localidades
    use DiariaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use NnajasdiVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    use DiariaAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'nnajacti';
        $this->opciones['routxxxx'] = 'nnajacti';

        $this->opciones['tabsxxxx'] = 'tabsxxxx';
        $this->pestania[1][5] = '';
        $this->pestania[1][4] = true;
        $this->pestania[2][5] = 'active';
        $this->pestania[2][4] = true;
        $this->opciones['modalsxx'] = [];
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(AsdSisNnaj $padrexxx)
    {
        $this->pestania[1][2] = $this->opciones['parametr']=[$padrexxx];
        $this->pestania[2][2] = $this->opciones['parametr']=[$padrexxx];

        $this->getPestanias([]);
        $this->getAsdNnajActividades(['parametr'=>$padrexxx->id]);
        $this->opciones['parametr'] ='1';

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create(AsdSisNnaj $padrexxx)
    {
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function store(Request $request,AsdSisNnaj $padrexxx)
    {
        $request->request->add(['asd_diaria_id' => $padrexxx,'sis_esta_id' => 1]);
        return $this->setAsdSisNnaj([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'NNAJ asignado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }



    public function show(AsdSisNnaj $modeloxx)
    {
        $this->opciones['nnajxxxx']=$modeloxx->sisNnaj;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verxxxxx'], 'padrexxx' => $modeloxx->asd_diaria_id]);
    }


    public function edit(AsdSisNnaj $modeloxx)
    {
        $this->opciones['nnajxxxx']=$modeloxx->sisNnaj;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->asd_diaria_id]);
    }


    public function update(Request $request,  AsdSisNnaj $modeloxx)
    {
        return $this->setAsdSisNnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'NNAJ actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }
    

    public function inactivate(AsdSisNnaj $modeloxx)
    {
        $this->opciones['nnajxxxx']=$modeloxx->sisNnaj;
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'INACTIVAR NNAJ']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'], 'padrexxx' => $modeloxx->asd_diaria_id]);
    }


    public function destroy(Request $request, AsdSisNnaj $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->asd_diaria_id])
            ->with('info', 'ASISTENCIA DIARIA inactivada correctamente');
    }

    public function activate(AsdSisNnaj $modeloxx)
    {
        $this->opciones['nnajxxxx']=$modeloxx->sisNnaj;
        $this->getRespuesta(['btnxxxxx' => 'b','tituloxx'=>'ACTIVAR NNAJ']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx' => $modeloxx->asd_diaria_id]);
    }
    public function activar(Request $request, AsdSisNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->asd_diaria_id])
            ->with('info', 'ASISTENCIA DIARIA activada correctamente');
    }
}
