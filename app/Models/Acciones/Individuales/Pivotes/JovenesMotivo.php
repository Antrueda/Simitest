<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use Illuminate\Database\Eloquent\Model;

class JovenesMotivo extends Model
{
    protected $table = 'jovenes_motivos';

    protected $fillable = ['parametro_id','salida_jovenes_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

}
