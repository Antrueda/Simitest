<?php

namespace App\Models\Educacion\Administ\Pruediag;

use Illuminate\Database\Eloquent\Model;

class EdaAsignatu extends Model
{
    protected $fillable = [
        's_asignatura',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
      ];
}
