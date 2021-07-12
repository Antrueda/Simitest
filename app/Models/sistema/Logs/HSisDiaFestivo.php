<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisDiaFestivo extends Model
{
    protected $fillable = [
        'dia',
        'mes',
        'anio',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
