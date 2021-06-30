<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisDepartamSisMunicipio extends Model
{
    protected $table = 'sis_departam_sis_municipio';
    protected $fillable = [
        'id',
        'sis_departam_id',
        'sis_municipio_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
