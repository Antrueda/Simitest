<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiActemoFisiologica extends Model
{
    //parametro_vsi_actemocional
    public $timestamps = false;
    
    protected $table = 'vsi_actemo_fisiologica';

    protected $fillable = [
        'parametro_id',
        'vsi_actemocional_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}