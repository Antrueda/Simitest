<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdRedSocPasado extends Model
{
    protected $fillable = [
        'csd_id',
        'nombre',
        'servicios',
        'cantidad',
        'prm_unidad_id',
        'ano',
        'retiro',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
