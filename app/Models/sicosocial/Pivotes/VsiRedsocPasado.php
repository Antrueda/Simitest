<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiRedsocPasado extends Model
{
    public $timestamps = false;
    
    protected $table = 'vsi_redsoc_pasados';

    protected $fillable = [
        'id',
        'vsi_id',
        'nombre',
        'servicio',
        'dia',
        'mes',
        'ano',
        'ano_prestacion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'created_at',
        'updated_at',
    ];

    protected $attributes = [
        'created_at' => 1,
        'updated_at' => 1
    ];
}