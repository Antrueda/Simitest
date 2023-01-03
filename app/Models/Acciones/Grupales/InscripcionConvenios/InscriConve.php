<?php

namespace App\Models\Acciones\Grupales\InscripcionConvenios;

use Illuminate\Database\Eloquent\Model;

class InscriConve extends Model
{
    protected $fillable = [
        'id',
        'fecha',
        'observaciones', 
        'user_doc1',
        'user_doc2',
        'responsable_id',
        'apoyo_id',
        'prm_grado',
        'prm_grupo',
        'prm_estra',
        'prm_upi_id',
        'prm_serv_id',
        'prm_periodo',
        'user_crea_id', 
        'user_edita_id', 
        'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];


    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1');
    }

    public function firma2(){
        return $this->belongsTo(User::class, 'user_doc2');
    }

    public function responsable(){
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function grado(){
        return $this->belongsTo(EdaGrado::class, 'prm_grado');
    }
    public function grupo(){
        return $this->belongsTo(GrupoMatricula::class, 'prm_grupo');
    }
}
