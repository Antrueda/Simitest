<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisFosSubTipoSeguimiento extends Model{
    protected $fillable = [
        'area_id', 'seg_id', 'nombre', 'descripcion', 'user_crea_id', 'user_edita_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function area(){
        return $this->belongsTo(SisFosArea::class, 'area_id');
    }

    public function seguimiento(){
        return $this->belongsTo(SisFosTipoSeguimiento::class, 'seg_id');
    }

    public static function subTipoSeguimientos($id0, $id1){

        return SisFosSubTipoSeguimiento::where(['area_id' => $id0, 'seg_id' => $id1, 'activo' => 1])->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  $temaxxxx tema que padre de los parámetros
     * @param  $cabecera indica si el combo se debe devolver con el seleccione
     * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
     * @return $comboxxx
     */
    public static function combo($dataxxxx){
        $comboxxx = [];
        if($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = [
                    'valuexxx' => '', 
                    'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $parametr = SisFosSubTipoSeguimiento::select(['id as valuexxx', 'nombre as optionxx'])
            ->where('area_id', $dataxxxx['areaxxxx'])
            ->where('seg_id', $dataxxxx['seguimie'])
            ->where('activo', 1)
            ->orderBy('id', 'asc')
            ->get();
        foreach($parametr as $registro) {
            if($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
            }else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
