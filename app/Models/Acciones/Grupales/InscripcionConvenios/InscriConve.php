<?php

namespace App\Models\Acciones\Grupales\InscripcionConvenios;

use App\Models\sistema\SisDepen;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InscriConve extends Model
{
    protected $fillable = [
        'id',
        'fecha',
        'fecha_inicio', 
        'fecha_final',
        'conve_id',
        'progra_id',
        'tipop_id',
        'modal_id',
        'sede_id',
        'user_id',
        'numficha',
        'upi_id',
        'user_crea_id', 
        'user_edita_id', 
        'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];


    public function upi(){
        return $this->belongsTo(SisDepen::class, 'upi_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    // public function grado(){
    //     return $this->belongsTo(EdaGrado::class, 'prm_grado');
    // }
    // public function grupo(){
    //     return $this->belongsTo(GrupoMatricula::class, 'prm_grupo');
    // }
}
