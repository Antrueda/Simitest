<?php

namespace App\Models\Acciones\Grupales\InscripcionConvenios;

use Illuminate\Database\Eloquent\Model;

class ConveNnaj extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'etapa_id',  'sis_nnaj_id','fechapro_inicio',  'fechapro_final',
        'novedad_id',  'inconve_id', 'fechainactivo',  'observaciones','modalidad_id'

    ];

    public function convenio(){
        return $this->belongsTo(InscriConve::class, 'inconve_id');
    }
}
