<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisDepartam extends Model
{
    protected $fillable = [
        'sis_pai_id',
        's_departamento',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'simianti_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
