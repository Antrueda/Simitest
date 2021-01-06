<?php

namespace App\Models\fichaobservacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HFosStse extends Model
{
    protected $fillable = [
        'codigo',
        'estusuario_id',
        'nombre',
        'descripcion',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
