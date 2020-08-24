<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiConcepto extends Model
{
    protected $fillable = [
        'vsi_id',
        'concepto',
        'prm_ingreso_id',
        'porque',
        'cual',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];        
}
