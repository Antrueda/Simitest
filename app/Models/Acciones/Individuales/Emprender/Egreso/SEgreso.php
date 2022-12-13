<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class SEgreso extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'fecha', 'upi_id','sis_nnaj_id'
    ];


    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    public function derechos(){
        return $this->belongsTo(EgresoDere::class, 'sis_nnaj_id');
    }

}
