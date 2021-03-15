<?php

namespace App\Models\Sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisMunicipio extends Model
{
    protected $fillable = [
        's_municipio',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'simianti_id',
        'sis_departam_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
