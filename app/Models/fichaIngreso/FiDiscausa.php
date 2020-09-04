<?php

namespace App\Models\fichaIngreso;

use Illuminate\Database\Eloquent\Model;

class FiDiscausa extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'prm_discausa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
