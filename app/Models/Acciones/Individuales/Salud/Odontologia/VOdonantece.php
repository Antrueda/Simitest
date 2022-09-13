<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VOdonantece extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'trata_id', 'alergia_id', 'cualtxt','sangra_id',
        'odonto_id','anemia_id','gestia_id',
        'fuma_id', 'cardio_id', 'herpes_id', 
        'encia_id', 'muerde_id', 'enfactu_id','actutxt',
        'hepati_id','tens_id','vih_id',
        'fieb_id', 'asma_id', 'diabe_id', 
        'ulcer_id', 'toma_id', 'medic_id','limit_id',
        'apret_id','resta_id','respir_id',
        'pato_id','tuber_id',

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologio::class, 'odonto_id');
    }
    public function medicamento(){
        return $this->belongsTo(Compuesto::class, 'medic_id');
    }
}
