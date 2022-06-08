<?php

namespace App\Models\Acciones\Individuales\Educacion;

use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class VEntrevista extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'user_id', 'anteclinicos','fecha',
        'observacion', 'prm_consumo','prm_autocui',
        'prm_habitos', 'prm_instrum','prm_patrone',
        'observacio2', 'anteocupaci','anteotiempo',
        'prospeccion', 'obsefamilia','osexualidad',
        'conceptoocu', 'sis_nnaj_id','prm_remite','area_id','intertext','upi_id'
    ];

    

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    public function areas(){
        return $this->belongsToMany(Parametro::class,'v_entrevareas', 'entrevista_id', 'prm_area_id');
      }
      public function upi(){
        return $this->belongsTo(SisDepen::class,'upi_id');
      }
    
}
