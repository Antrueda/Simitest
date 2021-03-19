<?php

namespace App\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiVioTipo extends Model
{

    protected $table = 'vsi_vio_tipo';

    protected $fillable = [
        'parametro_id',
        'vsi_violencia_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
