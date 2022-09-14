<?php

namespace App\Models\Acciones\Individuales\SocialLegal;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SeguiJuridico extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id','num_sim','fecha','centro_id', 'censec_id', 
        'tipoc_id','temac_id','prm_sujeto', 'casojur_id',
        'descripcion','user_id','estadocaso','segui_id',
        'prm_sujeto'

    ];

    public function casojur(){
        return $this->belongsTo(CasoJur::class, 'casojur_id');
    }

    public function tipocaso(){
        return $this->belongsTo(TipoCaso::class, 'tipoc_id');
    }

    public function temacaso(){
        return $this->belongsTo(TemaCaso::class, 'temac_id');
    }
    public function seguimiento(){
        return $this->belongsTo(SeguimientoCaso::class, 'segui_id');
    }
    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function modifico(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
