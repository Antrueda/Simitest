<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEstEmocional extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_siente_id',
        'descripcion_siente',
        'prm_reacciona_id',
        'descripcion_reacciona',
        'descripcion_adecuado',
        'descripcion_dificulta',
        'prm_estresante_id',
        'descripcion_estresante',
        'prm_morir_id',
        'dia_morir',
        'mes_morir',
        'ano_morir',
        'prm_pensamiento_id',
        'prm_amenaza_id',
        'prm_intento_id',
        'ideacion',
        'amenaza',
        'intento',
        'prm_riesgo_id',
        'dia_ultimo',
        'mes_ultimo',
        'ano_ultimo',
        'descripcion_motivo',
        'prm_lesiva_id',
        'descripcion_lesiva',
        'prm_sueno_id',
        'dia_sueno',
        'mes_sueno',
        'ano_sueno',
        'descripcion_sueno',
        'prm_alimenticio_id',
        'dia_alimenticio',
        'mes_alimenticio',
        'ano_alimenticio',
        'descripcion_alimenticio',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}