<?php

namespace app\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HNnajNacimi extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        'd_nacimiento',
        'sis_municipio_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
                               
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
