<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisPai extends Model
{
    protected $fillable = [
        's_iso',
        's_pais',
        'simianti_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
