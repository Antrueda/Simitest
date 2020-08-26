<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdConclusiones extends Model
{
    protected $fillable = [
        'csd_id',
        'conclusiones',
        'persona_nombre',
        'persona_doc',
        'persona_parent_id',
        'user_doc1_id',
        'user_doc2_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
