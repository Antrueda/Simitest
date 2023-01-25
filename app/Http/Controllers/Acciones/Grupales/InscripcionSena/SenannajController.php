<?php

namespace App\Http\Controllers\Acciones\Grupales\InscripcionSena;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\InscripcionFormacion\InscripcionnnajRequest;
use App\Http\Requests\Acciones\Grupales\MatriculannajEditarRequest;
use App\Http\Requests\Acciones\Grupales\MatriculannajRequest;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\ConveNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\InscriConve;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ped\PedMatricula;
use App\Traits\Acciones\Grupales\Sena\SenaNnaj\CrudTrait;
use App\Traits\Acciones\Grupales\Sena\SenaNnaj\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Sena\SenaNnaj\VistasTrait;
use App\Traits\Acciones\Grupales\Sena\Inscripcion\ListadosTrait;
use App\Traits\Acciones\Grupales\Sena\Inscripcion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SenannajController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'inscrnnaj';
        $this->opciones['routxxxx'] = 'inscrnnaj';
        $this->getOpciones();
        $this->middleware($this->getMware());

    }

    public function create(InscriConve $padrexxx)
    {
       
        $this->opciones['padrexxx'] =$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['inscricon.editar', [$padrexxx->id]], 2, 'VOLVER A INSCRIPCIÓN FORMACIÓN TÉCNICA', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$padrexxx->id], 1, 'AGREGAR', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);

    }

    public function store(InscripcionnnajRequest $request, InscriConve $padrexxx)
    {

        $request->request->add(['inconve_id' => $padrexxx->id, 'sis_esta_id' => 1,'fecha' => $padrexxx->fecha]);
        return $this->setMatnnaj([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>'NNAJ agregado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function update(InscripcionnnajRequest $request,  ConveNnaj $modeloxx)
    {
        
        $request->request->add(['inconve_id' => $modeloxx->convenio->id]);
        $request->request->add(['sis_nnaj_id' => $modeloxx->sis_nnaj_id]);
        
        return $this->setMatnnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->convenio,
            'infoxxxx' => 'NNAJ editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function inactivate(ConveNnaj $modeloxx)
    {

        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->inconve_id];
        $this->opciones['padrexxx'] =$modeloxx->convenio;
        $padrexxx = $modeloxx->convenio;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['inscricon.editar', [$modeloxx->inconve_id]], 2, 'VOLVER INSCRIPCIÓN FORMACIÓN TÉCNICA', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR NNAJ', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx]
        );
    }


    public function destroy(ConveNnaj $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('inscricon.editar', [$modeloxx->inconve_id])
            ->with('info', 'NNAJ inactivado correctamente');
    }

    public function edit(ConveNnaj $modeloxx)
    {
        
        $this->opciones['padrexxx'] =$modeloxx->convenio;
        $padrexxx = $modeloxx->convenio;
       
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['inscricon.editar', [$padrexxx->id]], 2, 'VOLVER A INSCRIPCIÓN FORMACIÓN TÉCNICA', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR ', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$padrexxx->id]], 2, 'AGREGAR NNAJ', 'btn btn-sm btn-primary']);
         return $this->view(
            $this->opciones,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }

    public function activate(ConveNnaj $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->iMatricula;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['inscricon.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A INSCRIPCIÓN FORMACIÓN TÉCNICA', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );
    }

    public function activar(Request $request, ConveNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('inscricon.editar', [$modeloxx->inconve_id])
            ->with('info', 'NNAJ activado correctamente');
    }
}
