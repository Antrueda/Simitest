<?php

namespace App\Models\Acciones\Grupales\Traslado;

use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use app\Models\Sistema\SisServicio;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha', 'prm_upi_id', 
        'observaciones', 'tipotras_id','trasladototal','respone_id','responr_id',
        'prm_trasupi_id', 'prm_serv_id','remision_id','user_doc','cuid_doc','auxe_doc',
        'doce_doc','psico_doc','auxil_doc','id',

    ];


    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function trasupi(){
        return $this->belongsTo(SisDepen::class, 'prm_trasupi_id');
    }

    public function usuariocarga(){
        return $this->belongsTo(User::class, 'user_doc');
    }

    public function respone(){
        return $this->belongsTo(User::class, 'respone_id');
    }

    public function responr(){
        return $this->belongsTo(User::class, 'responr_id');
    }

    public function prm_serv(){
        return $this->belongsTo(SisServicio::class, 'prm_serv_id');
    }

    public function tipotras(){
        return $this->belongsTo(Parametro::class, 'tipotras_id');
    }


}
