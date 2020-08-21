<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdRedSocActual extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_tipo_id',
        'nombre',
        'servicios',
        'telefono',
        'direccion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
