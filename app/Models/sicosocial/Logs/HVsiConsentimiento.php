<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiConsentimiento extends Model
{
    protected $fillable = [
        'vsi_id',
        'user_doc1_id',
        'cargo1',
        'user_doc2_id',
        'cargo2',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
