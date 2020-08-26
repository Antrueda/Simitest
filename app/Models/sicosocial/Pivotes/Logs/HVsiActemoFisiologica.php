<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiActemoFisiologica extends Model
{
    protected $table = 'h_vsi_actemo_fisiologica';
    protected $fillable = [
        'parametro_id',
        'vsi_actemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
