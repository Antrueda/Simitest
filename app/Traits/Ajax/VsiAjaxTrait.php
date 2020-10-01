<?php

namespace App\Traits\Ajax;

use App\Models\Parametro;
use App\Models\Tema;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas que se hacen para vsi mediante ajax en los combos
 */
trait VsiAjaxTrait
{
    public function getCombo($dataxxxx)
    {
        $opciones=[
            'personas'=>[235,66],
            'situaciones'=>[235,131],
            'emociones'=>[931,195],
            'cuidador'=>[235,66],
            'ausencia'=>[1269,292],
            'quienes'=>[235,66],
            'adecuados'=>[931,195], //12.6 vsi
            'dificultades'=>[931,195], //12.8 vsi
            'acciones'=>[853,298],
            'expectativas'=>[689,181],
        ];


        $parametr = Parametro::find($opciones[$dataxxxx['selectxx']][0])->ComboAjaxUno;
        $parametr[0]['selected']='selected';
        $respuest = ['selectxx' => $dataxxxx['selectxx'], 'comboxxx' => $parametr, 'nigunaxx' => true];
        if ($dataxxxx['padrexxx'] == 0) {
            $dataxxxx['padrexxx'] = [];
        }
        foreach ($dataxxxx['padrexxx']  as $key => $value) {
            if ($value == $opciones[$dataxxxx['selectxx']][0]) {
                $respuest['nigunaxx'] = false;
            }
        }
        if ($respuest['nigunaxx']) {
            $respuest['comboxxx'] = Tema::combo($opciones[$dataxxxx['selectxx']][1], true, true);
            foreach ($respuest['comboxxx'] as $key => $value) {
                $respuest['comboxxx'][$key]['selected'] = in_array($value['valuexxx'], $dataxxxx['padrexxx']) ? 'selected' : '';
            }
        }
        return $respuest;
    }
    /**
     * validaciones para combos multiples que tienen una opcion que si se selecciona esa no puede seleccionar las otras
     * ejemplo: NS/NR, NO APLICA...
     *
     * @param Request $request
     * @return void
     */
    public function getNoMas(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = [
                'selectxx' => $request->selectxx,
                'valuexxx' => $request->valuexxx,
                'padrexxx' => $request->padrexxx,
                'temaxxxx' => $request->temaxxxx
            ];
            $respuest = $this->getCombo($dataxxxx);
            return response()->json($respuest);
        }
    }
}
