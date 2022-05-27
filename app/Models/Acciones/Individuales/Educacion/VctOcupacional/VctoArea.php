<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use Illuminate\Database\Eloquent\Model;

class VctoArea extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function subareas(){
        return $this->hasMany(VctoSubarea::class, 'vcto_area_id');
    }
}
