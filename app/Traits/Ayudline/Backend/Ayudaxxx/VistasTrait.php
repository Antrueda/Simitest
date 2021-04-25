<?php

namespace App\Traits\Ayudline\Backend\Ayudaxxx;

use App\Http\Requests\Ayudline\Backend\AyudaBackendCrearRequest;
use App\Models\Ayuda\Ayuda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getConfigVistas()
    {
        $dataxxxx = [
            'rutacarp' => 'Ayudline.Backend.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'Ayudline.Acomponentes.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Mosayuda', // nombre de la carpeta
            'tituloxx' => 'AYUDA', // titulo que se mustra en la vista
            'titucont' =>'AYUDA', // texto complementarios en el boton de la tabla
            'infocont' =>'Ayuda', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' =>2, // pestaña que debe estar activa
            'permisox'=>'ayudadmi', // commplemento del permiso
            'routxxxx'=>'ayudadmi' // complemento del route
        ];
        $this->getOpcionesOGT($dataxxxx);

    }

    /**
     * Mostrar todos los registros de BD paginados ordenado según su última actualización
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getUyudasIndexADT([
            'vercrear' => true,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}S",
            'permisox'=>$this->opciones['permisox'].'-crearxxx',
        ]);
        return $this->indexOGT();
    }
    /**
     * Retorna a la vista de formulario de creación de la ayuda
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->getVista(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }


    /**
     * Lógica de negocio para guardar y gestionar la información recibida
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AyudaBackendCrearRequest $request)
    {

        $request->request->add(['sis_esta_id' => 1]);
        /**
         * Aquí se insertan los datos
         */
        return $this->setAyuda([
            'requestx' => $request,
            'modeloxx' => '',
            'guardado'=>1,
            'infoxxxx' => $this->opciones['infocont'].' asignada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    /**
     * Se selecciona un ID requerido, se busca y se recarga
     * en la vista para poderlo editar
     *
     * @param  \App\Support  $ayuda
     * @return \Illuminate\Http\Response
     */
    public function edit(Ayuda $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVista(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);
    }

    public function show(Ayuda $modeloxx)
    {
        return $this->getVista(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }





    /**
     * Permite actualizar y valida antes de insertar
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ayuda\Ayuda $ayuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ayuda $modeloxx)
    {
        return $this->setAyuda([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'guardado'=>2,
            'infoxxxx' => $this->opciones['infocont'].' editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function inactivate(Ayuda $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVista(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy']]);
    }


    public function destroy(Request $request, Ayuda $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(Ayuda $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVista(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);

    }
    public function activar(Request $request, Ayuda $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}
