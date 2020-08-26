<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiNnajComportamental extends Model
{
    protected $table = 'h_vsi_nnaj_comportamental';
    protected $fillable = [
        'parametro_id',
        'vsi_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
