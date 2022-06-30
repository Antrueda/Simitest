<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Logs;

use Illuminate\Database\Eloquent\Model;

class HVDiagnostico extends Model
{
    protected $table = 'h_v_diagnosticos';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'vmg_id', 'diag_id', 'codigo','concepto','esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx','deleted_at'
    ];
}