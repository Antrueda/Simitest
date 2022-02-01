<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeContactoCrearRequest;
use App\Http\Requests\Actaencu\AeContactoEditarRequest;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Contactos\ContactosVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\DatosComunesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AeContactosController extends Controller
{
    use DatosComunesTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ContactosVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // traita arma los botones

    public function __construct()
    {
        $this->opciones['permisox'] = 'aecontac';
        $this->pestania[0][5] = 'active';
        $this->pestania[1][4] = true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function getOpciones()
    {
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'ACTA DE ENCUENTRO - CONTACTOS';
        $this->opciones['rutacarp'] = 'Actaencu.';
        $this->opciones['carpetax'] = 'Contactos';
        $this->opciones['tituloxx'] = "ACTA DE ENCUENTRO - CONTACTOS";
        $this->getComplementoDCT();
    }
    public function create(AeEncuentro $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['entidades'] = $this->getSisEntidadCT([])['comboxxx'];
        $this->opciones['parametr'][] = $padrexxx->id;
        if (!$padrexxx->getVerCrearAttribute(9, 'contactos')) {
            return redirect()->route($this->opciones['permisox'], $padrexxx->id)->with(['infoxxxx' => 'Ha llegado al limite de contactos registrados (10)']);
        }
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'CREAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }

    public function store(AeContactoCrearRequest $request, AeEncuentro $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['ae_encuentro_id' => $padrexxx->id]);

        return $this->setAeContacto([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Contacto creado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(AeContacto $modeloxx)
    {
        $this->getBotones(['actaencu-leerxxxx', ['actaencu.editarxx', [$modeloxx->actasEncuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->opciones['entidades'] = $this->getSisEntidadCT([])['comboxxx'];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verxxxxx'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function edit(AeContacto $modeloxx)
    {
        $this->opciones['entidades'] = $this->getSisEntidadCT([])['comboxxx'];
        $this->opciones['tituloxx'] = 'EDITAR CONTACTO';
        $this->padrexxx = $modeloxx->actasEncuentro;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(AeContactoEditarRequest $request,  AeContacto $modeloxx)
    {
        return $this->setAeContacto([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Contacto editado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AeContacto $modeloxx)
    {
        $this->opciones['tituloxx'] = 'INACTIVAR CONTACTO';
        $this->padrexxx = $modeloxx->actasEncuentro;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->estadoid = 2;
        return $this->view();
    }


    public function destroy(Request $request, AeContacto $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('actaencu.editarxx', [$modeloxx->ae_encuentro_id])
            ->with('info', 'Contacto inactivado correctamente');
    }

    public function activate(AeContacto $modeloxx)
    {
        $this->opciones['tituloxx'] = 'ACTIVAR CONTACTO';
        $this->padrexxx = $modeloxx->actasEncuentro;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx['accionxx'] = ['activarx', 'activarx'];
        return $this->view();
    }

    public function activar(Request $request, AeContacto $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('actaencu.editarxx', [$modeloxx->ae_encuentro_id])
            ->with('info', 'Contacto activado correctamente');
    }
}
