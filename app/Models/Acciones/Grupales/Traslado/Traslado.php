<?php

namespace App\Models\Acciones\Grupales\Traslado;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha', 'prm_upi_id', 
        'observaciones', 'tipotras_id','trasladototal','responsable_id',
        'prm_trasupi_id', 'prm_serv_id','remision_id'
    ];


    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function trasupi(){
        return $this->belongsTo(SisDepen::class, 'prm_trasupi_id');
    }

    public function responsable(){
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function tipotras(){
        return $this->belongsTo(Parametro::class, 'tipotras_id');
    }


}
