<?php

namespace App;

namespace app\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiRedsocAceso extends Model
{
    public $timestamps = false;
    protected $table = 'vsi_redsoc_acceso';

    protected $fillable = [
        'parametro_id',
        'vsi_redsocial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
