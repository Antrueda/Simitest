<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Usuariox\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa\EdupresaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa\EdupresaEditarRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa\EdupresaInactivarRequest;
use App\Models\Educacion\Usuariox\Pruediag\EduPresaber;
use App\Models\Educacion\Usuariox\Pruediag\EduPruediag;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa\EdupresaParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa\EdupresaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;

class EdupresaController extends Controller
{
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use EdupresaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use EdupresaVistasTrait; // trait que arma la logica para lo metodos: crud
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use BotonesTrait; // traita arma los botones
    use CombosTrait; // trait que armas los combos
    use PestaniasGeneralTrait;
    use PruediagPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'edupresa',
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(EduPruediag $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $botonxxx = [
            'btnxxxxx' => 'a',
            'tituloxx' => 'VOLVER A PRUEBA DIAGNÓSTICA',
            'parametr' => [$this->padrexxx->id],
            'routexxx' => 'pruediag.editarxx'
        ];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'crearxxx', 'btnxxxxx' => 'b', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
        return $this->view();
    }
    public function store(EdupresaCrearRequest $request, EduPruediag $padrexxx)
    {
        $this->requestx = $request;
        $request->request->add(['edu_pruediag_id' => $padrexxx->id]);
        return $this->setEduPresaber();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(EduPresaber $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->eduPruediag;
        $botonxxx = ['btnxxxxx' => 'a',
        'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS',
        'parametr' => [$this->padrexxx->id],
        'routexxx' => 'pruediag.editarxx'
    ];
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
    public function edit(EduPresaber $modeloxx)
    {
        $this->vercrear = true;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->eduPruediag;
        $botonxxx = [
            'btnxxxxx' => 'a',
            'tituloxx' => 'VOLVER A PRUEBA DIAGNÓSTICA', 'parametr' => [$modeloxx->edu_pruediag_id],
            'routexxx' => 'pruediag.editarxx'
        ];
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
    public function update(EdupresaEditarRequest $request,  EduPresaber $modeloxx)
    {
        $this->infoxxxx = 'Prueba diagnóstica actualizada con éxito';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPresaber();
    }

    public function inactivate(EduPresaber $modeloxx)
    {
        $this->estadoid = 2;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->eduPruediag;
        $botonxxx = ['btnxxxxx' => 'a',
        'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS',
        'parametr' => [$this->padrexxx->id],
        'routexxx' => 'pruediag.editarxx'
    ];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(EdupresaInactivarRequest $request, EduPresaber $modeloxx)
    {
        $this->redirect = 'pruediag.editarxx';
        $this->infoxxxx = 'Prueba diagnóstica inactivada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPresaber([$modeloxx->edu_pruediag_id]);
    }

    public function activate(EduPresaber $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $this->padrexxx = $modeloxx->eduPruediag;
        $botonxxx = ['btnxxxxx' => 'a',
        'tituloxx' => 'VOLVER A PRUEBAS DIAGNÓSTICAS',
        'parametr' => [$this->padrexxx->id],
        'routexxx' => 'pruediag.editarxx'
    ];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }
    public function activar(EdupresaInactivarRequest $request, EduPresaber $modeloxx)
    {
        $this->redirect = 'pruediag.editarxx';
        $this->infoxxxx = 'Prueba diagnóstica activada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEduPresaber([$modeloxx->edu_pruediag_id]);
    }
}
