<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Ubicacion\SisMunicipioCrearRequest;
use App\Http\Requests\Sistema\Ubicacion\SisMunicipioEditarRequest;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Traits\Administracion\Ubicacion\Municipio\CrudMunicipioTrait;
use App\Traits\Administracion\Ubicacion\Municipio\DataTablesMunicipioTrait;
use App\Traits\Administracion\Ubicacion\Municipio\ParametrizarMunicipioTrait;
use App\Traits\Administracion\Ubicacion\Municipio\VistasMunicipioTrait;
use App\Traits\Administracion\Ubicacion\ListadosTrait;

use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MunicipioController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudMunicipioTrait; // trait donde se hace el crud de localidades
    use ParametrizarMunicipioTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesMunicipioTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasMunicipioTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'municipi';
        $this->opciones['routxxxx'] = 'municipi';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisDepartamento $padrexxx)
    {
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones = $this->getTablas($this->opciones,$padrexxx->id);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisDepartamento $padrexxx)
    {
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR MUNICIPIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],
            'padrexxx'=>$padrexxx
        ]

        );
    }
    public function store(SisMunicipioCrearRequest $request,$padrexxx)
    {
        $request->request->add(['sis_departamento_id'=>$padrexxx]);
        return $this->setMunicipio([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Municipio creado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisMunicipio $modeloxx)
    {
        $padrexxx=$modeloxx->sis_departamento;
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A MUNICIPIOS', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVO MUNICIPIO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(SisMunicipio $modeloxx)
    {
        $padrexxx=$modeloxx->sis_departamento;
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_departamento_id]], 2, 'VOLVER A MUNICIPIOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR MUNICIPIO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_departamento_id]], 2, 'CREAR NUEVO MUNICIPIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'formulario'],
            'padrexxx'=>$modeloxx->sis_departamento_id
            ]
        );
    }


    public function update(SisMunicipioEditarRequest $request,  SisMunicipio $modeloxx)
    {
        return $this->setMunicipio([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Municipio editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisMunicipio $modeloxx)
    {
        $padrexxx=$modeloxx->sis_departamento;
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR MUNICIPIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],
            'padrexxx'=>$modeloxx->sis_departamento_id]
        );
    }


    public function destroy(Request $request, SisMunicipio $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_departamento_id])
            ->with('info', 'Municipio inactivado correctamente');
    }

    public function activate(SisMunicipio $modeloxx)
    {
        $padrexxx=$modeloxx->sis_departamento;
        $this->pestanix['departam']=[true,$padrexxx->sis_pai];
        $this->pestanix['municipi']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR MUNICIPIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],
            'padrexxx'=>$modeloxx->sis_departamento_id
            ]
        );

    }
    public function activar(Request $request, SisMunicipio $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_departamento_id])
            ->with('info', 'Municipio activado correctamente');
    }
}
