<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Usuariox\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag\PruediagCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag\PruediagEditarRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag\PruediagInactivarRequest;
use App\Models\Educacion\Usuariox\Pruediag\EduPruediag;
use App\Models\Sistema\SisNnaj;;

use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag\PruediagParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Pruediag\PruediagVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;
use Spatie\Permission\Models\Permission;

class PruediagController extends Controller
{
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use PruediagParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagVistasTrait; // trait que arma la logica para lo metodos: crud
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BotonesTrait; // traita arma los botones
    use CombosTrait; // trait que armas los combos
    use PestaniasGeneralTrait;
    use PruediagPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'pruediag',
        'modeloxx' => null,
        'botoform' => [],
        'parametr' => [],
    ];
    private $dataxxxx = [];
    private $requestx = null;
    private $padrexxx = null;
    private $vercrear = false; // permite ver el boton crear presaber de la prueba diagnóstica
    private $infoxxxx = 'Prueba diagnóstica crada con éxito';
    private $redirect = '';
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->redirect = $this->opciones['permisox'] . '.editarxx';
    }
    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->getDtPruediagIndex(['padrexxx' => $this->opciones['usuariox']->id]);
        $this->getPestanias([]);

        return view($this->opciones['compesta'], ['todoxxxx' => $this->opciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(SisNnaj $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS', 'parametr' => [$this->padrexxx]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'crearxxx', 'btnxxxxx' => 'b', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
        return $this->view();
    }
    public function store(PruediagCrearRequest $request, SisNnaj $padrexxx)
    {
        $this->requestx = $request;
        $request->request->add(['sis_nnaj' => $padrexxx->id]);
        return $this->setEduPruediag();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(EduPruediag $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->fiDatosBasico->sis_nnaj;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(EduPruediag $modeloxx)
    {
        $this->vercrear = true;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->fiDatosBasico->sis_nnaj;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        return $this->view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $padrexxx
     * @return \Illuminate\Http\Response
     */
    public function update(PruediagEditarRequest $request,  EduPruediag $modeloxx)
    {
        $this->infoxxxx = 'Prueba diagnóstica actualizada con éxito';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPruediag();
    }

    public function inactivate(EduPruediag $modeloxx)
    {
        $this->estadoid = 2;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->fiDatosBasico->sis_nnaj;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(PruediagInactivarRequest $request, EduPruediag $modeloxx)
    {
        $this->redirect = $this->opciones['permisox'];
        $this->infoxxxx = 'Prueba diagnóstica inactivada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPruediag([$modeloxx->fiDatosBasico->sis_nnaj_id]);
    }

    public function activate(EduPruediag $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->fiDatosBasico->sis_nnaj;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }
    public function activar(PruediagInactivarRequest $request, EduPruediag $modeloxx)
    {
        $this->redirect = $this->opciones['permisox'];
        $this->infoxxxx = 'Prueba diagnóstica activada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPruediag([$modeloxx->fiDatosBasico->sis_nnaj_id]);
    }
}
