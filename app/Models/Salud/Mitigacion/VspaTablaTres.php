<?php

namespace App\Models\Salud\Mitigacion;

use Illuminate\Database\Eloquent\Model;

class VspaTablaTres extends Model{
    protected $fillable = [
        'prm_cinco_uno_id',      'prm_cinco_dos_id',      'prm_cinco_tres_id',     'prm_cinco_cuatro_id',
        'prm_cinco_cinco_id',    'prm_cinco_seis_id',     'prm_cinco_siete_id',    'prm_cinco_ocho_id',
        'prm_cinco_nueve_id',    'prm_cinco_diez_id',     'prm_cinco_once_id',     'prm_cinco_doce_id',
    ];

    public function cinco_uno(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_uno_id');
    }

    public function cinco_dos(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_dos_id');
    }

    public function cinco_tres(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_tres_id');
    }

    public function cinco_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_cuatro_id');
    }

    public function cinco_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_cinco_id');
    }

    public function cinco_seis(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_seis_id');
    }

    public function cinco_siete(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_siete_id');
    }

    public function cinco_ocho(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_ocho_id');
    }

    public function cinco_nueve(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_nueve_id');
    }

    public function cinco_diez(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_diez_id');
    }

    public function cinco_once(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_once_id');
    }

    public function cinco_doce(){
        return $this->belongsTo(Parametro::class, 'prm_cinco_doce_id');
    }

    public function Vspa(){
        return $this->belongsTo(Vspa::class, 'mit_vspa_id');
    }
}
