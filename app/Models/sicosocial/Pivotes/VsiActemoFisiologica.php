<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiActemoFisiologica extends Model
{


    protected $table = 'vsi_actemo_fisiologica';

    protected $fillable = [
        'parametro_id',
        'vsi_actemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

   
}
