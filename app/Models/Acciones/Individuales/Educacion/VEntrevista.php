<?php

namespace App\Models\Acciones\Individuales\Educacion;

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
        'conceptoocu', 'sis_nnaj_id',
    ];

    

    public function grado(){
        return $this->belongsTo(Parametro::class, 'prm_asignatura');
    }
    
}
