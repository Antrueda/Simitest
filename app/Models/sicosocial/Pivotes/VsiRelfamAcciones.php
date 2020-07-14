<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiRelfamAcciones extends Model
{
    public $timestamps = false;
    protected $table = 'vsi_relfam_acciones';
    
    protected $fillable = [
        'vsi_id',
        'prm_presenta_id',
        'prm_protector_id',
        'prm_dificultad_id',
        'prm_quien_id',
        'prm_ruptura_genero_id',
        'prm_ruptura_sexual_id',
        'prm_acceso_id',
        'prm_servicio_id',
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