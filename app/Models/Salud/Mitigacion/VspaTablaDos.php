<?php

namespace app\Models\Salud\Mitigacion;

use Illuminate\Database\Eloquent\Model;

class VspaTablaDos extends Model{

    protected $table = 'mit_vspa_tabla_dos';

    protected $fillable = [
        'prm_cuatro_uno_id',    'prm_cuatro_dos_id',    'prm_cuatro_tres_id',   'prm_cuatro_cuatro_id',
        'prm_cuatro_cinco_id',  'prm_cuatro_seis_id',   'prm_cuatro_siete_id',  'prm_cuatro_ocho_id',
        'prm_cuatro_nueve_id',  'prm_cuatro_diez_id',   'prm_cuatro_once_id',   'prm_cuatro_doce_id',
        'mit_vspa_id'
    ];

    public function cuatro_uno(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_uno_id');
    }

    public function cuatro_dos(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_dos_id');
    }

    public function cuatro_tres(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_tres_id');
    }

    public function cuatro_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_cuatro_id');
    }

    public function cuatro_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_cinco_id');
    }

    public function cuatro_seis(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_seis_id');
    }

    public function cuatro_siete(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_siete_id');
    }

    public function cuatro_ocho(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_ocho_id');
    }

    public function cuatro_nueve(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_nueve_id');
    }

    public function cuatro_diez(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_diez_id');
    }

    public function cuatro_once(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_once_id');
    }

    public function cuatro_doce(){
        return $this->belongsTo(Parametro::class, 'prm_cuatro_doce_id');
    }

    public function Vspa(){
        return $this->belongsTo(Vspa::class, 'mit_vspa_id');
    }
}
