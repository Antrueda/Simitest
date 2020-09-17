<?php

namespace App\Models\fichaIngreso;

use Illuminate\Database\Eloquent\Model;

class FiJrCausasmo extends Model
{
 

    protected $fillable = [
        'prm_riesgo_id',
        'fi_justrest_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

   
}

