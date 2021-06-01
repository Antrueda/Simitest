<?php

namespace App\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInLibagrup extends Model
{
    protected $fillable = [
        'in_indiliba_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
