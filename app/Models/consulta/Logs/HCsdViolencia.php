<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdViolencia extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_condicion_id',
        'departamento_cond_id',
        'municipio_cond_id',
        'prm_certificado_id',
        'departamento_cert_id',
        'municipio_cert_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}