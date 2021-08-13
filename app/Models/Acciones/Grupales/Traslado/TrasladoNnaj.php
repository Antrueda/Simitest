<?php

namespace App\Models\Acciones\Grupales\Traslado;

use App\Models\fichaIngreso\FiDatosBasico;
use app\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class TrasladoNnaj extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','traslado_id', 'sis_nnaj_id', 
        'observaciones', 'motivoe_id','motivoese_id',
        ];

        public function sis_nnaj(){
            return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
        }

        public function traslado()
        {
          return $this->belongsTo(Traslado::class,'traslado_id');
        }
    

    
}
