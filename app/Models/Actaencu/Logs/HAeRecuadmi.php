<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeRecuadmi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        's_recurso',
        'prm_trecurso_id',
        'prm_umedida_id',
        'estusuario_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'id_old', 
        'metodoxx', 
        'rutaxxxx', 
        'ipxxxxxx'
    ];
}
