<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiEstemoContexto extends Model
{


    protected $table = 'vsi_estemo_contexto';

    protected $fillable = [
        'parametro_id',
        'vsi_estemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
