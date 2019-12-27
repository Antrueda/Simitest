<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisFosTipoSeguimiento extends Model{
    protected $fillable = [
        ''
    ];

    public static function tipoSeguimientos($id0){

        return SisFosTipoSeguimiento::where(['area_id' => $id0, 'activo' => 1])->pluck('nombre', 'id');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  $temaxxxx tema que padre de los parámetros
     * @param  $cabecera indica si el combo se debe devolver con el seleccione
     * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
     * @return $comboxxx
     */
    public static function combo($areaxxx, $cabecera, $ajaxxxxx){
        $comboxxx = [];
        if($cabecera){
            if($ajaxxxxx){
                $comboxxx[] = [
                    'valuexxx' => '', 
                    'optionxx' => 'Seleccione'];
            }else {
                $comboxxx = [
                    '' => 'Seleccione'
                ];
            }
        }
        $parametr = SisFosTipoSeguimiento::select(['id as valuexxx', 'nombre as optionxx'])
            ->where('area_id', $areaxxx)
            ->where('activo', '1')
            ->orderBy('id', 'asc')
            ->get();
        foreach($parametr as $registro){
            if($ajaxxxxx){
                $comboxxx[] = [
                    'valuexxx' => $registro->valuexxx, 
                    'optionxx' => $registro->optionxx
                ];
            }else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
