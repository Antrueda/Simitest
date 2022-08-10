<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use Illuminate\Database\Eloquent\Model;

class VctoItem extends Model
{
    protected $fillable = [
        'nombre', 
        'vcto_subarea_id', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function area(){
        return $this->belongsTo(VctoSubarea::class, 'vcto_subarea_id');
    }
}
