<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiDinfamCalle extends Model
{
    public $timestamps = false;

    protected $table = 'vsi_dinfam_calle';

    protected $fillable = [
        'parametro_id',
        'vsi_dinfamiliar_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
}