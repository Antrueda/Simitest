<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiEduFortaleza extends Model
{
    public $timestamps = false;
    
    protected $table = 'vsi_edu_fortaleza';

    protected $fillable = [
        'parametro_id',
        'vsi_educacion_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
