<?php

namespace App\Models\Acciones\Individuales;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDependencia;
use App\Models\User;

class AiSalidaMayores extends Model{
    
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'activo', 
        'fecha', 'prm_upi_id', 'descripcion', 'user_doc1_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upi(){
        return $this->belongsTo(SisDependencia::class, 'prm_upi_id');
    }

    public function razones(){
        return $this->belongsToMany(Parametro::class,'ai_salida_mayores_razones', 'ai_salmay_id', 'parametro_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1_id');
    }
}