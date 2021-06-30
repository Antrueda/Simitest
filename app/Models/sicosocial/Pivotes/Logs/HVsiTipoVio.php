<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiTipoVio extends Model
{
    protected $table = 'h_vsi_tipo_vios';
    protected $fillable = [
        'tipo_id',
        'forma_id',
        'vsi_violencia_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
