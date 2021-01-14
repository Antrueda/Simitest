<?php

namespace App\Models\Acciones\Individuales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAiSalidaMayores extends Model
{
    protected $fillable = [
        
        'fecha',
        'prm_upi_id',
        'descripcion',
        'user_doc1_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}