<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiPotencialidad extends Model
{
    public $timestamps = false;
    protected $table = 'vsi_potencialidads';
    
    protected $fillable = [
        'vsi_id',
        'potencialidad',
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