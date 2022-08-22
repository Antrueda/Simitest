<?php

namespace App\Models\Acciones\Individuales\SocialLegal;

use Illuminate\Database\Eloquent\Model;

class SeguiJuridico extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id','num_sim','fecha','centro_id', 'censec_id', 
        'tipoc_id','temac_id','prm_sujeto', 
        'descripcion','user_id','estacaso',

    ];

    public function casojur(){
        return $this->belongsTo(CasoJur::class, 'sis_nnaj_id');
    }

    public function tipocaso(){
        return $this->belongsTo(TipoCaso::class, 'tipoc_id');
    }

    public function temacaso(){
        return $this->belongsTo(TemaCaso::class, 'temac_id');
    }
}
