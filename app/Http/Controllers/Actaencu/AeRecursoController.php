<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeRecursoCrearRequest;
use App\Http\Requests\Actaencu\AeRecursoEditarRequest;
use App\Http\Requests\Actaencu\AeRecursoRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecuadmi;
use App\Models\Actaencu\AeRecurso;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Recursos\RecursoParametrizarTrait;
use App\Traits\Actaencu\Recursos\RecursoVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AeRecursoController extends Controller
{
    use RecursoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait; // trait que administra los combos
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use RecursoVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'aerecurs';
        $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(AeEncuentro $padrexxx)
    {
        $this->opciones['parametr'][]=$padrexxx->id;
        $this->getBotones(['actaencu-' .'leerxxxx', ['actaencu.editarxx', [$padrexxx->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' .'crearxxx', [$padrexxx->id], 1, 'GUARDAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
    }

    public function store(AeRecursoCrearRequest $request, AeEncuentro $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['ae_encuentro_id' => $padrexxx->id]);

        return $this->setAeRecurso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Recurso creado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(AeRecurso $modeloxx)
    {
        $this->getBotones(['actaencu-' .'leerxxxx', ['actaencu.editarxx', [$modeloxx->ae_encuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verxxxxx'], 'todoxxxx' => $this->opciones, 'padrexxx'=>$modeloxx->ae_encuentro]);
    }


    public function edit(AeRecurso $modeloxx)
    {
        $this->estadoid = $modeloxx->sis_esta_id;
        $this->getBotones(['actaencu-' .'leerxxxx', ['actaencu.editarxx', [$modeloxx->ae_encuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' .'editarxx', [], 1, 'GUARDAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->ae_encuentro]);
    }


    public function update(AeRecursoEditarRequest $request,  AeRecurso $modeloxx)
    {
        return $this->setAeRecurso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Recurso editado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AeRecurso $modeloxx)
    {
        $this->estadoid = 2;
        $this->getBotones(['actaencu-' .'leerxxxx', ['actaencu.editarxx', [$modeloxx->ae_encuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' .'borrarxx', [], 1, 'INACTIVAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->ae_encuentro]);
    }


    public function destroy(AeRecursoRequest $request, AeRecurso $modeloxx)
    {

        $dataxxxx=$request->all();
        $dataxxxx['user_edita_id']=Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route('actaencu.editarxx', [$modeloxx->ae_encuentro_id])
            ->with('info', 'Recurso inactivado correctamente');
    }

    public function activate(AeRecurso $modeloxx)
    {
        $this->getBotones(['actaencu-' .'leerxxxx', ['actaencu.editarxx', [$modeloxx->ae_encuentro->id]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones([$this->opciones['permisox'] . '-' .'activarx', [], 1, 'ACTIVAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx'=>$modeloxx->ae_encuentro]);

    }

    public function activar(AeRecursoRequest $request, AeRecurso $modeloxx)
    {
        $dataxxxx=$request->all();
        $dataxxxx['user_edita_id']=Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route('actaencu.editarxx', [$modeloxx->ae_encuentro_id])
            ->with('info', 'Recurso activado correctamente');
    }


    public function getRecursosLista(Request $request)
    {
        if ($request->ajax()) {
            switch ($request->campoxxx) {
                case 'prm_trecurso_id':
                    $respuest = [
                        'comboxxx' => $this->getAeRecursosAECT(
                            [
                                'padrexxx' => $request->padrexxx,
                                'selected' => $request->selected,
                                'cabecera' => true,
                                'ajaxxxxx' => true,
                                'actaencu' => $request->actaencu
                            ]
                        )['comboxxx'],
                        'campoxxx' => '#ae_recuadmi_id'
                    ];
                    break;

                case 'ae_recuadmi_id':
                    $respuest = [ 'campoxxx' => '#unidmedi','dataxxxx'=>$request->padrexxx==''?'':AeRecuadmi::find($request->padrexxx)->prm_umedida->nombre];
                    break;
            }

            return response()->json($respuest);
        }
    }
}
