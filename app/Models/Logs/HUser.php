<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HUser extends Model
{
    protected $fillable = [
        'name',
        's_primer_nombre',
        's_segundo_nombre',
        's_primer_apellido',
        's_segundo_apellido',
        'email',
        's_telefono',
        's_matriculap',
        's_documento',
        'd_vinculacion',
        'itiestan',
        'itiegabe',
        'itigafin',
        'email_verified_at',
        'password',
        'remember_token',
        'user_crea_id',
        'sis_municipio_id',
        'user_edita_id',
        'sis_cargo_id',
        'd_finvinculacion',
        'prm_tvinculacion_id',
        'prm_documento_id',
        'sis_esta_id',
        'estusuario_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx',
        'password_change_at',
        'password_reset_at',
    ];
}
