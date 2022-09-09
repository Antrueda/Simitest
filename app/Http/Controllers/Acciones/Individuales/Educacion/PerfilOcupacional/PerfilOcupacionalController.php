<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional;

use DateTime;
use Carbon\Carbon;
use App\Models\Tema;
use App\Models\User;
use App\Models\consulta\Csd;
use Illuminate\Http\Request;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoPerfilOcupacional;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;
use App\Http\Requests\PerfilOcupacional\AplicacionFpoRequest;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalDataTablesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;

class PerfilOcupacionalController extends Controller
{
    use ListadosTrait;
    use perfilOcupacionalDataTablesTrait;
    use perfilOcupacionalPestaniasTrait;
    use  ManageTimeTrait;
    use CombosTrait; //
    // use perfilOcupacionalParametrizarTrait;

    public function __construct()
    {

        $this->opciones['permisox'] = 'fpoaplicacion';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'FORMATO PERFIL OCUPACIONAL';
        $this->opciones['routxxxx'] = 'fpoaplicacion';
        $this->opciones['slotxxxx'] = 'pruediag';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['carpetax'] = 'Individuales.Educacion.PerfilOcupacional';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');

        $this->opciones['tituloxx'] = "FORMATO PERFIL OCUPACIONAL";
    }



    public function index(SisNnaj $padrexxx)
    {

        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO PERFIL OCUPACIONAL',
                'titulist' => 'LISTA DE PERFIL OCUPACIONAL',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx->id]),
                'cabecera' => [
                    [
                       
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE DELIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'CONCEPTO PERFIL', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'RESULTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FUNCIONARIO(A) / CONTRATISTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                   
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fpo_perfil_ocupacionals.id'],
                    ['data' => 'fecha_registro', 'name' => 'fpo_perfil_ocupacionals.fecha_registro'],
                    ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                    ['data' => 'concepto_perfil', 'name' => 'fpo_perfil_ocupacionals.concepto_perfil'],
                    ['data' => 'resultado_text', 'name' => 'fpo_perfil_ocupacionals.resultado_text'],
                    ['data' => 'nombre', 'name' => 'users.name as nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$padrexxx->id],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);

        $this->opciones['puedetiempo'] = $puedexxx;
        $puedoCrear = $this->verificarPuedoCrear($padrexxx);
        if ($puedoCrear['puedo']) {
            $this->opciones['componentes'] = FpoDesempenioComponente::select('id', 'nombre')->with('items:id,item_nombre,categoria_id,desempenio_id', 'items.categoria:id,nombre')->where('sis_esta_id', 1)->get();
            return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
        } else {
            return redirect()
                ->route('fpoaplicacion-leer', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }

    public function store(AplicacionFpoRequest $request, SisNnaj $padrexxx)
    { //AISalidaMenorRequest $request

        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);

        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Perfil ocupacional creado con éxito', 'modeloxx' => '', 'padrexxx' => $padrexxx]);
    }

    public function show(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        return $this->viewver(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'verformulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    public function edit(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        $this->opciones['componentes'] = FpoDesempenioComponente::select('id', 'nombre')->with('items:id,item_nombre,categoria_id,desempenio_id', 'items.categoria:id,nombre')->where('sis_esta_id', 1)->get();
        $this->opciones['tituloxx'] = 'EDITAR PERFIL OCUPACIONAL';

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    public function update(AplicacionFpoRequest $request, SisNnaj $padrexxx,  FpoPerfilOcupacional $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Perfil ocupacional actualizado con éxito', 'modeloxx' => $modeloxx, 'padrexxx' => $padrexxx]);
    }

    public function inactivate(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {

            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-danger'
                ];
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }


    public function destroy(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'] . '-leer', [$padrexxx->id])
            ->with('info', 'Perfil ocupacional inactivado correctamente');
    }

    public function getActivar(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {

            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.activar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-success'
                ];
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }


    public function activar(SisNnaj $padrexxx, FpoPerfilOcupacional $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'] . '-leer', [$padrexxx->id])
            ->with('info', 'Perfil ocupacional activado correctamente');
    }


    private function verificarPuedoCrear($padrexxx)
    {
        $date = new DateTime();
        $data = [];
        if ($padrexxx->fi_datos_basico->nnaj_nacimi->Edad >= 18 && $padrexxx->fi_datos_basico->nnaj_nacimi->Edad < 80) {
            $data['puedo'] = true;

            $ultimoperfil = FpoPerfilOcupacional::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
            if ($ultimoperfil != null) {
                $fecha1 = new DateTime($ultimoperfil->fecha);
                $diff = $date->diff($fecha1);
                $days = $diff->days;
            } else {
                $days = 366;
            }
            if ($days > 365) {
                $data['puedo'] = true;
            } else {
                $hoy = $date;
                $data['puedo'] = false;
                $cuandoPuedo = 365 - $days;
                $cuandoPuedo = $hoy->modify('+ ' . $cuandoPuedo . ' day');

                $data['meserror'] = 'Solo podrá diligenciar el Formato Perfil Ocupacional, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO ' . $cuandoPuedo->format('Y-m-d');
            }
        } else {
            $data['puedo'] = false;
            $data['meserror'] = 'Nnaj no tiene permiso de edad para crear Formato de Perfil Ocupacional';
        }
        return $data;
    }
    public function getListado(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {

            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getFpoListado($request);
        }
    }

    private function grabar($dataxxxx)
    {
        $usuariox = FpoPerfilOcupacional::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id, $usuariox->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    private function view($dataxxxx)
    {
        $dependid =0;

// dataxx trae la informacion del nnajs 

         $this->opciones['fechcrea'] ='';
         $this->opciones['fechedit'] = '';
         $this->opciones['usercrea'] = '';
         $this->opciones['useredit'] = '';




        $this->opciones['usuarios'] = User::getUsuario(false, false);
      //  $this->opciones['sis_depens'] = User::getUsuario(false, false);

        //$matriculaCurso=MatriculaCurso::where('sis_esta_id',1)->where('sis_nnaj_id',$padrexxx->id)->orderBy('created_at','desc')->first();
        $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);


        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '-leer', $dataxxxx['padrexxx']->sis_nnaj_id],
            'formhref' => 2, 'tituloxx' => 'VOLVER A LISTA DE PERFIL OCUPACIONAL', 'clasexxx' => 'btn btn-sm btn-primary'
        ];

        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
        ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];

        $dependid =$dataxxxx['padrexxx']->sis_depen_id;
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $upinnajx = $dataxxxx['padrexxx']->sis_nnaj->UpiPrincipal;
        $this->opciones['dependen'] = [$upinnajx->id => $upinnajx->nombre];
        $this->opciones['dependez'] = SisDepen::combo(true, false);
        $this->opciones['usuarioz'] = User::comboCargo(true, false);
        $this->opciones['respoupi'] = $dataxxxx['padrexxx']->sis_nnaj->Responsable[0];

        $this->opciones['vercrear'] = false;
        $parametr = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $this->opciones['vercrear'] = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $dataxxxx['modeloxx']->fecha_registro = explode(' ', $dataxxxx['modeloxx']->fecha_registro)[0];

            $data = FpoPerfilOcupacional::select('id')->with('respuestacomponentes:id,observacion,fpo_componen_id,fpo_perfil_id', 'respuestacomponentes.respuestaitems:id,valor,fpo_item_id,fpo_comp_respu_id')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
            $respuestas = [];
            foreach ($data['respuestacomponentes'] as $value) {
                $itemr = null;
                foreach ($value['respuestaitems'] as $value2) {
                    $itemr['respuestas'][$value2['fpo_item_id']] = $value2['valor'];
                }

                $respuestas[$value['fpo_componen_id']] = $itemr;
                $respuestas[$value['fpo_componen_id']]['descripcion'] = $value['observacion'];
            }

            $this->opciones['modeloxx']['respuestasactuales'] = $respuestas;

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $dataxxxx['padrexxx']->sis_nnaj_id],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }


      // $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id]);


        if ($dataxxxx['accionxx'][1] == 'destroy') {
            $this->opciones['ruarchjs'] = [
                ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.verjs'],
            ];
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function viewver($dataxxxx)
    {
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '-leer', $dataxxxx['padrexxx']->sis_nnaj_id],
                'formhref' => 2, 'tituloxx' => 'VOLVER A LISTA DE PERFIL OCUPACIONAL', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];

        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.verjs'],
        ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];



        $upinnajx = $dataxxxx['padrexxx']->sis_nnaj->UpiPrincipal;
        $this->opciones['dependen'] = [$upinnajx->id => $upinnajx->nombre];
        $this->opciones['dependez'] = SisDepen::combo(true, false);
        $this->opciones['usuarioz'] = User::comboCargo(true, false);
        $this->opciones['respoupi'] = $dataxxxx['padrexxx']->sis_nnaj->Responsable[0];

        $this->opciones['vercrear'] = true;
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $dataxxxx['modeloxx']->fecha_registro = explode(' ', $dataxxxx['modeloxx']->fecha_registro)[0];
        $this->opciones['componentes'] = FpoPerfilOcupacional::select('id')->with('respuestacomponentes:id,observacion,fpo_componen_id,fpo_perfil_id', 'respuestacomponentes.componente:id,nombre', 'respuestacomponentes.respuestaitems:id,valor,fpo_item_id,fpo_comp_respu_id', 'respuestacomponentes.respuestaitems.item:id,item_nombre,categoria_id', 'respuestacomponentes.respuestaitems.item.categoria:id,nombre')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
        // dd($this->opciones['componentes']['respuestacomponentes']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


  
}