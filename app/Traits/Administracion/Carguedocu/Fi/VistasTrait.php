<?php

namespace App\Traits\Administracion\Carguedocu\Fi;

use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }

    public function getNotIn($dataxxxx)
    {
        $notinxxx = [];
        foreach (FiDocumentosAnexa::where('sis_nnaj_id', $dataxxxx['padrexxx']->id)
            ->whereIn('i_prm_documento_id',$dataxxxx['inxxxxxx'])
            ->get(['i_prm_documento_id as valuexxx']) as $key => $value) {
            $notinxxx[] = $value->valuexxx;
        }
        return  $notinxxx;
    }

    public function view($opciones, $dataxxxx)
    {
        $opciones['archivox'] = '';
        $opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $opciones = $this->getVista($opciones, $dataxxxx);
        $selected = 0;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->nuevoxxx=false;
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            foreach (explode('/', $dataxxxx['modeloxx']->s_ruta) as $value) {
                $opciones['archivox'] = $value;
            }
            $selected = $dataxxxx['modeloxx']->i_prm_documento_id;
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $opciones['routnuev'] = [$opciones['routxxxx'] . '.nuevo', []];
        }
        $opciones['docanexa'] = $this->getTemecomboTCT([
            'temaxxxx' => 155,
            'notinxxx' => $this->getNotIn(['inxxxxxx'=>[844,843,847,5,2634],'padrexxx'=>$dataxxxx['padrexxx']]),
            'inxxxxxx' => [$selected]
        ]);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
