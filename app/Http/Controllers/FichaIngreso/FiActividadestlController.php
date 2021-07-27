<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiActividadestlCrearRequest;
use App\Http\Requests\FichaIngreso\FiActividadestlUpdateRequest;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;

class FiActividadestlController extends Controller
{
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;


    public function __construct()
    {

        $this->opciones['permisox'] = 'fiactividades';
        $this->opciones['routxxxx'] = 'fiactividades';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Actividades';
        $this->opciones['slotxxxx'] = 'fiactividades';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "ACTIVIDADES DE TIEMPO LIBRE";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['readnomb'] = '';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);


        $this->opciones['reliprac'] = Tema::combo(78, true, false);

        $this->opciones['acciones'] = Tema::combo(344, false, false);
    }

    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

        $this->opciones['activlib'] = Tema::comboAsc(($dataxxxx['padrexxx']->prm_tipoblaci_id == 650) ? 343 : 77, false, false);


        $this->opciones['activida'] = FiActividadestl::actividad($dataxxxx['padrexxx']->sis_nnaj_id);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['sacramen'] =[''=>'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            if ($dataxxxx['modeloxx']->i_prm_pertenece_parche_id == 228) {
                $this->opciones['readnomb'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->i_prm_religion_practica_id != 494) {
                $this->opciones['sacramen'] = [235 => 'N/A'];
                // $this->opciones['reliprac'] = [235 => 'N/A'];
            } else {
                $this->opciones['sacramen'] = Tema::combo(79, false, false);
                $this->opciones['reliprac'] = Tema::combo(78, true, false);
            }
// ddd($this->opciones['reliprac'] );
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }

        $this->opciones['activitl'] = FiActividadestl::getActividadtl($dataxxxx['modeloxx']);
        $this->opciones['sacramex'] = FiActividadestl::getSacramento($dataxxxx['modeloxx']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function getArchivo($dataxxxx)
    {
        $archivox = [
            650 => [
                0 => ['crear', 'cihacaxx'],
                1 => ['editar', 'cihacaxx'],
                2 => ['ver', 'cihacaxx'],
                3 => ['destroy', 'destroy'],
            ],
            651 => [
                0 => ['crear', 'rihacaxx'],
                1 => ['editar', 'rihacaxx'],
                2 => ['ver', 'rihacaxx'],
                3 => ['destroy', 'destroy'],
            ],
            2323 => [
                0 => ['crear', 'relajado'],
                1 => ['editar', 'relajado'],
                2 => ['ver', 'relajado'],
                3 => ['destroy', 'destroy'],
            ],
        ];
        $tipoblac = $dataxxxx['padrexxx']->prm_tipoblaci_id;
        if ($tipoblac == 651 && $dataxxxx['padrexxx']->prm_estrateg_id == 2323) {
            $tipoblac = 2323;
        } elseif ($tipoblac == 651 && $dataxxxx['padrexxx']->prm_estrateg_id == 651) {
            $tipoblac = 651;
        }

        return $archivox[$tipoblac][$dataxxxx['archivox']];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $vestuari = FiActividadestl::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fiactividades.editar', [$padrexxx->id, $vestuari->id]);
        }

        return $this->view([
            'modeloxx' => '',
            'accionxx' => $this->getArchivo(['padrexxx' => $padrexxx, 'archivox' => 0]),
            'padrexxx' => $padrexxx
        ]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fiactividades.editar', [$padrexxx->id, FiActividadestl::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiActividadestlCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Actividades de tiempo libre creadas con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiActividadestl  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiActividadestl $modeloxx)
    {
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => $this->getArchivo(['padrexxx' => $padrexxx, 'archivox' => 2]), '
            padrexxx' => $padrexxx
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiActividadestl  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiActividadestl $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => $this->getArchivo(['padrexxx' => $padrexxx, 'archivox' => 1]),
            'padrexxx' => $padrexxx
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiActividadestl  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiActividadestlUpdateRequest $request, FiDatosBasico $padrexxx,  FiActividadestl $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Actividades de tiempo libre actualizadas con éxito', $padrexxx);
    }
}
