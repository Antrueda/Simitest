<?php

namespace App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;

use Illuminate\Database\Eloquent\Model;

class VihSubarea extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion',
        'vih_area_id', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function area(){
        return $this->belongsTo(VihArea::class, 'vih_area_id')->where('sis_esta_id',1);
    }
}
