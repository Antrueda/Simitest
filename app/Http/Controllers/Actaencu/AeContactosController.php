<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeContactoCrearRequest;
use App\Http\Requests\Actaencu\AeContactoEditarRequest;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Sistema\SisEntidad;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Contactos\ContactosParametrizarTrait;
use App\Traits\Actaencu\Contactos\ContactosVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AeContactosController extends Controller
{
    use ContactosParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ContactosVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'aecontac';
        $this->pestania[0][5] = 'active';
        $this->pestania[1][4] = true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(AeEncuentro $padrexxx)
    {
        $this->opciones['entidades'] = $this->getSisEntidadCT([])['comboxxx'];
        $this->opciones['parametr'][] = $padrexxx->id;
        if (!$padrexxx->getVerCrearAttribute(9, 'contactos')) {
            return redirect()->route($this->opciones['permisox'], $padrexxx->id)->with(['infoxxxx' => 'Ha llegado al limite de contactos registrados (10)']);
        }
        $this->getBotones(['actaencu-leerxxxx', ['actaencu.editarxx', [$padrexxx->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' . 'crearxxx', [$padrexxx->id], 1, 'GUARDAR CONTACTO', 'btn btn-sm btn-primary', 1]);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function edit(AeContacto $modeloxx)
    {
        $this->opciones['entidades'] = $this->getSisEntidadCT([])['comboxxx'];
        $this->getBotones(['actaencu-leerxxxx', ['actaencu.editarxx', [$modeloxx->actasEncuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' . 'editarxx', [], 1, 'GUARDAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
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
        $this->getBotones([$this->opciones['permisox'] . '-' . 'borrarxx', [], 1, 'INACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['actaencu-leerxxxx', ['actaencu.editarxx', [$modeloxx->actasEncuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function destroy(Request $request, AeContacto $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeContacto $modeloxx)
    {
        $this->getBotones([$this->opciones['permisox'] . '-' . 'activarx', [], 1, 'ACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['actaencu-leerxxxx', ['actaencu.editarxx', [$modeloxx->actasEncuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->actasEncuentro]);
    }

    public function activar(Request $request, AeContacto $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}
