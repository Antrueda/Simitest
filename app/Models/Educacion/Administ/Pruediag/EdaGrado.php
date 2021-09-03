<?php

namespace App\Models\Educacion\Administ\Pruediag;

use Illuminate\Database\Eloquent\Model;

class EdaGrado extends Model
{
    protected $fillable = [
        's_grado',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
      ];
}
