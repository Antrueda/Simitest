<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiEduDiftipoA extends Model
{


    protected $table = 'vsi_edu_diftipo_a';

    protected $fillable = [
        'parametro_id',
        'vsi_educacion_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

   
}
