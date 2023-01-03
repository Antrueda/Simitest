<?php

namespace App\Models\Acciones\Grupales\InscripcionConvenios;

use Illuminate\Database\Eloquent\Model;

class ProgramaAsocia extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'progra_id', 'tipop_id', 'modal_id','sede_id','conve_id' 
    ];

    public function programa(){
        return $this->belongsTo(TipoCaso::class, 'progra_id');
    }
    public function tipoprograma(){
        return $this->belongsTo(TemaCaso::class, 'tipop_id');
    }
    public function modalidad(){
        return $this->belongsTo(SeguimientoCaso::class, 'modal_id');
    }
    public function convenio(){
        return $this->belongsTo(SeguimientoCaso::class, 'conve_id');
    }
    public function sedecentro(){
        return $this->belongsTo(SeguimientoCaso::class, 'sede_id');
    }
}
