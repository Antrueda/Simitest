<?php

namespace App\Http\Controllers\Acciones\Grupales\Traslado;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\TrasladonnajCrearRequest;
use App\Http\Requests\Acciones\Grupales\TrasladonnajEditarRequest;

use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\Simianti\Inf\IfDetalleAsistenciaDiaria;
use App\Traits\Acciones\Grupales\Trasladonnaj\CrudTrait;
use App\Traits\Acciones\Grupales\Trasladonnaj\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Trasladonnaj\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\Traslado\PestaniasTrait;
use App\Traits\Interfaz\BuscarNnajSimiantiFiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrasladoNnajController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use BuscarNnajSimiantiFiTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {//
        
        $this->opciones['permisox'] = 'traslannaj';
        $this->opciones['routxxxx'] = 'traslannaj';
        $this->getOpciones();
        $this->middleware($this->getMware());
        
    }

    public function create(Traslado $padrexxx)
    {
        $this->opciones['padrexxx'] =$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['traslado.editar', [$padrexxx->id]], 2, 'VOLVER A TRASLADO', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$padrexxx->id], 1, 'AGREGAR', 'btn btn-sm btn-primary']);
          return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
        
        // // 
        // // return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'taller'], 'padrexxx' => $padrexxx]);
        
    }

    public function store(TrasladonnajCrearRequest $request, Traslado $padrexxx)
    {
        $request->request->add(['traslado_id' => $padrexxx->id, 'sis_esta_id' => 1]);
        $infoxx='NNAJ agregado con éxito';
        if($padrexxx->tipotras_id == 2641){
            $upienvia= $padrexxx->upi->nombre;
            $upirecibe= $padrexxx->trasupi->nombre;
            $infoxx='El beneficiario ha sido trasladado, de '.$upienvia.' a '.$upirecibe;
        }
        return $this->setTrasnnaj([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>      $infoxx,
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    
    }

    public function update(TrasladonnajEditarRequest $request,  TrasladoNnaj $modeloxx)
    {
        $request->request->add(['sis_nnaj_id' => $modeloxx->sis_nnaj_id]);
        
        
        return $this->setTrasnnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->traslado,
            'infoxxxx' => 'NNAJ editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }



    public function inactivate(TrasladoNnaj $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->traslado;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['traslado.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A TRASLADO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR NNAJ', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->traslado]
        );
    }

    // public function destroy(TrasladoNnaj $modeloxx)
    // {
    //     $modeloxx->update();
    //     return redirect()->back()
    //         ->with('info', 'AJ eliminado correctamente');
    // }

    public function destroy(Request $request, TrasladoNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('traslado.editar', [$modeloxx->traslado_id])
            ->with('info', 'AJ activado correctamente');
    }

    public function edit(TrasladoNnaj $modeloxx)
    {
        
        
        $this->opciones['padrexxx'] =$modeloxx->traslado;
        $padrexxx = $modeloxx->traslado;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['traslado.editar', [$padrexxx->id]], 2, 'VOLVER TRASLADO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$padrexxx->id]], 2, 'AGREGAR BENEFICIARIO', 'btn btn-sm btn-primary']);
       
         return $this->view($this->opciones,['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }

    public function activate(TrasladoNnaj $modeloxx)
    {
        $this->opciones['padrexxx'] =$modeloxx->traslado;
        $this->pestanix[1]['dataxxxx'] = [true, $this->opciones['padrexxx']->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['traslado.editar', [$this->opciones['padrexxx']->id]], 2, 'VOLVER A TRASLADO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->traslado]
            );
    }

    public function activar(Request $request, TrasladoNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('traslado.editar', [$modeloxx->traslado_id])
            ->with('info', 'AJ activado correctamente');
    }
}
