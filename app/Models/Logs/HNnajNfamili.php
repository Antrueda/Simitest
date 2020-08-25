<?php

namespace app\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HNnajNfamili extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        's_nombre_identitario',
        'prm_sexo_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'sis_docfuen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
