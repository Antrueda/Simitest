<?php

namespace app\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdNnajEspecial extends Model
{
    protected $table = 'h_csd_nnaj_especial';
    protected $fillable = [
        'parametro_id',
        'csd_id',
        'user_crea_id',
        'prm_tipofuen_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
