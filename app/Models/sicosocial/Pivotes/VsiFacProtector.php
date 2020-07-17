<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiFacProtector extends Model
{
    public $timestamps = false;

    protected $table = '';

    protected $fillable = [
        'vsi_id',
        'protector',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'created_at',
        'updated_at',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}