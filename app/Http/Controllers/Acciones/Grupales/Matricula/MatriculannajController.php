<?php

namespace App\Http\Controllers\Acciones\Grupales\Matricula;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\MatriculannajRequest;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Traits\Acciones\Grupales\Matriculannaj\CrudTrait;
use App\Traits\Acciones\Grupales\Matriculannaj\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Matriculannaj\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\Matricula\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatriculannajController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'imatriculannaj';
        $this->opciones['routxxxx'] = 'imatriculannaj';
        $this->getOpciones();
        $this->middleware($this->getMware());
        
    }

    public function create(IMatricula $padrexxx)
    {
        $this->opciones['padrexxx'] =$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['imatricula.editar', [$padrexxx->id]], 2, 'VOLVER A MATRICULA', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$padrexxx->id], 1, 'AGREGAR', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
        
    }

    public function store(MatriculannajRequest $request, IMatricula $padrexxx)
    {
       
        $request->request->add(['imatricula_id' => $padrexxx->id, 'sis_esta_id' => 1,'fecha' => $padrexxx->fecha,'prm_upi_id'=>$padrexxx->prm_upi_id,'prm_serv_id'=>1]);
        return $this->setMatnnaj([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>'NNAJ agregado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function update(MatriculannajRequest $request,  IMatriculaNnaj $modeloxx)
    {
       
        $request->request->add(['sis_nnaj_id' => $modeloxx->sis_nnaj_id,'prm_serv_id'=>1]);
        return $this->setMatnnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->imatricula,
            'infoxxxx' => 'NNAJ editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function inactivate(IMatriculaNnaj $modeloxx)
    {

        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->imatricula_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['imatricula.editar', [$modeloxx->imatricula_id]], 2, 'VOLVER MATRICULA', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR NNAJ', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->imatricula_id]
        );
    }


    public function destroy(IMatriculaNnaj $modeloxx)
    {
        
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('imatricula.editar', [$modeloxx->traslado_id])
            ->with('info', 'NNAJ inactivado correctamente');
    }

    public function edit(IMatriculaNnaj $modeloxx)
    {
    
        $this->opciones['padrexxx'] =$modeloxx->imatricula;
        $padrexxx = $modeloxx->imatricula;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['imatricula.editar', [$padrexxx->id]], 2, 'VOLVER A MATRICULA', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$padrexxx->id]], 2, 'AGREGAR NNAJ', 'btn btn-sm btn-primary']);
         return $this->view(
            $this->opciones,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }

    public function activate(IMatriculaNnaj $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->imatricula;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['imatricula.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A MATRICULA', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );
    }

    public function activar(Request $request, IMatriculaNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('imatricula.editar', [$modeloxx->imatricula_id])
            ->with('info', 'NNAJ activado correctamente');
    }
}
