<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisFosTipoSeguimiento extends Model{
    protected $fillable = [
        ''
    ];

    public static function tipoSeguimientos($id0){

        return SisFosTipoSeguimiento::where(['area_id' => $id0, 'activo' => 1])->get();
    }
}
