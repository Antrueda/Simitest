<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisFosSubTipoSeguimiento extends Model{
    protected $fillable = [
        ''
    ];

    public static function subTipoSeguimientos($id0, $id1){

        return SisFosSubTipoSeguimiento::where(['area_id' => $id0, 'seg_id' => $id1, 'activo' => 1])->get();
    }
}
