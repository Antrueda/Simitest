<?php

namespace App\Models\Salud\Mitigacion;

use Illuminate\Database\Eloquent\Model;

class VspaTablaCuatro extends Model{
    
    protected $table = 'mit_vspa_tabla_cuatro';
    
    protected $fillable = [
        'prm_seis_uno_id',      'prm_seis_dos_id',     'prm_seis_tres_id',     'prm_seis_cuatro_id',
        'prm_seis_cinco_id',    'prm_seis_seis_id',    'mit_vspa_id'
    ];

    public function seis_uno(){
        return $this->belongsTo(Parametro::class, 'prm_seis_uno_id');
    }

    public function seis_dos(){
        return $this->belongsTo(Parametro::class, 'prm_seis_dos_id');
    }

    public function seis_tres(){
        return $this->belongsTo(Parametro::class, 'prm_seis_tres_id');
    }

    public function seis_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_seis_cuatro_id');
    }

    public function seis_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_seis_cinco_id');
    }

    public function seis_seis(){
        return $this->belongsTo(Parametro::class, 'prm_seis_seis_id');
    }

    public function Vspa(){
        return $this->belongsTo(Vspa::class, 'mit_vspa_id');
    }
}
