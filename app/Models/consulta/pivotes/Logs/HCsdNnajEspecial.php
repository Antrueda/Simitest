<?php

namespace App\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdNnajEspecial extends Model
{
    protected $fillable = [
        'parametro_id',
        'csd_id',
        'user_crea_id',
        'prm_tipofuen_id',
        'user_edita_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
