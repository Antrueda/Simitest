<?php

namespace App\Models\intervencion\Logs;
use Illuminate\Database\Eloquent\Model;

class HIsProximaAreaAjuste extends Model
{
    protected $fillable = [
        'is_datos_basico_id',
        'i_prm_area_proxima_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}