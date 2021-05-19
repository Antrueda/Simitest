<?php

namespace App\Traits\Administracion\Reportes\Excel;

use App\Models\Sistema\SisTabla;
use Illuminate\Http\Request;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait ExcelTrait
{
    public function getRespuesta($request, $dataxxxx)
    {
        $tablasxx = ['selected'=>'#sis_tcampo_id','combosxx'=>[]];
        if(!isset($request->selected)){
            $request->selected=[0];
        }

        $sistabla = SisTabla::whereIn('id', $request->selected)->get();
        foreach ($sistabla as $key => $tablaxxx) {
            $camposxx = [];
            foreach ($tablaxxx->sis_tcampos as $key => $campoxxx) {
                $camposxx[] = ['valuexxx' => $campoxxx->id, 'optionxx' => $campoxxx->s_campo];
            }
            $tablasxx['combosxx'][] = ['valuexxx' => $tablaxxx->id,'optionxx' => strtoupper($tablaxxx->s_descripcion),'camposxx'=>$camposxx];
            // $tablasxx['combosxx'][] = ['valuexxx' => $camposxx,'optionxx' => strtoupper($tablaxxx->s_descripcion)];
        }
        return $tablasxx;
    }
    public function getTablaCamposET(Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->getRespuesta($request, []));
        }
    }
}
