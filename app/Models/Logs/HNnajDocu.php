<?php

namespace app\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HNnajDocu extends Model
{
    protected $fillable = [
        's_documento',
        'fi_datos_basico_id',
        'prm_ayuda_id',
        'prm_tipodocu_id',
        'prm_doc_fisico_id',
        'sis_municipio_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
                               
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
