<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiConcepRed extends Model
{


    protected $table = 'vsi_concep_red';

    protected $fillable = [
        'parametro_id',
        'vsi_concepto_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

   
}
