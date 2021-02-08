<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisDepartamSisPai extends Model
{
    protected $table = 'sis_departam_sis_pai';
    protected $fillable = [
        'id',
        'sis_departam_id',
        'sis_pai_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
