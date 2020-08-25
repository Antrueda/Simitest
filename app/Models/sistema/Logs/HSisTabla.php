<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisTabla extends Model
{
    protected $fillable = [
        's_tabla',
        's_descripcion',
        'sis_documento_fuente_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
