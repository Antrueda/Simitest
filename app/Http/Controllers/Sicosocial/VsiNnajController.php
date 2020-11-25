<?php

namespace App\Http\Controllers\Sicosocial;


use App\Http\Controllers\Controller;

use App\Traits\Vsi\VsiTrait;
use Illuminate\Http\Request;


class VsiNnajController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 1, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsinnajs',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'NNAJ',
            'carpetax' => 'Vsinnaj',
            'slotxxxx' => 'vsinnajs',
            'tablaxxx' => 'usuarios',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'usuariox' => [] // usuario para que se esta revisando la informacion
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer'
            ]);


        $this->opciones['routxxxx'] = 'vsinnajs';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A SERVICIOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['parametr'] = [];
        $this->opciones['tituhead'] = '';
        $this->opciones['botoform'][0]['routingx'][1] = [];
        $this->opciones['padrexxx'] = '';
        $this->opciones['esindexx'] = true;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NNAJ',
                'titulist' => 'LISTA DE NNAJ',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                ],

                'accitabl' => true,
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['routxxxx'].'.nnajsxxx'),
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'DOCUMENTO'],
                    ['td' => 'PRIMER NOMBRE'],
                    ['td' => 'SEGUNDO NOMBRE'],
                    ['td' => 'PRIMER APELLIDO'],
                    ['td' => 'SEGUNDO APELLIDO'],
                    ['td' => 'APODO'],
                    ['td' => 'NOMBRE IDENTITARIO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus._documento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_apodo', 'name' => 'fi_datos_basicos.s_apodo'],
                    ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => $this->opciones['tablaxxx'],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['botoform'][0]['routingx'][1],
            ]

        ];

        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getNnajs(Request $request)
    {
        if ($request->ajax()) {
            $request->puedleer=auth()->user()->can('vsixxxxx-leer');
            $request->routexxx=[$this->opciones['routxxxx'],'vsixxxxx'];
            $request->botonesx= $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx='layouts.components.botones.estadosx';
            return $this->getNnajsVsi($request);
        }
    }
}
