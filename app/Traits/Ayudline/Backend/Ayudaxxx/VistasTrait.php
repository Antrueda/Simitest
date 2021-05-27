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
    public function getOpcionesVBT($dataxxxx)
    {
        $this->opciones['permisox'] = $dataxxxx['permisox'];
        $this->pestania[$dataxxxx['activexx']][5] = 'active';
        $this->opciones['routxxxx'] = $dataxxxx['routxxxx'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['infocont'] = $dataxxxx['infocont'];
        $this->opciones['titucont'] = $dataxxxx['titucont'];
        $this->opciones['carpetax'] = $dataxxxx['carpetax'];
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][4]}DULO MANUAL DE USUARIOS ONLINE";
        $this->opciones['rutacarp'] = $dataxxxx['rutacarp'];
        $this->opciones['rutacomp'] = $dataxxxx['rutacomp'];
        $this->opciones['tituloxx'] = $dataxxxx['tituloxx'];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacomp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
    }
    public $opciones = [
        'parametr' => [],
        'routingx' => [],
        'vocalesx' => ['Á', 'É', 'Í', 'Ó', 'Ú'],
        'perfilxx' => 'sinperfi',

    ];
    public function indexVBT()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getBotonesVBT($dataxxxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        } else {
            $this->opciones['botoform'][] = [];
        }
    }
    public function getVistaPestaniasVBT($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        $this->getPestanias($this->opciones);
    }
    public function setModeloVBT($dataxxxx)
    {
        $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
    }
    public function getVistaVBT($dataxxxx)
    {
        $this->getBotonesVBT(['leerxxxx', [$this->opciones['routxxxx'], $this->opciones['parametr']], 2, "VOLVER A {$this->opciones['titucont']}S", 'btn btn-sm btn-primary']);
        $this->getVistaPestaniasVBT($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->setModeloVBT($dataxxxx);
            $this->getBotonesVBT(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, "NUEVO {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        } else {
            $this->getBotonesVBT(['crearxxx', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getConfigVistas()
    {

        $dataxxxx['rutacarp'] = 'Ayudline.Backend.'; // ruta en que se encuentra almacenada la carpeta
        $dataxxxx['rutacomp'] = 'Ayudline.Acomponentes.'; // ruta donde están las configuraciones de las vistas
        $dataxxxx['carpetax'] = 'Mosayuda'; // nombre de la carpeta
        $dataxxxx['tituloxx'] = 'AYUDA'; // titulo que se mustra en la vista
        $dataxxxx['titucont'] = 'AYUDA'; // texto complementarios en el boton de la tabla
        $dataxxxx['infocont'] = 'Ayuda'; // texto complementarios en el mensaje cuando se guarda o edita el registro
        $dataxxxx['activexx'] = 2; // pestaña que debe estar activa
        $dataxxxx['permisox'] = 'ayudadmi'; // commplemento del permiso
        $dataxxxx['routxxxx'] = 'ayudadmi'; // complemento del route
        $this->getOpcionesVBT($dataxxxx);
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
            'permisox' => $this->opciones['permisox'] . '-crearxxx',
        ]);
        return $this->indexVBT();
    }
    /**
     * Retorna a la vista de formulario de creación de la ayuda
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->getVistaVBT(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
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
            'guardado' => 1,
            'infoxxxx' => $this->opciones['infocont'] . ' asignada con éxito',
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
        $this->getBotonesVBT(['editarxx', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVistaVBT(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);
    }

    public function show(Ayuda $modeloxx)
    {
        return $this->getVistaVBT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
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
            'guardado' => 2,
            'infoxxxx' => $this->opciones['infocont'] . ' editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function inactivate(Ayuda $modeloxx)
    {
        $this->getBotonesVBT(['borrarxx', [], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVistaVBT(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy']]);
    }


    public function destroy(Request $request, Ayuda $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'] . ' inactivado correctamente');
    }

    public function activate(Ayuda $modeloxx)
    {
        $this->getBotonesVBT(['activarx', [], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getVistaVBT(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);
    }
    public function activar(Request $request, Ayuda $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'] . ' activado correctamente');
    }
}
