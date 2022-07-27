<?php

namespace App\Models\Acciones\Individuales\Educacion\CuestionarioGustos;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use Illuminate\Database\Eloquent\Model;

class CgihCurso extends Model
{
    protected $table = 'cgih_cursos';

    protected $fillable = [
        's_cursos',
        'descripcion',
        'user_crea_id',
         'user_edita_id'
    ];
}
   