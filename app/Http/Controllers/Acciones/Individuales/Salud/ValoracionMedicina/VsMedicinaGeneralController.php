<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionMedicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\VsmedicinaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VsmedicinaEditarRequest;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VsMedicinaGeneralController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //



    public function __construct()
    {

        $this->opciones['permisox'] = 'vsmedicina';
        $this->opciones['routxxxx'] = 'vsmedicina';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['tablinde'] = true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones' => $this->opciones, 'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(SisNnaj $padrexxx)
    {


        $salud = $padrexxx->fi_saluds;

        if ($salud == null) {
            return redirect()
                ->route('vsmedicina', [$padrexxx->id])
                ->with('info', 'No se puede realizar el formulario porque los datos de Ficha de Ingreso - Salud se encuentran incompletos');
        }

        $this->opciones['cursosxx'] = Diagnostico::combo(true, false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441, true, false);
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;

        $this->opciones['diagnost'] = '.listaxxy';
        $this->opciones['valoraci'] = $padrexxx;

        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde'] = false;
        $this->opciones['parametr'] = $padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $this->padrexxx->id]
        );
    }
    public function store(VsmedicinaCrearRequest $request, SisNnaj $padrexxx)
    { //

        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->setMedicinaGeneral([
            'requestx' => $request, //
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Valoracion medica general creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Vsmedicina $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;

        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do = $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->id]
        );
    }


    public function showCert(Vsmedicina $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx->nnaj;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['cursosxx'] = Diagnostico::combo(true, false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441, true, false);
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do, ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'certificado'], 'padrexxx' => $modeloxx->id])->render();
    }


    public function edit(Vsmedicina $modeloxx)
    {
        $this->opciones['cursosxx'] = Diagnostico::combo(true, false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441, true, false);
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $modeloxx->nnaj]
        );
    }


    public function update(VsmedicinaEditarRequest $request,  Vsmedicina $modeloxx)
    {

        $request->request->add(['sis_nnaj_id' => $modeloxx->nnaj->id]);
        return $this->setMedicinaGeneral([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Valoracion medica general editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Vsmedicina $modeloxx)
    {

        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, Vsmedicina $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion medica general inactivado correctamente');
    }

    public function activate(Vsmedicina $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->sis_nnaj]
        );
    }

    public function activar(Request $request, Vsmedicina $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion medica general activado correctamente');
    }
}
