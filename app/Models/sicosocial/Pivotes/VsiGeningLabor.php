<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiGeningLabor extends Model
{


    protected $table = 'vsi_gening_labor';

    protected $fillable = [
        'parametro_id',
        'vsi_geningreso_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
