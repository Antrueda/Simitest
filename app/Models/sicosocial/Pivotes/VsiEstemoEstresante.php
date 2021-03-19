<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiEstemoEstresante extends Model
{


    protected $table = 'vsi_estemo_estresante';

    protected $fillable = [
        'parametro_id',
        'vsi_estemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
