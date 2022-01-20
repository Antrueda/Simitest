<?php

namespace App\Traits\Acciones\Grupales\Relacion;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Sistema\SisObse;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{

    use CombosTrait;

    public function getComboRecursos($dataxxxx)
    {
        $notinxxx =
            AgRecurso::select(['ag_recursos.id'])
            ->join('ag_relacions', 'ag_recursos.id', '=', 'ag_relacions.ag_recurso_id')
            ->where('ag_recursos.i_prm_trecurso_id', $dataxxxx['padrexxx'])
            ->where('ag_relacions.ag_actividad_id', $dataxxxx['activida'])
            ->whereNotIn('ag_relacions.ag_recurso_id', $dataxxxx['selected'])
            ->get();
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => ''];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        foreach (AgRecurso::where('i_prm_trecurso_id', $dataxxxx['padrexxx'])
            ->whereNotIn('id', $notinxxx)
            ->get() as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_recurso, in_array($registro->id, $dataxxxx['selected'])];
            } else {
                $comboxxx[$registro->id] = $registro->s_recurso;
            }
        }
        return $comboxxx;
    }


    public function getRecursosLista(Request $request, $activida)
    {
        if ($request->ajax()) {
            switch ($request->campoxxx) {
                case 'i_prm_trecurso_id':
                    $respuest = [
                        'comboxxx' => $this->getComboRecursos(
                            [
                                'padrexxx' => $request->padrexxx,
                                'selected' => $request->selected,
                                'cabecera' => true,
                                'ajaxxxxx' => true,
                                'activida' => $activida
                            ]
                        ),
                        'campoxxx' => '#ag_recurso_id'
                    ];
                    break;

                case 'ag_recurso_id':
                    $respuest = [ 'campoxxx' => '#unidmedi','dataxxxx'=>$request->padrexxx==''?'':AgRecurso::find($request->padrexxx)->unidad->nombre];
                    break;
            }

            return response()->json($respuest);
        }
    }
    public function getRecursos($dataxxxx)
    {
        $dataxxxx['estadosx'] = $dataxxxx['padrexxx']->sis_esta_id;
        $dataxxxx['notinxxx'] = AgRelacion::select(['ag_recurso_id'])
            ->where('ag_actividad_id', $dataxxxx['padrexxx']->id)
            ->whereNotIn('ag_recurso_id', [$dataxxxx['selected']])
            ->get();
        return User::userComboRelacion($dataxxxx);
    }


    public function getVista($opciones, $dataxxxx)
    {
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function view($opciones, $dataxxxx)
    {
        $opciones['observac'] = SisObse::combo(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['umedidax'] = Tema::combo(288, true, false);
        $opciones['tiporecu'] = Tema::combo(283, true, false);


        $opciones['readonly'] = 'readonly';

        $opciones['parametr'][] = $dataxxxx['padrexxx']->id;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $dataxxxx['selected'] = 0;
        $opciones['padrexxx'] = [];
        $padrexxx=0;
        $selected=0;
        $opciones['unidmedi'] ='';
        if ($dataxxxx['modeloxx'] != '') {
            $padrexxx=$dataxxxx['modeloxx']->i_prm_trecurso_id = $dataxxxx['modeloxx']->ag_recurso->i_prm_trecurso_id;
            $recursox=$dataxxxx['modeloxx']->ag_recurso;
        $selected=$recursox->id;
        $opciones['unidmedi']=$recursox->unidad->nombre;
            $dataxxxx['selected'] = $dataxxxx['modeloxx']->user_id;
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        }

        $opciones['trecurso'] =$this->getComboRecursos(
            [
                'padrexxx' => $padrexxx,
                'selected' => [$selected],
                'cabecera' => true,
                'ajaxxxxx' => false,
                'activida' => $dataxxxx['padrexxx']->id
            ]
            );
        $dataxxxx['cabecera'] = true;
        $dataxxxx['ajaxxxxx'] = false;
        $opciones['responsa'] = $this->getRecursos($dataxxxx);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
