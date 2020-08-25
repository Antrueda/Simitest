<?php

namespace app\Models\Acciones\Individuales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAiRetornoSalida extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'prm_upi_id',
        'fecha',
        'hora_retorno',
        'prm_hor_ret_id',
        'descripcion',
        'observaciones',
        'nombres_retorna',
        'prm_doc_id',
        'doc_retorna',
        'prm_parentezco_id',
        'responsable',
        'user_doc1_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}