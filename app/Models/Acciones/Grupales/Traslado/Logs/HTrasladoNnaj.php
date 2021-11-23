<?php

namespace App\Models\Acciones\Grupales\Traslado\Logs;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class HTrasladoNnaj extends Model
{
  protected $table = 'h_traslado_nnajs';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','traslado_id', 'sis_nnaj_id', 
        'observaciones', 'motivoe_id','motivoese_id','fechaasistencia','estadoasintecia',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
        ];

    
}
