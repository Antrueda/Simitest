<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiAbuSexuals extends Model
{
	protected $fillable = [
        'vsi_id', 'prm_evento_id', 'dia', 'mes', 'ano', 'prm_momento_id', 'prm_persona_id', 'prm_tipo_id', 'dia_ult', 'mes_ult', 'ano_ult', 'prm_momento_ult_id', 'prm_persona_ult_id', 'prm_tipo_ult_id', 'prm_convive_id', 'prm_presencia_id', 'prm_reconoce_id', 'prm_apoyo_id', 'prm_denuncia_id', 'prm_terapia_id', 'prm_estado_id', 'informacion', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];    
}